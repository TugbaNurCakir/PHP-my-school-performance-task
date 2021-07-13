<?php
session_start();
if($_SESSION['isLogin']==false){
	echo 'Giriş yapmadan sayfa gezinimi yapamazsınız. <br> Giriş yapmak için linke tıklayabilirsiniz. <a href="form.html">G.>' ;   
	return 0;
}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" 
			integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" 
			crossorigin="anonymous">
		<style>
		* {
			box-sizing: border-box;
		}
		body {
			background-color: #F3EBF6;
			margin: 0;
			padding: 0;
		}
		header{
			width: 100%;
			height: 150px;
			border: 1px solid white;
		}
		#hizala {
			width: 75%;
			height: auto;
			margin: auto;
			margin-top: 20px;
		}
		#solKisim {
			float: left;
			width: 36%;
			height: 100px;

		}

		#solKisim a {
			text-decoration: none;
			color: darkgray;
			font-size: 25px;
		}

		#solKisim h1 {
			margin: 0;
			padding: 0;
		}

		.span span {
			color: #7477ae;
			font-size: 16px;
			margin: 0;
			padding: 0;
		}

		#sagKisim {
			float: left;
			width: 64%;
			height: 100px;

		}

		nav {
			float: right;
			padding-top: 25px;
		}

		nav ul li a {
			text-decoration: none;
			color: white;
			font-size: 20px;
		}

		nav ul li {
			list-style-type: none;
			display: inline-block;
			background-color: #7477ae;
			padding: 10px 32px;
			float: left;
			border-right: 1px solid #bbb;
		}

		nav ul {
			margin: 0;
			padding: 0;
		}

		nav ul li a:hover {
			color: firebrick;
		}
		
		img{
			object-fit: contain;
			background-repeat: no-repeat;
			
		}
		.active{
			background-color:  #A86E5E;
		}
		.bold{
			font-weight: bold;
		}
		#sectionThree {
    width: 100%;
    height: 400px;
}

#partOne {
    width: 50%;
    border: 1px solid transparent;
    height: 300px;
    float: left;
}

#partOne p {
    font-size: 16px;
    line-height: 25px;
}
main {
			height: auto;
			width: 100%;
		}
		#hizalaTwo {
			width: 75%;
			height: auto;
			margin: auto;
			border: 1px solid transparent;
			padding-top: 25px;
		}
		
		#resimTwo img{
			width: 50%;
    border: 1px solid transparent;
    height: 300px;
    float: left;
		}
		#partOne h1{
			color:  #9C5B51;
		}
		
		
		
		
		</style>
	</head>

	<Body>
		<header>
        <div id="hizala">
            <div id="solKisim">
                <a href="anasayfa.php">
                    <img src="php1.png" alt="php elephant icon" width="100" height="100">
                </a>
                <div class="span bold"><span>Hello </span><?php
			echo $_SESSION['kullanici'];
		?>
		<span>, Number of Pages You Visited:</span>
		<?php
		$_SESSION['countOfPage']+=1;

		echo $_SESSION['countOfPage'];
		?>
					</div>
            </div>
            <div id="sagKisim">
                <nav>
                    <ul>
						<li><a href="anasayfa.php">HomePage</a></li>
                        <li><a href="sayfa1.php">Page 1</a></li>
                        <li  class="active"><a href="sayfa2.php">Page 2</a></li>
                        <li><a href="sayfa3.php">Page 3</a></li>
                        <li><a href="cikis.php">Sign Out <i class="fas fa-sign-out-alt"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>
	 <main>
        <div id="hizalaTwo">
	
	 <section id="sectionThree">
                <div id="partOne">
                    <h1>Put Baby To Sleep</h1>
						<ul>
							<li>A parenting app to put babies to sleep</li><br>
							<li>Contains favorite soothing sounds and lullabies approved by professionals</li><br>
							<li>Simple and elegant UI/UX</li><br>
							<li>Currently localized in 3 languages. More to come!</li><br>
							<li>Available on iOS and Android including tablets</li><br>
						</ul> 
                   

                </div>
                <div id="partTwo">
                    <div id="resimTwo">
                       <img src="page2.jpg">
                    </div>
					<h2>Click to try.</h2>
					<div id="resimT">
                      <a href="https://apps.apple.com/tr/app/put-baby-to-sleep/id1545440981?l=tr">
         <img alt="ios" src="ios.png"
         width=150" height="70">
             </div>
			 <div id="resm">
                      <a href="https://play.google.com/store/apps/details?id=com.amasmobile.putbabytosleep">
         <img alt="android" src="android.png"
         width=150" height="70">
             </div>
					

                </div>
            </section>
			    </div>
    </main>
	</Body>
</html>