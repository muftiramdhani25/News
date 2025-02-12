<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="<?php echo base_url() ?>">
    <?php echo $this->session->userdata('is_login') ? 'Administrator' : 'News' ?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">

    <?php if(!$this->session->userdata('is_login')) : ?>

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>index.php/home/about">About</a>  
        <!-- <a class="nav-link" href="<?= base_url() ?>index.php/home/about">About</a>   -->
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <?php else : ?>
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url() ?>index.php/administrator ">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>index.php/administrator/news">Input News</a>  
        <!-- <a class="nav-link" href="<?= base_url() ?>index.php/home/about">About</a>   -->
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url() ?>index.php/auth/logout">Logout</a> 
      </li>
    </ul>
    <?php endif ?>


    <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>