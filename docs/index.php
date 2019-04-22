<?php include 'header.php'; ?>
<!-- -->
<?php include_once 'db/IndexBLL.php';?>

        <div class="container-fluid nopadding ">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/slide01.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>La mejor atencion para nuestros pacientes</h5>
                                <p>Para nostros eres nuestra mayor prioridad.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/slide02.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="h5">Atencion especializada</h5>
                                <p>Constamos con profesionales capacitados en el area.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/slide03.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="h5">Equipos Modernos</h5>
                                <p>Lo ultimo en tecnologia para resultados de examen clinicos.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="container sipadding">
            <div class="row col-sm-12">
                <div class="card  mr-auto " style="width: 18rem;">
                    <img src="img/card01.jpg" class="card-img-top" alt="...">
                    
                    <div class="card-body">
                        <h5 class="card-title">Equipo</h5>
                      <p class="card-text">El mejor personal medico listo para cada emergencia.</p>
                    </div>
                 </div>
                
                <div class="card  mr-auto " style="width: 18rem;">
                    <img src="img/card02.jpg" class="card-img-top" alt="...">
                    
                    <div class="card-body">
                        <h5 class="card-title">Compromiso</h5>
                      <p class="card-text">Nuestra mision es ayudarte, constamos un gran personal medico a tu disposicion.</p>
                    </div>
                 </div>
                
                <div class="card mr-auto " style="width: 18rem;">
                    <img src="img/card03.jpg" class="card-img-top" alt="...">
                    
                    <div class="card-body">
                        <h5 class="card-title">Apoyo</h5>
                      <p class="card-text">Nos esforzamos para estar siempre trabajando por que creemos que siempre se puede hacer mejor las cosas.</p>
                    </div>
                 </div>
                 
            </div>

        </div>

<?php include 'footer.php'; ?>




