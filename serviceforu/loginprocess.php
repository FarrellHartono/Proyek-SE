<?php
	include "koneksi.php";
	
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	
	$cekusername = "SELECT usernamecustomer, passwordcustomer FROM customer WHERE usernamecustomer = '$username' AND passwordcustomer = MD5('$password')";
	$cekdata = mysqli_query($con, $cekusername);
	$cekusername2 = "SELECT usernametoko, passwordtoko FROM toko WHERE usernametoko = '$username' AND passwordtoko = MD5('$password')";
	$cekdata2 = mysqli_query($con, $cekusername2);
	
	if ($username == "" || $password == ""){
		echo "<script type = 'text/javascript'> 
							alert('MOHON ISI SEMUA DATA YANG DIPERLUKAN');
							window.location = 'login.php';
					</script>";
	}
	else{
			#echo "SELAMAT USERNAME DAN PASSWORD SUDAH VALID";
			if (mysqli_num_rows($cekdata) == 1){
				$updatewaktu = "UPDATE customer SET waktulogin = NOW() WHERE usernamecustomer='$username'";
				$updatee = mysqli_query($con, $updatewaktu);
				header("Location: homeafterlogin.php?userr=$username");
			}
			else if(mysqli_num_rows($cekdata2) == 1){
				$updatewaktu2 = "UPDATE toko SET waktulogin = NOW() WHERE usernametoko='$username'";
				$updatee2 = mysqli_query($con, $updatewaktu2);
				header("Location: homeafterlogintoko.php?userr=$username");
			}
			else{
				echo "<script type = 'text/javascript'> 
								alert('MOHON MASUKKAN USERNAME DAN PASSWORD YANG VALID');
								window.location = 'login.php';
						</script>";
			}
	}
?>