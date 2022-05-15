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



    <h2 class="fw-bolder text-uppercase px-4"><?php echo "The Mona Lisa" ?></h2>
    <?php echo"<img src='images/artwork_1.jpg' class='img-fluid d-block mx-auto py-3' alt='Responsive image'>" ?>
    <h6 class="px-4 text-justify"><?php echo "Artist: Leonardo da Vinci" ?></h6>
    <h6 class="px-4 text-justify"><?php echo "Created: 1503"?></h6>
     <p class="px-4 py-4 text-justify"><?php echo "Leonardo da Vinci’s woman of mystery has intrigued viewers for centuries. Traditionally identified as Italian noblewoman Lisa Del Giocondo, countless hypotheses have been put forth as to the sitter’s identity as well as explanations for her seemingly enigmatic smile. The portrait shows the subject sitting upright and sideways in a chair, with her face and chest turned slightly towards the viewer: a posture derived from the 'pyramid' image used to depict a sitting Madonna. Her left arm sits comfortably on the armrest of the chair and is clasped by the hand of her right arm which crosses her front. The slightly protective position of her arms, as well as the armrest, creates a sense of distance between sitter and spectator.Extensive multi-spectral imaging conducted by Lumiere Technology in 2006, which uncovered years of varnish, didn’t shed any light as to the reasons behind the Mona Lisa’s facial expression, but it did reveal that her smile was originally broader than it appears today."?></p>
     <br>


   </div>

	<footer class="border-top bg-danger">
   			<p class="text-center py-1 text-light"><?php echo "Copyright &copy; 2022. Charie Ann Mascarenas & Rissha Angeline Jalotjot" ?></p>
  	</footer>

   </div>
</body>
</html>