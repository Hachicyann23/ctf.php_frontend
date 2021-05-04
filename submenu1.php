<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://kit.fontawesome.com/b4f4eda484.js" crossorigin="anonymous"></script>
	<title>Submenu1</title>
</head>

<body>
<?php  include "template/header.temp.php"; ?>

	<section class="containerSoal">
	<div class="menuContainer">
		<?php
				$point 		='40';
				$judulSoal	='The Inspector';
				$hint		='Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ea sunt porro laboriosam, laudantium placeat! Itaque consequuntur placeat nemo eos?';
				 include 'template/boxsoal.temp.php';

				 $point 		='10';
				 $judulSoal	='The Inspector';
				 $hint		='Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ea sunt porro laboriosam, laudantium placeat! Itaque consequuntur placeat nemo eos?';
				  include 'template/boxsoal.temp.php';
				  
				 
				  $point 		='20';
				  $judulSoal	='The Inspector';
				  $hint		='Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ea sunt porro laboriosam, laudantium placeat! Itaque consequuntur placeat nemo eos?';
				   include 'template/boxsoal.temp.php';


				   $point 		='100';
				   $judulSoal	='The Inspector';
				   $hint		='Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ea sunt orro laboriosam, laudantium placeat! Itaque consequuntur placeat nemo eos?';
					include 'template/boxsoal.temp.php';

					$point 		='100';
					$judulSoal	='The Inspector';
					$hint		='Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ea sunt orro laboriosam, laudantium placeat! Itaque consequuntur placeat nemo eos?';
					 include 'template/boxsoal.temp.php';
 

				 ?>
</div>
	</section>
	<?php include "template/footer.temp.php"?>
</body>

</html>