<?= $this->extend('/templates/index'); ?>

<?= $this->section('page-content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Detail User</h1>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="card mb-3" style="max-width: 540px;">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="<?= base_url('/img/' . $user->user_image); ?>" class="img-fluid rounded-start pt-3 ps-3" alt="<?= $user->username; ?>">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h5><?= $user->username; ?></h5>
                              </li>
                              
                                    <?php if( $user->fullname ) : ?>
                                    <li class="list-group-item"><?= $user->fullname; ?></li>
                                    <?php endif; ?>


                                    <li class="list-group-item"><?= $user->email; ?></li>
                                    <li class="list-group-item">
                                        <span class="badge text-bg-<?= ($user->name == 'admin') ? 'primary' : 'warning'; ?> px-2"><?= $user->name; ?></span>

                                    </li>
                                  </ul>
                                  <div class="card-body">
                                    <a href="/admin/list-users" class="card-link"><i class="fa-solid fa-chevron-left"></i> kembali ke list users</a>
                                    <!-- <a href="#" class="card-link">Another link</a> -->
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                                            
                </div>
            </div>

    </div>
<?= $this->endSection('page-content'); ?>