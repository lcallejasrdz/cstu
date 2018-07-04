<div class="row">
    <div class="col-xs-4 col-sm-2 col-md-1"></div>
    <div class="col-xs-8 col-sm-10 col-md-11">
        <p class="text-center title-head color-blue">Reparación de <strong>Refrigeradores</strong> y <strong>Equipos de Lavado</strong> <span class="color-orange">></span> <strong class="underline underline-orange">Contáctanos</strong>, Atención Inmediata: 5543315214 // 58714282 // 5561103023<br class="hidden-md hidden-lg"><a href="#" class="margin-left-30-md"><i class="fa fa-facebook-square fa-fw"></i></a><a href="#"><i class="fa fa-whatsapp fa-fw color-green"></i></a></p>
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
            <ul class="nav navbar-nav">
                {{-- Products --}}
                <li class="{{ $active == 'search' ? 'active' : '' }}">
                    <a href="{{ URL::route('search') }}">
                        Inicio
                    </a>
                </li>
                {{-- Products --}}
                <li class="{{ $active == 'search' ? 'active' : '' }}">
                    <a href="{{ URL::route('search') }}">
                        Servicios
                    </a>
                </li>
                {{-- Products --}}
                <li class="{{ $active == 'search' ? 'active' : '' }}">
                    <a href="{{ URL::route('search') }}">
                        Cobertura
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                {{-- Lang --}}
                <li>
                    <a href="{{ url('lang', [\App::getLocale() == 'es' ? 'en' : 'es']) }}">
                        Contacto
                    </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>