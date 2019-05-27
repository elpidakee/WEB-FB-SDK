<?php
	require 'syndesiMeVasi.inc.php';
	
	if (isset($_POST["website"])) 
	{
		$keyword = $_POST['website'];
		echo $keyword;

		if($keyword != '') 
		{		
			$conn->query("SET NAMES 'utf8'");
			$conn->query("SET CHARACTER SET 'utf8'");
			
			$q1 = "INSERT INTO `resources`(`id`, `url`, `active`, `img_url`) VALUES ('asd123','".$keyword."','','')";
				if ($conn->query($q1) == false)
				{
					echo "Error: ".$q1."<br>".$conn->error;
				}
				echo "OK";
			
			$q2 = "SELECT FROM `events`(`name`, 'id', 'facebook_id) WHERE (events.facebook_id==".$keyword.".id)";
				if ($conn->query($q2) == false)
				{
					echo "Error: ".$q2."<br>".$conn->error;
				}
				echo "OK";
			
				$result = $conn->query($q2);
				$row_cnt = $result->num_rows;
				
				if($row_cnt==1){
					echo "ddewewewewrfer";
				}
			
				if($result != false) {
						echo "Tα events που σχετιζονται με το συγκεκριμενο fb page είναι τα:";
						foreach($result as $row) {
								echo $row[id];
								echo $row[name];
								echo '<br></br><br></br>';
						}
				}	
		}
	}
?>