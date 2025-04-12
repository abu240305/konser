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
                <h5 class="card-title fw-semibold mb-4">Tebel User</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nama</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Jenis Kelamin</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Tanggal Lahir</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Alamat</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Role</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($dataCustomer as $customer)
                        <tr>
                          <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$loop->iteration}}</h6></td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{$customer->nama_222086}}</p>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{$customer->email_222086}}</p>
                          </td>
                          <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                              <span class="badge bg-success rounded-3 fw-semibold">{{$customer->jenisKelamin_222086}}</span>
                            </div>
                          </td>
                          <td class="border-bottom-0">
                            <h6 class="mb-0 fw-normal">{{$customer->tanggalLahir_222086}}</h6>
                          </td>
                          <td class="border-bottom-0">
                              <p class="mb-0 fw-normal">{{$customer->alamat_222086}}</p>
                          </td>
                          <td class="border-bottom-0">
                              <p class="mb-0 fw-normal">User</p>
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
@endsection