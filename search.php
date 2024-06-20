<?php
$people[]="mohamed";
$people[]="rowem";
$people[]="eman";
$people[]="amira";
$people[]="ahmed";
$people[]="ali";
$people[]="mahmoud";
$people[]="emad";
$people[]="ali eldeian";
$segest="";
$q=$_REQUEST['q'];
if($q!=="'"){
	$q=strtolower($q);
	$len=strlen($q);
	foreach ($people as $person) {
		if(stristr($q,substr($person, 0,$len))){
			if($segest===""){
				$segest=$person;
			}else{
				$segest.=",$person";
			}
		}
	}
}
echo $segest===""?"no valid name":$segest;