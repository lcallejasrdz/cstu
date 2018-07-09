<div class="row">
    <div class="col-xs-12">
        <p class="text-center title-head color-blue">Reparación de <strong>Refrigeradores</strong> y <strong>Equipos de Lavado</strong> <span class="color-orange">></span> <strong class="underline underline-orange">Contáctanos</strong>, Atención Inmediata: 5543315214 // 58714282 // 5561103023<br class="hidden-md hidden-lg"><a href="https://www.facebook.com/cstuniversal/" target="_blank" class="margin-left-30-md"><img src="{{ URL::to('assets/images/index/fb.png') }}" alt="..." class="social-icons"></a> <a href="whatsapp://send?phone=+5215543315214"><img src="{{ URL::to('assets/images/index/wa.png') }}" alt="..." class="social-icons"></a></p>
    </div>
</div>
<nav class="navbar navbar-default bg-blue">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::route('home') }}">
                <img src="{{ URL::to('assets/images/logo.svg') }}" alt="{{ env('APP_NAME') }}" class="navbar-logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                {{-- Products --}}
                <li class="">
                    <a href="{{ URL::route('home') }}">
                        Inicio
                    </a>
                </li>
                {{-- Products --}}
                <li class="">
                    <a href="#services">
                        Servicios
                    </a>
                </li>
                {{-- Products --}}
                <li class="">
                    <a href="#coverage">
                        Cobertura
                    </a>
                </li>
                {{-- Lang --}}
                <li>
                    <a href="#contact">
                        Contacto
                    </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>