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
                    <form id="KonserForm" action="/admin/konser/tambahkonser/proses" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                      <label for="disabledTextInput" class="form-label">Input Nama Konser</label>
                      <input type="text" id="disabledTextInput" class="form-control" placeholder="Nama Konser" name="nama_konser">
                      </div>
                      <div class="mb-3">
                      <label for="disabledTextInput" class="form-label">Input Tempat</label>
                      <input type="text" id="disabledTextInput" class="form-control" placeholder="Tempat" name="tempat">
                      </div>
                      <div class="mb-3">
                      <label for="tanggal" class="form-label">Input Tanggal</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal">
                      </div>
                      <div class="mb-3">
                      <label for="jam" class="form-label">Input Jam</label>
                      <input type="time" class="form-control" id="jam" name="jam">
                      </div>
                        <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Input Deskripsi</label>
                        <textarea name="deskripsi" id="disabledTextInput" cols="135" rows="5" class="form-control"></textarea>
                      </div>
                      <div class="input-group mb-3">
                      <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload" name="foto" accept="image/*">
                      </div>
                      <button id="KonserBtn" type="submit" class="btn btn-primary">
                        <span id="KonserText">Tambah</span>
                        <span id="KonserLoading" style="display:none;">Processing...</span>
                      </button>
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
<script>
  document.getElementById("KonserForm").onsubmit = function(event) {
    event.preventDefault();  // Mencegah form submit seketika
    var KonserBtn = document.getElementById("KonserBtn");
    var KonserText = document.getElementById("KonserText");
    var KonserLoading = document.getElementById("KonserLoading");

    KonserBtn.disabled = true; // Nonaktifkan tombol
    KonserText.style.display = "none"; // Sembunyikan teks "Tambah"
    KonserLoading.style.display = "inline"; // Tampilkan teks "Processing..."

    // Lakukan submit form setelah pengaturan selesai
    this.submit();
    };
</script>
@endsection