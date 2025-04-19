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
                    
                    <th class="product-name">Konser</th>
                    <th class="product-type">Type</th>
                    <th class="product-price">Harga</th>
                    <th class="product-quantity">Jumlah</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Hapus</th>
                  </tr>
                </thead>
                <tbody>
              @foreach($datacart as $data)
              {{-- <p>{{$data->id}}</p> --}}
                
                  <tr>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{$data->tiket->konser->nama_konser_222086}}</h2>
                    </td>
                    <td class="product-type">
                      <h2 class="h5 text-black">{{$data->type_222086}}</h2>
                    </td>
                    <td>
                      @if($data->type_222086 === 'vip')
                      Rp {{ number_format($data->tiket->vip_222086, 0, ',', '.') }}
                      @else
                      Rp {{ number_format($data->tiket->reguler_222086, 0, ',', '.') }}
                      @endif
                    </td>
                    <td>
                      <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-black decrease" type="button"></button>
                        </div>
                        <input type="text" class="form-control text-center quantity-amount" value="{{$data->jumlah_222086}}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-black increase" type="button"></button>
                        </div>
                      </div>
                    </td>
                    <td>
                      @if($data->type_222086 === 'vip')
                      Rp {{ number_format($data->tiket->vip_222086 * $data->jumlah_222086, 0, ',', '.') }}
                      @else
                      Rp {{ number_format($data->tiket->reguler_222086 * $data->jumlah_222086, 0, ',', '.') }}
                      @endif
                    </td>
                    {{-- <td>
                      <form action="{{route('cart.delete')}}" method="get">
                        @csrf
                        <input type="text" value="{{$data->id}}" name="idcart" hidden>
                        <button class="btn btn-black btn-sm" type="submit">Hapus</i></button>
                      </form>
                    </td>
                  </tr> --}}
                  <td>
                    <form action="/cart/delete" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus tiket ini?')">
                      @csrf
                      <input type="text" value="{{$data->id}}" name="idcart" hidden>
                      <button type="submit">X</button>
                    </form>
                  </td>
              @endforeach
            </tbody>
            </table>
            </div>
        </div>
        <div class="col-md-6 pl-5">
          <div class="row justify-content-end">
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-12 text-right border-bottom mb-5">
                  <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6">
                  <span class="text-black">Total</span>
                </div>
                <div class="col-md-6 text-right">
                    <strong class="text-black">
                    @php
                      $total = 0;
                      foreach ($datacart as $data) {
                        if ($data->type_222086 === 'vip') {
                          $price = $data->tiket->vip_222086;
                        } else {
                          $price = $data->tiket->reguler_222086;
                        }
                        $total += $price * $data->jumlah_222086;
                      }
                    @endphp
                    Rp {{ number_format($total, 0, ',', '.') }}
                    </strong>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='/checkout'">Checkout</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection