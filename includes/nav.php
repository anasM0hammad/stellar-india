 <ul class="nav">  
    <!-- <li class="nav-item float-right">
        <a class="nav-link d-none d-sm-block" href="#"><i class="fab fa-facebook-f"></i></a>
    </li> -->
    <!-- <li class="nav-item">
        <a class="nav-link d-none d-sm-block" href="#"><i class="fab fa-instagram"></i></a>
    </li> -->
    <!-- <li class="nav-item">
        <a class="nav-link d-none d-sm-block" href="#"><i class="fab fa-linkedin-in"></i></a>
    </li> -->
    <li class="nav-item">
        <a class="nav-link d-none d-sm-block" href="#"><i class="fas fa-envelope"></i><small> info@stellarindia.in</small></a>
    </li>

    <ul class="nav justify-content-end container">
        <li class="nav-link"><i class="fas fa-phone"></i> <small>Contact : +91 9560268286</small></li>
    </ul>    
</ul>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <h1><a class="navbar-brand" href="#" style="color: #FF7F00; font-family: 'Shrikhand', cursive;">
    <b><img src="img/logo.jpg" height="35" width="35" style="border-radius:50% ; margin-right: 5px"> 
    STELLER INDIA
  </b></a></h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto justify-content-end container">
      <li class="nav-item  <?php if($_SERVER['SCRIPT_NAME'] == "/stellar/index.php") echo "active" ?>">
        <a class="nav-link" href="./index.php"><i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item <?php if($_SERVER['SCRIPT_NAME'] == "/stellar/about.php") echo "active" ?>">
        <a class="nav-link" href="about.php"><i class="fas fa-users"></i> About us</a>
      </li>
      <li class="nav-item <?php if($_SERVER['SCRIPT_NAME'] == "/stellar/services.php") echo "active" ?>">
        <a class="nav-link" href="services.php"><i class="fas fa-concierge-bell"></i> Services</a>
      </li>
      <li class="nav-item <?php if($_SERVER['SCRIPT_NAME'] == "/stellar/projects.php") echo "active" ?>">
        <a class="nav-link" href="projects.php"><i class="fas fa-cog"></i> Projects</a>
      </li>
      <li class="nav-item <?php if($_SERVER['SCRIPT_NAME'] == "/stellar/organisation.php") echo "active" ?>">
        <a class="nav-link" href="organisation.php"><i class="fas fa-sitemap"></i> Organization</a>
      </li>
      <li class="nav-item <?php if($_SERVER['SCRIPT_NAME'] == "/stellar/contact.php") echo "active" ?>">
        <a class="nav-link" href="contact.php"><i class="fas fa-phone"></i> Contact</a>
      </li>
    </ul>
  </div>
</nav> 


