@extends('user.layout.index')
@section('content')
 <!-- Start Hero Section -->
 <div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Tiket</h1>
                </div>
            </div>
            <div class="col-lg-7">
                
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->
<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <form class="col-md-12" method="post">
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
                                <th class="product-tiket">Id Tiket</th>
                                <th class="product-read">Lihat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-name">
                                    <h2 class="h5 text-black">1</h2>
                                </td>
                                <td>Konser1</td>
                                <td>abu</td>
                                <td>Reguler</td>
                                <td>21-01-2025</td>
                                <td>19:00</td>
                                <td>jakarta</td>
                                <td>123456789</td>
                                <td>
                                    <a href="#" class="btn btn-black btn-sm">X</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection