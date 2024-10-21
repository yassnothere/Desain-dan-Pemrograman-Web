$(document).ready(function() {
    // Aktifkan atau nonaktifkan tombol Unggah berdasarkan jumlah file yang dipilih
    $('#file').change(function() {
        if (this.files.length > 0) {
            $('#upload-button').prop('disabled', false).css('opacity', 1);  // Aktifkan tombol unggah
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);  // Nonaktifkan jika tidak ada file
        }
    });

    // Handle submit form dengan AJAX
    $('#upload-form').submit(function(e) {
        e.preventDefault();  // Mencegah pengiriman form secara default
        
        // Membuat objek FormData untuk menangani multi-upload
        var formData = new FormData(this);

        // Tampilkan loading atau status proses
        $('#status').html('<p>Sedang mengunggah...</p>');

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',  // Pastikan URL menuju file PHP yang menangani upload
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                // Tampilkan hasil atau respons sukses dari PHP
                $('#status').html('<p>' + response + '</p>');
                // Reset form setelah sukses
                $('#upload-form')[0].reset();
                $('#upload-button').prop('disabled', true).css('opacity', 0.5);
            },
            error: function() {
                // Tampilkan pesan error jika gagal
                $('#status').html('<p>Terjadi kesalahan saat mengunggah file.</p>');
            }
        });
    });
});
