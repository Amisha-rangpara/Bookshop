<?php
$year = date("Y");
?>

<footer class="container-fluid align-items-center footer ms-3 mb-9 mt-3 p-3 p-2 mb-2 bg-transparent text-body">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-start">
                <a href="About_us.php" class="footer-link text text-dark"><i class="bi bi-people-fill"></i> About Us</a>

                <a href="Contact_us.php" class="footer-link ms-3 text text-dark"><i class="bi bi-telephone-fill"></i> Contact</a>
                <a href="privacy.php" class="footer-link ms-3 text text-dark"> <i class="bi bi-shield-lock-fill"></i> Privacy
                    Policy</a>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
                <p class="mb-0 mx-4 text text-dark">&copy; <?php echo $year; ?>All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>