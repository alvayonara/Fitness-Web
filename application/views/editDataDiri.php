<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/homepage_style.css'); ?>">

    <title>Edit Profile</title>
  </head>

  <body>

    <div class="wrapper">

        <!-- Navigation -->
        <nav id="sidebar">


            <div class="sidebar-header mt-4 mb-5 d-flex justify-content-center">
                <img src="<?php echo base_url('image/icon.png');?>" width="36" height="36" alt="">
                <h4 class="ml-2 my-auto">Fitness Web</h4>
            </div>

            <div class="profile  d-flex justify-content-center">
                <div class="align-self-center">
                      <p id='profile-name'><?php echo $this->session->userdata('nama_depan')." ".$this->session->userdata('nama_belakang')?></p>
                </div>
            </div>
            <div class="ml-4 mt-5 navBtn">
                <ul class="list-unstyled components">
                    <li>
                        <a href="<?php echo site_url('user_controller/home') ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('user_controller/profile') ?>">Profile</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('user_controller/schedule') ?>">Schedule</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('user_controller/statistic') ?>">Statistic</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('user_controller/logout') ?>">Logout</a>
                    </li>
                </ul>
            </div>

        </nav>

        <!-- Content -->
        <div class="contentContainer">
          <fieldset>
              <legend>Edit Profile</legend>
              <div class="form-group row">
                <label for="staticName" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" readonly="" class="form-control-plaintext" id="staticName" value="<?php echo $this->session->userdata('nama_depan')." ".$this->session->userdata('nama_belakang')?>">
                </div>
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" readonly="" class="form-control-plaintext" id="email" name="email" value="<?php echo $this->session->userdata('email')?>">
                </div>
              </div>
              <?php foreach($editdatadiri as $rows): ?>
              <div class="form-group">
                <form method="post">
                <label for="lb_umur">Umur</label>
                <input type="text" class="form-control form-control-lg flat-input" id="umur" name="umur" placeholder="Umur" value="<?php echo $rows->umur ?>">
                <?php echo form_error('umur'); ?>
              </div>
              <div class="form-group">
                <label for="lb_jkr">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $rows->jenis_kelamin ?>">
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
                <?php echo form_error('jenis_kelamin'); ?>
              </div>
              <div class="form-group">
                <label for="lb_bb">Berat Badan (kg)</label>
                <input type="text" class="form-control form-control-lg flat-input" name="berat_badan" id="berat_badan" placeholder="Berat Badan" value="<?php echo $rows->berat_badan ?>">
                <?php echo form_error('berat_badan'); ?>
              </div>
              <div class="form-group">
                <label for="lb_tb">Tinggi Badan (cm)</label>
                <input type="text" class="form-control form-control-lg flat-input" name="tinggi_badan" id="tinggi_badan" placeholder="Tinggi Badan" value="<?php echo $rows->tinggi_badan ?>">
                <?php echo form_error('tinggi_badan'); ?>
              </div>
              </fieldset>
              <button type="submit" name="editdatadiri" value="editdatadiri" class="btn btn-primary">Save</button>
              <?php endforeach; ?>
            </form>
              <button name="cancel" value="cancel" class="btn btn-danger" onClick="window.location.href='<?php echo base_url('index.php/user_controller/profile');?>'">Cancel</button>
            </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
