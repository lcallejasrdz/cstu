<ul class="nav" id="side-menu">
    {{-- Dashboard --}}
    <li class="{!! (Request::is('admin') ? 'active' : '') !!}">
        <a href="{!! URL::route('dashboard') !!}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
    </li>
    @if(Sentinel::getUser()->role_id <= 3)
        {{-- Sales --}}
        @php
            $route_module = 'contacts';
            $route_title = trans('module_'.$route_module.'.module_title_s');
            $route_title_plural = trans('module_'.$route_module.'.module_title');
            $route_font_awesome = 'envelope';
        @endphp
        <li class="{!! (Request::is('admin/'.$route_module) || Request::is('admin/'.$route_module.'/*') ? 'active' : '') !!}">
            <a href="#"><i class="fa fa-{{ $route_font_awesome }} fa-fw"></i> {{ $route_title_plural }}<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{!! URL::route($route_module) !!}" class="{!! (Request::is('admin/'.$route_module) ? 'active' : '') !!}">{{ trans('strings.crud.list_of') }} {{ $route_title_plural }}</a>
                </li>
            </ul>
        </li>
    @endif
</ul>