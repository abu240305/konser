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
                    <h5 class="card-title fw-semibold mb-4">Detail Pembelian</h5>
                    <div class="table-responsive">
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
                                <h6 class="fw-semibold mb-0">Type</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Jumlah</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Harga</h6>
                            </th>
                        </thead>
                        <tbody>     
                            <tr>
                                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                                <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1"></h6>
                                <span class="fw-normal">Konser 1</span>                          
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-success rounded-3 fw-semibold">VIP</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-success rounded-3 fw-semibold">3</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-success rounded-3 fw-semibold">Rp.100.000</span>
                                    </div>
                                </td>
                            </tr>                       
                            <tr>
                                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
                                <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1"></h6>
                                <span class="fw-normal">Konser 2</span>                          
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-success rounded-3 fw-semibold">Reguler</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-success rounded-3 fw-semibold">3</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-success rounded-3 fw-semibold">Rp.80.000</span>
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
            {{-- akhir tebel--}}
        </div>
        </div>
    </div>
@endsection