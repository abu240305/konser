@extends('user.layout.index')
@section('content')
 <!-- Start Hero Section -->
 
<!-- End Hero Section -->
<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
                <div class="site-blocks-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-name">No</th>
                                <th class="product-name">Konser</th>
                                <th class="product-name">Nama</th>
                                <th class="product-type">Type</th>
                                <th class="product-date">Tanggal</th>
                                <th class="product-time">Waktu</th>
                                <th class="product-location">Lokasi</th>
                                <th class="product-read">Lihat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataTiket as $data)
                            <tr>
                                <td class="product-name">
                                    <h2 class="h5 text-black">{{$loop->iteration}}</h2>
                                </td>
                                <td>{{$data->tiket->konser->nama_konser_222086}}</td>
                                <td>{{$data->pesanan->customer->nama_222086}}</td>
                                <td>{{$data->type_222086}}</td>
                                <td>{{$data->tiket->konser->tanggal_222086}}</td>
                                <td>{{$data->tiket->konser->jam_222086}}</td>
                                <td>{{$data->tiket->konser->tempat_222086}}</td>
                                <td>
                                    <a href="/struk" class="btn btn-black btn-sm">X</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
@endsection