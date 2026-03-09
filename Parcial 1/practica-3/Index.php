<?php
include_once 'Admin.php';
include_once 'Alumno.php';

// 1. Implementar bloques try/catch
try {
    // 2. Probar creación de usuario válido
    echo "<h3>Probando usuario válido:</h3>";
    $adminValido = new Admin("Paul Lizarraga", "paullizarara@gmail.com");
    echo "Nombre: " . $adminValido->getNombre() . "<br>";
    echo "Correo: " . $adminValido->getCorreo() . "<br>";
    echo "Rol: " . $adminValido->getRol() . "<br>";

    echo "<hr>";

    // 2. Probar creación de usuario inválido (esto lanzará la excepción)
    echo "<h3>Probando usuario inválido:</h3>";
    // El correo no tiene el formato correcto (le falta el .com o algo similar)
    $alumnoInvalido = new Alumno("Juan Perez", "juan_sin_correo", "2024001");
    
    // Esta línea no se ejecutará porque la anterior lanza el error
    echo "Nombre: " . $alumnoInvalido->getNombre();

} catch (Exception $e) {
    // 3. Mostrar mensajes de error controlados
    echo "<strong>Error detectado:</strong> " . $e->getMessage();
}

echo "<br><br><p>El programa continúa ejecutándose gracias al catch.</p>";
?>