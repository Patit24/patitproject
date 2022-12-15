<?php
require 'connect.php';
if (isset($_POST['submit'])) {

    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];

    $duplicate=mysqli_query($con,"SELECT*FROM registration WHERE username='$username'");
    if (mysqli_num_rows($duplicate)>0) {
        # code...
        echo "<script> alert('username already taken')</script>";
    }
    else {
        if ($password==$confirmpassword) {
            # code...
            $query= "INSERT INTO registration VALUES('','$username','$password')";
            mysqli_query($con,$query);
            echo "<script>alert ('registration sucessful')</script>";
        }
        else {
            echo"<script>password and confirm password doesnot match</script>";
        }
    }
}
   
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  
                  <h4 class="mt-1 mb-5 pb-1">Friends Club</h4>
                </div>

                <form action="" method="post">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" class="form-control"
                      placeholder="Email" name="username" />
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" class="form-control" 
                    placeholder="Password" name="password" required
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[0-9])(?=.*?[!@#$%^&*+`~=?\|<>/]).{8,}"/>
                   
                  </div>
                  <div class="form-outline mb-4">
                  <label class="form-label" for="confirmpassword">Confirm Password</label>
                    <input type="password" id="confirmpassword" class="form-control" 
                    placeholder="Confirm Password" name="confirmpassword"/>
                   
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 w-100" name="submit" type="submit">Sign up</button>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">If you are a Existing User</p>
                    <button type="button" class="btn btn-outline-danger" onclick="buttonClicked()">Login Now</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than a friend</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
    function buttonClicked() {
        windows.location.href = "./login.php";
    }
</script>  
</body>
</html>