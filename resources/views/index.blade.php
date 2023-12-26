<!doctype html>
<html lang="es">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

      <link href="app.css" rel="stylesheet">

      <title>TOTY</title>
   </head>

   <body>

      <header> 
         <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top alert-home">
            <a class="navbar-brand" href="#">
               <img src="img/logo.svg" width="60" height="60" class="d-inline-block align-top" alt="">
            </a>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarsExample06">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item active">
               <a class="nav-link" href="{{route('home')}}">Inicio <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="{{route('secure')}}">Seguridad</a>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Más información</a>
               <div class="dropdown-menu" aria-labelledby="dropdown06">
                 <a class="dropdown-item" href="#">Seguridad</a>
                 <a class="dropdown-item" href="#">Clientes</a>
                 <a class="dropdown-item" href="#">Preguntas frecuentes</a>
               </div>
             </li>
             <li class="nav-item">
             	<a href="#" class="btn btn-outline-primary">Ingresar</a>
             </li>
           </ul>
         </div>
         </nav>
      </header>
      <main role="main">
         <section class="jumbotron bg text-center mb-0">
            <div class="row pt-5 bg-home">
               <div class="col-sm-12 col-md-12 col-lg-6 pt-5 text-left">

                  <div class="container">
                     <h5 class="title-home pt-5 ml-5">Almacena tus archivos  <br> con más eficiencia y <b>seguridad</b></h5>
                     <p class="subtitle-home pt-4 ml-5">Obtén el espacio que necesitas. <br>Sube tus archivos y accede a ellos <br> desde cualquier dispositivo cuando quieras.</p>
                     <a href="" class="btn btn-primary mt-4 ml-5">Pruébalo gratis 30 días</a>
                     <p class="mt-2 ml-5">O bien, <a href="">cómpralo ya mismo</a></p>
                  </div>
               </div>

               <div class="col-sm-12 col-md-6 d-none d-md-none d-lg-block shadow">
                  <div class="container"><img class="w-100 img-home" src="img/admin.png">
                  </div>
               </div>
            </div>
         </section>

         <div class="alert alert-light text-center alert-home" role="alert">
            Descubre todo el potencial que esta aplicación tiene para ti. Disponible 24/7.
         </div>

         <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <p class="lead subtitle-home">Compara los planes y escoge el que más se adapte a lo que necesitas.</p>
         </div>

         <div class="container">
            <div class="d-flex flex-row justify-content-center align-items-center">
               <div class="row mt-5 pt-2">
                  <div class="col-lg-4 col-md-6 text-center">
                     <div class="card mb-4">
                        <div class="card-header">
                           <h4 class="my-0 font-weight-normal">Mensual</h4>
                        </div>
                        <div class="card-body text-left">
                           <h1 class="card-title pricing-card-title">$19 <small class="text-muted">/ mes</small></h1>
                           <ul class="list-unstyled mt-3 mb-4">
                              <li><i class="fas fa-dollar-sign"></i> <del>Descuento</del></li>
                              <li><i class="fas fa-user-circle"></i> Múltiples inicios de sesión</li>
                              <li><i class="far fa-hdd"></i> 20 GB de almacenamiento</li>
                              <li><i class="fas fa-headset"></i> Soporte técnico</li>
                              <li><i class="far fa-calendar-alt"></i> Acceso 24/7</li>
                              <li><i class="fas fa-cloud-upload-alt"></i> Subir cualquier tipo de archivos</li>
                           </ul>
                           <button type="button" class="btn btn-lg btn-block btn-outline-info">Seleccionar plan</button>
                        </div>
                     </div>
                  </div>


                  <div class="col-lg-4 col-md-6 text-center">
                     <div class="card mb-4">
                        <div class="card-header">
                           <h4 class="my-0 font-weight-normal">Semestral</h4>
                        </div>
                        <div class="card-body text-left">
                           <h1 class="card-title pricing-card-title">$99 <small class="text-muted">/ mes</small></h1>
                           <ul class="list-unstyled mt-3 mb-4">
                              <li><i class="fas fa-dollar-sign"></i> Descuento de <b>$15</b></li>
                              <li><i class="fas fa-user-circle"></i> Múltiples inicios de sesión</li>
                              <li><i class="far fa-hdd"></i> 20 GB de almacenamiento</li>
                              <li><i class="fas fa-headset"></i> Soporte técnico</li>
                              <li><i class="far fa-calendar-alt"></i> Acceso 24/7</li>
                              <li><i class="fas fa-cloud-upload-alt"></i> Subir cualquier tipo de archivos</li>
                           </ul>
                           <button type="button" class="btn btn-lg btn-block btn-info">Seleccionar plan</button>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-6 text-center">
                     <div class="card mb-4">
                        <div class="card-header">
                           <h4 class="my-0 font-weight-normal">Anual</h4>
                        </div>
                        <div class="card-body text-left">
                           <h1 class="card-title pricing-card-title">$199 <small class="text-muted">/ mes</small></h1>
                           <ul class="list-unstyled mt-3 mb-4">
                              <li><i class="fas fa-dollar-sign"></i> Descuento de <b>$29</b></li>
                              <li><i class="fas fa-user-circle"></i> Múltiples inicios de sesión</li>
                              <li><i class="far fa-hdd"></i> 20 GB de almacenamiento</li>
                              <li><i class="fas fa-headset"></i> Soporte técnico</li>
                              <li><i class="far fa-calendar-alt"></i> Acceso 24/7</li>
                              <li><i class="fas fa-cloud-upload-alt"></i> Subir cualquier tipo de archivos</li>
                           </ul>
                           <button type="button" class="btn btn-lg btn-block btn-outline-info">Seleccionar plan</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


            <div class="row mt-5 pt-3 mb-5">
               <div class="col-lg-4 text-center">
                  <img class="img-fluid" src="img/features/dashboard.svg" alt="Generic placeholder image" width="120">
                  <h5 class="mt-5 feature-text">Interfaz amigable</h5>
               </div>

               <div class="col-lg-4 text-center">
                  <img class="img-fluid" src="img/features/secure.svg" alt="Generic placeholder image" width="120">
                  <h5 class="mt-5 feature-text">Almacenamiento seguro</h5>
               </div>

               <div class="col-lg-4 text-center">
                  <img class="img-fluid" src="img/features/support.svg" alt="Generic placeholder image" width="120">
                  <h5 class="mt-5 feature-text">Soporte técnico</h5>
               </div>
            </div>


         </div>
      </main>
         
         <div class="alert-home "></div>

         <footer class="container py-5">
            <div class="row">
               <div class="col-12 col-md">
                  <img src="img/logo.svg" width="100">
                  <small class="d-block mb-3 text-muted text-left">® BuffaloSafe</small>
               </div>

               <div class="col-sm-6 col-md-3">
                  <h5>BuffaloSafe</h5>
                  <p class="text-small text-muted">
                     Los pagos y el almacenamiento dentro de nuestra plataforma son totalmente seguros. Los archivos estarán disponibles instantáneamente. Contamos con un servicio de almacenamiento 24/7
                  </p>
               </div>

               <div class="col-sm-6 col-md-3 text-center">
                  <h5>Más información</h5>
                  <ul class="list-unstyled text-small">
                     <li><a class="text-muted" href="#">Youtube</a></li>
                     <li><a class="text-muted" href="#">GitHub</a></li>
                     <li><a class="text-muted" href="#">Twitter</a></li>
                     <li><a class="text-muted" href="#">Café y Código</a></li>
                  </ul>
               </div>
               <div class="col-sm-6 col-md-3 text-right">
                  <h5>Medios de pago</h5>
                  <img class="img-fluid" src="http://3.bp.blogspot.com/-oumQWdMsBL8/Vh94mt2nYLI/AAAAAAAAANQ/qPwSgz1YgJc/s400/Payment%2BCard%2BNetworks%2BLogo.jpg" width="220">
               </div>
         </footer>

         <!-- Optional JavaScript -->
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
         
   </body>
</html>



