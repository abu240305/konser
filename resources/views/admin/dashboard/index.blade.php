@extends('admin.layout.index')
@section('content')
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
      data-sidebar-position="fixed" data-header-position="fixed">
      <div class="body-wrapper">
        
        <div class="container-fluid">
          {{-- awal--}}
            <div class="col-lg-4">
              <div class="justify-content-between d-flex align-items-center column-gap-2">
                <div class="col-lg-12 ">
                  <div class="card overflow-hidden" style="background-color: #f8d7da;">
                    <div class="card-body p-4">
                      <h5 class="card-title mb-9 fw-semibold">Jumlah Customer</h5>
                      <div class="row align-items-center">
                        <div class="col-8">
                          <h4 class="fw-semibold mb-3">10</h4>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="card overflow-hidden" style="background-color: #d4edda;">
                    <div class="card-body p-4">
                      <h5 class="card-title mb-9 fw-semibold">Jumlah Penjualan</h5>
                      <div class="row align-items-center">
                        <div class="col-8">
                          <h4 class="fw-semibold mb-3">10</h4>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="card overflow-hidden" style="background-color: #d1ecf1;">
                    <div class="card-body p-4">
                      <h5 class="card-title mb-9 fw-semibold">Jumlah Konser</h5>
                      <div class="row align-items-center">
                        <div class="col-8">
                          <h4 class="fw-semibold mb-3">10</h4>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          {{-- akhir--}}
        </div>
      </div>
  </div>
@endsection
