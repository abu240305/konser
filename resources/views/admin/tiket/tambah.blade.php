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
                <h5 class="card-title fw-semibold mb-4">Tambah Tiket</h5>
                <div class="card">
                  <div class="card-body">
                    <form>
                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Input Harga</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Nama Konser">
                      </div>
                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Quota</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Tempat">
                      </div> 
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kategori</label>
                        <select name="" id="" class="form-select">
                          <option value="">Reguler</option>
                          <option value="">VIP</option>
                        </select>
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