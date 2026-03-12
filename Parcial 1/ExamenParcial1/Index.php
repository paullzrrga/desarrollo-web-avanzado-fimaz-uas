<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Importamos las clases necesarias
require_once 'classes/Admin.php';
require_once 'classes/Alumno.php';

$usuarios = [];
$errorMsg = "";

try {
    // 1. Admin válido
    $usuarios[] = new Admin("Dra. Elena", "elena@admin.com");

    // 2. Alumno válido
    $usuarios[] = new Alumno("Roberto", "roberto@estudiante.com", "MT-552");

    // 3. ESTE DARÁ ERROR (Correo sin @ ni punto)
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
        <p class="error">⚠️ ERROR DETECTADO: <?php echo $errorMsg; ?></p>
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