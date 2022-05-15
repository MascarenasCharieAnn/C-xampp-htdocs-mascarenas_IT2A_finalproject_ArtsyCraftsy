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


    <h2 class="fw-bolder text-uppercase px-4"><?php echo "American Gothic" ?></h2>
   <?php echo"<img src='images/artwork_4.jpg' class='img-fluid d-block mx-auto py-3' alt='Responsive image'>" ?>
    <h6 class="px-4 text-justify"><?php echo "Artist: Grant Wood" ?></h6>
    <h6 class="px-4 text-justify"><?php echo "Created: 1930" ?></h6>
     <p class="px-4 py-4 text-justify"><?php echo "The painting was inspired by a house that Wood saw in southern Iowa. The house can be seen in the background of the painting. Wood then sought out models (his dentist and his sister) to represent the type of person he imagined would live in such a home. The spikes of the three-pronged pitchfork are at the centre of the painting.The figures in the painting have exaggerated long features, reflecting the long gothic window that can be seen behind them. The work that would make him famous, however, was painted after his return to the heartland. A national icon and leading exponent of regionalism, “American Gothic” depicts what appears to be a Depression-era farmer and his weathered wife. Grant intended the couple to represent father and daughter; in reality, they were neither. The man holding the pitchfork was Wood’s dentist, Byron McKeeby, flanked by the artist’s sister, Nan Wood Graham." ?>
    <p class="px-4 text-justify"> <?php echo "For many people, the exaggerated faces and expressions of the subjects of the painting seem to present a kind of satire of rural American life. It is speculated that Iowans did not take kindly to the image, many expressing severe distaste for the way it represented Iowan life.Wood never clarified whether the image was meant to be sincere or satirising. During his life he made a number of confusing statements in answer to the question. “There is satire in it,” he said, “but only as there is satire in any realistic statement”Grant Wood spent years searching for inspiration in Europe." ?></p>
     <br>


   </div>

	<footer class="border-top bg-danger">
   			<p class="text-center py-1 text-light"><?php echo "Copyright &copy; 2022. Charie Ann Mascarenas & Rissha Angeline Jalotjot" ?></p>
  	</footer>

   </div>
</body>
</html>