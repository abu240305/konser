@extends('user.layout.index')
@section('content')
<div class="untree_co-section before-footer-section">
    <div class="container">
      <div class="row mb-5">
        <form class="col-md-12" method="post">
          <div class="site-blocks-table">
            <table class="table">
              <thead>
                <tr>
                  
                  <th class="product-name">Konser</th>
                  <th class="product-price">Harga satuan</th>
                  <th class="product-jumlah">Jumlah</th>
                  <th class="product-total">Subtotal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="product-name">
                    <h2 class="h5 text-black">konser 1</h2>
                  </td>
                  <td>Rp 50.000</td>
                  <td>1</td>
                  <td>Rp 50.000</td>
                </tr>

                <tr>
                    <td class="product-name">
                      <h2 class="h5 text-black">konser 1</h2>
                    </td>
                    <td>Rp 50.000</td>
                    <td>1</td>
                    <td>Rp 50.000</td>
                  </tr>
              </tbody>
            </table>
          </div>
        </form>
      </div>
      
      <div class="row">
        <div class="col-md-6">
            <div class="payment-options" style="border: 1px solid #ddd; border-radius: 8px; padding: 15px; background-color: #fff;">
          <h3>Pilih Metode Pembayaran</h3>
          
          <div class="payment-method" style="display: flex; align-items: center; padding: 10px; cursor: pointer;">
              <input type="radio" name="payment" value="qris" id="qris" style="margin-right: 10px;">
              <label for="qris" style="cursor: pointer;">
            <strong>QRIS</strong>
            <p style="margin: 0; font-size: 12px; color: #666;">Scan QR Code dengan aplikasi pembayaran</p>
              </label>
          </div>
            </div>
        </div>
        <div class="col-md-6 pl-5">
          <div class="row justify-content-end">
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-12 text-right border-bottom mb-5">
                  <h3 class="text-black h4 text-uppercase">Total Pesanan</h3>
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
                  <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='/qris'">Pesan</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
