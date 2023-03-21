<?= validation_errors() ?>
<form class="row g-3 pt-5" style="width: 35%;margin-left: 30%;" method="POST" action="<?= base_url('Masyarakat/C_MasyarakatController/login') ?>">
  <div class="col-md-12">
    <label for="username" class="form-label text-white">Username</label>
    <input type="text" class="form-control" id="username" name="username" style="border-radius: 30px;" required>
  </div>
  <div class="col-md-12">
    <label for="password" class="form-label text-white">Password</label>
    <input type="password" class="form-control" id="password" name="password" style="border-radius: 30px;" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" style="width: 100%;border-radius: 30px;margin-top: 5px;">Login</button>
  </div>
</form>