<?php
// Start the session
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookshop";

$con = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Handle form submission for adding a new product
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $file=$_FILES['image']['name'];
    $t_name=$_FILES['image']['tmp_name'];
    $folder="./design/image/".$file;

    move_uploaded_file($t_name,$folder);
    // Assuming the image pat=h is provided as a URL or file path

    if (!empty($name) && !empty($price)) {
        // Prepare SQL statement to insert a new product
        
        $sql="INSERT INTO products (`name`, `description`, `price`, `image`) VALUES ('$name','$description','$price','$folder')";
        if (mysqli_query($con,$sql)) {
            $message = "Product added successfully.";
        } else {
            $message = "Error: " . $stmt->error;
        }

    } else {
        $message = "Please fill in all required fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <?php include 'css.php'; ?>
</head>

<body>

    <h3 class="text text-center">Product Management</h3>


    <?php if (isset($message)) { echo "<p>$message</p>"; } ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-5 border border-dark">
                    <div class="card-header text text-center">
                        <h1 class="bg-info-subtle">product add</h1>
                    </div>
                    <div class="card-body bg-info-subtle">
                        <form method="POST" action="" class="m-4" enctype="multipart/form-data">
                            <div class="form-group ">
                                <label for="name">name</label>
                                <input type="tex" id="name" name="name" class="form-control my-2 border border-dark"
                                    placeholder="" required>
                            </div>

                            <div class="form-group">
                                <label for="description">description</label>
                                <input type="text" id="description" name="description"
                                    class="form-control my-2 border border-dark" placeholder="" required>
                            </div>

                            <div class="form-group">
                                <label for="price">price</label>
                                <input type="number" id="price" name="price"
                                    class="form-control my-2 border border-dark" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="image">image</label>
                                <input type="file" id="image" name="image" class="form-control my-2 border border-dark"
                                    placeholder="" required>
                            </div>

                            <div class="mb-3 text-center">
                                <button type="submit" name="submit" class="btn btn-primary mt-3">
                                    add product</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Display existing products -->
    <h3>Existing Products</h3>

    <?php include 'js.php'; ?>
</body>

</html>