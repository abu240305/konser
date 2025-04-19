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
                        <form action="/admin/tiket/edit/proses" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" value="{{$tiket->id}}" name="idTiket" hidden>
                            <label for="exampleInputEmail1" class="form-label">Pilih Konser</label>
                            <select name="konser_id" id="" class="form-select">
                            <option value="">Pilih Konser</option> 
                            @foreach ($konser as $item)
                            <option value="{{$item->id}}" {{ $item->id == $tiket->konser_id_222086 ? 'selected' : '' }}>{{$item->nama_konser_222086}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Input Harga VIP</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Harga" name="vip" value="{{$tiket->vip_222086}}">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Input Harga Reguler</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Harga" name="reguler" value="{{$tiket->reguler_222086}}">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Quota Vip</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Quota" name="quotaVip" value="{{$tiket->quota_vip_222086}}">
                        </div> 
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Quota Reguler</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Quota" name="quotaReguler" value="{{$tiket->quota_reguler_222086}}">
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