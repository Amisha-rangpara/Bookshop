<?php
require 'admin/database/db.php';
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirm_password'];
    $mobile = $_POST['mobileno'];
    $address = $_POST['address'];
    $priyority=$_POST['priyority'];
    
    $sql="INSERT INTO `users`(`fname`, `lname`, `email`, `username`, `password`, `confirm_password`, `mobile`, `address`, `priyority`) VALUES ('$fname','$lname','$email','$username','$password','$confirmpassword','$mobile','$address','$priyority')";
    $res=mysqli_query($con,$sql);
    if($res){
        header("location:login.php");
    }else{
        echo 'error';
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <?php include 'css.php'; ?>
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-3 border border-dark p-2 mb-2 bg-transparent text-body">
                    <div class="card-header text text-center">
                        <h1 class="p-2 mb-2 bg-transparent text-body">Signup</h1>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="fname" class="form-control my-2 border border-dark p-2 mb-2 bg-transparent text-body"
                                    placeholder="Enter First Name" required pattern="[A-Za-z\-']+"
                                    title="First name should only contain letters, hyphens, and apostrophes.">
                            </div>

                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="lname" class="form-control my-2 border border-dark p-2 mb-2 bg-transparent text-body"
                                    placeholder="Enter Last Name" required pattern="[A-Za-z\-']+"
                                    title="Last name should only contain letters, hyphens, and apostrophes.">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control my-2 border border-dark p-2 mb-2 bg-transparent text-body"
                                    placeholder="Enter Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"
                                    title="Please enter a valid email address (e.g., example@domain.com)." required>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username"
                                    class="form-control my-2 border border-dark p-2 mb-2 bg-transparent text-body" placeholder="Enter Username"
                                    pattern="[A-Za-z0-9_]{5,20}"
                                    title="Username should be 5-20 characters long and can include letters, numbers, and underscores."
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password"
                                    class="form-control my-2 border border-dark p-2 mb-2 bg-transparent text-body" placeholder="Enter Password"
                                    pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}"
                                    title="Password must be at least 8 characters long, and include uppercase letters, lowercase letters, numbers, and special characters."
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" id="confirm_password" name="confirm_password"
                                    class="form-control my-2 border border-dark p-2 mb-2 bg-transparent text-body" placeholder="Confirm Password"
                                    pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}"
                                    title="Password must be at least 8 characters long, and include uppercase letters, lowercase letters, numbers, and special characters."
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="mobileno">Mobile No</label>
                                <input type="tel" id="mobileno" name="mobileno"
                                    class="form-control my-2 border border-dark p-2 mb-2 bg-transparent text-body" placeholder="Enter Mobile Number"
                                    pattern="\+?\d{10,15}"
                                    title="Mobile number must be between 10 and 15 digits long, optionally preceded by a '+' sign."
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" class="form-control my-2 border border-dark w-100 rounded-corners p-2 mb-2 bg-transparent text-body"
                                    placeholder="Enter Address"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="number" id="priyority" name="priyority" value="2"
                                    class="form-control my-2 border border-dark" hidden>

                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" name="submit" class="btn btn-primary text text-light mt-3">Submit</button>
                            </div>
                            <div class="mb-2 text-center text-black">
                                <h4>You Have Alrady Account to <a class="a" href="login.php"><i
                                            class="bi bi-arrow-right-circle-fill"></i>
                                        Login</a></h4>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'js.php'; ?>

    <<script src="/bookshop/design/js/bootstrap.bundle.js"></script> 

     <?php include 'footer.php'; ?>
</body>

</html>