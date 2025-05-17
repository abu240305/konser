@extends('admin.layout.index')
@section('content')
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="body-wrapper">
      
      <div class="container-fluid">
        {{-- tebel --}}
        <div class="row">
          <div class="col">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Tebel Konser</h5>
                <div class="table-responsive">
                    <a href="/admin/konser/tambahkonser"><button class="btn btn-primary" type="submit"><i class="bi bi-plus-circle"></i></button></a>
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nama Konser</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Tempat</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Tanggal</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">jam</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Deskripsi</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Foto</h6>
                        </th>
                    </thead>

                    <tbody>
                      @foreach ($dataKonser as $konser)
                        <tr>
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">{{$loop->iteration}}</h6>
                          </td>
                          <td class="border-bottom-0">
                              <h6 class="fw-semibold mb-1"></h6>
                              <span class="fw-normal">{{$konser->nama_konser_222086}}</span>                          
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{$konser->tempat_222086}}</p>
                          </td>
                          <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                              <span class="badge bg-success rounded-3 fw-semibold">{{$konser->tanggal_222086}}</span>
                            </div>
                          </td>
                          <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                              <span class="badge bg-success rounded-3 fw-semibold">{{$konser->jam_222086}}</span>
                            </div>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{Str::limit($konser->deskripsi_222086, 20, '...') }}</p>
                          </td>
                          <td class="border-bottom-0">
                            <img style="max-width: 100px; height:auto;" src="{{asset('storage/images/'.$konser->foto_222086)}}">
                          </td>
                          <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-1">
                                <!-- Form Delete -->
                                <form id="deleteForm{{$konser->id}}" action="/admin/konser/delete" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus konser ini?')">
                                    @csrf
                                    <input type="text" value="{{$konser->id}}" name="idKonser" hidden>
                                    <button id="deleteBtn{{$konser->id}}" class="btn btn-danger" type="submit">
                                        <i class="bi bi-trash"></i> 
                                        <span class="konserdeleteText{{$konser->id}}">Delete</span>
                                        <span class="konserdeleteLoading{{$konser->id}}" style="display:none;">Processing...</span>
                                    </button>
                                </form>
                            
                                <!-- Form Edit -->
                                <form id="editForm{{$konser->id}}" action="/admin/konser/edit" method="POST">
                                    @csrf
                                    <input type="text" value="{{$konser->id}}" name="idKonser" hidden>
                                    <button id="editBtn{{$konser->id}}" class="btn btn-primary" type="submit">
                                        <i class="bi bi-pencil-square"></i> 
                                        <span class="konsereditText{{$konser->id}}">Edit</span>
                                        <span class="konsereditLoading{{$konser->id}}" style="display:none;">Processing...</span>
                                    </button>
                                </form>
                            </div>
                          </td>
                        </tr> 
                      @endforeach                        
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- akhir tebel --}}
      </div>
    </div>
</div>
<script>
  // Menangani submit untuk tombol Delete dan Edit
  document.querySelectorAll("form").forEach(function(form) {
    form.onsubmit = function() {
      // Mengambil ID konser dari form yang dikirim
      var konserId = form.querySelector('[name="idKonser"]').value;
      
      // Mendapatkan tombol dan elemen di dalamnya
      var button = form.querySelector("button");
      
      // Identifikasi elemen span untuk teks biasa dan loading
      var buttonText = form.querySelector(".konserdeleteText" + konserId) || form.querySelector(".konsereditText" + konserId);
      var loadingText = form.querySelector(".konserdeleteLoading" + konserId) || form.querySelector(".konsereditLoading" + konserId);

      // Menonaktifkan tombol dan mengganti teks menjadi "Processing..."
      if (buttonText && loadingText) {
        button.disabled = true;
        buttonText.style.display = "none";  // Menyembunyikan teks asli
        loadingText.style.display = "inline";  // Menampilkan teks "Processing..."
      }

      return true;  // Melanjutkan proses submit
    };
  });
</script>
@endsection

