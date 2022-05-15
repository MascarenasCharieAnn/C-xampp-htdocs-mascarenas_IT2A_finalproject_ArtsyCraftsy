<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible"content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>ArtsyCraftsy</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="css/mycss.css" rel="stylesheet">


	<!-- Bootstrap core JS-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

</head>
<body>
	<div class="container shadow-lg py-1">
	
	 <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
  		
  		<a href="/" class="me-md-auto">
        <?php echo "<img src='images/Logo.png' alt='Responsive image' class='icon-header img-fluid'>" ?>
    	</a>

      <ul class="nav nav-pills fw-bolder text-dark">
        <li class="nav-item "><a href="Home.php" class="nav-link">Home</a></li>
        <li class="nav-item "><a href="Gallery.php" class="nav-link active">Gallery</a></li>
        <li class="nav-item "><a href="About.php" class="nav-link">About</a></li>
      </ul>

    </header>
   
    <div class="">



    <h2 class="fw-bolder text-uppercase px-4"><?php echo "Christina’s World" ?></h2>
     <?php echo"<img src='images/artwork_7.jpg' class='img-fluid d-block mx-auto py-3' alt='Responsive image'>" ?>
    <h6 class="px-4 text-justify"><?php echo "Artist: Andrew Wyeth" ?></h6>
    <h6 class="px-4 text-justify"><?php echo "Created: 1948" ?></h6>
     <p class="px-4 py-4 text-justify"><?php echo "“Christina’s World” continues to fascinate more than 70 years after it was first painted. The faceless woman lying on the ground was Anna Christina Olson, the neighbor and muse of Pennsylvania artist Andrew Wyeth. While the painting has all the hallmarks of a pastoral, Olson’s pose is not one of romantic languor; she suffered from a muscle-wasting disorder, possibly Charcot-Marie-Tooth disease and was known to drag herself across the family homestead." ?></p>
     <br>


   

   </div>

	<footer class="border-top bg-danger">
   			<p class="text-center py-1 text-light"><?php echo "Copyright &copy; 2022. Charie Ann Mascarenas & Rissha Angeline Jalotjot" ?></p>
  	</footer>

   </div>
</body>
</html>