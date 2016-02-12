<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio editar proveedores</title>
    <script>
	
		function seleccionar(){
			if(document.getElementById("seleccionarTodos").checked){
				for(var x=0;x<document.getElementsByClassName('checkbox').length;x++){
					document.getElementsByClassName('checkbox').item(x).checked=true;
				}
			}
			else{
				
				for(var x=0;x<document.getElementsByClassName('checkbox').length;x++){
					document.getElementsByClassName('checkbox').item(x).checked=false;
				}
			}
		}
    </script>
	
</head>

<body> 
<div align='center'> 
    <table border='0'  style='font-family: Verdana; font-size: 8pt' id='table1'>
    <tr> 
            <td colspan='2'><h3 align='center'>Formulario para actualizar los datos</h3></td> 
    </tr>
        <tr>
            <th><input type="checkbox" id="seleccionarTodos" onChange="seleccionar()"></th>
            <th>Nombre Proveedor</th>
            <th>Direccion proveedor</th>
            <th>CIF proveedor</th>
            <th>Proveedor persona contacto</th>
            <th>Telefono proveedor</th>
            <th>URL proveedor</th>
            <th>Longitud proveedor</th>
            <th>Latitud proveedor</th>
            <th>Email proveedor</th>
        </tr> 
      
        <form method='POST' action='borrarProveedores.php'>  
<?php
    
$conexion=mysqli_connect("mysql.hostinger.es","u407873199_admin","juventus","u407873199_bdd") or
    die("Problemas con la conexión");
    
     $query= mysqli_query($conexion,"select * from proveedores");
     
    
    while ($registro = mysqli_fetch_array($query)){ 
    
        
        echo " 

        
        <tr> 
            <td><input class ='checkbox' type='checkbox' name='check[]' value='".$registro['Proveedor_ID']."'></td>
            <td width='50%'><input type='text' name='proveedornombre' value='".$registro['Proveedor_Nombre']."'disabled></td> 
        
           
            <td width='50%'><input type='text' name='proveedordireccion' value='".$registro['Proveedor_Direccion']."'disabled></td> 
        
           
            <td width='50%'><input type='text' name='proveedorcif' value='".$registro['Proveedor_CIF']."'disabled></td> 
       
            
            <td width='50%'><input type='text' name='proveedorpersonacontacto' value='".$registro['Proveedor_Persona_Contacto']."'disabled></td> 
         
           
            <td width='50%'><input type='text' name='proveedortelefono' value='".$registro['Proveedor_Telefono']."'disabled></td> 
        
          
            <td width='50%'><input type='text' name='proveedorurl' value='".$registro['Proveedor_URL']."'disabled></td> 
        
         
            
            <td width='50%'><input type='text' name='proveedorlongitud' value='".$registro['Proveedor_Longitud']."'disabled></td> 
        
         
            
            <td width='50%'><input type='text' name='proveedorlatitud' value='".$registro['Proveedor_Latitud']."' disabled></td> 
        
        
            
            <td width='50%'><input type='text' name='proveedoremail' value='".$registro['Proveedor_Email']."' disabled></td> 
			<td width='50%'><a href='editarProveedores1.php?id=".$registro['Proveedor_ID']."'>EDITAR</a></td> 
        </tr> 
		
      
       
";        
    }
    
    mysqli_close($conexion);
    
  ?>
    <input type='hidden' name='id' value='$id'> 
        <tr> 
            <td width='100%' colspan='2'> 
            <p align='center'> 
            <input type='submit' value='Borrar Registro' name='B1'></td> 
        </tr>  
  
   </form> 
    </table> 
</div> 
</html>