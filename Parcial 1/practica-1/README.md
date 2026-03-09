Descripción de la clase creada: Cree una clase llamada Admin que utiliza la palabra extends para conectarse con la clase Usuario. Al hacer esto, la clase Admin hereda automáticamente el constructor, los atributos y los métodos (getters y setters) de su clase "padre". Además, agregué un nuevo método llamado getRol() que simplemente retorna el texto "Administrador", dándole una característica única que un usuario normal no tiene.

Instrucciones de ejecución: 1. Primero, en el archivo index.php se cargan las clases necesarias con include para que la computadora las conozca.
2. Después, se crea el objeto $objAdmin01 dándole los valores de nombre y correo; aunque estos datos son de la clase Usuario, el Admin los puede recibir porque los heredó.
3. Luego, el objeto utiliza el método getNombre() y getCorreo() (que vienen de la clase base) para obtener la información guardada.
4. También se ejecuta el nuevo método getRol() para obtener el puesto de "Administrador".
5. Al final, se utilizan varios echo para imprimir en el navegador el nombre, el correo y el rol, demostrando que el objeto Admin funciona con su propia información y con la que copió de Usuario.