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

 

    <h2 class="fw-bolder text-uppercase px-4"><?php echo"The Son of Man"?></h2>
    <?php echo "<img src='images/artwork_12.jpg' class='img-fluid d-block mx-auto py-3' alt='Responsive image'>" ?>
    <h6 class="px-4 text-justify"><?php echo "Artist: René Magritte" ?></h6>
    <h6 class="px-4 text-justify"><?php echo "Created: 1964" ?></h6>
     <p class="px-4 py-4 text-justify"><?php echo "The meaning of the painting is cryptic, but one can extrapolate some meaning from the words of Magritte himself. He spoke specifically of that feeling of human curiosity, where one seeks to see the hidden things that exist behind the other objects that we see, but one is often frustrated in this pursuit. The painting appears to capture this frustration or “conflict,” as Magritte put it by allowing us only a slight glimpse of the man's face behind the fruit. The deeper meaning of this conflict, and whether it speaks of the incidental hiddenness of objects behind other objects, or whether it speaks of the human conflict of wanting to hide ones true face from the prying eyes of others, is up to interpretation. At face value, however, it is an interesting exercise in stirring the curiosity of the viewer and making him feel as if he is not seeing the whole picture, leaving him slightly unsatisfied and with a sense of mystery about what he has seen." ?></p>
     <br>

   

   </div>

	<footer class="border-top bg-danger">
   			<p class="text-center py-1 text-light"><?php echo "Copyright &copy; 2022. Charie Ann Mascarenas & Rissha Angeline Jalotjot" ?></p>
  	</footer>

   </div>
</body>
</html>