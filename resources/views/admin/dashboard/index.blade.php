@extends('admin.layout.index')
@section('content')
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
      data-sidebar-position="fixed" data-header-position="fixed">
      <div class="body-wrapper">
        
        <div class="container-fluid">
          {{-- awal--}}
            <div class="col-lg-4">
              <div class="justify-content-between d-flex align-items-center column-gap-4">
              <div class="col-lg-12 ">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden" style="background-color: #2a89e88b;">
                <div class="card-body p-5">
                  <h5 class="card-title mb-9 fw-semibold">Jumlah Customer</h5>
                  <div class="row align-items-center">
                  <div class="col-10">
                    <div class="d-flex align-items-center mb-3">
                    <h4 class="fw-semibold mb-3">10</h4>
                    </div>
                  </div>
                  </div>
                </div>
                </div>
              </div>
              <div class="col-lg-12 ">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden" style="background-color: #e9ecef;">
                <div class="card-body p-5">
                  <h5 class="card-title mb-9 fw-semibold">Tiket Yang Terjual</h5>
                  <div class="row align-items-center">
                  <div class="col-10">
                    <div class="d-flex align-items-center mb-3">
                    <h4 class="fw-semibold mb-3">3</h4>
                    </div>
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
