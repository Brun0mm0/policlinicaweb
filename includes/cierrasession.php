<?
include("header.php");
include("conn.php");
include("funciones.php");

$sess= getdat("sess");
mysqli_query($db,"update log set cierre=".$_SESSION["userid"]." where sessionid='".postdb($sess)."'");

$uid = idsql("select user as id from log where sessionid='".postdb($sess)."' and ingreso=1 limit 1 ");
$sql = "insert into log (rowid, fecha, hora, ip, user, so, salida,sessionid,cierre) values  ('".date("YmdHis",time())."', '".date("d/m/Y",time())."', '".date("H:i:s",time())."', '".$_SERVER["REMOTE_ADDR"]."', '".postdb($uid)."', 'Cerrada por Administrador', 1,'".postdb($sess)."','".postdb($_SESSION["userid"])."') ";
echo $sql;
mysqli_query($db,$sql);
?>