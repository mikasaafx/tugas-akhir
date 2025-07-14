        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar fixed-top">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mb-5" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-solid fa-hand-holding-heart" style="color: lightpink;"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Lovestreet</div>
            </a>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Nav Item - Home -->
            
            <!-- akan menampilkan menu khusus user -->
            <?php if(in_groups('user')) : ?>

            <div class="sidebar-heading">
                Main
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/beranda') ?>">
                    <i class="fa-solid fa-house"></i>
                    <span class="pt-1">Home</span></a>
            </li>
            <!-- <hr class="sidebar-divider"> -->

            <?php endif; ?>


            <!-- Nav Item - Home -->
            
            <!-- akan menampilkan menu khusus admin -->
            
            <?php if(in_groups('admin')) : ?>

            <div class="sidebar-heading">
                Main menu
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                    <i class="fa-solid fa-house"></i>
                    <span class="pt-1">Dashboard</span></a>
            </li>


            <!-- Heading -->
            <div class="sidebar-heading mt-2">
                Users Management
            </div>


            <!-- Nav Item - Home -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/list-users'); ?>">
                    <i class="fa-solid fa-users"></i>
                    <span>List Users</span></a>
            </li>

            <!-- <hr class="sidebar-divider"> -->

            <?php endif; ?>


            <!-- Divider -->
            <!-- <hr class="sidebar-divider my-0"> -->
            

            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <div class="sidebar-heading mt-2">
                User Profile
            </div>


            <!-- Nav Item - My Profil -->
            <li class="nav-item nav-item">
                <a class="nav-link" href="<?= base_url('/user'); ?>">
                    <i class="fa-solid fa-user"></i>
                    <span>My Profile</span></a>
            </li>
            
            <!-- Nav Item - Edit Profil -->
            <li class="nav-item nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-user-pen"></i>
                    <span>Edit Profil</span></a>
            </li>


            <!-- Heading -->
            <div class="sidebar-heading mt-2">
                Sistem
            </div>


            <!-- Nav Item - My Profil -->
            <li class="nav-item nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-message"></i>
                    <span>Notifikasi</span></a>
            </li>
            
            <!-- Nav Item - Edit Profil -->
            <li class="nav-item nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-gear"></i>
                    <span>Pengaturan</span></a>
            </li>



            <!-- Nav Item - My Profil -->
            <!-- <li class="nav-item nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fa-solid fa-user"></i>
                    <span>My Profil</span></a>
            </li> -->


            <!-- Divider -->
            <!-- <hr class="sidebar-divider mt-4"> -->

            <!-- Nav Item - Logout -->
            <li class="nav-item mt-5">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>