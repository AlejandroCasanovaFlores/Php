<?php 
	require("clases/Persona.php");	
?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>
	<?php 
			$estudiante1 = new Alumno("Isidora", 248518568, 201806);
			$estudiante2 = new Alumno("Tomas", 248596857, 201807);
			$estudiante3 = new Alumno("Mirsha", 548526958, 201808);

			$arrEstudiantes = array($estudiante1, $estudiante2, $estudiante3);
		?>
	<table>
		<thead>Estudiantes</thead>
		<tbody>
			<tr><th>Nombre</th><th>Rut</th><th>Matricula</th></tr>
		<?php 
			foreach ($arrEstudiantes as $indice => $value) {
				echo "<tr><td>".$value->GetNombre()."</td><td>".$value->GetRut()."</td><td>".$value->GetMatricula()."</td></tr>";
			}
		?>
		</tbody>
	</table>
</body>
</html>