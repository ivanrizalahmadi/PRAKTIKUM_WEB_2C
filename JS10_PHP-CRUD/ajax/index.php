<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center">Data Anggota</h2>
        
        <form id="form-data" method="post">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" id="nama" required>
                <p class="text-danger" id="err_nama"></p>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-" id="jenkel1" required>
                    <label class="form-check-label" for="jenkel1">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" id="jenkel2" required>
                    <label class="form-check-label" for="jenkel2">Perempuan</label>
                </div>
                <p class="text-danger" id="err_jenis_kelamin"></p>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" name="alamat" id="alamat" required></textarea>
                <p class="text-danger" id="err_alamat"></p>
            </div>
            <div class="form-group">
                <label for="no_telp">No Telepon:</label>
                <input type="text" class="form-control" name="no_telp" id="no_telp" required>
                <p class="text-danger" id="err_no_telp"></p>
            </div>
            <button type="button" id="simpan" class="btn btn-primary">Simpan</button>
        </form>

        <div id="data" class="mt-4"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            function loadData() {
                $('#data').load('data.php');
            }
            
            loadData();

            $("#simpan").click(function(){
                var data = $("#form-data").serialize();
                $.ajax({
                    type: 'POST',
                    url: "form_action.php",
                    data: data,
                    success: function() {
                        loadData();
                        $("#form-data")[0].reset();
                    },
                    error: function(response) {
                        console.log(response.responseText);
                    }
                });
            });
        });
    </script>
</body>
</html>
