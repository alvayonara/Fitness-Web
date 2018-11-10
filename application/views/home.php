<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Home | FitnessWeb</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <header>
      <nav>
        <ul>
          <li>Hello, <?php echo $_SESSION['email'] ?></li>
          <li><a href="<?php echo site_url('user/home') ?>" class="btnHome">Home</a></li>
          <li><a href="<?php echo site_url('user/schedule') ?>" class="btnSchedule">Schedule</a></li>
          <li><a href="<?php echo site_url('user/statistic') ?>" class="btnStatistic">Statistic</a></li>
          <li><a href="<?php echo site_url('auth/logout') ?>" class="btnLogout">Logout</a></li>
        </ul>
      </nav>
    </header>
  </body>
</html>