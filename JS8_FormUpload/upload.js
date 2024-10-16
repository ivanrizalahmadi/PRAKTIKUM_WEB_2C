$(document).ready(function() {
    $('#upload-form').submit(function(e) {
        e.preventDefault(); // Mencegah pengunggahan tradisional

        var formData = new FormData(this); // Mengambil semua data dari form

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response); // Menampilkan respons sukses
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah file.'); // Menampilkan pesan kesalahan
            }
        });
    });
});
