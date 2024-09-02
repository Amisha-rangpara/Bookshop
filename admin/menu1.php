<?php 
//include '../admin/error.php';
session_start();
if(1==$_SESSION['ID']){
?>

<nav class="navbar navbar-expand-lg  m-3 bg bg-secondary border-bottom border-body text text-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Bookshop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-door-fill"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user.php">user</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gellery.php">gellary</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="feedback.php">Feedback</a>
        </li> 
        <!-- <li class="nav-item">
          <a class="nav-link" href="product.php">product</a>
        </li> 
         -->
      </ul>
      
        <a class="icon-link icon-link-hover link-info link-underline-info link-underline-opacity-25" href="login.php">
            <ion-icon name="log-in-outline"></ion-icon>
       
            <h6> Login</h6>
              <svg class="bi" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
            </a>
            <form class="d-flex">
			<a class="nav-link text-dark" href="logout.php">Hi, <?php echo ucwords($_SESSION['username']); ?> <span class="btn text-danger">Logout</span></a>
			</form>
    </a>  


    
    </div>
  </div>

</nav><?php }?>