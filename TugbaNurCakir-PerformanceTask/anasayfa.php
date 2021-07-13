<?php
session_start();
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
			width: 37%;
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
			width: 63%;
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
			height: 750px;
			width: 100%;
		}
		#hizalaTwo {
			width: 75%;
			height: auto;
			margin: auto;
			border: 1px solid transparent;
			padding-top: 0px;
		}
		#sectionOne {
			
			width: 100%;
			height: 600px;
			padding-top: 50;

		}
		.appimage{
			border: 2px solid purple;
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
		color: #9C5B51;
		}
		</style>
	</head>

	<body>
	    <header>
        <div id="hizala">
            <div id="solKisim">
                <a href="anasayfa.php">
                    <img src="php1.png" alt="php elephant icon" width="100" height="100">
                </a>
				<br>
				<div class="span bold"><span>Hello </span><?php
			echo $_SESSION['kullanici'];
		?>
		<span>, Welcome to the application promotion site.</span></div>
                
            </div>
            <div id="sagKisim">
                <nav>
                    <ul>
						<li class="active"><a href="anasayfa.php">HomePage</a></li>
                        <li><a href="sayfa1.php">Page 1</a></li>
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
	
	 <section id="sectionThree">
                <div id="partOne">
                    <h1> AMAS Mobile</h1>
                   <ul>
							<li>AMAS Mobile makes in-house apps and custom tailored mobile solutions for companies globally.</li><br>
							<li>Mobile Apps</li><br>
							<li>Development Service</li><br>
							<li>Powerful and Productive Team</li><br>
							<li>At AMAS Mobile, we work with talented people to make a difference in the mobile market.</li><br>
						</ul> 
                   

                </div>
                <div id="partTwo">
                    <div id="resimTwo">
                       <img src="php3.png">
                    </div>

                </div>
            </section>
			    </div>
    </main>

		
		
		<?php
		$_SESSION['countOfPage'];
		//$_SESSION["sayfa"];
		//$_SESSION["sayfa"] += 1;
		//echo $_SESSION["sayfa"];
		//<a href="sayfa1.php">Sayfa 1</a>
		//<a href="sayfa2.php">Sayfa 2</a>
		//<a href="sayfa3.php">Sayfa 3</a>
		//<a href="cikis.php">Çıkış Yap</a>
		?>
		
		<br>
		
	



	</body>
</html>