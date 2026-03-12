<?php
/* Este fragmento de código PHP crea un arreglo de usuarios (objetos Admin y Alumno) y
 muestra su información en una tabla HTML. A continuación, 
 un desglose de lo que hace el código: */
require_once 'Clases/Admin.php';
require_once 'Clases/Alumno.php';

$usuarios = [];
$errorMsg = "";

/* The code enclosed in the `try` block is attempting to create instances of the `Admin` and `Alumno`
classes, which represent different types of users in a school system. Here's a breakdown of what the
code is doing: */
try {
    
    $usuarios[] = new Admin("O. Lucina", "Lucina@gmail.com");


    $usuarios[] = new Alumno("Roberto", "roberto@gmail.com", "MT-552");


    $usuarios[] = new Alumno("Fallo", "correo_invalido", "000");

} catch (Exception $e) {
    $errorMsg = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema Escolar</title>
    <style>
        table { border: 1px solid black; width: 500px; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; }
        .error { color: red; font-weight: bold; }
    </style>
</head>
<body>

    <?php if($errorMsg): ?>
        <p class="error">Error en el Correo: <?php echo $errorMsg; ?></p>
    <?php endif; ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Matrícula</th>
        </tr>
        <?php foreach ($usuarios as $u): ?>
        <tr>
            <td><?php echo $u->getNombre(); ?></td>
            <td><?php echo $u->getCorreo(); ?></td>
            <td><?php echo $u->getRol(); ?></td>
            <td><?php echo ($u instanceof Alumno) ? $u->getMatricula() : '---'; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>