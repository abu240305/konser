<script src="{{asset('../assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('../assets/js/sidebarmenu.js')}}"></script>
<script src="{{asset('../assets/js/app.min.js')}}"></script>
<script src="{{asset('../assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
<script src="{{asset('../assets/libs/simplebar/dist/simplebar.js')}}"></script>
<script src="{{asset('../assets/js/dashboard.js')}}"></script>


{{-- <script>
    /* Dengan Rupiah */
    var harga_reguler = document.getElementById('harga_reguler');
    var harga_vip = document.getElementById('harga_vip');
    var harga_reguler1 = document.getElementById('harga_reguler1');
    var harga_vip1 = document.getElementById('harga_vip1');

    harga_reguler.addEventListener('keyup', function(e)
    {
        // dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
        harga_reguler.value = formatRupiah(this.value, '');
    });
    harga_vip.addEventListener('keyup', function(e)
    {
        // harga_vip.value = formatRupiah(this.value, 'Rp. ');
        harga_vip.value = formatRupiah(this.value, '');
    });
    harga_reguler1.addEventListener('keyup', function(e)
    {
        // dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
        harga_reguler1.value = formatRupiah(this.value, '');
    });
    harga_vip1.addEventListener('keyup', function(e)
    {
        // harga_vip.value = formatRupiah(this.value, 'Rp. ');
        harga_vip1.value = formatRupiah(this.value, '');
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        // return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        return prefix == undefined ? rupiah : (rupiah ?rupiah : '');
    }
</script> --}}