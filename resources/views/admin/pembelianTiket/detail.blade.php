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
                            @foreach ($detailPesanan as $pesanan)   
                            @csrf 
                            <tr>
                                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$loop->iteration}}</h6></td>
                                <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1"></h6>
                                <span class="fw-normal">{{$pesanan->tiket->konser->nama_konser_222086}}</span>                          
                                </td> 
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-success rounded-3 fw-semibold">{{$pesanan->tiket->type_222086}}</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-success rounded-3 fw-semibold">{{$pesanan->jumlah_222086}}</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-success rounded-3 fw-semibold">{{'Rp ' . number_format($pesanan->tiket->harga_222086,'0',',','.')}}</span>
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
            {{-- akhir tebel--}}
        </div>
        </div>
    </div>
@endsection