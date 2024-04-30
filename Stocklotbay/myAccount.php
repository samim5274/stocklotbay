<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stocklotbay - My Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/myaccount.css" media="screen">
</head>
<body>

<?php
include 'menuBar.php';
?>

<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="
        margin-top: -100px;
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
          <div class="mb-4">
            <?php if(isset($_GET['error'])) { ?> <span class="missmatch2" id = "message2" style="color:red"><?php echo $_GET['error']; ?></span> <?php } else { ?><span class="missmatch" id = "message1" style="color:green"> <?php echo $_GET['success']; ?> </span><?php } ?>
          </div> 
        <!-- user login section -->

        <div class="col-lg-6">
            <h2 class="fw-bold mb-5 text-start">Login</h2>
          <form action="backend" method="post">
            
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4 text-start">
                <label class="form-label" for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" />              
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4 text-start">
                <label class="form-label" for="pass">Password</label>
                <input type="password" name="pass" id="pass" class="form-control" />       
                <span class="missmatch" id = "messagel1" style="color:green">  <span class="missmatch2" id = "messagel2" style="color:red">        
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex text-start mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" />
              <label class="form-check-label" for="form2Example33">
                Remember Me
              </label>
            </div>

            <!-- Submit button -->
            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
              Login
            </button>

            </form>
        </div>

        <!-- user registration section -->

        <div class="col-lg-6">
          <h2 class="fw-bold mb-5 text-start">Register</h2>         
          <form action="backend" method="post">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline text-start">
                    <label class="form-label" for="form3Example1">First name</label>
                    <input name="txtfirstname" type="text" id="form3Example1" class="form-control" />                  
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline text-start">
                    <label class="form-label" for="form3Example2">Last name</label>
                    <input name="txtlastname" type="text" id="form3Example2" class="form-control" />                  
                </div>
              </div>
            </div>

            <!-- Phone input -->
            <div data-mdb-input-init class="form-outline mb-4 text-start">
                <label class="form-label" for="form3Example5">Phone</label>
                <input name="txtphone" type="number" id="form3Example5" class="form-control" />                
            </div>

            <!-- Username input -->
            <div data-mdb-input-init class="form-outline mb-4 text-start">
                <label class="form-label" for="form3Example6">Username (username cann't be changed)</label>
                <input name="txtusername" type="text" id="form3Example6" class="form-control" />
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4 text-start">
                <label class="form-label" for="form3Example113">Email address</label>
                <input name="txtemail" type="email" id="form3Example113" class="form-control" />                
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4 text-start">
                <label class="form-label" for="form3Example4">Password</label>
                <input name="txtpassword" type="password" id="pass1" class="form-control" />                
            </div>

            <!-- CPassword input -->
            <div data-mdb-input-init class="form-outline mb-4 text-start">
                <label class="form-label" for="form3Example7">Confirm Password</label>
                <input name="txtcpassword" type="password" id="Cpass2" class="form-control" />
                <span class="missmatch" id = "message1" style="color:green">  <span class="missmatch2" id = "message2" style="color:red">     
            </div>

            <!-- Image input -->
            <!-- <div data-mdb-input-init class="form-outline mb-4 text-start">
                <label class="form-label" for="image">Upload your image (Recomended 300 x 300)</label>
                <input name="my_image" type="file" id="image" class="form-control" />  
            </div>
            <span class="missmatch2" id = "message2" style="color:red">    -->

            <!-- Checkbox -->
            <div class="form-check d-flex text-start mb-4">
              <input name="chkcheckbox" class="form-check-input me-2" type="checkbox" value="1" id="form2Example1" />
              <label class="form-check-label" for="form2Example1">
                I accepet all <a href="https://www.facebook.com/SAMIM5274.NET?" target="_blank">trams & condition.</a> 
              </label>
            </div>

            <!-- Submit button -->
            <button type="submit" name="btnregister" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                Register
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

<?php
include 'footer.php';
?>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<script src="js/main.js"></script>

</body>
</html>
