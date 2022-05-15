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

      <ul class="nav nav-pills fw-bolder text-dark">
        <li class="nav-item "><a href="Home.php" class="nav-link">Home</a></li>
        <li class="nav-item "><a href="Gallery.php" class="nav-link active">Gallery</a></li>
        <li class="nav-item "><a href="About.php" class="nav-link">About</a></li>
      </ul>

    </header>
   
    <div class="">


    <h2 class="fw-bolder text-uppercase px-4"><?php echo "Flaming June" ?></h2>
    <?php echo"<img src='images/artwork_10.jpg' class='img-fluid d-block mx-auto py-3' alt='Responsive image'>" ?>
    <h6 class="px-4 text-justify"><?php echo "Artist: Sir Frederic Leighton" ?></h6>
    <h6 class="px-4 text-justify"><?php echo "Created: 1895" ?></h6>
     <p class="px-4 py-4 text-justify"><?php echo "“Flaming June,” of the languid beauty in the transparent orange dress, was painted by esteemed British artist Frederic Leighton at the close of the 19th century. The painting disappeared soon after, only to reemerge in the early 1960s when it was supposedly discovered in a chimney by a laborer working at a construction site. Considered highly unfashionable at the time, the painting failed to make reserve when it came to auction. It was acquired soon after by Puerto Rico’s Museo de Arte de Ponce, where it remains to this day."?></p>
     <br>

   

   

   </div>

	<footer class="border-top bg-danger">
   			<p class="text-center py-1 text-light"><?php echo "Copyright &copy; 2022. Charie Ann Mascarenas & Rissha Angeline Jalotjot" ?></p>
  	</footer>

   </div>
</body>
</html>