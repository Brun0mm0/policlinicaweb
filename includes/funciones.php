<?
define("meses",",Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre");
define("diafinal",",31,28,31,30,31,30,31,31,30,31,30,31");

function getdb($a,$opc=0){
	if(!$opc){
		$a = (trim(stripslashes($a)));
	} else {
		$a = deco(trim(stripslashes($a)));
	}
	
	return $a;
}
function deco($a,$op=0){
	if(!$op){
		if(mb_detect_encoding($a)=="UTF-8") {
			$a = utf8_decode($a);
		//} else {
		//	$a = htmlentities($a);
		}
	} else {
		if(mb_detect_encoding($a)!="UTF-8") {
			$a = utf8_encode($a);
		//} else {
		//	$a = htmlentities($a);
		}

	}
	return $a;
}
function num($a){
	if(!is_numeric($a)) $a=0;
	return $a;
}
function postdb($a){
	$a = (trim(addslashes($a)));
	return $a;
}
function postdat($a){
	$a = htmlentities($a);
	return $a;
}
function is_mail($email){
	$regexp = "[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$";
	if(eregi($regexp, trim($email))){
		return true;
	} else {
		return false;
	}
}
function getdat($a,$b = 0){
	// b=1 es var numerica
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$s = trim($_POST[$a]);
	}else{
		$s = trim(urldecode($_GET[$a]));
	}
	if($b && !is_numeric($s)) $s = 0;
	return ($s);
}
function hoy($a = ""){
	// ver 2.00
	if(!$a) $a = time();
	$m = ",Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre";
	$m = explode(",",$m);
	return date("d",$a)." de ".$m[date("n",$a)]." de ".date("Y",$a);
}
function is_ie(){
	if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE")>0){
		return true;
	} else {
		return false;
	}
}
function idsql($sql){
	$rx = mysqli_query($GLOBALS['db'],$sql);
	if(mysqli_num_rows($rx)){
		$f  = mysqli_fetch_array($rx);
		$a  = $f["id"];
		mysqli_free_result($rx);
	} else {
		$a = 0;
	}
	return $a;
}
function countsql($sql){
	$rx = mysqli_query($GLOBALS['db'],$sql);
	return mysqli_num_rows($rx);
}

function addsql($sql){
	$rx = mysqli_query($GLOBALS['db'],$sql);
	$rx = mysqli_insert_id($GLOBALS['db']);
	if($rx == "") $rx = 0;
	return $rx;
}

function RowID(){
	return date("YmdHis",time())."_".md5(uniqid(rand()));
}

function getval($tabla,$fld,$val,$x = "id"){
	$sql = "select * from $tabla where $x='".addslashes($val)."'";
	$rsa = mysqli_query($GLOBALS['db'],$sql);
	$f   = mysqli_fetch_array($rsa);
	$dat = StripSlashes($f[$fld]);
	mysqli_free_result($rsa);
	return ($dat);
}

function getextradat($inmueble,$extra,$campo){
	$sql = "select $campo from inmuebles_extras_datos where extra=$extra and inmueble=$inmueble limit 1";
	//echo $sql."<br>";
	$rsa = mysqli_query($GLOBALS['db'],$sql);
	$f   = mysqli_fetch_array($rsa);
	$dat = StripSlashes($f[$campo]);
	mysqli_free_result($rsa);
	return ($dat);
}

function extension_get($a){
	$a = strtolower($a);
	if($a){
		if(!strpos(" ".$a,".")){
			return false;
		} else {
			$a = explode(".",$a);
			return $a[count($a)-1];
		}
	} else {
		return false;
	}
}

function deletefile($file) { 
	$delete = @unlink($file); 
	if (@file_exists($file)) { 
		$filesys = eregi_replace("/","\\",$file); 
		$delete = @system("del $filesys"); 
		if (@file_exists($file)) { 
			$delete = @chmod ($file, 0775); 
			$delete = @unlink($file); 
			$delete = @system("del $filesys");
		}
	}
} 

function fch2dt($d){
	$d = explode("/",$d,3);
	return $d[2].$d[1].$d[0];
}
function dt2fch($d){
	if(strlen($d) > 8) $d = substr($d,0,8);
	if($d){
		return substr($d,6,2)."/".substr($d,4,2)."/".substr($d,0,4);
	} else {
		return "";
	}
}
function dt2ts($a,$opc=0){
	if(strlen($a) > 8) $a = substr($a,0,8);
	$y = intval(substr($a,0,4));
	$m = intval(substr($a,4,2));
	$d = intval(substr($a,6,2));
	if($opc){
		return mktime(0,0,0,$m,$d,$y);
	}else{
		return mktime(23,59,59,$m,$d,$y);
	}
}
function dttime($a){
	return date("Ymd",$a);
}

function lim($a,$largo = 200){
$a = trim(stripslashes($a));
$a = strip_tags($a);
$a = html_entity_decode($a);
	if(strlen($a) > $largo){
		$a = substr($a,0,($largo - 3))."...";
	} 
	return $a;
}

function tohour($a){
	if(strlen($a) != 6){
		return "";
	}else{
		return substr($a,0,2).":".substr($a,2,2).":".substr($a,4,2);
	}
}

