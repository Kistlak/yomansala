<html>
<link rel="shortcut icon" type="image/png" href="img/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400&display=swap" rel="stylesheet">

<style>
    a{
        font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif!important;
    }

    .sidenav {
        height: 100%;
        width: 200px;
        position: absolute;
        z-index: 1;
        top: 155;
        left: 61;
        overflow-x: hidden;
        padding-top: 20px;
        font-weight: lighter;
        line-height: 90%;
    }

    .sidenav a {
        padding: 6px 6px 6px 32px;
        text-decoration: none;
        font-size: 23px;
        color: rgb(198, 197, 197);
        display: block;
    }

    .sidenav a:active {
        font-weight: 200;
    }

    .logo {
        position: absolute;
        left: 78px;
        top: 40px;
    }
    .topnav{
        visibility:hidden;
        display:none;
    }
    @media (min-width: 100px) and (max-width: 1050px) {
        .overlay {
            height: 100%;
            width: 100%;
            display: none;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(255,255,255);
        }

        .overlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif!important;

        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 50px;
            color: #818181;
            display: block;
            transition: 0.3s;
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif!important;

        }

        .overlay a:hover, .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 100px;
        }

        @media screen and (max-height: 450px) {
            .overlay a {font-size: 50px}
            .overlay .closebtn {
                font-size: 70px;
                top: 15px;
                right: 35px;
            }
        }
        .sidenav{
            visibility:hidden!important;
            display:none!important;
        }
        .logo{
            visibility:hidden!important;
            display:none!important;
        }
        .topnav{
            visibility:visible!important;
            display:inline!important;
        }
        .topnav {
            overflow: hidden;
            background-color: #333;
            position: relative;
        }

        .topnav #myLinks {
            display: none;
            text-align: center;
        }

        a{
            color: rgb(198, 197, 197)!important;
        }

        .topnav a {
            color: grey;
            text-decoration: none;
            display: block;
        }

        .topnav a.icon {
            background: white;
            color: rgb(46,44,45)!important;
            display: block;
            position: fixed;
            top: 0.5em;
            right:1em;
            height:90px!important;
            width:90px!important;
            font-size:50px;
        }

        .topnav a:hover {
            color: black;
        }

        .active {
            font-family: "ScalaSans-RegularLF";
            font-size:65px!important;
            margin-left: 8%;
            background-color: white;
            color: rgb(46,44,45)!important;
            text-align: left;
        }
    }
</style>

@yield('css_section')

<head>

</head>

<body>
@include('layouts.web_main_nav')

@yield('content')

</body>
@yield('js_section')
<script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
    function openNav() {
        document.getElementById("myLinks").style.display = "block";
    }

    function closeNav() {
        document.getElementById("myLinks").style.display = "none";
    }
</script>
</html>
