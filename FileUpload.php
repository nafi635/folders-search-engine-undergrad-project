
<?php
$files=0;
include('session.php');
$target="bunch_image/";
$targ_file=$target.basename($_FILES['this']['name']);
$uploaded=1;
$imagetype=pathinfo($targ_file,PATHINFO_EXTENSION);
if(isset($_POST['fileup']))
{
	$name=basename($_FILES['this']['name']);
	
	$check=getimagesize($_FILES['this']['tmp_name']);
	if($check!==false)
	{
		$uploaded=0;
	}
	else
	{
		echo "file is not an image";
		$uploaded=0;
	}
	
		if (move_uploaded_file($_FILES["this"]["tmp_name"], $targ_file)) 
			{
						$files=1;
					
		   	 }
		   	

	
}	
?>


