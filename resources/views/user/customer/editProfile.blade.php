@extends('user.layout.index')
@section('content')
<div class="container mt-5 mb-5">
    <h2>Edit Profile</h2>
    <form action="/customer/proses/edit" method="POST" >
        @csrf
        <input type="hidden" name="idcustomer" value="{{$customer->id}}">
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{$customer->nama_222086}}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="nama" name="alamat" value="{{$customer->alamat_222086}}">
        </div>
        <div class="mb-2">
            <label for="jenis_kelamin" class="form-label">Jenis kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
            <option value="" @if ($customer->jenisKelamin_222086 == '') selected @endif>Pilih jenis kelamin</option>
            <option value="L" @if ($customer->jenisKelamin_222086 == 'L') selected @endif>L</option>
            <option value="P" @if ($customer->jenisKelamin_222086 == 'P') selected @endif>P</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Tanggal Lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="nama" name="tanggal_lahir" value="{{$customer->tanggalLahir_222086}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$customer->email_222086}}">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
    </form>
</div>
@endsection
