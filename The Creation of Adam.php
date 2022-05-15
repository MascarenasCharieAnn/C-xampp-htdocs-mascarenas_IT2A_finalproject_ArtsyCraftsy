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



    <h2 class="fw-bolder text-uppercase px-4"><?php echo "The Creation of Adam" ?></h2>
    <?php echo"<img src='images/artwork_9.jpg' class='img-fluid d-block mx-auto py-3' alt='Responsive image'>" ?>
    <h6 class="px-4 text-justify"><?php echo "Artist: Michelangelo Buonarroti" ?></h6>
    <h6 class="px-4 text-justify"><?php echo "Created:Year: 1512" ?></h6>
     <p class="px-4 py-4 text-justify"><?php echo "The Creation of Adam is a detailed, incredible work that can be interpreted in many different ways. The image has a spiritual message that asserts God as creator of humanity, but the image could also have an anatomical meaning as well. Michelangelo’s Creation of Adam, in which God stretches out his finger to endow Adam with the spark of life. In this scene, the two focal characters are set in contrast. Adam is depicted as earthbound and slightly sluggish, while God has a commanding presence and appears to be barreling through the heavens surrounded by a cadre of angels. Yet Adam’s muscular, well-formed body, echoing the position of the Creator, communicates the true significance of the scene that Man is created in the image of God." ?></p>
     <br>

   

   </div>

	<footer class="border-top bg-danger">
   			<p class="text-center py-1 text-light"><?php echo "Copyright &copy; 2022. Charie Ann Mascarenas & Rissha Angeline Jalotjot" ?></p>
  	</footer>

   </div>
</body>
</html>