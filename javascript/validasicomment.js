    // Ambil elemen input field komentar
    const commentInput = document.getElementById('komentar');

    // Tambahkan event listener untuk memeriksa jumlah kata
    commentInput.addEventListener('input', function() {
        const words = this.value.trim().split(/\s+/).length;

        // Jika jumlah kata kurang dari 50, munculkan pesan peringatan
        if (words < 5) {
            commentInput.setCustomValidity('minimum comment harus memiliki 5 kata ya teman - teman swifties ! :)');
        } else {
            commentInput.setCustomValidity('');
        }
            // Tambahkan event listener untuk mengirim formulir
    commentForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah pengiriman formulir bawaan

        // Redirect ke halaman index.html
        window.location.href = './index.html';
    });
    });