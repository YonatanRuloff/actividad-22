<?php
include 'includes/config.php'; // Conexión a la base de datos

// Recuperar opciones del menú desde la base de datos
try {
    $sql = "SELECT nombre, enlace FROM menu ORDER BY orden";
    $stmt = $conexion->prepare($sql);
    $stmt->execute();
    $menu = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die("Error al recuperar el menú: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Dinámico</title>
    <style>
        nav {
            background-color: #2d2d2d;
            padding: 10px;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 15px;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <?php foreach ($menu as $opcion): ?>
                    <li><a href="<?= htmlspecialchars($opcion['enlace']); ?>"><?= htmlspecialchars($opcion['nombre']); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Bienvenidos a la Página Principal</h1>
        <p>Este es un ejemplo de un menú dinámico en PHP utilizando MySQL.</p>
    </main>
</body>
</html>
