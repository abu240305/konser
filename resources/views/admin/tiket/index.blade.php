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
                <h5 class="card-title fw-semibold mb-4">Tebel Tiket</h5>
                <div class="table-responsive">
                  <a href="/admin/tiket/tambahtiket"><button class="btn btn-primary" type="submit"><i class="bi bi-plus-circle"></i></button></a>
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
                            <h6 class="fw-semibold mb-0">Harga Vip</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Harga Reguler</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Quota Vip</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Quota Reguler</h6>
                        </th>
                    </thead>
                    <tbody>
                      @foreach ($dataTiket as $tiket)
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">{{$loop->iteration}}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"></h6>
                            <span class="fw-normal">{{$tiket->konser->nama_konser_222086}}</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                          <span class="badge bg-success rounded-3 fw-semibold">
                            {{ 'Rp ' . number_format($tiket->vip_222086, 0, ',', '.') }}
                          </span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                          <span class="badge bg-danger rounded-3 fw-semibold">
                            {{ 'Rp ' . number_format($tiket->reguler_222086, 0, ',', '.') }}
                          </span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-success rounded-3 fw-semibold">{{$tiket->quota_vip_222086}}</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-3 fw-semibold">{{$tiket->quota_reguler_222086}}</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-1">
                            <form action="/admin/tiket/delete" method="POST">
                              @csrf
                              <input type="text" value="{{$tiket->id}}" name="idTiket" hidden>
                              <button class="btn btn-primary" type="submit"><i class="bi bi-trash"></i></button>
                            </form>
                            <form action="/admin/tiket/edit" method="POST">
                              @csrf
                              <input type="text" value="{{$tiket->id}}" name="idTiket" hidden>
                              <button class="btn btn-primary" type="submit"><i class="bi bi-pencil-square"></i></button>
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
        {{-- akhir tebel--}}
      </div>
    </div>
</div>
@endsection