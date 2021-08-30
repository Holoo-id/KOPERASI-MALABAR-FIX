@extends('template')

    <form action="{{ route('login') }}" method="get" enctype="multipart/form-data">
        <div class="form-column">
            <label for="" class="be-form-label mb-1 mt-2">Email</label>
            <input class="be-form" type="email" name="email" id="" placeholder="Masukkan Email">
        </div>
        <div class="form-column">
            <label for="" class="be-form-label mb-1 mt-2">Password</label>
            <input class="be-form" type="password" name="password" id="" placeholder="Masukkan Password">
        </div>
        <input type="submit" value="Masuk" class="be-form-button mt-2">
    </form>