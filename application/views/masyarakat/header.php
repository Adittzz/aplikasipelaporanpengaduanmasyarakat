<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengaduan Masyarakat</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/background.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
   body {
    font-family: Montserrat;
  }
</style>
  
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-lg bg-primary text-white" id="accordionTopbar">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">Pengaduan Masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php
        if ($this->session->login_status=='ok'){
            echo ' <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="'.base_url('Masyarakat/C_MasyarakatController/tampil_aduan').'">Pengaduan</a>
          </li>
            <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="'.base_url('Masyarakat/C_MasyarakatController/logout') .'">Logout</a>
          </li>';
        }else{
            echo '<li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="'.base_url('Masyarakat/C_MasyarakatController/register') .'">Register</a>
          </li>';
            echo '<li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="'.base_url('Masyarakat/C_MasyarakatController/login') .'">Login</a>
          </li>';
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-12 pt-5">
        