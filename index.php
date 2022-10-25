<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Anvorguesa - Inicio</title>
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="index.php">
                <img src="img/gatoanvorguesa.jpg" width="100" height="100">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    Inicio
                </a>

                <a class="navbar-item">
                    Hamburguesas
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Más
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                           Sobre nosotros
                        </a>
                      
                        <a class="navbar-item">
                            Contacto
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                            Reportar un error
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary">
                            <strong>Registrarse</strong>
                        </a>
                        <a class="button is-light">
                            Entrar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Anvorguesa</strong> by <a href="index.php">Nuestros Nombres</a>
      <br>
      &#169; 2022 Anvorguesa Factory
    </p>
  </div>
</footer>

</body>

</html>