<?= $this->extend('layout/template_dashb'); ?>


<?= $this->section('content'); ?>

    <div class="wrapper">
        <aside id="sidebar" class="shadow expand">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="bi bi-grid-1x2"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Lovestreet</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-person"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-list-nested"></i>
                        <span>Task</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-shield-check"></i>
                        <span>Auth</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Login</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Register</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="bi bi-grid-1x2"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Two Links
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-menu-up"></i>
                        <span>Notification</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-gear"></i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link link-hover">
                    <i class="bi bi-box-arrow-left"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">
          <nav class="navbar navbar-expand-lg shadow-sm" id="nav-user">
              <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse d-flex justify-content-end me-5" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Hallo, Nama kamu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-gear"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <div class="container">
              <div class="row border mt-4">
                <div class="col-6 border">
                  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="https://images.pexels.com/photos/1374295/pexels-photo-1374295.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="https://images.pexels.com/photos/7785650/pexels-photo-7785650.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="https://images.pexels.com/photos/4749842/pexels-photo-4749842.jpeg" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                </div>

                <div class="col mt-4 ms-3">
                  <button type="button" class="btn btn-outline-dark px-5 py-5 shadow fw-bold" style="border: none;">Menu 1</button>
                  <div class="col mt-4 ms-1">
                  <button type="button" class="btn btn-outline-dark px-5 py-5 shadow fw-bold" style="border: none;">Menu 3</button>
                </div>
                </div>
                <div class="col m-4 ms-3">
                  <button type="button" class="btn btn-outline-dark px-5 py-5 shadow fw-bold" style="border: none;">Menu 2</button>
                <div class="col mt-4 ms-1">
                <button type="button" class="btn btn-outline-dark px-5 py-5 shadow fw-bold" style="border: none;">Menu 4</button>
                </div>
                </div>
              </div>
            </div>

            <div class="container mt-4 d-flex justify-content-around">
                  <div class="row border px-5">
                    <div class="col">
                      <button type="button" class="btn btn-outline-dark px-5 py-5 shadow fw-bold text-center" style="border: none;">Minta Rekomendasi</button>
                    </div>
                    <div class="col">
                      <button type="button" class="btn btn-outline-dark px-5 py-5 shadow fw-bold text-center" style="border: none;">Mencari Pasangan</button>
                    </div>
                    <div class="col">
                      <button type="button" class="btn btn-outline-dark px-5 py-5 shadow fw-bold text-center" style="border: none;">Mencari Pasangan</button>
                    </div>
                    <div class="col">
                      <button type="button" class="btn btn-outline-dark px-5 py-5 shadow fw-bold text-center" style="border: none;">Mencari Pasangan</button>
                    </div>
                  </div>

                  <!-- <div class="text-center" style="margin: 0 auto;">
                      <h1 style="margin-top: 4em;">
                          Beranda User
                      </h1>
                  </div> -->
              </div>
          </div>
              
      </div>

<?= $this->endSection('content'); ?>