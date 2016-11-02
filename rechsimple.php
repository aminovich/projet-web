<?php include("template.php");?>

<!--/*Eviter recherche vide!!*/-->

<section>
	<?php
	if (isset($_POST['query']))
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=ProjetWeb;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
		
		$answer = $bdd->prepare('SELECT DISTINCT * FROM project WHERE GOLDSTAMP LIKE ?');
		$answer->execute(array("%".$_POST['query']."%"));
		$answer2 = $bdd->prepare('SELECT COUNT(DISTINCT GOLDSTAMP) FROM project WHERE GOLDSTAMP LIKE ?');
		$answer2->execute(array("%".$_POST['query']."%"));
		$count = $answer2->fetch();
	?>
	<div id="center">
		<h1>Results</h1>
		<h4>Query:<?php echo '"'.$_POST['query'].'"<br>'.$count["COUNT(DISTINCT GOLDSTAMP)"].' results';?></h4>
		<table class="tab">
			<tr>
				<th class="col">#</th>
				<th class="col">Goldstamp</th>
				<th class="col">NCBI Project Name</th>
				<th class="col">Sequencing Centers</th>
				<th class="col">NCBI Bioproject ID</th>
			</tr>
	<?php
		$i=0;
		while ($data = $answer->fetch())
		{
			$i++;
	?>
			<tr>
				<td class="col"><?php echo $i?></td>
				<td class="col"><a href="fiche.php?Gp=<?php echo $data['GOLDSTAMP'];?>"> <?php echo $data['GOLDSTAMP'];?></a></td>
				<td class="col"><?php echo $data['NCBI_PROJECT_NAME'];?></td>
				<td class="col"><?php echo $data['SEQUENCING_CENTERS'];?></td>
				<td class="col"><?php echo $data['NCBI_BIOPROJECT_ID'];?></td>
			</tr>
	<?php 
		}

		$answer->closeCursor();
	}

	?>
		</table>
	</div>

</section>