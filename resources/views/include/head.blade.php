<head>
    <!-- Meta Tags
    ========================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Title
    ========================== -->
    <title>HEALTH RECORD</title>

    <!-- Favicon
    ===========================-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/2.png')}}">

    <!-- Base & Vendors
    ========================== -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.css') }}">
    <link href="{{ asset('vendor/owl-carousel/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl-carousel/css/owl.theme.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">
    <script src="https://kit.fontawesome.com/878f72f2b8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.0.5/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    {{-- <script type="importmap" src="https://unpkg.com/browse/list@2.0.19/"></script> --}}

    {{-- <script src="https://unpkg.com/vue-select@latest"></script>
<link rel="stylesheet" href="https://unpkg.com/vue-select@latest/dist/vue-select.css"> --}}


    {{-- <script type="importmap">
        {
          "imports": {
            "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
          }
        }
      </script> --}}
      {{-- <script src="https://unpkg.com/moment@2.26.0/moment.js"></script> --}}

    <!-- Site Style
    ========================== -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">


    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
