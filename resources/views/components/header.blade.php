<!-- Header -->
<header class="fullscreen-menu invert-header" data-menucolor="#171717">
    <div id="header-container">
        <!-- Logo -->
        <div id="logo" class="hide-ball">
            <a class="ajax-link" data-type="page-transition" href="/">

                <img src="/assets/logo-solo.png" alt="Forma Producciones Logo">

            </a>
        </div>
        <!--/Logo -->

        <!-- Navigation -->
        <nav>
            <div class="nav-height">
                <div class="outer">
                    <div class="inner">
                        <ul data-breakpoint="10025" class="flexnav">
                            <li class="link menu-timeline"><a class="ajax-link" data-type="page-transition"
                                    href="/">
                                    <div class="before-span"><span data-hover="Corporativo">Corporativo</span></div>
                                </a>
                            </li>
                            <li class="link menu-timeline"><a class="ajax-link" data-type="page-transition"
                                    href="/colegios">
                                    <div class="before-span"><span data-hover="Colegios">Colegios</span></div>
                                </a>
                            </li>
                            <li class="link menu-timeline"><a class="ajax-link" data-type="page-transition"
                                    href="/eventos">
                                    <div class="before-span"><span data-hover="Eventos">Eventos</span></div>
                                </a>
                            </li>
                            <li class="link menu-timeline"><a class="ajax-link" data-type="page-transition"
                                    href="/nosotros">
                                    <div class="before-span"><span data-hover="Nosotros">Nosotros</span></div>
                                </a>
                            </li>
                            <li class="link menu-timeline"><a class="ajax-link" data-type="page-transition"
                                    href="/contacto">
                                    <div class="before-span"><span data-hover="Contáctanos">Contáctanos</span>
                                    </div>
                                </a>
                            </li>
                            <li class="link menu-timeline"><a class="" href="#">
                                    <div class="before-span"><span data-hover="Clientes">Clientes</span></div>
                                </a>
                                <ul>
                                    <li><a class="ajax-link" href="/clientes/empresas"
                                            data-type="page-transition">Empresas</a></li>
                                    <li><a class="ajax-link" href="/clientes/colegios"
                                            data-type="page-transition">Colegios</a></li>
                                    <li><a class="ajax-link" href="/clientes/universidades"
                                            data-type="page-transition">Universidades</a></li>
                                    <!-- Nuevo enlace para mostrar todos los clientes -->
                                    <li><a>🔻</a></li>
                                    <li><a class="ajax-link" href="/clientes"
                                            data-type="page-transition">Todos los clientes</a></li>
                                </ul>
                            </li>
                            {{-- <li class="link menu-timeline"><a class="" href="#">
                                    <div class="before-span"><span data-hover="More">More</span></div>
                                </a>
                                <ul>
                                    <li><a class="ajax-link" href="typography.html"
                                            data-type="page-transition">Typography</a></li>
                                    <li><a class="ajax-link" href="multimedia.html"
                                            data-type="page-transition">Multimedia</a></li>
                                    <li><a class="ajax-link" href="shortcodes.html"
                                            data-type="page-transition">Shortcodes</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!--/Navigation -->


        <!-- Menu Burger -->
        <div class="button-wrap right menu">

            <div class="icon-wrap parallax-wrap">
                <div class="button-icon parallax-element">
                    <div id="burger-wrapper">

                        <div id="menu-burger">
                            <img src="/assets/menu_button.png" alt="Menu">
                        </div>

                    </div>
                </div>
            </div>


            @if (Illuminate\Support\Str::contains(request()->path(), 'colegios'))
                <div class="button-box has-animation" data-delay="100">
                    <div class="clapat-button-wrap parallax-wrap hide-ball">
                        <div class="clapat-button parallax-element">
                            <div class="button-border rounded parallax-element-second">
                                <a target="_blank" href="http://citas.formaproducciones.com/">
                                    <span data-hover="Citas">Citas</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- <div class="button-text sticky right"><span data-hover="Menu">Menu</span></div> --}}


        </div>

        {{-- 
        <a class="button-wrap right citas_button" href="http://citas.formaproducciones.com/">Citas</a> --}}
        <!--/Menu Burger -->

    </div>
</header>
<!--/Header -->
