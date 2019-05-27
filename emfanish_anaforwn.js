emfanish_anaforwn('anafores');
setInterval(emfanish_anaforwn,30000);

function emfanish_anaforwn(){
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	//xmlhttp.open("GET","response.php",false);
	//xmlhttp.send();
	
	xmlhttp.onreadystatechange=function(){
  
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			
			xmlDoc=xmlhttp.responseXML; 

			
			//k=0;
			var ar = document.getElementById('anafores');
			//while(document.getElementById(k)){
				
			//	ar.removeChild(document.getElementById(k));
			//	k++;
			//}
			
			var x=xmlDoc.getElementsByTagName("item");
			
			while(document.getElementById("table_anaforwn").rows.length>1){
				document.getElementById("table_anaforwn").deleteRow(1);
			}
			
			for (i=0;i<x.length;i++)
			{ 
				//var paragrafos = document.createElement('p');
				//paragrafos.setAttribute('id',i);
				//ar.appendChild(paragrafos);
				var table = document.getElementById("table_anaforwn");
				
				var row = table.insertRow(i+1);
				//table.appendChild(row);
				
				var cell1 = row.insertCell(0);
				var cell2 = row.insertCell(1);
				var cell3 = row.insertCell(2);
				
				//row.appendChild(cell1);
				//row.appendChild(cell2);
				//row.appendChild(cell3);
				//document.getElementById(i).innerHTML ="<b>ID : </b>"+x[i].getElementsByTagName("id")[0].childNodes[0].nodeValue+"<b> Τύπος προβλήματος: </b>"+x[i].getElementsByTagName("type")[0].childNodes[0].nodeValue+" <b>link : </b>";
				
				cell1.innerHTML = x[i].getElementsByTagName("id")[0].childNodes[0].nodeValue;
				cell2.innerHTML = x[i].getElementsByTagName("type")[0].childNodes[0].nodeValue;
				
				var link = document.createElement('a');
				link.setAttribute('href','emfanish_anaforas.php?rss_id='+x[i].getElementsByTagName("id")[0].childNodes[0].nodeValue);
				link.innerHTML="Αναλυτικά στοιχεία της " +x[i].getElementsByTagName("id")[0].childNodes[0].nodeValue;
				
				cell3.appendChild(link);																														
																								
				
			}
		}
	}
	xmlhttp.open("GET","response.php",false);
	xmlhttp.send();
	
}	