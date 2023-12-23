<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penduduk App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" integrity="sha512-2hP6iQcQG0gAO1mflrFukAfQf4atGIOAd2ZkpxMlu2j2IbCBTprJgg9i/eYboI6qivLX/cEEr4eC/pLl6MVOIg==" crossorigin="anonymous" />


</head>
<body>
    <div class="container mt-4">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Tambahkan script berikut di dalam blok head atau sebelum penutup tag body -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js" integrity="sha512-+6Z4A8T5QD7gKGb9XMZi4l2VJpHtIjQPP4ZU2H6xWumN4MhG8T2zV7V9KkAbXhRJVwIzQ2Zl6z8guWglr+F1AA==" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        // Ambil kecamatan dari database saat halaman dimuat
        $(document).ready(function() {
            $.ajax({
                url: '/pemilih/get_kecamatan',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Isi dropdown kecamatan
                    $.each(data, function(key, value) {
                        $('#kecamatan_id').append('<option value="' + value.id + '">' + value.nama + '</option>');
                    });

                    // Ambil desa berdasarkan kecamatan yang dipilih
                    getDesa();
                }
            });
        });

        // Perbarui opsi desa saat kecamatan berubah
        $('#kecamatan_id').change(function() {
            getDesa();
        });

        // Fungsi untuk mengambil desa dari database
        function getDesa() {
            var kecamatanId = $('#kecamatan_id').val();
            $('#desa_id').empty(); // Kosongkan opsi desa

            $.ajax({
                url: '/pemilih/get_desa/' + kecamatanId,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Isi dropdown desa
                    $.each(data, function(key, value) {
                        $('#desa_id').append('<option value="' + value.id + '">' + value.nama + '</option>');
                    });
                }
            });
        }
    </script>

</body>
</html>
