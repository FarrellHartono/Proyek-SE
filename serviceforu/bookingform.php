<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
    <meta http-equiv='x-ua-compatible' content='ie=edge' />
    <title>Booking page</title>
    <!-- MDB icon -->
    <link rel='icon' href='img/mdb-favicon.ico' type='image/x-icon' />
    <!-- Font Awesome -->
    <link
      rel='stylesheet'
      href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css'
    />
    <!-- Google Fonts Roboto -->
    <link
      rel='stylesheet'
      href='https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap'
    />
    <!-- MDB -->
    <link rel='stylesheet' href='css/mdb.min.css' />
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>

    <!-- bootstrap 4 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js'></script>
  </head>
  <body>
    <style>
     *{
       margin : 0;
       padding : 0;
       box-sizing: border-box;
       
     }

     body{
       font-family:roboto;
     }
    .bordered{ 
       border: solid gray 0.5px;
     }
     
     a{
			text-decoration: underline;
			color:white;
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
    <!-- Start your project here-->
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
   
   <!--start of form-->
   <?php
	   include"koneksi.php";
	   $userr = $_REQUEST['userr'];
	   $tokoo = $_REQUEST['tokoo'];
   ?>
   <form action='bookingprocess.php' method='post' enctype='multipart/form-data'>
   <div class='container ' style='width: 50%; '>
   <div class='card mt-5 '>
    <div class='card-header  '>
      <h4><b>Booking Consultation Form</b></h4>
    </div>
    <div class='card-body '>
    	
    			<!--Username Customer-->
          <div class='form-group mt-4'>
            <label for='exampleInputEmail1'><b>Username Customer</b></label>
            <div class='container mt-2'>
              <input class='form-control form-control-sm' type='text' name='usernamecustomer' value=<?php echo $userr ?> readonly>
            </div>
          </div>
          
          <!--Username Toko-->
          <div class='form-group mt-4'>
            <label for='exampleInputEmail1'><b>Username Toko</b></label>
            <div class='container mt-2'>
              <input class='form-control form-control-sm' type='text' name='usernametoko' value=<?php echo $tokoo ?> readonly>
              <BR>
            </div>
          </div>
    	
         <!--pilihan jenis perangkat-->
        <div class='form-group mt-1'>
            <label for='exampleInputEmail1'><b>Jenis Perangkat</b></label>
            <div class='container mt-2'>
            <div class='form-check form-check-inline'>
                <input class='form-check-input' type='radio' name='jenisperangkat' id='inlineRadio1' value='PC'>
                <label for='inlineRadio1'>PC</label>
            </div>
            <div class='form-check form-check-inline'>
                <input class='form-check-input' type='radio' name='jenisperangkat' id='inlineRadio2' value='Laptop'>
                 <label for='inlineRadio2'>LAPTOP</label>
            </div>
            </div>
        </div>

          <!--Pilihan Merk Perangkat-->
        <div class='form-group mt-4'>
            <label for='exampleInputEmail1'><b>Merek Perangkat</b></label>
            <div class='container mt-2'>
                <select class='form-select form-select-sm' style='width: 50%;' name='merkperangkat'>
                    <option selected >Open to select</option>
                    <option value='Acer'>Acer</option>
                    <option value='Asus'>Asus</option>
                    <option value='Lenovo'>Lenovo</option>
                    <option value='HP'>HP</option>
                    <option value='Dell'>Dell</option>
                    <option value='Lainnya'>Lainnya</option>
                  </select>
            </div>
        </div>

          <!--Seri Perangkat-->
          <div class='form-group mt-4'>
            <label for='exampleInputEmail1'><b>Seri Perangkat</b></label>
            <div class='container mt-2'>
              <input class='form-control form-control-sm' type='text' name='seriperangkat' placeholder='Dell Incon 13 5000'>
            </div>
          </div>

          <!--Deskripsi Masalah -->  
          <div class='form-group mt-4'>
            <label for='exampleInputEmail1'><b>Deskripsi Masalah</b></label>
            <div class='container mt-2'>
              <textarea class='form-control ' id='exampleFormControlTextarea1' rows='3' name='deskripsimasalah'></textarea>
            </div>
          </div>

        <!--Upload gambar -->  
        <div class='form-group mt-4'>
          <label for='exampleInputEmail1'><b>Gambar</b> <small class = 'text-body-secondary'>*kondisi perangkat</small></label>
          <div class='container mt-2'>
            <div class='input-group mb-1'>
              <input class='form-control form-control-sm' id='formFileLg' type='file' name='gambar' />
            </div>
            <small id='passwordHelpBlock' class='form-text text-muted'>
              *Gambar Maks. 10 MB Format .PNG, .JPG, .JPEG
            </small>
          </div>
        </div>
          
        <!--tanggal appointment --> 
        <div class='form-group mt-4'>
          <label for='exampleInputEmail1'><b>Pilih Tanggal & Waktu</b></label>
          <div class='container mt-2'>
          <div class='row mb-4'>
              <div class='col-sm '>
                  <div class='input-group date' id='datepicker'>
                      <input type='date' name='tanggalpemesanan' class='form-control '>
                  </div>
              </div>
              <div class='col-sm'>
                <div class='input-group date' id='timepicker'>
                    <input type='time' name='waktupemesanan' class='form-control'>
                </div>
              </div>
          </div>
        </div>
        </div>
    		
	        <!--submit-->
		        <div class='align-content-center'>
		            <button type='submit' class='btn btn-dark'><b>Book Now!!</button>
		        </div>

    </div>
    </div> 
    <!-- End your project here-->

    <!-- MDB -->
    <script type='text/javascript' src='js/mdb.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe' crossorigin='anonymous'></script>
    
    <!-- Custom scripts -->
    <script type='text/javascript'></script>
  </form>
  </div>
  </body>

  
</html>
