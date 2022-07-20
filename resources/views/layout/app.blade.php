<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>
@include('include.head')
@if (Auth::check())
    <meta name="user_id" content="{{ Auth::user()->id }}" />
@endif
{{-- @include('include.style') --}}

<body>
    <div id="app" class="wrapper">
        @include('include.header')
        @yield('content')
        @include('include.footer')
    </div> <!-- end wrapper -->
    <!-- Base & Vendors
        ========================== -->
    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    {{-- <script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></script> m7tagnha w fe nfs l w2t 3mla moshkla m3a l registration --}}
    <script src="{{ asset('vendor/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('vendor/scrollto.js') }}"></script>
    <script src="{{ asset('vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/parallax/parallax.js') }}"></script>
    <script src="{{ asset('vendor/sliphover.js') }}"></script>
 
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/code.js') }}"></script>
    <script src="{{ asset('js/data.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    {{-- <script setup src="{{ asset('js/calendar.js')}}"></script> m7tagnha w fe nfs l 2t 3mla moshkla m3a l diganous --}}
    {{-- "vue":        "https://jspm.dev/vue/dist/vue",
https://ga.system.jspm.io/npm:vue@3.0.2/dev.index.js
"vue": "https://unpkg.com/vue@3.0.2/dist/vue.esm-browser.js", --}}
{{-- "vue":          "https://cdnjs.cloudflare.com/ajax/libs/vue/3.0.0-beta.15/vue.esm-browser.js" --}}
    <script type="importmap">{ "imports": {

            "vue":          "https://cdnjs.cloudflare.com/ajax/libs/vue/3.0.0-beta.15/vue.esm-browser.js",
            "vue-router": "https://cdnjs.cloudflare.com/ajax/libs/vue-router/4.0.0-alpha.12/vue-router.esm.js",
            "vuex":       "https://cdnjs.cloudflare.com/ajax/libs/vuex/4.0.0-beta.2/vuex.esm-browser.js"
        } }</script>



    <!--		loading-->

    <!-- <section class="loading-overlay">
   <div class="lds-circle"><div></div></div>
  </section> -->

    <!--		scroll up-->

    <!-- <div id="scroll-up">
            <i class="fa fa-arrow-up"></i>
        </div> -->

</body>

</html>
