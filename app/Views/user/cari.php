<?= $this->extend('/templates/index'); ?>

<?= $this->section('page-content'); ?>

    <div class="container">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Ta'aruf Online</h1>
              <div class="row gy-5">
                    
                    <?php if($users): ?>
                    <?php foreach($users as $user) : ?>
                    <div class="col-md-6">
                        <div class="card" style="max-width: 500px;">
                              <div class="row">
                                <div class="col-md-3">
                                  <img src="<?= base_url('/img/' . user()->user_image); ?>" class="img-fluid rounded-start mt-5 ps-3 align-middle" alt="<?= user()->username; ?>">
                                </div>
                                <div class="col">
                                  <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <h5><?= $user->username; ?></h5>
                                        </li>
                                        
                                        <?php if( $user->fullname ) : ?>
                                        <li class="list-group-item"><?= $user->fullname; ?></li>
                                        <?php endif; ?>


                                        <li class="list-group-item"></li>
                                    </ul>
                                        <div class="float-end mb-4">    
                                        <a href="#" class="btn btn-info">Lihat CV</a>
                                        <button class="btn btn-danger"><i class="fa-regular fa-heart"></i></button>

                                        </div>
                                  </div>
                                </div>
                              </div>
                            </div>                         
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                </div>

    </div>
<?= $this->endSection('page-content'); ?>