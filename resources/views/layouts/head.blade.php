<!DOCTYPE html>
<html lang="es">
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>@yield('title')</title>

        <meta name="description" content="Fabricante de Cosméticos. Crea tu propia marca de cosméticos. Si sueñas con lanzar tu propio negocio y comenzar tu linea de cosméticos o crear tu marca de productos de belleza, en IMAQ trabajamos con una amplia gama de productos de calidad a precios accesibles. Industria Cosmética en México.">
        <meta name="keywords" content="IMAQ Industrial Maquiladora, Marca de cosméticos, Tu propia marca de cosméticos, Crea y Personaliza tu marca de cosméticos, Industria cosmética en México, Fabricante de cosmeticos" />
        <meta name="author" content="industrialmaquiladora.com">
        <meta property="og:locale" content="es_MX" />
        <meta property="og:type" content="websites" />
        <meta property="og:title" content="IMAQ | Industrial Maquiladora - Fabricante de Cosméticos" />
        <meta property="og:url" content="https://industrialmaquiladora.com/" />
		<meta property="og:site_name" content="IMAQ | Industrial Maquiladora, Industria Cosmética, Maquiladora de cosméticos, Maquiladora de maquillajes" />
		<link rel="canonical" href="https://industrialmaquiladora.com/" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
        <link rel="apple-touch-icon" href="favicon.ico">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <!-- Web Fonts  -->
        <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COpen+Sans:400,700,800&display=swap" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css?v='.rand()) }}">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('css/theme.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('css/theme-elements.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('css/theme-blog.css?v='.rand()) }}">
        <link rel="stylesheet" href="{{ asset('css/theme-shop.css?v='.rand()) }}">

        <!-- WhatsApp -->
        <link rel="stylesheet" href="{{ asset('css/whatsapp.css?v='.rand()) }}">

        <!-- Demo CSS -->
        <link rel="stylesheet" href="{{ asset('css/demos/demo-landing.css?v='.rand()) }}">

        <!-- Skin CSS -->
        <link id="skinCSS" rel="stylesheet" href="{{ asset('css/skins/skin-landing.css?v='.rand()) }}">

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/custom.css?v='.rand()) }}">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Head Libs -->
        <script src="{{ asset('vendor/modernizr/modernizr.min.js?v='.rand()) }}"></script>

        {{-- Fontwesome --}}
        <script src="https://kit.fontawesome.com/d97648113a.js" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-9JR2QDDMXM"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-9JR2QDDMXM');
        </script>

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
        <!-- Esri Leaflet Geocoder -->
        <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder/dist/esri-leaflet-geocoder.css"/>
        <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@3.1.3/dist/esri-leaflet-geocoder.css"
        integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
        crossorigin="">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>

    </head>
    <body data-plugin-page-transition>
