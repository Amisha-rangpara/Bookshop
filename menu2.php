<nav class="container mt-3 navbar navbar-expand-lg border border-dark rounded" style="background-color:">
    <div class="container-fluid">
        <div class="d-flex  justify-content-center  mt-3">
            <img class="logo" src="design/css/images/logo1.jpg">
        </div>
        <a class="navbar-brand" href="index.php">BOOKSHOP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-fill"></i>
                        Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="About_us.php"><i class="bi bi-people-fill"></i> About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-dark" href="Contact_us.php"><i class="bi bi-telephone-fill"></i> Contact
                        us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="gallery.php" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="bi bi-images"></i>
                        Gallery
                    </a>
                    <ul class="dropdown-menu bg-transparent text-body m-2">
                        <li><a class="dropdown-item bg-transparent text-body m-2" href="#">categoyry</a></li>
                        <li><a class="dropdown-item bg-transparent text-body m-2" href="#">filter</a></li>
                        <!-- <li><hr class="dropdown-divider"></li> -->
                        <li><a class="dropdown-item bg-transparent text-body m-2" href="#">Something else here</a></li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link  text-dark " href="feedback.php">feedback</a>
                </li>

            </ul>
            <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success mx-2" type="submit">Search</button>
            </form> -->
            <h5> <i class="bi bi-suit-heart-fill m-3"></i></h5>

            <h5> <i class="bi bi-cart-plus-fill"></i></h5>



            <form class="d-flex">

                <!-- <h5><?php echo $login_session; ?></h5> -->
                <span class="btn m-3"><a href="login.php"><span class=" btn btn-success me-3"> <i
                                class="bi bi-box-arrow-right"></i>
                            Logout</span></a>
            </form>

            <!-- <form class="d-flex">
                <a class="nav-link text-dark" href="logout.php">
                    <span class="btn"><span class=" btn btn-success"> <i class="bi bi-box-arrow-right"></i> Logout</span></a>
            </form> -->

        </div>
    </div>
</nav>