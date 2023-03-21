<div class="container">

<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row" style="justify-content: center;align-items: center;">
    <div class="col-lg-7">
      <div class="p-5">
        <div class="text-center">
          <h1 class="h4 -900 mb-4" style="color: white;">Register Admin</h1>
          <br>
          <center>
          </center>

        </div>

        <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>') ?>

        <?= $this->session->flashdata('msg'); ?>

        <?= form_open('Auth/RegisterController', 'class="user"') ?>
        <div class="form-group">
          <input type="text" class="form-control form-control-user" id="nik" placeholder="NIK" name="nik" value="<?= set_value('nik') ?>">
        </div>
        <div class="form-group">
          <input type="text" class="form-control form-control-user" id="nama" placeholder="Nama" name="nama" value="<?= set_value('nama') ?>">
        </div>
        <div class="form-group">
          <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username') ?>">
        </div>
        <div class="form-group">
          <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
          <input type="text" class="form-control form-control-user" id="telp" placeholder="Telp" name="telp">
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
        </form>
        <hr style="background: white;">
        <div class="text-center">
          <a class="small" href="<?= base_url('Admin/LoginAdmin') ?>">Sudah punya akun? Login!</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</div>