<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConIngenio</title>
    <link rel="shortcut icon" href="img/con-ingenio-solo-colores.ico">

    <style>
        /* Estilos CSS para mejorar la apariencia */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #f8f9f9;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #e67e22;
            text-decoration: none;
            margin: 0 10px;
        }
        section {
            padding: 20px;
            margin: 20px;
            background-color: #fff;
            border-radius: 5px;
        }
        section h2 {
            color: #e67e22;
        }
        section h3 {
            color: #28b463;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <img src ='img/logo-grande.png' width= 600px>
    </header>
    <nav>
        <a href="#home">Home</a>
        <a href="#servicios">Nuestros Servicios</a>
        <a href="#contacto">Contáctenos</a>
        <a href="#nosotros">Nosotros</a>
    </nav>
    <section id="home">
        <h2>Bienvenido a nuestra página</h2>
        <p>Brindamos soluciones digitales integrales para tu empresa.</p>
    </section>
    <!-- Aquí se incluirá el contenido de servicios.php -->
    <?php include_once 'servicios.php'; ?>
    <section id="contacto">
        <h2>Contáctenos</h2>
        <p>Para consultas o solicitudes de información, puede contactarnos utilizando los siguientes medios:</p>
        <ul>
            <li>Dirección física: Av. Providencia 1234, Oficina 601, Providencia, Santiago, Chile</li>
            <li>Teléfono: +56 2 1234 5678</li>
            <li>Correo electrónico: info@coningenio.cl</li>
            <li>Dominio de la página web: <a href="http://www.coningenio.cl">www.coningenio.cl</a></li>
        </ul>
    </section>
    <!-- Aquí se incluirá el contenido de nosotros.php -->
    <?php include_once 'nosotros.php'; ?>
</body>
</html>
