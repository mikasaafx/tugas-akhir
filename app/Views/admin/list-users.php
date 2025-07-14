<?= $this->extend('/templates/index'); ?>

<?= $this->section('page-content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Daftar Users</h1>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <table class="table align-middle table-bordered table-striped table-hover">
                      <thead class="border-bottom">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Foto</th>
                          <th scope="col">Username</th>
                          <th scope="col">Email</th>
                          <th scope="col">Role</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php $i = 1; ?>
                        <?php foreach($users as $user) : ?>
                        <tr>
                          <th scope="row" class="align-middle"><?= $i++; ?></th>
                          <td class="align-middle"><img src="<?= base_url(); ?>/img/<?= user()->user_image; ?>"></td>
                          <td class="align-middle"><?= $user->username; ?></td>
                          <td class="align-middle"><?= $user->email; ?></td>
                          <td class="align-middle"><?= $user->name; ?></td>
                          <td class="align-middle"><a class="btn btn-info" href="<?= base_url('admin/detail/' . $user->userid); ?>"><i class="fa-solid fa-circle-info"></i> Detail</a>&nbsp; &nbsp;<a class="btn btn-warning" href="<?= base_url('admin/edit/' . $user->userid); ?>"><i class="fa-solid fa-pencil"></i> Edit</a></td>
                        </tr>
                        <?php endforeach; ?>

                      </tbody>
                    </table>
                    
                </div>
            </div>

    </div>
<?= $this->endSection('page-content'); ?>