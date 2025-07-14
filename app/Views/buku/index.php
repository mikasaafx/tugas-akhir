<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
	<div class="row">
		<div class="col">
			<h1 style="margin-top: 5rem;">Daftar Buku</h1>
			<div class="d-flex justify-content-end mb-2">
			<a href="buku/create" class="btn btn-success ">Tambah Data</a>
			</div>
			<div>
				<?php if(session()->getFlashdata('pesan')) : ?>
				<div class="alert alert-success" role="alert">
				  <?= session()->getFlashdata('pesan'); ?>
				</div>
				<?php endif; ?>
			</div>

			<table class="table align-middle table-striped table-hover">
			  <thead class="table-bordered">
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Sampul</th>
			      <th scope="col">Judul</th>
			      <th scope="col">Aksi</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $i = 1; ?>
			  	<?php foreach($buku as $b):  ?>
			    <tr>
			      <th scope="row"><?= $i++; ?></th>
			      <td><img src="/img/<?= $b['sampul']; ?>" width="65"></td>
			      <td><?= $b['judul']; ?></td>
			      <td><a href="/buku/<?= $b['slug']; ?>" class="btn btn-primary btn-sm"><i class="bi bi-info-circle"></i> Detail</a></td>
			    </tr>
			<?php endforeach; ?>
			  </tbody>
			</table>
	</div>
</div>

<?= $this->endSection(); ?>