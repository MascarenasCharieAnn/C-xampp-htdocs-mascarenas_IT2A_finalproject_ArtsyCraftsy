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



    <h2 class="fw-bolder text-uppercase px-4"><?php echo "Primavera" ?></h2>
    <?php echo"<img src='images/artwork_11.jpg' class='img-fluid d-block mx-auto py-3' alt='Responsive image'>" ?>
    <h6 class="px-4 text-justify"><?php echo "Artist: Sandro Botticelli" ?></h6>
    <h6 class="px-4 text-justify"><?php echo "Created: 1477–1482" ?></h6>
     <p class="px-4 py-4 text-justify"><?php echo "“Primavera” is an allegorical work inspired by classical mythology, depicting the transformation of the nymph Chloris into Flora, the goddess of spring. Commissioned by a member of the powerful Medici clan, it has been suggested that figures in the composition were modeled on members of the family. It is important to note that Venus is represented here as a goddess of marriage, fully clothed and with her modest hairstyle, as married women were expected to appear in public. She is traditionally followed by the Three Graces (Pleasure, Chastity, and Beauty), sisters that are usually nude and stand with joined hands; however, their attire in Primavera is also adjusted to the Venus. This depiction is probably based on the Seneca adaptation by Leon Battista Alberti in his influential book De pictura that Botticelli definitely knew."?></p>

  <p class="px-4 text-justify"><?php echo "In general, Primavera was interpreted as an illustration of the ideal of Neoplatonic love that was adorned among the Medicis and their followers. According to the Neoplatonic philosophy, Venus was perceived as an embodiment of both earthly and divine love, a principle equivalent of the Virgin Mary in Christianity" ?></p>
     <br>

   
   

   </div>

	<footer class="border-top bg-danger">
   			<p class="text-center py-1 text-light"><?php echo "Copyright &copy; 2022. Charie Ann Mascarenas & Rissha Angeline Jalotjot" ?></p>
  	</footer>

   </div>
</body>
</html>