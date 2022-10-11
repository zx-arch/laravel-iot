<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title}} | Entry UKDW</title>
    <link
        rel="stylesheet"
        href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css"
    />
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <link rel="shortcut icon" href="{{ asset('logo-ukdw.ico') }}">

    <link rel=”stylesheet”
    href=”https://cdn.jsdelivr.net/npm/cdbootstrap/css/cdb.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <!-- bootstrap 5 css -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
        crossorigin="anonymous"
    />
    
    <!-- BOX ICONS CSS-->
    <link
        href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
        rel="stylesheet"
    />


    <!-- custom css -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background-color: #fff;
        }
        .bg-success, .bg-success:hover, .bg-success:active, .bg-success:visited {
            background-color: #70da50 !important;
            color: #100901;
            border: #70da50;
        }
        .bg-danger, .bg-danger:hover, .bg-danger:active, .bg-danger:visited {
            background-color: #e95d58 !important;
        }
        .side-navbar {
            width: 180px;
            height: 100%;
            position: fixed;
            margin-left: -300px;
            background-color: #100901;
            transition: 0.5s;
        }
        .nav-link:active,
        .nav-link:focus,
        .nav-link:hover {
            background-color: #ffffff26;
        }

        .my-container {
            transition: 0.4s;
        }

        .active-nav {
            margin-left: 0;
        }

        /* for main section */
        .active-cont {
            margin-left: 180px;
        }

        #menu-btn {
            background-color: #100901;
            color: #fff;
            margin-left: -62px;
        }

        .my-container input {
            border-radius: 2rem;
            padding: 2px 20px;
        }
    </style>
</head>