function getstr($fld,$db="tareas"){
	$sql = "select * from $db limit 1";
	$rsa = mysqli_query($GLOBALS['db'],$sql);
	$f   = mysqli_fetch_array($rsa);
	$dat = trim(StripSlashes($f[$fld]));
	mysqli_free_result($rsa);
	return $dat;
}
function humandate($a){
	//recibo solo timestamp
	if(!is_numeric($a)){
		return "";
	} else {
		$d = explode(",",dias);
		$m = explode(",",meses);
		return $d[date("w",$a)].", ".date("j",$a)." de ".$m[date("n",$a)]." de ".date("Y",$a);
	}
}
function getstr2($db,$fld){
	$sql = "select * from $db limit 1";
	$rsa = mysqli_query($GLOBALS['db'],$sql);
	$f   = mysqli_fetch_array($rsa);
	$dat = trim(StripSlashes($f[$fld]));
	mysqli_free_result($rsa);
	return $dat;
}
Function Right($orig,$ini){
	$right=strrev($orig);
	$right=substr(" ".$right,1,$ini);
	return strrev($right);
}
function fmtnum($a){
	// v 20110221
	if(strpos($a,",")>0){
		$aux = explode(",",$a);
		if(count($aux) > 2){
			$dec = $aux[count($aux)-1];
			$ent = "";
			for($n=0;$n < count($aux)-1;$n++){
				$ent.= $aux[$n];
			}
			$a = $ent.",".$dec;
		}
		$a = str_replace(".","" ,$a);
		$a = str_replace(",",".",$a);
	} else {
		$p = strpos(" ".strrev($a),".");
		if($p==4){
			$a = str_replace(".","",$a);
		} else {
			$b = substr($a,0,strlen($a)-$p);
			$b = str_replace(".","",$b);
			$a = $b.right($a,$p);
		}
	}
	if(!is_numeric($a)) $a = 0;
	return $a;
}

function fmt($a){
	return number_format($a,2,",",".");
}

function getvalue($tabla,$fld,$val,$x = "id"){
	$sql = "select * from $tabla where $x='".addslashes($val)."' limit 1";
	$rsa = mysqli_query($GLOBALS['db'],$sql);
	$f   = mysqli_fetch_array($rsa);
	$dat = StripSlashes($f[$fld]);
	mysqli_free_result($rsa);
	return $dat;
}


function sumsql($sql){
	$rx = mysqli_query($GLOBALS['db'],$sql);
	$g  = mysqli_fetch_row($rx);
	$aux= $g[0];
	mysqli_free_result($rx);
	return $aux;
}

function isfch($fecha){
	//v2
	if(strpos($fecha,"/")){
		if(strlen($fecha) != 10) return false;
		$aux = explode("/",$fecha,3);
		$d = $aux[0];
		$m = $aux[1];
		$y = $aux[2];
	}else{
		if(strlen($fecha) != 8) return false;
		$m = substr($fecha,2,2);
		$d = substr($fecha,0,2);
		$y = substr($fecha,4,4);
	}
	if($m < 1 || $m > 12) return false;
	if($d <1 || $d > 31) return false;
	if($y < 1900) return false;
	if(!is_date($m,$d,$y)) return false;
	return true;

}



function is_date($m,$d,$y){
	$a = str_pad($d,2,"0",STR_PAD_LEFT)."/". str_pad($m,2,"0",STR_PAD_LEFT)."/".$y;
	$b = date("d/m/Y",dt2ts(intval($y."".$m."".$d)));
	if($a==$b){
		return true;
	} else {
		return false;
	}
}


//contramedidas sql inject
function sql_armor(){
    foreach($_REQUEST as $key => $data){
        $data = strtolower($data);
        if (strpos($data, "base64_") !== false) exit;
		if (strpos($data, "union") !== false && strpos($data, "select") !== false) exit;
    }
}
sql_armor();
//----------------------

function multiple($op="profesion"){
	$query = $_SERVER["QUERY_STRING"]."&";
	$query = explode("&",$query);
	$s=array();
	$t=1;
	for($n=0;$n< count($query);$n++){
		if(strpos(" ".$query[$n],$op."=")){
			$query[$n]= trim(str_replace($op."=","",$query[$n]));
			$s[$t]=$query[$n];
			$t++;
		}
	}
	if(count($s)){
		return $s;
	} else{
		return "";
	}
}

function so(){
	$so = $_SERVER["HTTP_USER_AGENT"];
	if(strpos($so,"(")) $so = trim(substr($so,strpos($so,"(")+1));
	if(strpos($so,")")) $so = trim(substr($so,0,strpos($so,")")));
	if(right($so,1)==".") $so = substr($so,0,strlen($so)-1);
	return $so;
}
$regxpag = 15;
define("totalpersonas",number_format(idsql("select sql_cache count(id) as id from personas"),0,",","."));
define("totalpersonasgeo",number_format(idsql("select sql_cache count(id) as id from personas where geo=1"),0,",","."));

/*
if($_SESSION["sessionid"]){
	if(idsql("select cierre as id from log where sessionid='".$_SESSION["sessionid"]."' order by id desc limit 1 ")>0){
		session_destroy();
		//aqui debiera ir a una pagina explicativa o algo
		header("location: /");
		exit;
	}
}
*/
?>