 <html>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Contact_Us</title>
     <?php include 'css.php'; ?>

 </head>

 <?php include 'menu2.php'; ?>
 <div class="">
     <div class="row justify-content-center mt-4 m-2 mx-4">
         <div class="col-md-8 col-lg-6">
             <div class="card border-dark p-2 mb-2 bg-transparent text-body">
                 <div class="card-header text text-dark text-center border border-dark p-2 mb-2 bg-transparent text-body">
                     <h2>Contact Us</h2>
                 </div>
                 <div class="card-body text text-dark border border-dark bg-transparent text-body">
                     <div class="card-body">
                         <form method="POST" action="contact_process.php">
                             <div class="form-group m-2">
                                 <label for="name">Name</label>
                                 <input type="text" id="name" name="name"
                                     class="form-control my-2 border-dark p-2 mb-1 bg-transparent text-body"
                                     placeholder="Enter Name" required pattern="[A-Za-z0-9_]{5,20}"
                                     title="Username should be 5-20 characters long and can include letters, numbers, and underscores.">
                             </div>
                             <div class="form-group m-2">
                                 <label for="mobileno">Mobile No</label>
                                 <input type="tel" id="mobileno" name="mobileno"
                                     class="form-control my-2 border-dark p-2 mb-1 bg-transparent text-body"
                                     placeholder="Enter Mobile Number" required pattern="\+?\d{10,15}"
                                     title="Mobile number must be between 10 and 15 digits long, optionally preceded by a '+' sign.">
                             </div>
                             <div class="form-group m-2">
                                 <label for="address">Address</label>
                                 <textarea name="address" id="address"
                                     class="form-control my-2 border-dark rounded-corners p-2 mb-1 bg-transparent text-body"
                                     placeholder="Enter Address"></textarea>
                             </div>
                             <div class="text-center mt-4">
                                 <button type="submit" name="submit"
                                     class="btn btn-primary my-2 p-2 mb-1 bg-transparent text-body">Send</button>
                             </div>
                             <input type="hidden" id="priyority" name="priyority" value="2">
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>


 <!-- <div class="container mt-3 bg-light ">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mb-5 border border-dark">
                <div class="card-header text text-center">
                    <h2 class=""> Contact_us</h2>
                </div>
                <div class="card-body">
                     <form method="POST" action="">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control my-2 border border-dark"
                                placeholder="Enter Username" required pattern="[A-Za-z0-9_]{5,20}"
                                title="Username should be 5-20 characters long and can include letters, numbers, and underscores.">
                        </div>
                        <div class="form-group">
                            <label for="mobileno">Mobile No</label>
                            <input type="tel" id="mobileno" name="mobileno" class="form-control my-2 border border-dark"
                                placeholder="Enter Mobile Number" required pattern="\+?\d{10,15}"
                                title="Mobile number must be between 10 and 15 digits long, optionally preceded by a '+' sign."
                                required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" class="border border-dark w-100 rounded-corners"
                                placeholder="Enter Address"></textarea>
                        </div>
                        <div class="mb-3 m-3 text-center">
                            <button type="submit" name="submit" class="btn btn-primary"> Send</button>
                        </div>
                        <div class="form-group">
                            <input type="number" id="priyority" name="priyority" value="2"
                                class="form-control my-2 border border-dark" hidden>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  -->

 <?php include 'js.php'; ?>
 <script src="/bookshop/design/js/bootstrap.bundle.js"></script>

 <?php include 'footer.php'; ?>
 </body>

 </html>