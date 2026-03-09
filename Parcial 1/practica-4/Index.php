<?php
include_once 'Admin.php';
include_once 'Alumno.php';
include_once 'Invitado.php';

// Arreglo para almacenar los usuarios que logren crearse
$usuarios = [];
$errorMsg = "";

try {
    // 1. Crear Admin válido
    $usuarios[] = new Admin("Paul Lizarraga", "paullizarara@gmail.com");

    // 2. Crear Alumno válido
    $usuarios[] = new Alumno("Juan Pérez", "juan.perez@uas.edu.mx", "20240001");

    // 3. Crear Invitado válido
    $usuarios[] = new Invitado("Maria Lopez", "m.lopez@empresa.com", "Tech Solutions");

    // 4. Registro inválido para comprobar excepción
    // Esto disparará el catch inmediatamente
    $usuarios[] = new Alumno("Error User", "correo-sin-formato", "0000");

} catch (Exception $e) {
    // Mensaje de error controlado
    $errorMsg = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 4 - Integración POO</title>
    <style>
        table { width: 100%; border-collapse: collapse; font-family: sans-serif; }
        th, td { border: 1px solid #333; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .error { color: white; background-color: #d9534f; padding: 15px; margin-bottom: 20px; border-radius: 5px; }
    </style>
</head>
<body>

    <h2>Mini-Sistema de Usuarios (POO + Herencia)</h2>

    <?php if ($errorMsg): ?>
        <div class="error">
            <strong>Aviso de Excepción:</strong> <?php echo $errorMsg; ?>
        </div>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Matrícula</th>
                <th>Empresa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td><?php echo $u->getNombre(); ?></td>
                    <td><?php echo $u->getCorreo(); ?></td>
                    <td><?php echo $u->getRol(); ?></td>
                    <td>
                        <?php echo ($u instanceof Alumno) ? $u->getMatricula() : "—"; ?>
                    </td>
                    <td>
                        <?php echo ($u instanceof Invitado) ? $u->getEmpresa() : "—"; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>