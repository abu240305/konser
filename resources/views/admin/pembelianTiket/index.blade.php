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
                <h5 class="card-title fw-semibold mb-4">Tebel Pembelian Tiket</h5>
                <div class="table-responsive">
                  <a href=""><button class="btn btn-primary" type="submit">CETAK</button></a>
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nama Pembeli</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Total</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Tanggal Pembelian</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Aksi</h6>
                        </th>
                    </thead>
                    <tbody>
                      @foreach ($dataPembelian as $pembelian)
                        <tr>
                          <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$loop->iteration}}</h6></td>
                          <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"></h6>
                            <span class="fw-normal">{{$pembelian->pesanan->customer->nama_222086}}</span>                          
                          </td>
                          <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                              <span class="badge bg-success rounded-3 fw-semibold">{{'Rp ' . number_format($pembelian->pesanan->total_222086,'0',',', '.')}}</span>
                            </div>
                          </td>
                          <td class="border-bottom-0">
                            <h6 class="mb-0 fw-normal">{{$pembelian->tanggal_222086}}</h6>
                          </td>
                          <td class="border-bottom-0">
                            <a href="/admin/pembelian/detail/{{$pembelian->pesanan_id_222086}}" class="btn btn-primary">Detail</a>
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