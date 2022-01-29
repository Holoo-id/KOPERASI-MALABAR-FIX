<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Galeri;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Semua Event di Admin
    public function allEvents(){
        $events = Artikel::where('kategori', 'event')->get();
        $images = Galeri::all();
        return view('admin.event.semua-event', compact('events', 'images'));
    }
    // Detail Event di Admin
    public function eventDetail($link){
        $event = Artikel::where('id', $link)->first();
        $image = Galeri::where('id', $event->gambar_sampul)->first();
        return view('admin.event.detail-event', compact('event', 'image'));
    }

    // Create New Event Data
    public function createEventPage(){
        return view('admin.event.event-baru');
    }
    public function createEvent(Request $request){
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
        $eventBaru = Artikel::create([
            'added_by' => $request->id,
            'judul' => $request->judul,
            'kategori' => 'event',
            'deskripsi' => $request->deskripsi,
            'tanggal' => $tanggal,
            'gambar_sampul' => $uploadGambar->id
        ]);
        
        return redirect(route('semua-event'));
    }
    
    // Edit Data Event
    public function editEvent($link){
        $event = Artikel::where('id', $link)->first();
        $image = Galeri::where('id', $event->gambar_sampul)->first();
        return view('admin.event.edit-event', compact('event', 'image'));
    }
    public function updateEvent(Request $request){
        $messages = [
            'required'=> 'Judul Wajib Diisi.',
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

        
        $uploadGambar = Galeri::where('id', $request->id)->update([
            
            'judul' => $request->judul_gambar,
            'gambar' => $request->in_img_title ?? $uploadedFile->getClientOriginalName(),
            'added_by' => $request->id,
            'path' => $image_path,
            'tampilkan' => 0
        ]);
        $updateEvent = Artikel::where('id', $request->id)->update([
            'added_by' => $request->id,
            'judul' => $request->judul,
            'kategori' => 'event',
            'deskripsi' => $request->deskripsi,
            'tanggal' => $tanggal,
            'gambar_sampul' => $request->id,
        ]);
         return redirect(route('semua-event'));
    }
    
    // Delete Event
    public function deleteEvent(Request $request)
    {
        $hapusEvent = Artikel::where('id', $request->id);
        $hapusEvent->delete();
        $hapusGambarEvent = Galeri::where('id', $request->gambar_sampul);
        $hapusGambarEvent->delete();
        return redirect(route('semua-event'));
    }
}
