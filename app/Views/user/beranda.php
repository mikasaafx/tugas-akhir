<?= $this->extend('/templates/index'); ?>

<?= $this->section('page-content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Beranda</h1>


        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 stretched-link">
                                    Permintaan Ta'aruf</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">40.000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-bell fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Pengajuan Ta'aruf</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">21500</div>
                            </div>
                            <div class="col-auto">
                                
                                <i class="fa-solid fa-user-clock fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">suka profil
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">100</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-thumbs-up fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Inbox</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-message fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->


        <hr class="mb-5 mt-5">
        <!-- <div class="row d-flex flex-row justify-content-center">

            <div class="col-sm-3">
                <div class="card text-center text-gray-800 mb-3 py-5 px-5 shadow-sm fw-bold" id="card-menu">
                      <div class="card-body">
                        <a href="" class="stretched-link" style="text-decoration: none;">Rekomendasi</a>
                      </div>
                    </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-center text-gray-800 mb-3 py-5 px-5 shadow-sm fw-bold" id="card-menu">
                      <div class="card-body">
                        <a href="" class="stretched-link" style="text-decoration: none;">Ta'aruf Online</a>
                      </div>
                    </div>
            </div>
            
            <div class="col-sm-3">
                <div class="card text-center text-gray-800 mb-3 py-5 px-5 shadow-sm fw-bold" id="card-menu">
                      <div class="card-body">
                        <a href="" class="stretched-link" style="text-decoration: none;">Riwayat</a>
                      </div>
                    </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-center text-gray-800 mb-3 py-5 px-5 shadow-sm fw-bold" id="card-menu">
                      <div class="card-body">
                        <a href="" class="stretched-link" style="text-decoration: none;">Pengaturan</a>
                      </div>
                    </div>
            </div>
        </div> -->


        <div class="container my-5">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            
            <!-- Card 1 -->
            <div class="col">
              <div class="card h-100 text-gray-800 shadow-sm text-center">
                <div class="card-body" id="card-body">
                  <a href="#" class="stretched-link text-dark text-decoration-none fw-bold">Rekomendasi</a>
                </div>
              </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col">
              <div class="card h-100 text-gray-800 shadow-sm text-center">
                <div class="card-body" id="card-body">
                  <a href="<?= base_url('user/cari') ?>" class="stretched-link text-dark text-decoration-none fw-bold">Mencari Pasangan</a>
                </div>
              </div>
            </div>
            
            <!-- Card 3 -->
            <div class="col">
              <div class="card h-100 text-gray-800 shadow-sm text-center">
                <div class="card-body" id="card-body">
                  <a href="#" class="stretched-link text-dark text-decoration-none fw-bold">Riwayat</a>
                </div>
              </div>
            </div>
            
            <!-- Card 4 -->
            <div class="col">
              <div class="card h-100 text-gray-800 shadow-sm text-center">
                <div class="card-body" id="card-body">
                  <a href="#" class="stretched-link text-dark text-decoration-none fw-bold">Pengaturan</a>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Content Row -->

    </div>
<?= $this->endSection('page-content'); ?>