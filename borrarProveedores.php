<?php
$conexion=mysqli_connect("mysql.hostinger.es","u407873199_admin","juventus","u407873199_bdd") or
    die("Problemas con la conexión");
$checkbox=$_POST['check'];

foreach ($checkbox as $value) {
$eliminar=mysqli_query($conexion, "delete from proveedores where Proveedor_ID=".$value."");
}
header('Location:editarProveedores.php');
?>