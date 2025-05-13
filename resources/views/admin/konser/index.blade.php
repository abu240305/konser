<script>
  // Menangani submit untuk tombol Delete dan Edit
  document.querySelectorAll("form").forEach(function(form) {
    form.onsubmit = function() {
      // Mengambil ID konser dari form yang dikirim
      var konserId = form.querySelector('[name="idKonser"]').value;
      
      // Mendapatkan tombol dan elemen di dalamnya
      var button = form.querySelector("button");
      
      // Identifikasi elemen span untuk teks biasa dan loading
      var buttonText = form.querySelector(".konserdeleteText" + konserId) || form.querySelector(".konsereditText" + konserId);
      var loadingText = form.querySelector(".konserdeleteLoading" + konserId) || form.querySelector(".konsereditLoading" + konserId);

      // Menonaktifkan tombol dan mengganti teks menjadi "Processing..."
      if (buttonText && loadingText) {
        button.disabled = true;
        buttonText.style.display = "none";  // Menyembunyikan teks asli
        loadingText.style.display = "inline";  // Menampilkan teks "Processing..."
      }

      return true;  // Melanjutkan proses submit
    };
  });
</script>
