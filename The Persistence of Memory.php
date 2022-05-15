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

 

    <h2 class="fw-bolder text-uppercase px-4"><?php echo "The Persistence of Memory" ?></h2>
    <?php echo"<img src='images/artwork_8.jpg' class='img-fluid d-block mx-auto py-3' alt= 'Responsive image'>" ?>
    <h6 class="px-4 text-justify"><?php echo "Artist: Salvador Dali" ?></h6>
    <h6 class="px-4 text-justify"><?php echo "Created: 1931" ?></h6>
     <p class="px-4 py-4 text-justify"><?php echo "Surrealist Salvador Dali subverts reality with this mesmerizing image of deflated timepieces scattered over a desert landscape. The composition defies logic, evoking a dream-like state.The main motifs of the painting are melting clocks and ants. The theme is time, expressed in a multitude of meanings. Ants appear as a symbol of decay in Dalí’s works and clock is a symbol of time. Melting clocks suggest that the time is melting, representing its relativity. The painting depicts a landscape, the seaside and cliffs, probably of the artist’s homeland in Catalonia, Spain. In the central part of the composition, there is a being, possibly human, with nose and closed eye, having long eyelashes. The artist was talking about his paintings as they are hand-painted dream photographs. Although the dreams belong to sphere of subconscious, Dalí painted them with incredible precision. Dali employed the “paranoiac-critical method” in his artistic process, self-inducing a delusional state." ?></p>
     <br>

   

   

   </div>

	<footer class="border-top bg-danger">
   			<p class="text-center py-1 text-light"><?php echo "Copyright &copy; 2022. Charie Ann Mascarenas & Rissha Angeline Jalotjot" ?></p>
  	</footer>

   </div>
</body>
</html>