<html>
<head>
	<title>Desain Grafis by Rijalul Arif</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content">
	<div class="menu">
        <nav>
            <li><a href="index.php?page=home"><img src="img/degrarif.png"></a></li>
            <ul>
                <li><a href="index.php?page=home">HOME</a></li>
				<li><a href="index.php?page=biodata">BIODATA</a></li>
				<li><a href="index.php?page=otomotif">OTOMOTIF</a></li>
            </ul>
        </nav>
  	</div>
	<div class="badan">
		<?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
			switch ($page) {
				case 'home':
					include "page/home.php";
					break;
				case 'biodata':
					include "page/biodata.php";
					break;
				case 'otomotif':
					include "page/otomotif.php";
					break;			
				default:
					echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
					break;
			}
		}
			else{
				include "page/home.php";
				}
		?>
	</div>
</div>
</body>	
</html>