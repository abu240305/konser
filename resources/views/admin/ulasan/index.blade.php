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
                <h5 class="card-title fw-semibold mb-4">Tebel Ulasan</h5>
                <div class="table-responsive">
                  <div class="mx-3">
                      <form action="{{route('cetak.ulasan')}}" method="GET" target="_blank" class="row input-group">
                          <select id="periodeSelect" class="form-control mt-1" name="periode" id="periode">
                              <option value="hari">Perhari</option>
                              <option value="minggu">Perminggu</option>
                              <option value="bulan">Perbulan</option>
                              <option value="tahun">Pertahun</option>
                          </select>
                          <input style="width: 30%" id="tanggalInput" name="tanggal" type="text" class="form-control mt-1" readonly>                        
                          <div style="width: 10%" class="input-group-append">
                              <button class="btn btn-primary mt-1" type="submit">CETAK</button>
                          </div>
                      </form>
                  </div>
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nama konser</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nama</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Tanggal Ulasan</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Ulasan</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>  
                      @foreach ($dataUlasan as $ulasan)  
                          <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$loop->iteration}}</h6></td>
                            <td class="border-bottom-0">
                              <p class="mb-0 fw-normal">{{$ulasan->konser->nama_konser_222086 ??'_'}}</p></p>
                            </td>
                            <td class="border-bottom-0">
                              <p class="mb-0 fw-normal">{{$ulasan->customer->nama_222086 ??'_'}}</p>
                            </td>
                            <td class="border-bottom-0">
                              <h6 class="mb-0 fw-normal">{{$ulasan->tanggal_222086}}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$ulasan->ulasan_222086}}</p>
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
  document.addEventListener("DOMContentLoaded", function () {
        const periodeSelect = document.getElementById("periodeSelect");
        const tanggalInput = document.getElementById("tanggalInput");

        function formatTanggal(date) {
            const day = String(date.getDate()).padStart(2, '0');
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const year = date.getFullYear();
            return `${day}-${month}-${year}`;
        }

        function updateTanggal() {
            const periode = periodeSelect.value;
            const today = new Date();
            let startDate = new Date();
            let endDate = new Date();

            switch (periode) {
                case "hari":
                    startDate = today;
                    endDate = today;
                    break;
                case "minggu":
                    startDate.setDate(today.getDate() - today.getDay() + 1);
                    endDate.setDate(startDate.getDate() + 6);
                    break;
                case "bulan":
                    startDate = new Date(today.getFullYear(), today.getMonth(), 1);
                    endDate = new Date(today.getFullYear(), today.getMonth() + 1, 0);
                    break;
                case "tahun":
                    startDate = new Date(today.getFullYear(), 0, 1);
                    endDate = new Date(today.getFullYear(), 11, 31);
                    break;
            }

            if (periode === "hari") {
                tanggalInput.value = formatTanggal(today);
            } else {
                tanggalInput.value = `${formatTanggal(startDate)}    -    ${formatTanggal(endDate)}`;
            }
        }

        updateTanggal();
        periodeSelect.addEventListener("change", updateTanggal);
    });
</script>

@endsection