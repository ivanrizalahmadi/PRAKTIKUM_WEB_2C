   <!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Dashboard</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Selamat Datang Card -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Selamat Datang</h3>
      </div>
      <div class="card-body">
        <?php
        // Ambil nama pengguna dari session
        $username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
        ?>
        <p>Selamat Datang <strong><?php echo $username; ?></strong>. Anda login sebagai <strong>admin</strong>.</p>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
