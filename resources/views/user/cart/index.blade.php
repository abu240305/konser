@extends('user.layout.index')
@section('content')
    <!-- Start Hero Section -->
     
		<!-- End Hero Section -->

		

		<div class="untree_co-section before-footer-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table">
                <thead>
                  <tr>
                    
                    <th class="product-name">Konser</th>
                    <th class="product-type">Type</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Jumlah</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Hapus</th>
                    <th class="product-remove">Pilih</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="product-name">
                      <h2 class="h5 text-black">konser 1</h2>
                    </td>
                    <td class="product-type">
                      <h2 class="h5 text-black">VIP</h2>
                    </td>
                    <td>Rp 50.000</td>
                    <td>
                      <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-black decrease" type="button"></button>
                        </div>
                        <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-black increase" type="button"></button>
                        </div>
                      </div>
  
                    </td>
                    <td>Rp 50.000</td>
                    <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                    <td>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </td>
                  </tr>
  
                  <tr>
                    <td class="product-name">
                      <h2 class="h5 text-black">Konser 2</h2>
                    </td>
                    <td class="product-type">
                      <h2 class="h5 text-black">Reguler</h2>
                    </td>
                    <td>Rp 50.000</td>
                    <td>
                      <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-black decrease" type="button"></button>
                        </div>
                        <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-black increase" type="button"></button>
                        </div>
                      </div>
  
                    </td>
                    <td>Rp 50.000</td>
                    <td>
                      <a href="#" class="btn btn-black btn-sm">X</a>
                    </td>
                    <td>
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
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
                  <strong class="text-black">Rp 100.000</strong>
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