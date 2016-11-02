<?php include("template.php");?>

<!--Ajouter Verif!!-->

<section>
	<?php
		if (isset($_GET['Gp']))
		{
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=ProjetWeb;charset=utf8', 'root', '');
			}
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
			$answer = $bdd->prepare('SELECT DISTINCT * FROM project,taxon WHERE GOLDSTAMP=? AND project.NCBI_TAXON_ID=taxon.NCBI_TAXON_ID');
			$answer->execute(array($_GET['Gp']));
	?>
		<div id="fiche">
			<h1>Fiche</h1>
			<table class="proj">
				<caption style="font-weight:bold;font-size:18px">Project</caption>
	<?php
			while ($data = $answer->fetch())
			{
				echo '<TR><TH>Goldstamp</TH><TD>'.$data['GOLDSTAMP'].'</TD></TR>
				<TR><TH>Legacy Goldstamp</TH><TD>'.$data['LEGACY_GOLDSTAMP'].'</TD></TR>
				<TR><TH>Project Name</TH><TD>'.$data['PROJECT_NAME'].'</TD></TR>
				<TR><TH>Project Type</TH><TD>'.$data['PROJECT_TYPE'].'</TD></TR>
				<TR><TH>Project Status</TH><TD>'.$data['PROJECT_STATUS'].'</TD></TR>
				<TR><TH>Sequencing Status</TH><TD>'.$data['SEQUENCING_STATUS'].'</TD></TR>
				<TR><TH>Sequencing Centers</TH><TD>'.$data['SEQUENCING_CENTERS'].'</TD></TR>
				<TR><TH>Funding</TH><TD>'.$data['FUNDING'].'</TD></TR>
				<TR><TH>Contact Name</TH><TD>'.$data['CONTACT_NAME'].'</TD></TR>
				<TR><TH>NCBI Bioproject ID</TH><TD>'.$data['NCBI_BIOPROJECT_ID'].'</TD></TR>
				<TR><TH>NCBI Project Name</TH><TD>'.$data['NCBI_PROJECT_NAME'].'</TD></TR>
				<TR><TH>NCBI Taxon ID</TH><TD>'.$data['NCBI_TAXON_ID'].'</TD></TR>';
	?>
			</table>
			
			<table class="taxon">
				<caption style="font-weight:bold;font-size:18px">Taxon</caption>
	<?php
				echo '<TR><TH>Domain</TH><TD>'.$data['DOMAIN'].'</TD></TR>
				<TR><TH>Kingdom</TH><TD>'.$data['KINGDOM'].'</TD></TR>
				<TR><TH>Phylum</TH><TD>'.$data['PHYLUM'].'</TD></TR>
				<TR><TH>Class</TH><TD>'.$data['CLASS'].'</TD></TR>
				<TR><TH>Order</TH><TD>'.$data['ORDER_'].'</TD></TR>
				<TR><TH>Family</TH><TD>'.$data['FAMILY'].'</TD></TR>
				<TR><TH>Genus</TH><TD>'.$data['GENUS'].'</TD></TR>
				<TR><TH>Species</TH><TD>'.$data['SPECIES'].'</TD></TR>';
			}

			$answer->closeCursor();
		}
	?>
		</table>
	</div>

</section>
