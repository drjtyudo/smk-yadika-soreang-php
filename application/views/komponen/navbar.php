<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <img src="<?= base_url();?>Assets/img/logo/logo yadika.png" alt="" />
      <a class="navbar-brand fw-bold" href="#"><?= $title ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url();?>home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url();?>home/profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kelulusan</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Jurusan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">RPL</a></li>
            <li><a class="dropdown-item" href="#">Perhotelan</a></li>
            <li><a class="dropdown-item" href="#">Akutansi</a></li>
          </ul>
        </li>
          <li class="nav-item">
            
            <?php if($this->session->userdata('email')){?>
              <a href="<?=base_url()?>Auth/logout"><button type="button" class="btn btn-primary">Logout</button></a>
              <?php }else{ ?>
                <a href="<?=base_url()?>Ppdb"><button type="button" class="btn btn-primary">PPDB</button></a>
                <a href="<?=base_url()?>Auth"><button type="button" class="btn btn-primary">Login</button></a>
                <?php } ?> 
          </li>
        </ul>
      </div>
    </div>
  </nav>