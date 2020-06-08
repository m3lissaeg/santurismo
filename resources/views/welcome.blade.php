@extends('layouts.app')

@section('content')
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <!-- Imagen de REYNALDO ALVAREZ CRUZ en Pixabay  -->
        <div class="masthead-subheading">Bienvendo al Paraíso Terrenal</div>
        <div class="masthead-heading text-uppercase">De Risaralda</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Conoce más</a>
    </div>
</header>
<!-- Description -->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Santuario</h2>
            <p>
                Santuario está situado en la región centro ocidental del Departamento de Risaralda, en el flanco oriental de la Cordillera Occidental de los Andes.
                Centra su economía en el cultivo del café. Sus gentes son trabajadoras, amables y alegres.
            </p>
        </div>

    </div>
</section>

<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Atractivos Turísticos</h2>
            <h3 class="section-subheading text-muted">Conoce los principales atractivos de Santuario.</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-hiking fa-stack-1x fa-inverse"></i></span>
                <h4 class="my-3">Ecoturismo y aves</h4>
                <p class="text-muted">Cuenta con dos grandes Reservas ecológicas : el Parque Nacional Natural Tatamá y el Parque Municipal Natural Planes de San Rafael</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-hotel fa-stack-1x fa-inverse"></i></span>
                <h4 class="my-3">Riqueza arquitectónica</h4>
                <p class="text-muted">Reflejada en sus hermosas casas coloniales antioqueñas y el Templo de la Inmaculada Concepción.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-house-user fa-stack-1x fa-inverse"></i></span>
                <h4 class="my-3">Alojamientos rurales</h4>
                <p class="text-muted"> Fincas donde se puede encontrar opciones como ver los procesos agrícolas de la panela y el café o alojamiento, para una experiencia diferente, </p>
            </div>
        </div>
    </div>
</section>

<!-- Noticias Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"> Blog Parque NN Tatamá</h2>
            <h3 class="section-subheading text-muted">Conoce las últimas noticias de Interés en este Santuario de la Naturaleza y la vida </h3>
        </div>

        <div class="row">
            @foreach($articles as $article)
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{$article->id}}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{$article->mediapath}}" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"> {{$article->title}}</div>
                        <div class="portfolio-caption-subheading text-muted"> {{$article->abst}}</div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>


<!-- Birds / about-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"> Avistamiento de Aves</h2>
            <h3 class="section-subheading text-muted">Estas son alguna de las aves que podrás avistar en el Parque Nacional Natural </h3>
        </div>
        <ul class="timeline">
            @foreach($birds as $bird)
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/{{$bird->id}}.png" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">{{$bird->name}} </h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">{{$bird->description}}</p>
                    </div>
                </div>
            </li>

            @endforeach

            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4> ¡Ven y<br />conócelas<br /> tú mism@!</h4>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"> Guías Turísticos</h2>
            <h3 class="section-subheading text-muted">Estos son algunos de los guías turísticos que están dispuestos a recorerrer contigo los lugares que quieras conocer.</h3>
        </div>
        <div class="row">
            @foreach($guides as $guide)


            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/{{$guide->id}}.jpg" alt="" />
                    <h4>{{$guide->name}}</h4>
                    <p class="text-muted"> {{$guide->email}} </p>
                    <p class="text-muted"> {{$guide->phone}} </p>
                    <a class="btn btn-dark btn-social mx-2" href="{{$guide->socialmedia}}"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="{{$guide->socialmedia}}"><i class="fab fa-facebook-f"></i> </a>
                    <a class="btn btn-dark btn-social mx-2" href="{{$guide->socialmedia}}"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            @endforeach

        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <p class="large text-muted">
                «Produce una inmensa tristeza pensar que la naturaleza habla mientras el género humano no la escucha»  Víctor Hugo.

                </p>
            </div>
        </div>
    </div>
</section>


<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contáctanos </h2>
            <h3 class="section-subheading text-muted"> Escríbenos y pronto recibirás nuestra respuesta</h3>
        </div>
        <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" type="text" placeholder="Tu nombre *" required="required" data-validation-required-message="Por favor ingresas tu nombre." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" type="email" placeholder="Tu correo *" required="required" data-validation-required-message="Por favor ingresas tu correo electrónico." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" type="tel" placeholder="Tu teléfono *" required="required" data-validation-required-message="Por favor ingresas tu número telefónico." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="message" placeholder="Tu Mensaje *" required="required" data-validation-required-message="Por favor ingresas tu mensaje."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar Mensaje</button>
            </div>
        </form>
    </div>
</section>


<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">Copyright © Santurismo 2020</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right"><a class="mr-3" href="#!"> Políticas de Privacidad</a><a href="#!">Términos de uso</a></div>
        </div>
    </div>
</footer>


<!-- Portfolio Modals-->
<!-- Modal 1-->
@foreach($articles as $article)
<div class="portfolio-modal modal fade" id="portfolioModal{{$article->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">{{$article->title}}</h2>
                            <p class="item-intro text-muted">{{$article->abst}}</p>
                            <img class="img-fluid d-block mx-auto" src="{{$article->mediapath}}" alt="" />
                            <p>
                                {{$article->body}}
                            </p>
                            <ul class="list-inline">
                                <li>Date: January 2020</li>
                                <li>Client: Threads</li>
                                <li>Category: Illustration</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach


@endsection