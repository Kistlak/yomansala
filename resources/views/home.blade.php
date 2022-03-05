@extends('layouts.web_main_template')

@section('css_section')
    <style>
        .home {
            margin-left: 45%;
            margin-top: 12%;
        }

        @font-face {
            font-family: ScalaSans-RegularLF;
            src: url('fonts/ScalaSans-RegularLF.otf');
            src: url('fonts/ScalaSans-RegularLF.woff2');
            src: url('fonts/ScalaSans-RegularLF.eot');
            src: url('fonts/ScalaSans-RegularLF.svg');
            src: url('fonts/ScalaSans-RegularLF.woff');
        }


        @font-face {
            font-family: ScalaSans-BoldLF;
            src: url('fonts/ScalaSans-BoldLF.otf');
            src: url('fonts/ScalaSans-BoldLF.woff2');
            src: url('fonts/ScalaSans-BoldLF.eot');
            src: url('fonts/ScalaSans-BoldLF.svg');
            src: url('fonts/ScalaSans-BoldLF.woff');
            font-weight: bold;
        }

        a{
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif!important;
        }

        body {
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif;
        }

        body{
            font-family: ;
        }

        b{
            font-family: "ScalaSans-BoldLF";
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
            .fa-lg{
                top:60px;
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
                padding: 14px 16px;
                text-decoration: none;
                display: block;
            }

            .topnav a.icon {
                background: white;
                color: rgb(46,44,45)!important;
                display: block;
                position: absolute;
                left: 800;
                top: 10;
                height:70px!important;
                width:70px!important;
            }

            .topnav a:hover {
                color: black;
            }

            .active {
                font-family: "ScalaSans-RegularLF";
                font-size:65px!important;
                margin-left: 0%;
                margin-top:-30px;
                background-color: white;
                color: rgb(46,44,45)!important;
                text-align: left;
            }
            .fa{
                font-size:70px!important;
            }
            .home{
                margin-left:20%!important;
                margin-right:10%!important;
                margin-top:30%!important;
            }
            .contact_page{
                margin-right:15%!important;
                margin-top:20%!important;
                margin-left:8%!important;
            }
            #contact_footer{
                margin-left:0%!important;
                margin-top:48%!important;
                text-align: center!important;
                font-size:16px!important;
            }
            #contact_email {
                color: black!important;
                text-decoration: none;
                font-size:25px!important;
                line-height:40%!important;
            }
            #insta_link{
                color:black!important;
                font-size:25px!important;
            }
            input[type=text] {
                width: 110%!important;
                height:100px!important;
                padding: 12px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid rgb(198, 197, 197);
                box-sizing: border-box;
                font-family: "ScalaSans-RegularLF";
                font-size: 30px;
            }

            input[type=submit] {
                width: 110%!important;
                height: 120px!important;
                padding: 12px;
                margin: 8px 0;
                font-size:30px;
                display: inline-block;
                border: 1px solid rgb(46,44,45);
                box-sizing: border-box;
                text-align: left;
                font-family: "ScalaSans-RegularLF";
            }
            .container{
                margin-top:20%!important;
            }
            .home{
                margin-left:20%!important;
                margin-right:10%!important;
                margin-top:30%!important;
            }
            .artist_text{
                font-size:23px!important;
                margin-top:10%!important;
                margin-left:10%!important;
                margin-right:10%!important;
            }
            .fa{
                font-size:70px!important;
            }
            .home{
                margin-left:3%!important;
                margin-right:0%!important;
                margin-top:10%!important;
            }
            .home img{
                width:900;
                height:900;
            }
            .icon{
                margin-top: -210px;
                margin-left:15px;
            }
        }

        #contact_footer{
            margin-left: 47%;
            margin-top: 20%;
            font-weight: lighter;
        }
    </style>
@endsection

@section('content')

    <div class="home">
        @if($banner->file_path == null)
            <div>No banner uploaded</div>
        @else
            <img src="{{ URL::asset($banner->file_path) }}" width=600 height=600>
        @endif
    </div>

@endsection
