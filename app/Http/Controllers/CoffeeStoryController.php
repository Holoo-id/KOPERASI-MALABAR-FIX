<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Galeri;
use Illuminate\Http\Request;

class CoffeeStoryController extends Controller
{
    // Semua Story di Admin
    public function allStories(){
        $stories = Artikel::where('kategori', 'story')->get();
        $images = Galeri::all();
        return view('admin.story.semua-story', compact('stories', 'images'));
    }
    // Detail Story di Admin
    public function storyDetail($link){
        $story = Artikel::where('id', $link)->first();
        $image = Galeri::where('id', $story->gambar_sampul)->first();
        return view('admin.story.detail-story', compact('story', 'image'));
    }

    // Create New Story Data
    public function createStoryPage(){
        return view('admin.story.story-baru');
    }
    public function createStory(Request $request){
        $messages = [
            'judul.required'=> 'Judul Wajib Diisi.',
            'deskripsi.required'=> 'Deskripsi Wajib Diisi.',
            'tanggal.required' => 'Tanggal Wajib Diisi.',
            'gambar.required' => 'Gambar Wajib Diisi.',
            'judul_gambar.required' => 'Judul Gambar Wajib Diisi.',
            'min' => 'Harus Diisi minimal :min'
        ];
        $request->validate([
            'judul'=> 'required|min:7',
            'deskripsi'=> 'required',
            'tanggal' => 'required',
            'gambar' => 'required',
            'judul_gambar' => 'required'
        ],$messages);
        
        $uploadedFile = $request->file('gambar');
        $uploadedFile->move("fe/img/contents/", $uploadedFile->getClientOriginalName());
        $image_path = "fe/img/contents/".$request->in_img_title;
        $tanggal = date('Y-m-d');

        
         $uploadGambar = Galeri::create([
            
            'judul' => $request->judul_gambar,
            'gambar' =>  $request->in_img_title ?? $uploadedFile->getClientOriginalName(),
            'added_by' => $request->id,
            'path' => $image_path,
            'tampilkan' => 0
        ]);
        $storyBaru = Artikel::create([
            'added_by' => $request->id,
            'judul' => $request->judul,
            'kategori' => 'story',
            'deskripsi' => $request->deskripsi,
            'tanggal' => $tanggal,
            'gambar_sampul' => $uploadGambar->id
        ]);
        
        return redirect(route('semua-story'));
    }
    
    // Edit Data Story
    public function editStory($link){
        $story = Artikel::where('id', $link)->first();
        $image = Galeri::where('id', $story->gambar_sampul)->first();
        return view('admin.story.edit-story', compact('story', 'image'));
    }
    public function updateStory(Request $request){
        $messages = [
            'required'=> 'Judul Wajib Diisi.',
            'deskripsi.required'=> 'Deskripsi Wajib Diisi.',
            'tanggal.required' => 'Tanggal Wajib Diisi.',
            'judul_gambar.required' => 'Judul Gambar Wajib Diisi.',
            'min' => 'Harus Diisi minimal :min'
        ];

        $request->validate([
            'judul'=> 'required|min:7',
            'deskripsi'=> 'required',
            'tanggal' => 'required',
            'judul_gambar' => 'required'
        ],$messages);
        
        $tanggal = date('Y-m-d');

        if ($request->has('gambar')) {
            $uploadedFile = $request->file('gambar');
            $uploadedFile->move("fe/img/contents/", $uploadedFile->getClientOriginalName());
            $image_path = "fe/img/contents/".$request->in_img_title;
            
            $uploadGambar = Galeri::where('id', $request->imgId)->update([
                'judul' => $request->judul_gambar,
                'gambar' => $request->in_img_title ?? $uploadedFile->getClientOriginalName(),
                'added_by' => $request->uId,
                'path' => $image_path,
                'tampilkan' => 0
            ]);
        }
        $updateStory = Artikel::where('id', $request->cId)->update([
            'added_by' => $request->uId,
            'judul' => $request->judul,
            'kategori' => 'story',
            'deskripsi' => $request->deskripsi,
            'tanggal' => $tanggal,
            'gambar_sampul' => $request->imgId,
        ]);
         return redirect(route('semua-story'));
    }
    
    // Delete Story
    public function deleteStory(Request $request)
    {
        $hapusStory = Artikel::where('id', $request->id);
        $hapusStory->delete();
        $hapusGambarStory = Galeri::where('id', $request->gambar_sampul);
        $hapusGambarStory->delete();
        return redirect(route('semua-story'));
    }
}
