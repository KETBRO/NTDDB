<?php
include "header.php";
include "dbconnect.php";
extract($_GET);
$DrugProptertiesQuery="select * from drug_properties_table where DiseaseID='".$DiseaseID."' AND CID='".$PubchemID."'";
$Drug_result = mysqli_query($conn, $DrugProptertiesQuery);
while($Drug_row = $Drug_result -> fetch_assoc())
 {
	 ?>
	 <div class="container mt-2">
		
				<div class="row">
		  <div class="col-sm-12 text-wrap">	
			IUPAC Name
		  </div>
		  </div>
		  				<div class="row">
		  <div class="col-sm-12 text-wrap">	
			<?php echo $Drug_row['IUPAC_Name']; ?><hr color="blue">
		  </div>
		  </div>
		  				<div class="row">
		  <div class="col-sm-12 text-wrap">	
				Canonical Smiles
		  </div>
		  </div>
		  				<div class="row">
		  <div class="col-sm-12 text-wrap">	
			<?php echo $Drug_row['Canonical_Smiles']; ?> <hr color="blue">
		  </div>
		  </div>
		 <div class="row">
		  <div class="col-sm-12 text-wrap">	
				Isomeric Smiles
		  </div>
		  </div>
		  <div class="row">
		  <div class="col-sm-12 text-wrap">	
			<?php echo $Drug_row['Isomeric_Smiles']; ?> <hr color="blue">
		  </div>
		  </div>
		  	 <div class="row">
		  <div class="col-sm-12 text-wrap">	
				Molecular Formula
		  </div>
		  </div>
		  <div class="row">
		  <div class="col-sm-12 text-wrap">	
			<?php echo $Drug_row['Molecular_Formula']; ?> <hr color="blue">
		  </div>
		  </div>
		  		 <div class="row">
		  <div class="col-sm-12 text-wrap">	
				InChI
		  </div>
		  </div>
		  		  <div class="row">
		  <div class="col-sm-12 text-wrap">	
			<?php echo $Drug_row['InChI']; ?> <hr color="blue">
		  </div>
		  </div>
		  		 <div class="row">
		  <div class="col-sm-12 text-wrap">	
				InChIKey
		  </div>
		  </div>
		  		  <div class="row">
		  <div class="col-sm-12 text-wrap">	
			<?php echo $Drug_row['InChIKey']; ?> <hr color="blue">
		  </div>
		  </div>
		  <div class="row">
		  <div class="col-sm-3">
		      CID: <?php echo $Drug_row['CID']; ?>

	
		  </div>
			<div class="col-sm-3">
			H-bond Acceptor : <?php echo $Drug_row['H-bond_acceptor']; ?>
		  </div>
		   <div class="col-sm-3">
		   H-bond_donor :<?php echo $Drug_row['H-bond_donor']; ?>
		  </div>
		  <div class="col-sm-3">
			MW : <?php echo $Drug_row['MW']; ?>
		  </div>
		  </div>
		  
		<div class="row">
		  <div class="col-sm-3">
		  	logP : <?php echo $Drug_row['logP']; ?>

	

		  </div>
			<div class="col-sm-3">
				TPSA : <?php echo $Drug_row['TPSA']; ?>
		  </div>
		   <div class="col-sm-3">
		   Total Charge : <?php echo $Drug_row['Totalcharge']; ?>
		  </div>
		  <div class="col-sm-3">
		  	Rotatable bonds : <?php echo $Drug_row['Rotatablebonds']; ?>
		  </div>

		  </div>
		  
		  				
				<div class="row">

			<div class="col-sm-3  text-wrap">
			Exact mass : <?php echo $Drug_row['Exact_Mass']; ?>
		  </div>
		   <div class="col-sm-3 text-wrap">
		   	Monoisotopic mass : <?php echo $Drug_row['Monoisotopic_Mass']; ?>
		  </div>
		  <div class="col-sm-3">
		  Heavy atom count : <?php echo $Drug_row['Heavy_Atom_Count']; ?>

		  </div>
		  			<div class="col-sm-3  text-wrap">
			Complexity : <?php echo $Drug_row['Complexity']; ?>
		  </div>
		  </div>
		<div class="row">
		  <div class="col-sm-3">
		  Covalently bonded unit count : <?php echo $Drug_row['Covalently_Bbonded_Unit_Count']; ?>
		  </div>
			<div class="col-sm-3">
			Hydrogen bond donor count : <?php echo $Drug_row['Hydrogen_Bond_Acceptor_Count']; ?>
		  </div>
		   <div class="col-sm-3">
		   Hydrogen bond acceptor count : <?php echo $Drug_row['Hydrogen_Bond_Acceptor_Count']; ?>
		  </div>
		  <div class="col-sm-3">
		  Number of rotatable bonds : <?php echo $Drug_row['Number_of_Rotatable_Bonds']; ?> 
		  </div>
		  
		  </div>
		  <hr color="blue">
		</div>
	</div>



	<?php
	//InChI
	//,,,,,,,,,,,InChIKey,Exact_Mass,Monoisotopic_Mass,Heavy_Atom_Count,Complexity,Covalently_Bbonded_Unit_Count,Hydrogen_Bond_Donor_Count,Hydrogen_Bond_Acceptor_Count,Number_of_Rotatable_Bonds,DiseaseID
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/3dmol@1.8.0/build/3Dmol-min.js"></script>
    <style>
        #molecule-viewer {
            width: 300px;
            height: 300px;
            
        }
    </style>
</head>

<div class="container">
		  		  <div class="row">
				  		  <div class="col-sm-4 text-wrap">	
		  
			    <a href=<?php echo 'data/3D_SDF/'.$PubchemID.'.sdf'; ?> download=<?php echo $PubchemID.'.sdf';  ?>> 3D SDF Download </a>
				<a href=<?php echo 'data/2D_SDF/'.$PubchemID.'.sdf'; ?> download=<?php echo $PubchemID.'.sdf';  ?>> 2D SDF Download </a>
		  </div>
		  <div class="col-sm-8 text-wrap">	
		  
			    <div id="molecule-viewer"></div>
		  </div>
		  </div>

	</div>
    <script type="text/javascript">
        // URL of the SDF file
        var sdfUrl =  '<?php echo 'data/3D_SDF/'.$PubchemID.'.sdf';  ?>';

        fetch(sdfUrl)
            .then(response => response.text())
            .then(sdfContent => displayMolecule(sdfContent))
            .catch(error => console.error('Error loading SDF file:', error));

        function displayMolecule(sdfContent) {
            // Initialize the 3Dmol.js viewer
            var viewer = $3Dmol.createViewer("molecule-viewer", {
                defaultcolors: $3Dmol.rasmolElementColors
            });

            // Add the SDF data to the viewer
            viewer.addModel(sdfContent, "sdf");
            viewer.setStyle({}, {stick: {}});

            // Render the viewer
            viewer.zoomTo();
            viewer.render();
        }
    </script>
	


</html>
