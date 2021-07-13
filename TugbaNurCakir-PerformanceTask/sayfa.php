<?php
session_start();
?>
<?php
if(isset($_GET['uyeol'])) {
    $kullanici_Adi=$_GET['username'];
    $dosya_adi = "kullanicilar.txt";
    $dosya = fopen($dosya_adi, "r"); 
    
	$doesUserExist=false;
			while(!feof($dosya)){
				$satir = fgets($dosya);
                if (strpos($satir, $kullanici_Adi) !== false) {
					$doesUserExist=true;
					break;
                }
			}
			fclose($dosya);

			if($doesUserExist==true){
				echo '<script>alert("Zaten Üyesiniz")</script>';
			}
			else{
				//echo '<script>alert("Üye değilsiniz, üye kayıt formuna yönlendiriliceksiniz.")</script>';
				echo '<script>
				if (window.confirm("Üye değilsiniz, üye kayıt formuna yönlendiriliyorsunuz")) {
					window.location = "/TugbaNurCakir-PerformansÖdevim/uyeol.html";
				}
				</script>';
				
			}
			
}
else if(isset($_GET['uyeoll'])) {
				$kullaniciAdi=$_GET['userName'];
				$sifre=$_GET['password'];
				$ogrenciNo=$_GET['ogrenciNo'];
				$ipadresi=$_GET['ipadres'];
				$eposta=$_GET['eposta'];
				$file = fopen('kullanicilar.txt', 'r');				
				$doesUserExistt=false;

				while(!feof($file)){
				$line = fgets($file);
				list($username, $password) = explode(':', $line);
					if(trim($username) == $kullaniciAdi){
					$doesUserExistt=true;
					echo 'You already exist.';
					break;
		
					
					}
				}
		
				if($doesUserExistt==false){
				$metin=$kullaniciAdi.":".$sifre.":".$ogrenciNo.":".$ipadresi.":".$eposta."\n";
				$dosya_adi = "kullanicilar.txt";
				$dosya = fopen($dosya_adi, 'a' );
				
				fputs($dosya, $metin);
				fclose($dosya);
				echo "Your membership is completed.<br>";
		
						}
		
				
				//if(trim($userName) == $kullaniciAdi)
				//{
				//	echo "You did not fill out the required fields.";
				//	echo '<a href="uyeol.html">Click here for try again.</a>';
				//echo "zaten üyesin";
				//}		
			
				
			
	}			
		
else{
	
	//echo"girişyapa basıldı.";
	//echo '<script>window.location = "/TugbaNurCakir-PerformansÖdevim/anasayfa.php";</script>';
	
$user_input = $_GET['username'];
$password_input = $_GET['password'];
$file = fopen('kullanicilar.txt', 'r');				
$doesUserExists=false;

while(!feof($file)){
    $line = fgets($file);
    list($username, $password) = explode(':', $line);
    if(trim($username) == $user_input && trim($password) == $password_input && trim($username) != '' && isset($user_input)&& trim($password) != '' && isset($password)){
		$doesUserExists=true;
        echo 'Logged in';
        break;
		
   }
	
	
}

if($doesUserExists==false){      		
		echo 'Username/password is incorrect. <br> Click here to <a href="form.html">Try Again.>' ;         
	}
else{
	session_start();
	$kad = $_GET['username'];
	$_SESSION['kullanici']= $kad;
	$_SESSION['countOfPage']=0;
	$_SESSION['isLogin']=true;
	header('Location: anasayfa.php');
}	

fclose($file);
}

	
	
	
	
	
	
	
