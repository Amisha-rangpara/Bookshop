<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>

    <?php include 'css.php';?>
</head>

<body>
    <?php include 'menu2.php';?>


    <div class="p-2  m-4 mb-2 bg-transparent text-body">
        <div class="">
            <div class="col-md-6 offset-md-3 p-2 mb-2 bg-transparent text-body">
                <div class="card mb-1 p-2 mb-2 bg-transparent text-body">
                    <div class="card-header text text-dark text-center border border-dark p-2 mb-2 bg-transparent text-body">
                        <h3>Feedback</h3>
                    </div>

                    <div class="card-body text text-dark border border-dark p-2 mb-2 bg-transparent text-body">
                        <form method="post" action="" class="">
                            <div class="form-group">
                                <label for="name" class="mb-2">Name</label>
                                <input type="text"
                                    class="form-control mb-2 border border-dark p-2 mb-2 bg-transparent text-body"
                                    id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="mb-2">Email</label>
                                <input type="email"
                                    class="form-control mb-2 border border-dark p-2 mb-2 bg-transparent text-body"
                                    id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="message" class="mb-2">Message</label>
                                <textarea class="form-control mb-2 border border-dark p-2 mb-2 bg-transparent text-body"
                                    id="message" name="message" rows="5" required></textarea>
                                <div class="text-center mt-4">
                                    <button type="submit" name="feedback"
                                        class="btn btn-primary my-2 p-2 mb-1 bg-transparent text-body">Feedback</button>
                                </div>
                                <!-- </div>
                            <button type="submit" class="btn btn-center m-3 border border-dark btn btn-primary p-2 mb-2 bg-transparent text-body">Submit</button>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'js.php';?>
    <?php include 'footer.php'; ?>
</body>

</html>