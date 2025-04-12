<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pemesanan Tiket</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">    
        <div class="card mx-auto shadow" style="max-width: 600px;">
            <div class="card-header text-center bg-primary text-white">
                <h1 class="h4 mb-0">Struk Pemesanan Tiket</h1>
                <p class="mb-0">Konser Musik 2023</p>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <p><strong>Nama:</strong> John Doe</p>
                    <p><strong>Tanggal:</strong> 15 Oktober 2023</p>
                    <p><strong>Jumlah Tiket:</strong> 2</p>
                    <p><strong>Total Harga:</strong> Rp 500.000</p>
                </div>
                <div class="text-center">
                    <p class="text-muted">Terima kasih telah memesan tiket!</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-primary me-2" onclick="printStruk()">Print</button>
            <button class="btn btn-success" onclick="downloadStruk()">Download</button>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script>
        function printStruk() {
            window.print();
        }

        function downloadStruk() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
            const struk = document.querySelector('.card');
            doc.html(struk, {
                callback: function (doc) {
                    doc.save('struk-pemesanan.pdf');
                },
                x: 10,
                y: 10
            });
        }
    </script>
</body>
</html>
