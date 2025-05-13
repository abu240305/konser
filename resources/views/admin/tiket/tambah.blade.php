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
                    <form id="addForm" action="/admin/tiket/tambahtiket/proses" method="POST">
                      @csrf
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pilih Konser</label>
                        <select name="konser_id" id="" class="form-select" required>
                          <option value="">Pilih Konser</option> 
                          @foreach ($konser as $item)
                          <option value="{{$item->id}}">{{$item->nama_konser_222086}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Input Harga Vip</label>
                        <input type="text" id="harga_vip" class="form-control" placeholder="Harga" name="vip" required>
                      </div>
                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Input Harga Reguler</label>
                        <input type="text" id="harga_reguler" class="form-control" placeholder="Harga" name="reguler" required>
                      </div>
                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Quota Vip</label>
                        <input type="number" id="disabledTextInput" class="form-control" placeholder="Quota" name="quotaVip" required value="0">
                      </div> 
                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Quota Reguler</label>
                        <input type="number" id="disabledTextInput" class="form-control" placeholder="Quota" name="quotaReguler" required value="0">
                      </div> 
                      <button id="addBtn" type="submit" class="btn btn-primary">
                        <span id="addText">Tambah</span>
                        <span id="addLoading" style="display:none;">Processing...</span>
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
   document.getElementById("addForm").onsubmit = function(event) {
    event.preventDefault();  // Mencegah form submit seketika
    var addBtn = document.getElementById("addBtn");
    var addText = document.getElementById("addText");
    var addLoading = document.getElementById("addLoading");

    addBtn.disabled = true; // Nonaktifkan tombol
    addText.style.display = "none"; // Sembunyikan teks "Tambah"
    addLoading.style.display = "inline"; // Tampilkan teks "Processing..."

    // Lakukan submit form setelah pengaturan selesai
    this.submit();
    };
</script>
@endsection

