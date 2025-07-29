<?php
// Iniciar la sesión
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Variables de Sesión</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Variables de Sesión Activas</h1>
        
        <?php if (!empty($_SESSION)): ?>
            <div class="sesion-info">
                <h2>Variables encontradas:</h2>
                <ul>
                    <?php foreach ($_SESSION as $clave => $valor): ?>
                        <li>
                            <strong><?php echo htmlspecialchars($clave); ?>:</strong> 
                            <?php echo htmlspecialchars($valor); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                
                <p><strong>Total de variables:</strong> <?php echo count($_SESSION); ?></p>
                <p><strong>ID de sesión:</strong> <?php echo session_id(); ?></p>
            </div>
        <?php else: ?>
            <div class="no-sesion">
                <h2>No hay variables de sesión</h2>
                <p>Aún no se han creado variables de sesión. Puedes crear algunas llenando el formulario.</p>
            </div>
        <?php endif; ?>
        
        <div class="text-center mt-30">
            <a href="formulario.html" class="boton">Ir al Formulario</a>
            <a href="procesar.php" class="boton">Ver Procesador</a>
            <a href="destruir_sesion.php" class="boton boton-rojo">Destruir Sesión</a>
        </div>
    </div>
</body>
</html>
