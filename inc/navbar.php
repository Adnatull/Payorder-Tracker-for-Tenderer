



<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1">J Deluxe Channel Ltd.</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php if ($data->logged_in): ?>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <?php if ($data->role == "admin"): ?>
            <a class="nav-link" href="index.php?create_user='1'"> Create User <span class="sr-only">(current)</span></a>

          <?php endif ?>
        </li>
      </ul>
    
        <ul class="navbar-nav  my-2 my-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="index.php?logout='1'">Logout<span class="sr-only">(current)</span></a>
        </li>      
        </ul>
    <?php endif ?>

    
  </div>
</nav>