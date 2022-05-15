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

 
    
    <h2 class="fw-bolder text-uppercase px-4"><?php echo "Starry Night" ?></h2>
    <?php echo"<img src='images/artwork_2.jpg' class='img-fluid d-block mx-auto py-3' alt='Responsive image'>" ?>
    <h6 class="px-4 text-justify"><?php echo "Artist: Vincent Van Gogh" ?></h6>
    <h6 class="px-4 text-justify"><?php echo "Created: 1889" ?></h6>
     <p class="px-4  text-justify"><?php echo "Van Gogh was seeking respite from plaguing depression at the Saint-Paul asylum in Saint-Rémy in southern France when he painted The Starry Night. It reflects his direct observations of his view of the countryside from his window as well as the memories and emotions this view evoked in him.Starry Night depicts a dreamy interpretation of the artist's asylum room's sweeping view of Saint-Rémy-de-Provence. Though Van Gogh revisited this scene in his work on several occasions,"?>
      <p class="px-4 text-justify"><?php echo "Starry Night is the only nocturnal study of the view. Thus, in addition to descriptions evident in the myriad of letters he wrote to his brother, Theo, it offers a rare nighttime glimpse into what the artist saw while in isolation. Through the iron-barred window I can make out a square of wheat in an enclosure, he wrote in May of 1889, above which in the morning I see the sunrise in its glory.An end-of-the-world cataclysm invades Van Gogh's Starry Night, one of apocalypse filled with melting aerolites and comets adrift. One has the impression that the artist has expelled his inner conflict onto a canvas. Everything here is brewed in a huge cosmic fusion. The sole exception is the village in the foreground with its architectural elements." ?></p>
        <br>

    

   </div>

	<footer class="border-top bg-danger">
   			<p class="text-center py-1 text-light"><?php echo "Copyright &copy; 2022. Charie Ann Mascarenas & Rissha Angeline Jalotjot" ?></p>
  	</footer>

   </div>
</body>
</html>