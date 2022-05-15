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



    <h2 class="fw-bolder text-uppercase px-4"><?php echo "Arnolfini Portrait" ?></h2>
     <?php echo"<img src='images/artwork_5.jpg' class='img-fluid d-block mx-auto py-3' alt='Responsive image'>" ?>
    <h6 class="px-4 text-justify"><?php echo "Artist: Jan van Eyck" ?></h6>
    <h6 class="px-4 text-justify"><?php echo "Created: 1434" ?></h6>
     <p class="px-4 py-4 text-justify"><?php echo "Painted by Dutch master Jan van Eyck, this early Netherlandish panel painting is shrouded in symbolism. The elegantly dressed couple are thought to be Giovanni di Nicolao di Arnolfini, and his wife, Costanza Trenta, wealthy Italians living in Bruges. The unusual composition begs several questions. Does the painting celebrate the couple’s wedding, or commemorate some other event, such as a shrewdly negotiated marriage contract? Was the bride pregnant, or simply dressed in the latest fashion? And what are the mysterious figures depicted in the convex mirror? The unorthodox placement of van Eyck’s signature directly above it suggests one of the men may be the artist himself."?></p>
     <br>


   </div>

	<footer class="border-top bg-danger">
   			<p class="text-center py-1 text-light"><?php echo "Copyright &copy; 2022. Charie Ann Mascarenas & Rissha Angeline Jalotjot" ?></p>
  	</footer>

   </div>
</body>
</html>