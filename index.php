<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="./CSS/servicio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<nav>
    <ul>
        <!-- Logo -->
        <li><img class="logo" src="../img/images.jpeg" alt="Logo"></li>
        <!-- Elementos del menú -->
        
        <div class="cambio">
            <li><a href="index.php" class="tab" onclick="changeTab(this)"><i class ="fas fa-home"></i> inicio</a></li>
        </div>
        <li><a href="./php/servicios.php" class="tab" onclick="changeTab(this)"><i class="fas fa-cogs"></i> Servicios</a></li>
        <li><a href="./php/comentario.php" class="tab" onclick="changeTab(this)"><i class="fas fa-comments"></i> Comentarios</a></li>
        <li><a href="../conexion/carritoU.php" class="tab" onclick="changeTab(this)"><i class="fas fa-shopping-cart"></i> Carrito de Compras</a></li>
        <li><a href="./php/acercade.php" class="tab" onclick="changeTab(this)"><i class="fas fa-info-circle"></i> Acerca de</a></li>
        <li><a href="./php/login.php" class="tab" onclick="changeTab(this)"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a></li>
    </ul>
</nav>

<header>
    <h1>Productos</h1>
</header>

    <div class="products">
        <div class="product">
            <img src="../img/tinta1.jpeg" alt="Tinta Para Impresora">
            <h3>Tinta Para Impresora</h3>
            <p>Marca EPSON</p>
            <p>Precio: $100</p>
        </div>
        <div class="product">
            <img src="../img/descarga (1).jpeg" alt="Antivirus Mcfee">
            <h3>Antivirus Mcfee</h3>
            <p>Para Dies dispositivos</p>
            <p>Precio: $500</p>
        </div>
        <!-- Agrega más productos según sea necesario -->
    </div>

    <header>
        <h1>Servicios</h1>
    </header>

    <main>
        <form id="product-form">
            <label for="serial-number">Ingrese el Número de Servicio para ver el estado de su producto:</label>
            <input type="text" id="serial-number" name="serial-number" placeholder="Ingrese el número de serie">
            <button type="submit">Ver Estado</button>
        </form>

        <?php
        include ("../conexion/servicios.php")
        ?>
        <div id="status">
            
        <?php
        if ($serviceData) {
            if (is_array($serviceData)) {
                echo "<table>";
                echo "<tr><th>#Servicio</th><th>Cliente</th><th>Descripción</th><th>Fecha</th><th>Proceso</th></tr>";
                echo "<tr>";
                echo "<td data-label='#Servicio'>" . htmlspecialchars($serviceData['num']) . "</td>";
                echo "<td data-label='Cliente'>" . htmlspecialchars($serviceData['cliente']) . "</td>";
                echo "<td data-label='Descripción'>" . htmlspecialchars($serviceData['falla']) . "</td>";
                echo "<td data-label='Fecha'>" . htmlspecialchars($serviceData['fecha']) . "</td>";
                echo "<td data-label='Proceso'>" . htmlspecialchars($serviceData['estado']) . "</td>";
                echo "</tr>";
                echo "</table>";
            } else {
                echo "<p>" . htmlspecialchars($serviceData) . "</p>";
            }
        }
        ?>
        </div>  
    </main>

    <main>
        <section>
            <h2>Servicio de mantenimiento</h2>
            <p>El servicio de mantenimiento consiste en realizar una inspección, reparación, limpieza y ajuste en equipos, maquinaria, infraestructuras o cualquier otro tipo de bienes con el fin de garantizar su correcto funcionamiento, prolongar su vida útil y prevenir averías o fallos inesperados.</p>
        </section>
        <section>
            <h2>Reparación</h2>
            <p>Consiste en la reparación del dispositivo, máquina o herramienta. Se remplazan o cambian piezas que puedan perjudicar al dispositivo o que ya no funcionen correctamente.</p>
        </section>
    </main>

    <header>
        <h1>Acerca de</h1>
    </header>

    <main>
        <section>
            <h2>Información de la Empresa</h2>
            <p>"Especialistas en Tecnologías de información y comunicaciones. Contratos de mantenimiento de equipo de cómputo. Reparación de equipos de cómputo y periféricos. Instalaciones de cableados de red de cómputo, voz, datos, video y energía. Venta de equipos, software, periféricos y consumibles"</p>
        </section>
        <section>
            <h2>Contacto</h2>
            <p>Si necesita Ayuda o informacion sobre algun producto o servicio, porfavor contactenos</p>
            <p>Teléfono:  999-926-0036</p>
            <p>Correo Electrónico: imssacv@proadigy.net.mx</p>
        </section>
        <section>
            <h2>Horario</h2>
            <p>Lunes a Viernes: 9:00 am - 6:00 pm</p>
            <p>Sábado: 9:00 am - 2:00 pm </p>
            <p>Domingo: Cerrado</p>
        </section>
        <section>
            <h2>Redes sociales</h2>
            <div class="Iconos">
                <a target="blank" href="https://www.facebook.com/IMSSACV/about?locale=es_LA"><img class="logo" src="../img/face.png" alt="Logo"></a>
            </div>
        </section>
        <section>
            <h2>Ubicación</h2>
            <p>Dirección: Calle 3. 399 x 1 y 6 interior 3, Díaz Ordaz, 97130 Mérida, Yuc.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14899.339012537841!2d-89.5976482!3d20.9992601!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56774d5f11e5cb%3A0x631f758fe81cbc06!2sDistribuidora%20de%20Accesorios%20de%20Tecnolog%C3%ADa%20SA%20de%20CV!5e0!3m2!1ses-419!2smx!4v1715790693394!5m2!1ses-419!2smx" width="700" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe></iframe>
        </section>
    </main>

    <footer>
        <div class="fondo">
            <t>Derechos de autor &copy; 2024 Distribuidora de Accesorios de Tecnología SA de CV</t>
        </div>
    </footer>

</body>
</html>
