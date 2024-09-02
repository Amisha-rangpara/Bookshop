<?php
$year = date("Y");
?>

<footer class="container-fluid align-items-center footer ms-3 mb-9">
    <div class="row">
        <div class="col-md-6 d-flex justify-content-start">
            <a href="About_us.php" class="footer-link">About Us</a>
            <a href="Contact_us.php" class="footer-link ms-3">Contact</a>
            <a href="privacy.php" class="footer-link ms-3">Privacy Policy</a>
        </div>
        <div class="col-md-6 d-flex justify-content-end align-items-center">
            <p class="mb-0">&copy; <?php echo $year; ?> All Rights Reserved.</p>
        </div>
    </div>
</footer>
