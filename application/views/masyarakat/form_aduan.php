<?= validation_errors() ?>

<?php
  if(!empty($error)) {
    echo $error;
  }
?>  



<form class="row g-3 pt-5" style="width: 35%;margin-left: 30%;" method="POST" action="<?= base_url('Masyarakat/C_MasyarakatController/simpan_aduan') ?>" enctype="multipart/form-data">
    
  <input type="hidden" value="<?= $this->session->nik ?>" id="nik" name="nik">

  <div class="col-md-12">
    <label for="isilaporan" class="form-label text-white">Isi Laporan</label>
    <textarea class="form-control" id="isilaporan" name="isilaporan" style="border-radius: 0.5rem;" required></textarea>
  </div>
  <div class="col-md-12">
    <label for="foto" class="form-label text-white">Foto</label>
    <input type="file" class="form-control" id="foto" name="foto" style="border-radius: 0.5rem;" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" style="width: 100%;border-radius: 0.5rem;margin-top: 5px;">Tambah Pengaduan</button>
  </div>
</form>