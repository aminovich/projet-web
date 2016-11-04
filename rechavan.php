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
<script language="javascript" type="text/javascript">
 
function showHideText(divID)
{
	if (document.getElementById(divID).style.display=='block'){
		document.getElementById(divID).style.display='none';
        }
    else
    {
        document.getElementById(divID).style.display='block';
    }
}
</script>


<section>
	<div id="center">
		<div id="li_form_cb">
			<form method="post">
				<label><INPUT type="checkbox" id="formgold" name="switchBox" onclick="showHideText('divgold')">GOLDSTAMP</label>
			</form>
			<form method="post">
				<label><INPUT type="checkbox" id="formleg" name="switchBox" onclick="showHideText('divleg')">LEGACY_GOLDSTAMP</label>
			</form>
			<form method="post">
				<label><INPUT type="checkbox" id="formpn" name="switchBox" onclick="showHideText('divpn')">PROJECT_NAME</label>
			</form>
			<form method="post">
				<label><INPUT type="checkbox" id="formpt" name="switchBox" onclick="showHideText('divpt')">PROJECT_TYPE</label>
			</form>
			<form method="post">
				<label><INPUT type="checkbox" id="formps" name="switchBox" onclick="showHideText('divps')">PROJECT_STATUS</label>
			</form>
			<form method="post">
				<label><INPUT type="checkbox" id="fromss" name="switchBox" onclick="showHideText('divss')">SEQUENCING_STATUS</label>
			</form>
			<form method="post">
				<label><INPUT type="checkbox" id="fromsc" name="switchBox" onclick="showHideText('divsc')">SEQUENCING_CENTERS</label>
			</form>
			<form method="post">
				<label><INPUT type="checkbox" id="fromf" name="switchBox" onclick="showHideText('divf')">FUNDING</label>
			</form>
			<form method="post">
				<label><INPUT type="checkbox" id="fromcn" name="switchBox" onclick="showHideText('divcn')">CONTACT_NAME</label>
			</form>
			<form method="post">
				<label><INPUT type="checkbox" id="fromnbi" name="switchBox" onclick="showHideText('divnbi')">NCBI_BIOPROJECT_ID</label>
			</form>
			<form method="post">
				<label><INPUT type="checkbox" id="fromnpn" name="switchBox" onclick="showHideText('divnpn')">NCBI_PROJECT_NAME</label>
			</form>
			<form method="post">
				<label><INPUT type="checkbox" id="fromnti" name="switchBox" onclick="showHideText('divnti')">NCBI_TAXON_ID</label>
			</form>
		</div>

		<div id="divgold" style="display:none;">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<p>GOLDSTAMP</br>
			<input type="text" name="GOLDSTAMP" /></p>
		</form>
		</div>
		<div id="divleg" style="display:none;">
		<form>
			<p>LEGACY_GOLDSTAMP</br>
			<input type="text" name="LEGACY_GOLDSTAMP" /></p>
		</form></div>
		<div id="divpn" style="display:none;">
		<form>
			<p>PROJECT_NAME</br>
		<input type="text" name="PROJECT_NAME" /></p>
		</form></div>
		<div id="divpt" style="display:none;">
		<form>
			<p><label for="PROJECT_TYPE">PROJECT_TYPE</label></br>
		<select style='width:300px' name="PROJECT_TYPE" id="PROJECT_TYPE">
		<?php
			while ($tab_rep = $req->fetch()){
				?><option value=<?php $tab_rep['PROJECT_TYPE'] ?> > <?php echo $tab_rep['PROJECT_TYPE'] ?></option> <?php
			}
			$req->closeCursor();
		?>
		</select></p>
		</form></div>
		<div id="divps" style="display:none;">
		<form>
			<p><label for="PROJECT_STATUS">PROJECT_STATUS</label></br>
			<select style='width:300px' name="PROJECT_STATUS" id="PROJECT_STATUS">
			<?php
			while ($tab_rep = $req2->fetch()){
				?><option value=<?php $tab_rep['PROJECT_STATUS'] ?> > <?php echo $tab_rep['PROJECT_STATUS'] ?></option> <?php
			}
			$req2->closeCursor();
			?>
			</select></p>
		</form></div>
		<div id="divss" style="display:none;">
		<form>
			<p><label for="SEQUENCING_STATUS">SEQUENCING_STATUS</label></br>
			<select style='width:300px' name="SEQUENCING_STATUS" id="SEQUENCING_STATUS">
			<?php
			while ($tab_rep = $req3->fetch()){
				?><option value=<?php $tab_rep['SEQUENCING_STATUS'] ?> > <?php echo $tab_rep['SEQUENCING_STATUS'] ?></option> <?php
			}
			$req3->closeCursor();
			?>
			</select></p>
		</form></div>
		<div id="divsc" style="display:none;">
		<form>
			<p><label for="SEQUENCING_CENTERS">SEQUENCING_CENTERS</label></br>
			<select style='width:300px' name="SEQUENCING_CENTERS" id="SEQUENCING_CENTERS">
			<?php
			while ($tab_rep = $req4->fetch()){
				?><option value=<?php $tab_rep['SEQUENCING_CENTERS'] ?> > <?php echo $tab_rep['SEQUENCING_CENTERS'] ?></option> <?php
			}
			$req4->closeCursor();
			?>
			</select></p>
		</form></div>
		<div id="divf" style="display:none;">
		<form>
			<p><label for="FUNDING">FUNDING</label></br>
			<select style='width:300px' name="FUNDING" id="FUNDING">
			<?php
			while ($tab_rep = $req5->fetch()){
				?><option value=<?php $tab_rep['FUNDING'] ?> > <?php echo $tab_rep['FUNDING'] ?></option> <?php
			}
			$req5->closeCursor();
		?>
		</select></p>
		</form></div>
		<div id="divcn" style="display:none;">
		<form>
			<p><label for="CONTACT_NAME">CONTACT_NAME</label></br>
			<select style='width:300px' name="CONTACT_NAME" id="CONTACT_NAME">
			<?php
			while ($tab_rep = $req6->fetch()){
				?><option value=<?php $tab_rep['CONTACT_NAME'] ?> > <?php echo $tab_rep['CONTACT_NAME'] ?></option> <?php
			}
			$req6->closeCursor();
		?>
		</select></p>
		</form></div>
		<div id="divnbi" style="display:none;">
		<form>
			<p>NCBI_BIOPROJECT_ID</br>
			<input type="number"  name="NCBI_BIOPROJECT_ID" id="NCBI_BIOPROJECT_ID"/></p>
		</form></div>
		<div id="divnpn" style="display:none;">
		<form>
			<p>NCBI_PROJECT_NAME</br>
			<input type="text" name="NCBI_PROJECT_NAME" /></p>
		</form></div>
		<div id="divnti" style="display:none;">
		<form>
			<p>NCBI_TAXON_ID</br>
			<input type="number"  name="NCBI_TAXON_ID" id="NCBI_TAXON_ID"/></p>
		</form></div>
	</div>
	<aside>

	</aside>
	</div>
</section>