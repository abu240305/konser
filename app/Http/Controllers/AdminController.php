<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran_222086;
use App\Models\detail_pesanan_222086;
use App\Models\Ulasan_222086;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{

    public function dashboard(){
        return view('admin.dashboard.index');
    }

    public function pembelianTiket(){
        $dataPembelian = Pembayaran_222086::all();
        return view('admin.pembelianTiket.index' , compact('dataPembelian'));
    }

    public function detailPembelianTiket($id){
        $detailPesanan = detail_pesanan_222086::where('Pesanan_id_222086', $id)->get();
        return view('admin.pembelianTiket.detail', compact('detailPesanan'));
    }
    
    public function cetakPembelian(Request $request)
    {
        $periode = $request->input('periode');
        $pembayaranQuery = Pembayaran_222086::query();

        $tanggalAwal = now();
        $tanggalAkhir = now();
        $pdfName = "";

        switch ($periode) {
            case 'hari':
                $tanggalAwal = now();
                $tanggalAkhir = now();
                $pembayaranQuery->whereDate('tanggal_222086', now());
                $pdfName = $tanggalAwal->format('d-m-Y');
                break;
            case 'minggu':
                $tanggalAwal = now()->startOfWeek();
                $tanggalAkhir = now()->endOfWeek();
                $pembayaranQuery->whereBetween('tanggal_222086', [$tanggalAwal, $tanggalAkhir]);
                $pdfName = $tanggalAwal->format('d-m-Y') . " - " . $tanggalAkhir->format('d-m-Y');
                break;
            case 'bulan':
                $tanggalAwal = now()->startOfMonth();
                $tanggalAkhir = now()->endOfMonth();
                $pembayaranQuery->whereMonth('tanggal_222086', now()->month)->whereYear('tanggal_222086', now()->year);
                $pdfName = $tanggalAwal->format('F Y') . ", " . $tanggalAwal->format('d-m-Y') . " - " . $tanggalAkhir->format('d-m-Y');
                break;
            case 'tahun':
                $tanggalAwal = now()->startOfYear();
                $tanggalAkhir = now()->endOfYear();
                $pembayaranQuery->whereYear('tanggal_222086', now()->year);
                $pdfName = $tanggalAwal->format('Y') . ", " . $tanggalAwal->format('d-m-Y') . " - " . $tanggalAkhir->format('d-m-Y');
                break;
            default:
                break;
        }

        $daftarPembayaran = $pembayaranQuery->get();

        $pdf = Pdf::loadView('admin.pembelianTiket.cetak', compact('daftarPembayaran', 'periode', 'tanggalAwal', 'tanggalAkhir'));
        return $pdf->download("Laporan Data Pembayaran " . $pdfName . ".pdf");
    }

    public function cetakUlasan(Request $request)
    {
        $periode = $request->input('periode');
        $ulasanQuery = Ulasan_222086::query();

        $tanggalAwal = now();
        $tanggalAkhir = now();
        $pdfName = "";

        switch ($periode) {
            case 'hari':
                $tanggalAwal = now();
                $tanggalAkhir = now();
                $ulasanQuery->whereDate('tanggal_222086', now());
                $pdfName = $tanggalAwal->format('d-m-Y');
                break;
            case 'minggu':
                $tanggalAwal = now()->startOfWeek();
                $tanggalAkhir = now()->endOfWeek();
                $ulasanQuery->whereBetween('tanggal_222086', [$tanggalAwal, $tanggalAkhir]);
                $pdfName = $tanggalAwal->format('d-m-Y') . " - " . $tanggalAkhir->format('d-m-Y');
                break;
            case 'bulan':
                $tanggalAwal = now()->startOfMonth();
                $tanggalAkhir = now()->endOfMonth();
                $ulasanQuery->whereMonth('tanggal_222086', now()->month)->whereYear('tanggal_222086', now()->year);
                $pdfName = $tanggalAwal->format('F Y') . ", " . $tanggalAwal->format('d-m-Y') . " - " . $tanggalAkhir->format('d-m-Y');
                break;
            case 'tahun':
                $tanggalAwal = now()->startOfYear();
                $tanggalAkhir = now()->endOfYear();
                $ulasanQuery->whereYear('tanggal_222086', now()->year);
                $pdfName = $tanggalAwal->format('Y') . ", " . $tanggalAwal->format('d-m-Y') . " - " . $tanggalAkhir->format('d-m-Y');
                break;
            default:
                break;
        }

        $daftarUlasan = $ulasanQuery->get();

        $pdf = Pdf::loadView('admin.ulasan.cetak', compact('daftarUlasan', 'periode', 'tanggalAwal', 'tanggalAkhir'));
        return $pdf->download("Laporan Data Ulasan " . $pdfName . ".pdf");
    }
}       