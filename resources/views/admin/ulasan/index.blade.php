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
                          <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                            <td class="border-bottom-0">
                              <p class="mb-0 fw-normal">Konser1</p>
                            </td>
                            <td class="border-bottom-0">
                              <p class="mb-0 fw-normal">Abu</p>
                            </td>
                            <td class="border-bottom-0">
                              <h6 class="mb-0 fw-normal">24-05-2025</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">hsdvbsdcvbcsdjcbisdhdbcsjhdcbsd</p>
                            </td>
                          </tr>                    
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
@endsection