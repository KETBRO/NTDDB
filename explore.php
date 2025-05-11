<?php 
include "header.php";
include "dbconnect.php";

extract($_POST);
//echo $Disease;
?>
<div class="container">
<form method='post'  action='' >
  <div class="row ">
  <div class="col-sm-12 text-justify" >
Here you can select any neglected tropical diseases from droupdown menu . NTDdb offers two types of associations: (a) Disease to pathogen therapeutic molecular targets and (b) Disease to known drugs, validated inhibitors, or lead molecules. Additionally, the gene and gene ORF names of molecular targets and the physicochemical properties of known drugs or validated inhibitors or lead molecules have been predicted. For the molecular therapeutic targets, sequences in fasta format and 2D and 3D chemical structures in sdf format of the known drugs or validated inhibitors or lead molecules are available for download. 
</div>
</div>
  <div class="row mt-3">
  <div class="col-sm-3">
    <label for="Disease" class="col-sm-2 col-form-label"> <b> Disease: </b> </label>
	</div>
    <div class="col-sm-6">
    
 	<select class="form-select" name='DiseaseID' id='DiseaseID' aria-label="Default select example">
  <option selected>Open this select Disease</option>
<?php
$diseaseQuery="select * from disease_table";
$result = mysqli_query($conn, $diseaseQuery); 
while($row = $result->fetch_assoc())

{
	?>
	 <option value=<?php echo $row['DiseaseID']; ?> > <?php echo $row['Disease']; ?> </option>
	 <?php
}
	
 ?>   
 </select>
 </div>
 <div class="col-sm-3">
   <button type="submit" name='serach' class="btn btn-outline-primary">
    Search
  </button>
 </div>
 </div>
 </form>
 
 </div>
 <?php
 if (isset($serach))
{
	$DiseaseDescriptionQuery="select * from disease_table where DiseaseID='".$DiseaseID."'";
	$DiseaseDescriptionResult = mysqli_query($conn, $DiseaseDescriptionQuery); 
	$DiseaseDescriptionrow = $DiseaseDescriptionResult->fetch_assoc();
	?>
	<div class="container">
	<div class="card">
	  <div class="card-header">
		<h4> <?php echo $DiseaseDescriptionrow['Disease']; ?> </h4>
	  </div>
	  <div class="card-body">
		<h5 class="card-title">Pathogen : <i><?php echo $DiseaseDescriptionrow['Pathogen']; ?></i></h5>
		<p class="card-text text-justify"><?php echo $DiseaseDescriptionrow['Disease_Descriptions']; ?></p>
	  </div>
	</div>
	</div>
	<?php

	$TargetQuery="select * from target_table where DiseaseID='".$DiseaseID."'";
	//echo $TargetQuery;
	$Target_result = mysqli_query($conn, $TargetQuery); 
	?>
	<div class="container">
	<h3> Therapeutic targets are listed below from the respective pathogens: </h3>
		<table id="example" class="display" style="width:100%">
			<thead>
				<tr>
					<th>Id</th>
					<th>Target Name</th>
					<th>Gene </th>
					<th>ORF</th>
					
					<th>Fasta</th>
					<th>Uniprot ID</th>
					<th>PMID</th>
				</tr>
			</thead>
			<tbody>	
	<?php
	while($Target_row = $Target_result -> fetch_assoc())


{
	?>
	<tr>
					<td><?php echo $Target_row['TargetID']?> </td>
					<td><?php echo $Target_row['TargetName']?> </td>
					<td><?php echo $Target_row['Gene_Name']?> </td>
					<td><?php echo $Target_row['Gene_ORF_Name']?> </td>
					<td><a href=<?php echo 'data/Target_Fasta/'.$Target_row['UniprotID'].'.fasta'?> download=<?php echo $Target_row['UniprotID'].'.fasta'?>><?php echo $Target_row['UniprotID']?> </a></td>
					<td><a href=<?php echo $Target_row['UniprotLink']?> target="_blank"><?php echo $Target_row['UniprotID']?> </a></td>
					<td> <a href=<?php echo 'https://pubmed.ncbi.nlm.nih.gov/'.$Target_row['PMID']?> target="_blank"> <?php echo $Target_row['PMID']?> </a></td>
	</tr>
	<?php
	//echo $Target_row['PMID'];
}
	?>
	</tbody>
				</table>
			</div>
			<script>
new DataTable('#example', {
    scrollX: true,
    scrollY: 400
});

/* new DataTable('#example', {
    layout: {
        topStart: {
            buttons: ['copy', 'excel', 'pdf', 'colvis']
        }
    }
}); */

	</script>
	<?php
	$DrugQuery="select * from drug_table where DiseaseID='".$DiseaseID."'";
	//echo $DrugQuery;
	$Drug_result = mysqli_query($conn, $DrugQuery); 
	?>
	<div class="container">
	<h3> Drugs known inhibitors and lead molecules are listed below: </h3>
		<table id="example2" class="display" style="width:100%">
			<thead>
				<tr>
					<th>Drug Pubchem ID</th>
					<th>Drug Name</th>
					<th>Pubchem Link</th>
					<th>PMID</th>
					<th>Properties</th>
				</tr>
			</thead>
			<tbody>	
	<?php
	while($Drug_row = $Drug_result -> fetch_assoc())


{
	?>
	<tr>
					<td><?php echo $Drug_row['DrugPubchemID']?> </td>
					<td><?php echo $Drug_row['DrugName']?> </td>
					<td><a href=<?php echo 'https://pubchem.ncbi.nlm.nih.gov/compound/'.$Drug_row['DrugPubchemID']?> target="_blank"><?php echo $Drug_row['DrugPubchemID']?> </a></td>
					<td> <a href=<?php echo 'https://pubmed.ncbi.nlm.nih.gov/'.$Drug_row['DrugPMID']?> target="_blank"> <?php echo $Drug_row['DrugPMID']?> </a></td>
					<td> <a href=<?php echo "drugproperties.php?PubchemID=".$Drug_row['DrugPubchemID'].'&DiseaseID='.$DiseaseID ?> >Properties</a></td>
	</tr>
	<?php
	//echo $Target_row['PMID'];
}
	?>
	</tbody>
				</table>
			</div>
			<script>
new DataTable('#example2', {
    scrollX: true,
    scrollY: 400
});
	</script>
	<?php
	 include "fotter.php";
}
?>