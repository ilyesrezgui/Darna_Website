<?php
include('search2.php');

?>
<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--afficher la page b akwa qualit? mawjouda-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- bech el page tethal ala telifoun f kobr el ecran w el pc kif kif -->
	<title> RAYHANA</title> <!-- donner un titre pour la page-->
	<link href="berasmi.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/b42ff78973.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link href="footer.css" rel="stylesheet">
	<style>
	    .search-box{
			border:none;
	        border-radius:10px;
	        width:363px;
	        background-color:#fff;
        }
        .input-txt{
	        border-style:none;
			padding: 1px 22px;
			outline :none;
        }
        i{
	        padding 10px 5px;
        }
		.btn-submit{ 
		    position :absolute;
	        border:3px solid #AF2230;
			border-radius:10px;
	        background-color:#AF2230;
		    color:black;
			outline:none;
	        cursor:pointer;
			margin:0;
			padding:8px 10px 8px 6px;
			width:60px;
        }
		.btn-submit:hover{ 
		    color :white;
        }
		
	</style>
	</head>
	<body>
	<div class="header">
	<nav id="nav-bar">
		<img src="img/Plan de travail 9.png" class="logo">
		<ul class="nav-links">
		<li><a href="indexberasmi.php" class="active">Home</a></li>
			<li><a href="#stories">Our Products</a></li>
			<li><a href="aboutus.html">About Us</a></li>
			<li><a href="contactuus.html">Contact Us</a></li>
		</ul>	
		
		<div class="search-box">
			<form method="POST">
				<input type="textbox" class="input-txt" name="str" placeholder="Type to search">
				<input type="submit" name="submit" value="Search" class="btn-submit">
			</form>
		</div>
		<?php
		
        if(isset($_POST['submit'])){
	        $str=mysqli_real_escape_string($con,$_POST['str']);
	        $sql="select id, pname, type, description from product where type 
	            like '%$str%' or pname like '%$str%'";
	        $res=mysqli_query($con,$sql);
	        if(mysqli_num_rows($res)>0){
		        while($row=mysqli_fetch_assoc($res)){
			        echo $row['pname'];
					
					if($row['type']==bague){
					    header('location:cartt.php');
					}else if($row['type']==collier){
						header('location:DAR_Bibine.html');
					}else if($row['type']==bracelet){
						header('location:Dar_Kenza.html');
					}else if($row['type']==boucles){
						header('location:dar_laroussi.html');
					}
					
					if($row['pname']==b1 (1)||$row['pname']==b1 (2)){
					    header('location:cartt.php');
					}else if($row['pname']==b2 (1)||$row['pname']==b2 (2)){
						header('location:DAR_Bibine.html');
					}// else if($row['type']==bracelet){
						// header('location:Dar_Kenza.html');
					// }else if($row['type']==boucles){
						// header('location:dar_laroussi.html');
					// }
		        }
	        }else{
		        header('location:indexberasmi.php');
                die();	        
			}
			
        }
        ?>
		<a href="Signin.html" class="Register-btn">Sign Out</a>
	</nav>
		<div class="container1">
		<h1> Every Piece Of Jewelry Tells <br><span class="darnaaa">A Story</span></h1>
		</div>
	</div>
	<section class="exclusive" id="exclusive">
		<h2 class="sub-title">Check Now</h2>
		<div class="product-container">
		<button class="pre-btn"><img src="img\arrow.PNG" alt=""></button>
	    <button class="nxt-btn"><img src="img\arrow.PNG" alt=""></button>
				<!-- img1-->
		
		<div class="product-card">
			<div class="product-image">
					<span class="discount-tag">50% de r&eacute;duction</span>
					<img src="img\b1 (1).jpg" class="product-thumb" alt="">
					<a href="bague.php"><button class="card-btn">Check</button></a>
			</div>
			<div class="product-info">
						<h2 class="product-brand"> BALI </h2>
						<p class="product-short-des">Silver ring with red diamonds <br>"Red Bali" </p>
						<span class="price">20 dianrs</span><span class="actual-price"> 40 dinars</span>
			</div>
</div>
		
<!-- img2-->
<div class="product-card">
	<div class="product-image">
			<span class="discount-tag">50% de r&eacute;duction</span>
			<img src="img\b2 (1).jpg" class="product-thumb" alt="">
			<a href="boucles.php" ><button class="card-btn">Check</button></a>
	</div>
	<div class="product-info">
				<h2 class="product-brand"> BONHEUR</h2>
				<p class="product-short-des">Earrings with turquoise stones </p>
				<span class="price">20 dianrs</span><span class="actual-price"> 40 dinars</span>
	</div>
</div>
		<!-- img3-->
		<div class="product-card">
			<div class="product-image">
					<span class="discount-tag">10% de r&eacute;duction</span>
					<img src="img\b3 (4).jpg" class="product-thumb" alt="">
				 <a href="bracelet.php"><button class="card-btn">Check</button></a>
			</div>
			<div class="product-info">
						<h2 class="product-brand"> LIRA </h2>
						<p class="product-short-des">golden "Lira" bracelet</p>
						<span class="price">19 dianrs</span><span class="actual-price"> 38 dinars</span>
			</div>
</div>	
			
			<!-- img4-->
			<div class="product-card">
						<div class="product-image">
								<span class="discount-tag">50% de r&eacute;duction</span>
								<img src="img\b4 (6).jpg" class="product-thumb" alt="">
								<a href="collier.php"><button class="card-btn">Check</button></a>
						</div>
						<div class="product-info">
									<h2 class="product-brand"> ARIS  </h2>
									<p class="product-short-des">Necklace with olive green pearls  </p>
									<span class="price">18 dianrs</span><span class="actual-price"> 36 dinars</span>
						</div>
		    </div><!-- img5-->
			<div class="product-card">
						<div class="product-image">
								<span class="discount-tag">50% de r&eacute;duction</span>
								<img src="img\b1 (3).jpg" class="product-thumb" alt="">
								<a href="bague.php"><button class="card-btn">Check</button></a>
						</div>
						<div class="product-info">
									<h2 class="product-brand"> SYMI </h2>
									<p class="product-short-des">Gold adjustable ring with white pearls </p>
									<span class="price">25 dianrs</span><span class="actual-price"> 50 dinars</span>
						</div>
		    </div>
			
			
			</div>
</section>
		
		
			<!--hethi el images eli bel 3orth-->
			<div class="cta">
				<h3>You Need<br>Some Guidness ?</h3>
				<p>RAYHANA Is The Place Where You Find The BEST Accessories</p>
				<a href="contactuus.html" class="cta-btn">Click Here</a>
	    	</div>
			<!--hethi el images eli bel 3orth-->
			

    <h2 class="sub-title">OUR PRODUCTS</h2>
	<div class="stories" id="stories">
		<div>
			<img src="img/11.jpg">
			<p><a class="start-btn" href="bague.php">RINGS</a></p>
		</div>
		<div>
			<img src="img/22.jpg">
			<p><a class="start-btn" href="boucles.php">EARINGS</a></p>
		</div>
		<div>
			<img src="img/33.jpg">
			<p><a class="start-btn" href="collier.php">NECKLACES</a></p>
		</div>
		<div>
			<img src="img/11.jpg">
			<p><a class="start-btn" href="bracelet.php">BANGLES</a></p>
		</div>
	</div>
	<footer>
	</footer>

		</div><!-- hethi el taskira div mta3 el container sachant que le contnu lkol feha -->
    <script src="home.js"></script>
  <!-- link to js-->
	<script src="main.js"></script>
	<script src="js/footer.js"></script>
	
	
	</body>
</html>