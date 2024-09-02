 <?php
   include('session.php');
?>
 <html>

 <head>
     <title>Welcome </title>
     <?php include 'css.php'; ?>
     <!-- <link rel="stylesheet" href="style1.css">  -->

 </head>

 <body>

     <?php include 'menu2.php'; ?>


<div class="border-dark">
     <div class="text text-center m-3">
         <h3 class="text text-center ">India Top Most Readers</h3>
     </div>
</div>



     <?php
    include 'admin/database/db.php';
    			$sql = "SELECT * FROM products";
			$res = mysqli_query($con, $sql);
            ?>
     <div class="container mt-4">
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($res)) { ?>
            <div class="col-md-3 mb-4">
                <div class="card border border-dark p-2 mb-2 bg-transparent text-body">
                    <img src="admin/<?php echo htmlspecialchars($row['image']); ?>" class=" mt-2 mb-3 card-img-top"
                        alt="Product Image" style="object-fit: cover;" height="100%" width="100%">
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

     


     <?php include 'js.php'; ?>
     <?php include 'footer.php'; ?>



 </body>

 </html>