<?php 
include "header.php";
include "dbconnect.php";
 ?>
<div class="container mt-2">
<div class="row">
  <div class="col-sm-6"> <img src="data/home.png" class="img-fluid" alt="Responsive image"> </div>
  <div class="col-sm-6"><p class="text-justify"><b>Weolcome to NTDsdb </b>Neglected tropical diseases (NTDs) encompass a wide range of parasitic, viral, and bacterial illnesses that impact over one billion people worldwide, predominantly affecting the poorest populations of the world. 
  These diseases hinder physical and cognitive development, lead to high rates of maternal and child mortality, impede agricultural productivity and earning potential, and decrease workplace efficiency, thus perpetuating a cycle of poverty and illness. To alleviate the burden of these diseases and improve the quality of life for affected populations, research and innovation are required. 
    </p></div>
</div>
<div class="row">
  <div class="col-sm-12">
  <p class="text-justify"> 
  In this effort, the NTDdb web portal has been developed to support the global initiative to mitigate the burden of NTDs. The database consolidates information on druggable molecular targets of pathogens responsible for NTDs, along with their known drugs or validated inhibitors, or lead molecules. The database is meticulously curated and built using information from over 1200 published research and review articles focused on wet lab studies of neglected tropical diseases. These articles are sourced from peer-reviewed journals indexed in PubMed. <br>
  Currently, NTDdb includes scientific information on 657 molecular therapeutic targets from 75 pathogens and features 2,135 known drugs or validated inhibitors, or lead molecules related to 22 neglected tropical diseases. Those can be explored from <a href='explore.php'>Explore<a>. The data is thoroughly referenced and linked to scientific literature. Users can navigate the database using an NTDs Select dropdown menu and text-based keyword search. NTDdb offers two types of associations: (a) Disease to pathogen therapeutic molecular targets and (b) Disease to known drugs, validated inhibitors, or lead molecules. Additionally, the gene and gene ORF names of molecular targets and the physicochemical properties of known drugs or validated inhibitors or lead molecules have been predicted. For the molecular therapeutic targets, sequences in fasta format and 2D and 3D chemical structures in sdf format of the known drugs or validated inhibitors or lead molecules are available for download. The database also provides external links to relevant resources such as UniProt and PubChem, facilitating further research. Users can refer to the Documentation section for guidance on using NTDdb. 
  The portal  NTDdb is designed to be user-friendly and is expected to be a valuable resource for researchers focused on drug discovery for NTDs. </p>
  </div>
  </div>
	</div>				
<?php include "fotter.php" ?>