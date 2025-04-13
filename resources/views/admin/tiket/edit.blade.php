@extends('admin.layout.index')
@section('content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="body-wrapper">
        
        <div class="container-fluid">
            {{-- edit --}}
            <div class="container-fluid">
            <div class="container-fluid">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit tiket</h5>
                    <div class="card">
                    <div class="card-body">
                        <form action="/admin/tiket" method="get">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Pilih Konser</label>
                            <select name="konser_id" id="" class="form-select">
                            <option value="">Pilih Konser</option> 
                            <option value="">konser1</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Input Harga</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Harga" name="harga" value="">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Quota</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Quota" name="quota" value="">
                        </div> 
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Type</label>
                            <select name="type" id="type" class="form-select">
                                <option value="">Pilih Type</option>
                                <option value="VIP">VIP</option>
                                <option value="Regular">Regular</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
            {{-- akhir --}}
        </div>
        </div>
    </div>
@endsection