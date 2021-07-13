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

		#sectionOne {
			background-color: transparent;
			width: 100%;
			height: 250
			padding-top: 100px;

		}

		#sectionOne h1 {
			color:#9C5B51;
			font-size: 36px;
			text-align: center;	
		}

		#sectionTwo {
			width: 100%;
			height: 400px;
			padding-top: 35px;
		}

		#box {
			width: 30%;
			height: auto;
			float: left;
			margin-right: 50px;
		}

		.cerceve {
			border: 2px solid black;
			width: 100%;
			height: 180px;
			padding: 2px;
		}

		.resim {
			background-color: #9C5B51;
			width: 100%;
			height: 172px;
			padding-top: 30px;
		}

		.resim h1 {
			text-align: center;
			font-size: 30px;
			color: white;
		}

		#box a {
			float: right;
			color: firebrick;
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
				<br>
					<div class="span bold"><span>Hello </span>
					<?php
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
                        <li  class="active"><a href="sayfa1.php">Page 1</a></li>
                        <li><a href="sayfa2.php">Page 2</a></li>
                        <li><a href="sayfa3.php">Page 3</a></li>
                        <li><a href="cikis.php">Sign Out <i class="fas fa-sign-out-alt"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>
	 <main>
        <div id="hizalaTwo">
            <section id="sectionOne">
                <h1>What Makes AMAS Mobile Different </h1>
            </section>
            <section id="sectionTwo">
                <div id="box">
                    <div class="cerceve">
                        <div class="resim">
                            <h1>Ownership<h1>
                        </div>
                    </div>
             
                    <p>Your users are our users. Your apps are our apps. We care every project that is on our table and do our best to make it big.</p>
                   
                </div>
                <div id="box">
                    <div class="cerceve">
                        <div class="resim">
                            <h1>Beatiful UI/UX</h1>
                        </div>
                    </div>
                   
                    <p>Easy to use and elegant UI/UX are musts in our book. Our users enjoy the user experience and come back later on.</p>
                  
                </div>
                <div id="box" style="float: right; margin: 0">
                    <div class="cerceve">
                        <div class="resim">
                            <h1>Bug Free & Non-Crashing Apps</h1>
                        </div>
                    </div>
                    
                    <p>Bugs are evil creatures and crashes are the worst. We always keep our codebase as clean as a mother's kitchen to avoid these.</p>
                    
                </div>

            </section>
           
        </div>
    </main>
	
		
	
	</Body>
</html>