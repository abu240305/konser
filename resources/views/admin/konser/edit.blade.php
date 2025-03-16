@extends('admin.layout.index')
@section('content')
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="body-wrapper">
      
      <div class="container-fluid">
        {{-- tambah --}}
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Tambah Konser</h5>
                <div class="card">
                  <div class="card-body">
                    <form action="/admin/konser/edit/proses" method="POST">
                      @csrf
                      <input type="text" value="{{$konser->id}}" name="idKonser" hidden>
                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Input Nama Konser</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Nama Konser" name="nama_konser" value="{{$konser->nama_konser}}">
                      </div>
                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Input Tempat</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Tempat" name="tempat" value="{{$konser->tempat}}">
                      </div>
                      <div class="mb-3">
                        <label for="tanggal" class="form-label">Input Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" name="tanggal" value="{{$konser->tanggal}}">
                      </div>
                      <div class="mb-3">
                        <label for="jam" class="form-label">Input Jam</label>
                        <input type="time" class="form-control" id="jam" name="jam" name="jam" value="{{$konser->jam}}">
                      </div>
                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Input Deskripsi</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Deskripsi" name="deskripsi" value="{{$konser->deskripsi}}">
                      </div>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload" name="foto" value="{{$konser->foto}}">
                      </div>                      
                      <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                  </div>
              </div>
            </div>
          </div>
        </div>
        {{-- akhir --}}
      </div>
    </div>
</div>
@endsection