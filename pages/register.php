
<?php
  include "query/loginReg.php";
  ?>
<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>MiniStore</title>
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/fav.jpg">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>
    <body class="bg-white">
        <div class="container-fluid vh-100 overflow-auto">
            <div class="row vh-100 ">
                <div class="col-lg-6 bg-gray p-5 text-center">
                   <h4 class="text-center fw-bolder fs-2">Login</h4>
                   <p class="mb-3 fs-7">Already gave an account ?</p>
                   <a href="index.php"><button class="btn fw-bold mb-5 btn-outline-success px-4 rounded-pill">log In</button></a>
                   <div class="img-cover p-4">
                        <img src="assets/images/loginbg.svg" alt="">
                   </div>
                </div>
                <div class="col-lg-6 p  vh-100">
                   <div class="row d-flex vh-100">
                       <div class="col-md-8 p-4 ikigui m-auto text-center align-items-center">
                           <h4 class="text-center fw-bolder mb-4 fs-2">Register</h4>
                           <form method="post">
                            <div class="input-group mb-4">
                              <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-person"></i></span>
                              <input type="text" id="username" name="username" class="form-control ps-2 border-start-0 fs-7 inbg form-control-lg mb-0" placeholder="Enter Username" aria-label="Username" aria-describedby="basic-addon1">
                           </div>
                           <div class="input-group mb-4">
                              <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                              <input type="email" id="email" name="email" class="form-control ps-2 border-start-0 fs-7 inbg form-control-lg mb-0" placeholder="Enter Email Address" aria-label="Username" aria-describedby="basic-addon1">
                           </div>
                           <div class="input-group mb-4">
                              <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-lock"></i></span>
                              <input type="password" id="password" name="password" class="form-control ps-2 fs-7 border-start-0 form-control-lg inbg mb-0" placeholder="Enter Password" aria-label="Username" aria-describedby="basic-addon1">
                           </div>
                             <div class="input-group mb-4">
                              <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-lock"></i></span>
                              <input type="password" id="cpassword" name="cpassword" class="form-control ps-2 fs-7 border-start-0 form-control-lg inbg mb-0" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1">
                           </div>
                           
                           <button id="register" name="register" class="btn btn-lg fw-bold fs-7 btn-success  w-100">Register</button>
                           </form>
                           <p class="text-center py-4 fw-bold fs-8">Or Sign in with social platforms</p>
                           
                           <ul class="d-inline-block mx-auto">
                               <li class="float-start px-3"><a href=""><i class="bi bi-facebook"></i></a></li>
                               <li class="float-start px-3"><a href=""><i class="bi bi-twitter"></i></a></li>
                               <li class="float-start px-3"><a href=""><i class="bi bi-linkedin"></i></a></li>
                               <li class="float-start px-3"><a href=""><i class="bi bi-google"></i></a></li>
                               
                           </ul>
                       </div>
                   </div>
                    
                </div>
            </div>
        </div>  
    </body>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>

</html>