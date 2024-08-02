<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo e(asset('css/style2.css')); ?>" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body style="height: 100vh;">
    <nav>
      <div class="navbar">
        <div class="container nav-container">
            <a href=""><strong>Log In</strong></a>
           
          <div class="logo">
            <h1>Data City</h1>
          </div>
          <div class="menu-items">
            <li><a href="#">Home</a></li>
            <li><a href="#">Sobre Nosotros</a></li>
            <li><a href="#">Habla con los creadores</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="<?php echo e(route('login')); ?>">Log In</a></li>
          </div>
        </div>
      </div>
    </nav>
    <section style="width: 99.2vw; height: 80vh; background-image: linear-gradient(175deg, rgb(226, 226, 226) 75%, rgb(255, 255, 255) 10%);">
        <div class="containerDiv">
            <!--Cards-->
            <div class="ag-format-container">
                <div class="ag-courses_box">
                  <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
                      <div class="ag-courses-item_bg"></div>
              
                      <div class="ag-courses-item_title">
                        Conoce estadisticas de tu ciudad
                      </div>
              
                      <div class="ag-courses-item_date-box">
                        Aplicación:
                        <span class="ag-courses-item_date">
                          Logistica
                        </span>
                      </div>
                    </a>
                  </div>
              
                  <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
                      <div class="ag-courses-item_bg"></div>
              
                      <div class="ag-courses-item_title">
                        Identifica sectores vulnerables
                      </div>
              
                      <div class="ag-courses-item_date-box">
                        Aplicación:
                        <span class="ag-courses-item_date">
                          Seguridad
                        </span>
                      </div>
                    </a>
                  </div>
              
                  <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
                      <div class="ag-courses-item_bg"></div>
              
                      <div class="ag-courses-item_title">
                        Verifica la seguridad de tu ciudad
                      </div>
              
                      <div class="ag-courses-item_date-box">
                        Aplicación:
                        <span class="ag-courses-item_date">
                          Seguridad
                        </span>
                      </div>
                    </a>
                  </div>
                </div>
            </div> 
              <!--Cards-->
            <div class="containerDiv2">
                <div class="">
                    <div class="">
                        <center><h1>Conoce a <strong>Data City</strong></h1></center>
                        <center>
                            <h4 style="text-align: center;">
                                Explora nuestra vanguardista plataforma que emplea inteligencia artificial para detectar vehículos 
                                y notificar colisiones al instante en tu ciudad, así como ofrecer un analisis logistico de la clasificación 
                                de autos y el tipo de colisiones. ¡Asegura tu entorno con precisión y eficacia!</h4>
                        </center>
                    </div>
                    <center>
                        <div class="" style="margin-top: 5%;">
                            <img src="<?php echo e(asset('images/rastreo.png')); ?>" style="width: 30%;" alt="">
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </section>
  </body>
</html><?php /**PATH /home/leonardo/TROYANO/resources/views/landding.blade.php ENDPATH**/ ?>