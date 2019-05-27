<?php
    $qi = urlencode($_GET['qs']);
        if(!$_GET['qs']){
        $qi = urlencode($_POST['qs']);
            if(!$_POST['qs']){
        $qi = "patra";
        }
    }
    $search = $facebook->api('/search?q='.$qi.'&type=event&limit=30');
	foreach ($search as $key=>$value) {
		$i=1;
		foreach ($value as $fkey=>$fvalue) {
			$i++;
			if($fvalue[id]=="h"){
			}
			else{              
				$id = $fvalue[id];
				$searchResp = $facebook->api('/'.$id.'');
				$name = $searchResp[name];
				$location = $searchResp[location];
				$desc = $searchResp[description];
				$sTime = $searchResp[start_time];
            //$eTime = $searchResp[end_time];

				echo $name. '<br />';
				echo $location. '<br />';
				echo $sTime. '<br />';
				echo $eTime. '<br /><hr />';
			}
        };
    };
?>
<form id="getsearch" method="post" action="yourpage.php"> //edw prepei na valoume ta swsta
	<input type="text" value="" name="qs" id="searchbox" onclick="this.value='';" style="padding: 2px;" size="48">
	<input type="submit" value="Search" style="padding: 3px;">
</form>