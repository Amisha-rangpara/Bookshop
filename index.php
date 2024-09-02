<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'css.php'; ?>
    <!-- <link rel="stylesheet" href="style.css"> -->

</head>

<body>
    <?php include 'menu.php'; ?>

    <?php include 'slider.php'; ?>
    <!-- <?php include 'categoury.php'; ?> -->
    <?php
    include 'admin/database/db.php';
    			$sql = "SELECT * FROM products";
			$res = mysqli_query($con, $sql);
            ?>
     <div class="container mt-4">
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($res)) { ?>
            <div class="col-md-3 mb-4">
                <div class="card border border-dark p-2 mb-2 bg-transparent text-bodym">
                    <!-- <img src="admin/<?php echo htmlspecialchars($row['image']); ?>" class=" mt-2 mb-3 card-img-top"
                        alt="Product Image" style="object-fit: cover;" height="100%" width="100%"> -->
                        <img src="admin/<?php echo htmlspecialchars($row['image']); ?>" class="card-img-top mt-2 mb-3" alt="Product Image">

                        <div class="card-body">
                        <h5 class="card-title mb-3"><?php echo htmlspecialchars($row['name']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($row['description']); ?></p>
                        <p class="card-text"><strong>Price:</strong> $<?php echo number_format($row['price'], 2); ?></p>
                        <div class="d-flex justify-content-between">
                            <a href="login.php" class="btn btn-primary">Add to Cart</a>
                            <a href="login.php" class="btn btn-success">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

     

            <?php include 'footer.php'; ?>

            <?php include 'js.php'; ?>

</body>

</html>