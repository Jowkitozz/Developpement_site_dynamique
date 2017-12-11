<div class="acteur">

	<div class="name">
		<p><a href="?id=0">Mark Wahlberg</a> - <a href="?id=1">LauraHaddock</a> - <a href="?id=2">Anthony Hopkins</a> - <a href="?id=3">Isabela Moner</a></p>
		<p><a href="?id=4">Jerrod Carmichael</a> - <a href="?id=5">Josh Duhamel</a> - <a href="?id=6">Stanley Tucci</a> - <a href="?id=7">Santiago Cabrera</a></p>
	</div>
	

	

	<?php

	if ($_GET['id'] == 0) {
		?>
	<img src="<?php echo $data[54]['chemin'];?>" alt="<?php echo $data[54]['legende'];?>" />
	<p>Nom : <?php echo $data[1]['nom'];?></p>
	<p>Prénom : <?php echo $data[1]['prenom'];?></p>
	<p>Date de naissance :<?php echo $data[1]['date_de_naissance'];?></p>
	<h2>Biographie : </h2><?php echo $data[1]['biographie']; ?>
		<?php
		
	}
	elseif($_GET['id'] == 1){
				?>
	<img src="<?php echo $data[63]['chemin'];?>" alt="<?php echo $data[63]['legende'];?>" />
	<p>Nom : <?php echo $data[2]['nom'];?></p>
	<p>Prénom : <?php echo $data[2]['prenom'];?></p>
	<p>Date de naissance :<?php echo $data[2]['date_de_naissance'];?></p>
	<h2>Biographie : </h2><?php echo $data[2]['biographie']; ?>
		<?php
	}
	elseif($_GET['id'] == 2){
		?>
	<img src="<?php echo $data[72]['chemin'];?>" alt="<?php echo $data[72]['legende'];?>" />
	<p>Nom : <?php echo $data[3]['nom'];?></p>
	<p>Prénom : <?php echo $data[3]['prenom'];?></p>
	<p>Date de naissance :<?php echo $data[3]['date_de_naissance'];?></p>
	<h2>Biographie : </h2><?php echo $data[3]['biographie']; ?>
		<?php
	}
	elseif($_GET['id'] == 3){
		?>
	<img src="<?php echo $data[81]['chemin'];?>" alt="<?php echo $data[81]['legende'];?>" />
	<p>Nom : <?php echo $data[4]['nom'];?></p>
	<p>Prénom : <?php echo $data[4]['prenom'];?></p>
	<p>Date de naissance :<?php echo $data[4]['date_de_naissance'];?></p>
	<h2>Biographie : </h2><?php echo $data[4]['biographie']; ?>
		<?php
	}
		elseif($_GET['id'] == 4){
		?>
	<img src="<?php echo $data[90]['chemin'];?>" alt="<?php echo $data[90]['legende'];?>" />
	<p>Nom : <?php echo $data[5]['nom'];?></p>
	<p>Prénom : <?php echo $data[5]['prenom'];?></p>
	<p>Date de naissance :<?php echo $data[5]['date_de_naissance'];?></p>
	<h2>Biographie : </h2><?php echo $data[5]['biographie']; ?>
		<?php
	}
		elseif($_GET['id'] == 5){
		?>
	<img src="<?php echo $data[99]['chemin'];?>" alt="<?php echo $data[99]['legende'];?>" />
	<p>Nom : <?php echo $data[6]['nom'];?></p>
	<p>Prénom : <?php echo $data[6]['prenom'];?></p>
	<p>Date de naissance :<?php echo $data[6]['date_de_naissance'];?></p>
	<h2>Biographie : </h2><?php echo $data[6]['biographie']; ?>
		<?php
	}
		elseif($_GET['id'] == 6){
		?>
	<img src="<?php echo $data[108]['chemin'];?>" alt="<?php echo $data[108]['legende'];?>" />
	<p>Nom : <?php echo $data[7]['nom'];?></p>
	<p>Prénom : <?php echo $data[7]['prenom'];?></p>
	<p>Date de naissance :<?php echo $data[7]['date_de_naissance'];?></p>
	<h2>Biographie : </h2><?php echo $data[7]['biographie']; ?>
		<?php
	}
			elseif($_GET['id'] == 7){
		?>
	<img src="<?php echo $data[117]['chemin'];?>" alt="<?php echo $data[117]['legende'];?>" />
	<p>Nom : <?php echo $data[8]['nom'];?></p>
	<p>Prénom : <?php echo $data[8]['prenom'];?></p>
	<p>Date de naissance :<?php echo $data[8]['date_de_naissance'];?></p>
	<h2>Biographie : </h2><?php echo $data[8]['biographie']; ?>
		<?php
	}

	?>
	
</div>