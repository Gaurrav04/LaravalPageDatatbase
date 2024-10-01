<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>"> 
    <title>Personal Details</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 border p-3">
                <form class="form" method="post" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <h2 class="fw-light">Registration Form</h2><br>
                        <label class="form-label">Name</label><br>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required pattern="^[A-Za-z]+(?: [A-Za-z]+)?$"><br>
                        <label class="form-label">Address</label><br>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter your address" required pattern="^[A-Za-z]$"><br>
                        <label class="form-label">Email</label><br>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter your email" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"><br>
                        <label class="form-label">Phone number</label><br>
                        <input type="text" name="phno" id="phno" class="form-control" placeholder="Enter your phone number" required pattern="^[0-9]{10}$"><br>
                        <label class="form-label">Username</label><br>
                        <input type="text" name="usnm" id="usnm" class="form-control" placeholder="Enter your username" required pattern="^[a-zA-Z0-9_]{4,10}$"><br>
                        <label class="form-label">Password</label><br>
                        <input type="text" name="pass" id="pass" class="form-control" placeholder="Enter your password" required pattern="^[a-zA-Z0-9_]{8,20}$"><br>
                        
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary" type="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Sem2\WDF_Lab\Laravel\lara_login\resources\views/registration.blade.php ENDPATH**/ ?>