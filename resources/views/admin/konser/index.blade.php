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
                    <a href="/admin/konser/tambahKonser"><button class="btn btn-primary" type="submit"><i class="bi bi-plus-circle"></i></button></a>
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
                    </thead>
                    <tbody>     
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"></h6>
                            <span class="fw-normal">Festifal musik</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Mall central park</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-success rounded-3 fw-semibold">24-03-2025</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-success rounded-3 fw-semibold">12:45 AM</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-1">
                            <a href=""><button class="btn btn-primary" type="submit"><i class="bi bi-trash"></i></button></a>
                            <a href=""><button class="btn btn-primary" type="submit"><i class="bi bi-pencil-square"></i></button></a>
                          </div>
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