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
                    <form>
                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Input Nama Konser</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Nama Konser">
                      </div>
                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Input Tempat</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Tempat">
                      </div>
                      <div class="mb-3">
                        <label for="tanggal" class="form-label">Inpu Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                      </div>
                      <div class="mb-3">
                        <label for="jam" class="form-label">Input Jam</label>
                        <input type="time" class="form-control" id="jam" name="jam">
                      </div>
                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Input Deskripsi</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Deskripsi">
                      </div>
                      <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Button</button>
                        <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                      </div>                      
                      <button type="submit" class="btn btn-primary">Tambah</button>
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