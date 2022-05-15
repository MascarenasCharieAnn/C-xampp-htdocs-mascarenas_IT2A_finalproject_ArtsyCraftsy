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
        <li class="nav-item"><a href="Home.php" class="nav-link active">Home</a></li>
        <li class="nav-item"><a href="Gallery.php" class="nav-link">Gallery</a></li>
        <li class="nav-item"><a href="About.php" class="nav-link">About</a></li>
      </ul>

    </header>
    

  	<?php echo "<img src='images/Logo.png' class='img-responsive d-block mx-auto' alt='Responsive image'>"?>
  	<h1 class="fw-bolder text-center display-5">Welcome to ArtsyCraftsy</h1>
    <p class="lead text-center"><?php echo "Explore Famous Paintings Of All Time In The History Of Art"?></p>

    <?php echo "<img src='images/Cover.jpg' class='img-fluid' alt='Responsive image'>"?>
    <?php echo "<img src='images/artworkscollage.jpg' class='img-fluid' alt='Responsive image'>"?>
    <p class="text-center py-4 px-4"><?php echo "A picture is worth a thousand words, and like texts, art is often meant to be “read” through critical deconstruction. Art is a highly diverse range of human activities engaged in creating visual, auditory, or performed artifacts, artworks, that express the author’s imaginative or technical skill, and are intended to be appreciated for their beauty or emotional power. Paintings can be far more complicated than they appear at first glance and difficult to decipher if the viewer doesn’t speak the same tongue. The meaning of art is shaped by the intentions of the artist as well as the feelings and ideas it conveys to the viewer."?></p>
    <p class="text-center px-4"><?php echo "Here are the most famous paintings of all time that are recognized by people all over the world and of all ages.
    These famous artworks will continue to resonate and leave impressions in the minds of people for centuries to come.The list of famous painters and their paintings in the world also includes the description of these popular paintings, to help understand their significance in art history."?> </p>
    <br>


	<footer class="border-top bg-danger">
        <p class="text-center py-1 text-light">
          <?php echo "Copyright &copy; 2022. Charie Ann Mascarenas & Rissha Angeline Jalotjot" ?></p>
    </footer>

   </div>
   
</body>
</html>