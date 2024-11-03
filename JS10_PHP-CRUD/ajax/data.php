<?php
include 'koneksi.php';
$no = 1;
$query = "SELECT * FROM anggota ORDER BY id DESC";
$sql = $db1->prepare($query);
$sql->execute();
$res1 = $sql->get_result();

echo '<table id="example" class="table table-striped table-bordered" style="width:100%">';
echo '<thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Action</th>
        </tr>
      </thead><tbody>';

if ($res1->num_rows > 0) {
    while ($row = $res1->fetch_assoc()) {
        $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-laki' : 'Perempuan';
        echo "<tr>
                <td>" . $no++ . "</td>
                <td>{$row['nama']}</td>
                <td>{$jenis_kelamin}</td>
                <td>{$row['alamat']}</td>
                <td>{$row['no_telp']}</td>
                <td>
                    <button data-id='{$row['id']}' class='btn btn-success btn-sm edit_data'><i class='fa fa-edit'></i> Edit</button>
                    <button data-id='{$row['id']}' class='btn btn-danger btn-sm hapus_data'><i class='fa fa-trash'></i> Hapus</button>
                </td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='6' class='text-center'>Tidak ada data ditemukan</td></tr>";
}

echo '</tbody></table>';
?>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();

    // Fungsi untuk menghapus data
    $(document).on('click', '.hapus_data', function() {
        var id = $(this).data('id');
        $.ajax({
            type: 'POST',
            url: "ajax/hapus_data.php", // Pastikan path ini benar
            data: { id: id },
            success: function() {
                $('#data').load("ajax/data.php"); // Pastikan path ini benar
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });
});
</script>
