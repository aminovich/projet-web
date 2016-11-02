<?php include("template.php");?>

<?php
include 'connexionBDD.php';
$req=$bdd->query('SELECT distinct (PROJECT_TYPE) FROM `project`');
$req2=$bdd->query('SELECT distinct (PROJECT_STATUS) FROM `project`');
$req3=$bdd->query('SELECT DISTINCT `SEQUENCING_STATUS` FROM `project`');
$req4=$bdd->query('SELECT DISTINCT `SEQUENCING_CENTERS` FROM `project`');
$req5=$bdd->query('SELECT DISTINCT `FUNDING` FROM `project`');
$req6=$bdd->query('SELECT DISTINCT `CONTACT_NAME` FROM `project`');

?>

<section>
	<div id="center">
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<p>GOLDSTAMP</br>
		<input type="text" name="GOLDSTAMP" /></p>
		<p>LEGACY_GOLDSTAMP</br>
		<input type="text" name="LEGACY_GOLDSTAMP" /></p>
		<p>PROJECT_NAME</br>
		<input type="text" name="PROJECT_NAME" /></p>
		<p><label for="PROJECT_TYPE">PROJECT_TYPE</label></br>
		<select style='width:300px' name="PROJECT_TYPE" id="PROJECT_TYPE">
		<?php
			while ($tab_rep = $req->fetch()){
				?><option value=<?php $tab_rep['PROJECT_TYPE'] ?> > <?php echo $tab_rep['PROJECT_TYPE'] ?></option> <?php
			}
			$req->closeCursor();
		?>
		</select></p>
		<p><label for="PROJECT_STATUS">PROJECT_STATUS</label></br>
		<select style='width:300px' name="PROJECT_STATUS" id="PROJECT_STATUS">
		<?php
			while ($tab_rep = $req2->fetch()){
				?><option value=<?php $tab_rep['PROJECT_STATUS'] ?> > <?php echo $tab_rep['PROJECT_STATUS'] ?></option> <?php
			}
			$req2->closeCursor();
		?>
		</select></p>
		<p><label for="SEQUENCING_STATUS">SEQUENCING_STATUS</label></br>
		<select style='width:300px' name="SEQUENCING_STATUS" id="SEQUENCING_STATUS">
		<?php
			while ($tab_rep = $req3->fetch()){
				?><option value=<?php $tab_rep['SEQUENCING_STATUS'] ?> > <?php echo $tab_rep['SEQUENCING_STATUS'] ?></option> <?php
			}
			$req3->closeCursor();
		?>
		</select></p>
		<p><label for="SEQUENCING_CENTERS">SEQUENCING_CENTERS</label></br>
		<select style='width:300px' name="SEQUENCING_CENTERS" id="SEQUENCING_CENTERS">
		<?php
			while ($tab_rep = $req4->fetch()){
				?><option value=<?php $tab_rep['SEQUENCING_CENTERS'] ?> > <?php echo $tab_rep['SEQUENCING_CENTERS'] ?></option> <?php
			}
			$req4->closeCursor();
		?>
		</select></p>
		<p><label for="FUNDING">FUNDING</label></br>
		<select style='width:300px' name="FUNDING" id="FUNDING">
		<?php
			while ($tab_rep = $req5->fetch()){
				?><option value=<?php $tab_rep['FUNDING'] ?> > <?php echo $tab_rep['FUNDING'] ?></option> <?php
			}
			$req5->closeCursor();
		?>
		</select></p>
		<p><label for="CONTACT_NAME">CONTACT_NAME</label></br>
		<select style='width:300px' name="CONTACT_NAME" id="CONTACT_NAME">
		<?php
			while ($tab_rep = $req6->fetch()){
				?><option value=<?php $tab_rep['CONTACT_NAME'] ?> > <?php echo $tab_rep['CONTACT_NAME'] ?></option> <?php
			}
			$req6->closeCursor();
		?>
		</select></p>
		<p>NCBI_BIOPROJECT_ID</br>
		<input type="number"  name="NCBI_BIOPROJECT_ID" id="NCBI_BIOPROJECT_ID"/></p>
		<p>NCBI_PROJECT_NAME</br>
		<input type="text" name="NCBI_PROJECT_NAME" /></p>
		<p>NCBI_TAXON_ID</br>
		<input type="number"  name="NCBI_TAXON_ID" id="NCBI_TAXON_ID"/></p>
	</form>
	<aside>

	</aside>
	</div>
</section>