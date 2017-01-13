<?php include("template.php");?>

<section>
	<?php
		if (isset($_GET['col']))
		{
			include ('connexionBDD.php');
			/*ORDONNER LES RESULTATS DES REQUETES*/
			//~ if($_GET['col']=='GOLDSTAMP')
			//~ {
				//~ $answer = $bdd->query('SELECT DISTINCT (GOLDSTAMP) FROM project');
				//~ $answer2 = $bdd->query('SELECT COUNT(DISTINCT GOLDSTAMP) FROM project');
				//~ $nb = $answer2->fetch();
				//~ $count = $nb['COUNT(DISTINCT GOLDSTAMP)'];
			//~ }
			//~ elseif($_GET['col']=='NCBI_PROJECT_NAME')
			//~ {
				//~ $answer = $bdd->query('SELECT DISTINCT (NCBI_PROJECT_NAME) FROM project');
				//~ $answer2 = $bdd->query('SELECT COUNT(DISTINCT NCBI_PROJECT_NAME) FROM project');
				//~ $nb = $answer2->fetch();
				//~ $count = $nb['COUNT(DISTINCT NCBI_PROJECT_NAME)'];
			//~ }
			if($_GET['col']=='PROJECT_TYPE')
			{
				$answer = $bdd->query('SELECT DISTINCT (PROJECT_TYPE) FROM project');
				$answer2 = $bdd->query('SELECT COUNT(DISTINCT PROJECT_TYPE) FROM project');
				$nb = $answer2->fetch();
				$count = $nb['COUNT(DISTINCT PROJECT_TYPE)'];
			}
			elseif($_GET['col']=='CONTACT_NAME')
			{
				$answer = $bdd->query('SELECT DISTINCT (CONTACT_NAME) FROM project');
				$answer2 = $bdd->query('SELECT COUNT(DISTINCT CONTACT_NAME) FROM project');
				$nb = $answer2->fetch();
				$count = $nb['COUNT(DISTINCT CONTACT_NAME)'];
			}
			elseif($_GET['col']=='SEQUENCING_CENTERS')
			{
				$answer = $bdd->query('SELECT DISTINCT (SEQUENCING_CENTERS) FROM project');
				$answer2 = $bdd->query('SELECT COUNT(DISTINCT SEQUENCING_CENTERS) FROM project');
				$nb = $answer2->fetch();
				$count = $nb['COUNT(DISTINCT SEQUENCING_CENTERS)']-1;
			}
			//~ elseif($_GET['col']=='SEQUENCING_STATUS')
			//~ {
				//~ $answer = $bdd->query('SELECT DISTINCT (SEQUENCING_STATUS) FROM project');
				//~ $answer2 = $bdd->query('SELECT COUNT(DISTINCT SEQUENCING_STATUS) FROM project');
				//~ $nb = $answer2->fetch();
				//~ $count = $nb['COUNT(DISTINCT SEQUENCING_STATUS)'];
			//~ }
			elseif($_GET['col']=='FUNDING')
			{
				$answer = $bdd->query('SELECT DISTINCT (FUNDING) FROM project');
				$answer2 = $bdd->query('SELECT COUNT(DISTINCT FUNDING) FROM project');
				$nb = $answer2->fetch();
				$count = $nb['COUNT(DISTINCT FUNDING)']-1;
			}
			elseif($_GET['col']=='DOMAIN')
			{
				$answer = $bdd->query('SELECT DISTINCT (DOMAIN) FROM taxon');
				$answer2 = $bdd->query('SELECT COUNT(DISTINCT DOMAIN) FROM taxon');
				$nb = $answer2->fetch();
				$count = $nb['COUNT(DISTINCT DOMAIN)'];
			}
			elseif($_GET['col']=='KINGDOM')
			{
				$answer = $bdd->query('SELECT DISTINCT (KINGDOM) FROM taxon');
				$answer2 = $bdd->query('SELECT COUNT(DISTINCT KINGDOM) FROM taxon');
				$nb = $answer2->fetch();
				$count = $nb['COUNT(DISTINCT KINGDOM)']-1;
			}
			elseif($_GET['col']=='PHYLUM')
			{
				$answer = $bdd->query('SELECT DISTINCT (PHYLUM) FROM taxon');
				$answer2 = $bdd->query('SELECT COUNT(DISTINCT PHYLUM) FROM taxon');
				$nb = $answer2->fetch();
				$count = $nb['COUNT(DISTINCT PHYLUM)']-1;
			}
			elseif($_GET['col']=='CLASS')
			{
				$answer = $bdd->query('SELECT DISTINCT (CLASS) FROM taxon');
				$answer2 = $bdd->query('SELECT COUNT(DISTINCT CLASS) FROM taxon');
				$nb = $answer2->fetch();
				$count = $nb['COUNT(DISTINCT CLASS)']-1;
			}
			elseif($_GET['col']=='ORDER_')
			{
				$answer = $bdd->query('SELECT DISTINCT (ORDER_) FROM taxon');
				$answer2 = $bdd->query('SELECT COUNT(DISTINCT ORDER_) FROM taxon');
				$nb = $answer2->fetch();
				$count = $nb['COUNT(DISTINCT ORDER_)']-1;
			}
			//~ elseif($_GET['col']=='FAMILY')
			//~ {
				//~ $answer = $bdd->query('SELECT DISTINCT (FAMILY) FROM taxon');
				//~ $answer2 = $bdd->query('SELECT COUNT(DISTINCT FAMILY) FROM taxon');
				//~ $nb = $answer2->fetch();
				//~ $count = $nb['COUNT(DISTINCT FAMILY)'];
			//~ }
			//~ elseif($_GET['col']=='GENUS')
			//~ {
				//~ $answer = $bdd->query('SELECT DISTINCT (GENUS) FROM taxon');
				//~ $answer2 = $bdd->query('SELECT COUNT(DISTINCT GENUS) FROM taxon');
				//~ $nb = $answer2->fetch();
				//~ $count = $nb['COUNT(DISTINCT GENUS)'];
			//~ }
			//~ elseif($_GET['col']=='SPECIES')
			//~ {
				//~ $answer = $bdd->query('SELECT DISTINCT (SPECIES) FROM taxon');
				//~ $answer2 = $bdd->query('SELECT COUNT(DISTINCT SPECIES) FROM taxon');
				//~ $nb = $answer2->fetch();
				//~ $count = $nb['COUNT(DISTINCT SPECIES)'];
			//~ }
	?>
		
		
		<div id="center">
			<h1 style="padding-left:50px;">Results: lists of <?php echo $_GET['col'];?></h1>
			<h4 style="padding-left:50px;"><?php echo $count.' results';?></h4>
			<table class="tab1">
			<?php
				while ($data = $answer->fetch())
				{
					if($data[$_GET['col']] == "None")
					{
						$data = $answer->fetch();
					}
					if($data)
					{
			?>
					<tr><td><ul><li><a href="rechnav.php?query=<?php echo $data[$_GET['col']];?>" ><?php echo $data[$_GET['col']];
						$data = $answer->fetch();
					}
					if($data && $data[$_GET['col']] == "None")
					{
						$data = $answer->fetch();
					}
					if($data)
					{
					?></a></li></ul></td>
					
					<td><ul><li><a href="rechnav.php?query=<?php echo $data[$_GET['col']];?>" ><?php echo $data[$_GET['col']];
						$data = $answer->fetch();
					}
					if($data && $data[$_GET['col']] == "None")
					{
						$data = $answer->fetch();
					}
					if($data)
					{
					?></a></li></ul></td>
											
					<td><ul><li><a href="rechnav.php?query=<?php echo $data[$_GET['col']];?>" ><?php echo $data[$_GET['col']];
					}
					?></a></li></ul></td></tr>
			<?php
				}
			
			$answer->closeCursor();
	}		
			?>
			</table>
		</div>

</section>
