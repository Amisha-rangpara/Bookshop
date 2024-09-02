<?php
// Start the session at the beginning of the script
session_start();

include_once('admin/database/db.php');

if (isset($_POST['submit'])) {
    $errorMsg = "";
    $email = $con->real_escape_string($_POST['email']);
    $username = $con->real_escape_string($_POST['username']);
    $password = $con->real_escape_string($_POST['password']);

    if (!empty($username) && !empty($password) && !empty($email)) {
        $sql  = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $_SESSION['ID'] = $row['id'];
            $_SESSION['PRIYORITY'] = $row['priyority'];
            $_SESSION['USERNAME'] = $row['username'];

            // Debugging output
            echo "Priority: " . $_SESSION['PRIYORITY'];
            if (1 == $_SESSION['PRIYORITY']) {
                header("Location:admin/index.php");
                exit();
            } elseif (2 == $_SESSION['PRIYORITY']) {
                header("Location:welcome.php");
                exit();
            }
        } else {
            $errorMsg = "No user found with this username";
            echo $errorMsg;
        }
    } else {
        $errorMsg = "Username, Email, and Password are required";
        echo $errorMsg;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include 'css.php'; ?>
</head>

<body>

    <?php include 'menu.php'; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-5 border border-dark bg-transparent text-body">
                    <div class="card-header text text-center">
                        <h1 class="p-2 mb-2 bg-transparent text-body">Login</h1>
                    </div>
                    <div class="card-body">
                        <?php if (isset($errorMsg)) { echo "<p>$errorMsg</p>"; } ?>
                        <form method="POST" action="" class="">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control my-2 border border-dark p-2 mb-2 bg-transparent text-body"
                                    placeholder="Enter Email" required>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username"
                                    class="form-control my-2 border border-dark p-2 mb-2 bg-transparent text-body" placeholder="Enter Username" required
                                    pattern="[A-Za-z0-9_]{5,20}"
                                    title="Username should be 5-20 characters long and can include letters, numbers, and underscores.">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password"
                                    class="form-control my-2 border border-dark p-2 mb-2 bg-transparent text-body" placeholder="Enter Password" required
                                    pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}"
                                    title="Password must be at least 8 characters long, and include uppercase letters, lowercase letters, numbers, and special characters.">
                            </div>

                            <div class="form-group">
                                <input type="number" id="priyority" name="priyority" value="2"
                                    class="form-control my-2 border border-dark" hidden>
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" name="submit" class="btn btn-primary mt-3 p-2 mb-2 bg-transparent text-body">
                                    Login</button>
                            </div>
                            <div class="mb-2 text-center text-black">
                                <h4>You Have Not Account to <a class="a" href="signup.php"><i
                                            class="bi bi-arrow-right-circle-fill"></i>
                                        Signup</a></h4>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'js.php'; ?>
    <script src="/bookshop/design/js/bootstrap.bundle.js"></script>
    <?php include 'footer.php'; ?>
</body>

</html>
