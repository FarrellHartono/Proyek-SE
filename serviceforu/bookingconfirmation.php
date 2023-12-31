<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>About</title>
</head>

<body>
    <!-- CSS -->
    <style>
        .backgrondd {
            background: #146c94;
            background: -webkit-linear-gradient(to right, rgba(20, 108, 148, 0.7), rgba(25, 167, 206, 0.7));
            background: linear-gradient(to right, rgba(20, 108, 148, 0.7), rgba(25, 167, 206, 0.7))
        }

        i.bi {
            display: inline-block;
            padding-right: 5px;
        }
        
        a{
					text-decoration: none;
					color:black;
				}
				
				.container img {
            max-width: 200px;
            max-height: 200px;
   		 	}
   		 	
   		 	.footer-bottom{
      height: 80px;
      background-color: #212529;
    }

    .footer-bottom p{
      font-family: Roboto;
      font-size: 25px;
      color: white;
      text-align: center;
      vertical-align: middle;
      line-height: 80px;  
    }
        
    </style>
    <!-- Css End -->

    <!-- Navbarnya  -->
     <?php
     	include "koneksi.php";
     	$username = $_REQUEST['userr'];
     ?>
    <nav class="navbar navbar-expand-sm navbar-light bg-dark" data-bs-theme="dark">
        <div class="container">
            <img src="Logo.png" alt="">
          <!-- <a class="navbar-brand " href="#">Service4U</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href=listpesananuserdantoko.php?userr=<?php echo $username ?>>Pesanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">
                    <i class="bi bi-person"></i>
                    <!-- <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="30"
                    alt="Black and White Portrait of a Man" loading="lazy" /> -->
                </a>
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="bi bi-box-arrow-right"></i>
                    </a>
              
      </nav>
    <!-- Navbar End -->
    
    <div class="pb-5"></div>
    <!-- Booking Berhasil Start -->
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10 col-md-8 col-lg-8 col-xl-5">
                <div class="card bg-white text-black border-dark mb-3" style="border-radius: 1rem;">
                    <div class="card-body p-xl-5 text-center">
                        <div class="mb-md-5 mt-md-4">
                            <div class="fw-bold" style="font-size: 25px">
                                <i class="bi bi-check-circle-fill" style="font-size: 30px; color:green;"></i>
                                Booking Berhasil!
                            </div>
                            <p class="text-black-50 mb-5"></p>
														
														<?php
															include "koneksi.php";
															$kodebooking = $_REQUEST['trid'];
															$username = $_REQUEST['userr'];
															echo"
	                            <div class='fw-bold'>
	                                Kode Booking:
	                                <div>$kodebooking</div>
	                            </div>
	                          

                            <div class='pb-5'></div>
                            <div>

                                <button class='btn btn-outline-dark mr-1'>Kembali ke Home</button>
                                <button class='btn btn-outline-dark mr-1'><a href = listpesananuserdantoko.php?userr=$username>Lihat Pesanan</a></button>
                                ";
														?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Berhasil End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</body>


</html>