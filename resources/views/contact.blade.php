@extends('layouts.app')

@section('content')
    <h2>Hubungi Kami</h2>
    <form>
        <label>Nama:</label><br>
        <input type="text" name="nama"><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br>

        <label>Pesan:</label><br>
        <textarea name="pesan"></textarea><br>

        <button type="submit">Kirim</button>
    </form>
@endsection