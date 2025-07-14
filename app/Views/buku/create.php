<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
	<div class="row mt-5">
		<div class="col-7 mt-5">
			<h2>Form Tambah Buku</h2>
<!-- masih belum muncul -->
			<?= $validation->listErrors(); ?>
			<form action="/buku/save" method="post">
				<?= csrf_field(); ?>
			  <div class="row mb-3 mt-3">
			    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="judul" id="judul" autofocus>
			    </div>
			  </div>
			  <div class="row mb-3 mt-3">
			    <label for="sutradara" class="col-sm-2 col-form-label">Sutradara</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="sutradara" name="sutradara">
			    </div>
			  </div><div class="row mb-3 mt-3">
			    <label for="ph" class="col-sm-2 col-form-label">PH</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="ph" name="ph">
			    </div>
			  </div>
			  <div class="row mb-3 mt-3">
			    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="judul" name="sampul">
			    </div>
			  </div>
			  <div class="d-flex justify-content-end">
			  <button type="submit" class="btn btn-primary">Tambah</button>
			  </div>
			</form>
					</div>
				</div>
			</div>

<?= $this->endSection('content'); ?>