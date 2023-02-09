<!-- Vendor -->
    <script src="{{ asset('vendor/jquery/jquery.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('vendor/jquery.appear/jquery.appear.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('vendor/jquery.cookie/jquery.cookie.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('vendor/jquery.validation/jquery.validate.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('vendor/jquery.gmap/jquery.gmap.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('vendor/lazysizes/lazysizes.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('vendor/isotope/jquery.isotope.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('vendor/vide/jquery.vide.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('vendor/vivus/vivus.min.js?v='.rand()) }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('js/theme.js?v='.rand()) }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('js/custom.js?v='.rand()) }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('js/theme.init.js?v='.rand()) }}"></script>

    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <!-- Load Esri Leaflet from CDN -->
    <script src="https://unpkg.com/esri-leaflet" defer></script>
    <script src="https://unpkg.com/esri-leaflet-geocoder" defer></script>
    <script src="https://unpkg.com/esri-leaflet@3.0.8/dist/esri-leaflet.js"
        integrity="sha512-E0DKVahIg0p1UHR2Kf9NX7x7TUewJb30mxkxEm2qOYTVJObgsAGpEol9F6iK6oefCbkJiA4/i6fnTHzM6H1kEA=="
        crossorigin="">
    </script>
    <script src="https://unpkg.com/esri-leaflet-geocoder@3.1.3/dist/esri-leaflet-geocoder.js"
        integrity="sha512-mwRt9Y/qhSlNH3VWCNNHrCwquLLU+dTbmMxVud/GcnbXfOKJ35sznUmt3yM39cMlHR2sHbV9ymIpIMDpKg4kKw=="
        crossorigin="">
    </script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin="">
    </script>

    {{-- SCRIPTS EXTRAS --}}
    @stack('scripts')
    {{-- END SCRIPTS EXTAS --}}
    @if (Session::has('alert'))
    <script>
        $(document).ready(function(){
            Swal.fire({
                title : '',
                icon  : "{{ Session::get('alert.type') }}",
                html  : "{!! Session::get('alert.message') !!}"
            });
        });
    </script>
    @endif
    </body>
</html>
