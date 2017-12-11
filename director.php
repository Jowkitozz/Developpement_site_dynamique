 <div class="realisateur">
 	<h1>Réalisateur</h1>
 	<img src="<?php echo $data[45]['chemin'];?>" alt="<?php echo $data[45]['legende'];?>" />
 	<p>Nom : <?php echo $data[0]['nom'];?></p>
 	<p>Prénom : <?php echo $data[0]['prenom']; ?></p>
 	<p>Date de naissance : <?php echo $data[0]['date_de_naissance']; ?></p>
 	<h2>Biographie : </h2><?php echo $data[0]['biographie']; ?>
 </div>