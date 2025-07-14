<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
	<div class="row mt-3">
		<div class="col mt-3">
			<h2 class="mt-5">Detail Buku</h2>
			<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/<?= $buku['sampul'];  ?>" class="img-fluid rounded-start" alt="" width = "200">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><strong><?= $buku['judul'];  ?></strong></h5>
        <br>
	        <p class="card-text"><strong>Sutradara: </strong><?= $buku['sutradara'];  ?></p>
	        <p class="card-text"><strong>Production House: </strong><?= $buku['ph'];  ?></p>
        <div class="aksi pt-3">
	        <a href="" class="btn btn-warning">Edit</a>
	        <a href="" class="btn btn-danger">Hapus</a>
        </div>
        <br>
      </div>
    </div>
  </div>
</div>
		</div>
	</div>
	<a href="/buku" class="btn btn-primary mt-1"><i class="bi bi-arrow-left"></i> Kembali</a>
</div>
<?= $this->endSection(); ?>