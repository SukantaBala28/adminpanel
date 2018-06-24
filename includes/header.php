<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand text-white" href="#">BKT Engineering</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <?php 
        if(isset($_SESSION['userEmail'])) {
          if(!empty($_SESSION['userEmail'])) { ?>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['username']; ?>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>
                <a class="dropdown-item" href="dashboard.php?logout='1'"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
              </div>
            </div>    
          <?php }
          } else { ?>
          <li class="nav-item active">
            <a class="nav-link text-white" href="#">Visit Site <span class="sr-only">(current)</span></a>
          </li>
        <?php }
      ?>
    </ul>
  </div>
</nav>