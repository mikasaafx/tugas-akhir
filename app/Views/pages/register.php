<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row mt-5" style="height: 100vh;">
    <div class="col mt-5 pt-5" style="height: 450px;">
      <h2 class="text-center">Daftar</h2>
<form class="m-auto" style="max-width: 300px;">
  <div class="mb-3 mt-3">
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama" placeholder="Silmi Kamila Ihsan" autofocus>
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3 mt-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" placeholder="silmi123">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
  </div>
  <button type="submit" class="btn btn-primary w-100 mt-3">Daftar</button>
  <div class="text-center pt-2"><p>Sudah punya akun? <a href="/pages/login" class="link-primary" id="belum">Masuk sekarang</a></p></div>
</form>
    </div>
  </div>
  
</div>
<?= $this->endSection('content'); ?>