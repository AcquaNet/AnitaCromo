<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cromo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header id="cabecera_inicio" class="container-fluid">
        <div class="row"> 
            <div id="cuenta" class="col-sm-4 col-xl-5 modotelefono">
                <div class="nav justify-content-center">
                        <form class="d-flex buscador" role="search">
                            <input class="form-control form-control-sm " type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-light btn-sm" type="submit">Buscar</button>
                        </form>

                        <div class="caja_cuenta"><?php if(isset($_SESSION['clientes'])) { ?><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="" viewBox="0 0 20 20">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                      </svg> 
                        <a href="cerrar_secion.php" class="botones caja_cuenta1">CERRAR SESION</a>
                        <?php } else { ?>
                    </div>

                    <div class="caja_cuenta"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="" viewBox="0 0 20 20">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                      </svg><a href="cuenta.html" class="botones caja_cuenta1">CUENTA</a>
                      <?php } ?>
                    </div>
                    
                    <div class=" caja_carrito"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg><a href="carrito.html" class="botones caja_carrito1"></a></div>
                </div>
            </div>
            <nav id="botonera"  class="navbar navbar-expand-lg  col-sm-4 col-xl-5 botoneracomputadora">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon prueba"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg></span>
                  </button>
                  <div class="collapse navbar-collapse nav-fill" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#"></a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle botones" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">PRODUCTOS</a>
                        <ul class="dropdown-menu subsecciones">
                            <li><a class="dropdown-item subsecciones" href="productos.php">Ver todo</a></li> 
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item subsecciones" href="remerasytops.php">Remeras y tops</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item subsecciones" href="vestidos.php">Vestidos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item subsecciones" href="poleras.php">Poleras</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item subsecciones" href="pañuelos.php">Pañuelos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item subsecciones" href="bikers.php">Bikers</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item subsecciones" href="buzos.php">Buzos</a></li>
                          </ul>
                      </li>
                      <li class="nav-item">
                        <a href="sobrecromo.html" class="nav-link botones">SOBRE NOSOTROS</a>
                      </li>
                      <li class="nav-item">
                        <a href="contacto.html" class="nav-link botones">CONTACTO</a>
                      </li>
                      <li class="nav-item">
                        <a href="preguntasfrecuentes.html" class="nav-link botones" >PREGUNTAS FRECUENTES</a>
                      </li>
                    </ul> 
                  </div>
                </div>
              </nav> 
            <div id="marca" class="col-sm-4 col-xl-2">
                <a href="index.html" class="nav-link botones"><img src="imagenes/logo.png" alt="Logo" class="img-fluid"></a>
            </div>  
            <nav id="botonera"  class="navbar navbar-expand-lg  col-sm-4 col-xl-5 botoneratelefono">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon prueba"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg></span>
                  </button>
                  <div class="collapse navbar-collapse nav-fill" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#"></a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle botones" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">PRODUCTOS</a>
                        <ul class="dropdown-menu subsecciones">
                            <li><a class="dropdown-item subsecciones" href="productos.php">Ver todo</a></li> 
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item subsecciones" href="remerasytops.php">Remeras y tops</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item subsecciones" href="vestidos.php">Vestidos</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item subsecciones" href="poleras.php">Poleras</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item subsecciones" href="pañuelos.php">Pañuelos</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item subsecciones" href="bikers.php">Bikers</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item subsecciones" href="buzos.php">Buzos</a></li>
                          </ul>
                      </li>
                      <li class="nav-item">
                        <a href="sobrecromo.html" class="nav-link botones">SOBRE NOSOTROS</a>
                      </li>
                      <li class="nav-item">
                        <a href="contacto.html" class="nav-link botones">CONTACTO</a>
                      </li>
                      <li class="nav-item">
                        <a href="preguntasfrecuentes.html" class="nav-link botones" >PREGUNTAS FRECUENTES</a>
                      </li>
                    </ul> 
                  </div>
                </div>
              </nav> 
              <div id="cuenta" class="col-sm-4 col-xl-5 modocomputadora">
                <div class="nav justify-content-center">
                        <form class="d-flex buscador" role="search">
                            <input class="form-control form-control-sm " type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-light btn-sm" type="submit">Buscar</button>
                        </form>
                       
                        <div class="caja_cuenta"><?php if(isset($_SESSION['clientes'])) { ?><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="" viewBox="0 0 20 20">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg> 
                        <a href="cerrar_secion.php" class="botones caja_cuenta1">CERRAR SESION</a>
                        <?php } else { ?>
                    </div>

                    <div class="caja_cuenta"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="" viewBox="0 0 20 20">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                      </svg><a href="cuenta.html" class="botones caja_cuenta1">CUENTA</a>
                      <?php } ?>
                    </div>
                    
                    <div class=" caja_carrito"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="" viewBox="0 0 20 20">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg><a href="carrito.html" class="botones caja_carrito1"></a></div>
                </div>
            </div>
        </div> 
    </header>
    <section id="cont_productos" class="container-fluid">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col col-sm-12 col-md-6 col-xl-3 cajaproductos">
                <div class="card h-100 productos_fondo">
                            <img src="imagenes/bikers.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                    <h5 class="card-title">BIKERS</h5>
                                    <?php if(isset($_SESSION['clientes'])) { ?>
                                    <p class="card-text">$5.300</p>
                                    <a href="carrito.html" class="btn color_boton">AGREGAR AL CARRITO</a>
                                    <?php } ?>
                            </div>
                                            
                </div>
            </div>


        </div>
    </section>



    <footer id="pie_inicio" class="container-fluid">
        <div class="row gx-2" id="mod9_cont">
            <div id="redessociales" class="gy-4 col-sm-4 col-xl-2">
                <div class="seguinos">Seguinos</div>
                <div class="seguinos"><a href="https://www.instagram.com/cromo_ba/" class="seguinos" target="_blank"><svg
                            xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg></a><a href="https://hi-in.facebook.com/100065158862399/shop/?ref_code=page_shop_card&ref_surface=mini_shop_product_details" class="seguinos" target="_blank"><svg
                            xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg></a>
                </div>
            </div>
        </div>
    </footer>


    <script type="javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>