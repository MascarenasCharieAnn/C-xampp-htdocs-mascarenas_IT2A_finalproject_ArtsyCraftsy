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



    <h2 class="fw-bolder text-uppercase px-4"><?php echo "Le Déjeuner sur l'herbe" ?></h2>
    <?php echo"<img src='images/artwork_6.jpg' class='img-fluid d-block mx-auto py-3' alt='Responsive image'>" ?>
    <h6 class="px-4 text-justify"><?php echo "Artist: Edouard Manet" ?></h6>
    <h6 class="px-4 text-justify"><?php echo "Created: 1863" ?></h6>
     <p class="px-4 py-4 text-justify"><?php echo "Edouard Manet’s sensational “Le Déjeuner sur l'herbe” (“The Luncheon on the Grass”) scandalized 19th-century Paris, not for its stark nudity, but because it broke with a long-standing tradition of depicting nudes in classical settings. The Paris Salon rejected the painting, declaring it obscene. Victorine-Louise Meurent, the naked woman staring unapologetically at the viewer, was assumed by many to be a local prostitute; she was actually a sought-after Parisian artist’s model and an accomplished painter in her own right."?></p>
     <br>

  

   </div>

	<footer class="border-top bg-danger">
   			<p class="text-center py-1 text-light"><?php echo "Copyright &copy; 2022. Charie Ann Mascarenas & Rissha Angeline Jalotjot" ?></p>
  	</footer>

   </div>
</body>
</html>