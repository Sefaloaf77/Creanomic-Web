<div id="loading"></div>
<?php $now = strval(basename($_SERVER['PHP_SELF'], '.php')); ?>
<nav class="navbar navbar-expand-lg navbar-dark shadow">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href=".">
      <img src="./assets/images/logonav.png" alt="logo" class="me-3" height="56px" width="56px">
      <h3 class="my-auto">CREANOMIC</h3>
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link home<?= strcmp($now, 'index') == 0 ? ' active' : '' ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link thefest<?= strcmp($now, 'virtual-concert') == 0 ? ' active' : '' ?>" href="virtual-concert.php">The Fest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link webinar<?= strcmp($now, 'webinar') == 0 ? ' active' : '' ?>" href="webinar.php">Webinar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link competition<?= strcmp($now, 'competition') == 0 ? ' active' : '' ?>" href="competition.php">Competition</a>
        </li>
        <li class="nav-item">
          <a class="nav-link merch<?= strcmp($now, 'merchandise') == 0 ? ' active' : '' ?>" href="merchandise.php">Merchandise</a>
        </li>
      </ul>
    </div>
  </div>
</nav>