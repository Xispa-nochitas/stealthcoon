
<?php
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro Exitoso</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section>
    <h2>¡Registro Exitoso!</h2>
    <p>Usuario: <?php echo htmlspecialchars($usuario); ?></p>
    <p>Correo: <?php echo htmlspecialchars($correo); ?></p>
    <p>Contraseña: <?php echo str_repeat("*", strlen($contraseña)); ?></p>
  </section>
</body>
</html>
