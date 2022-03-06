@extends('layouts.web_main_template')

@section('css_section')
    <style>
        a:hover{
            text-decoration:none!important;
            color:rgb(198, 197, 197)!important;
        }
        a{

        }

        .location-listing:hover .location-title {
            opacity: 0.8;
        }

        .location-listing:hover .location-image img {
            filter: blur(2px);
        }
        .newImages{
            height: 11px;
            width: 6px;
        }
        .rightArrow{
            margin-top:-11px;
            margin-left:630px;
        }
        .leftArrow{
            margin-top:-75px;
            margin-left:610px;
        }

        @-moz-document url-prefix() {
            .rightArrow{
                margin-top:-24px;
                margin-left:630px;
            }
            .leftArrow{
                margin-top:-80px;
                margin-left:610px;
            }
        }

        .artphoto {
            margin-left: 650px;
            margin-top: 180px;

        }
        .arttitle{
            margin-left: 650px;
            margin-top: 40px;
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif!important;

        }
        .artdim{
            margin-top: -20px;
            margin-left: 650px;
            color: rgb(161, 154, 141);
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif!important;


        }
        .artdesc{
            margin-left: 650px;
            margin-top:-20px;
            color: rgb(144, 144, 143);
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif!important;

        }
        .artdesc2{
            margin-left: 650px;
            margin-top:-20px;
            color: rgb(144, 144, 143);
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif!important;
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
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif!important;
        }

        b{
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif!important;
        }

        @media (min-width: 100px) and (max-width: 1050px) {

            @media screen and (max-height: 450px) {
                .overlay a {font-size: 50px}
                .overlay .closebtn {
                    font-size: 70px;
                    top: 15px;
                    right: 35px;
                }
            }

            a{
                color: rgb(198, 197, 197)!important;
            }

            .active {
                font-family: "ScalaSans-RegularLF";
                font-size:65px!important;
                margin-left: 2.2%;
                margin-top:-9px;
                background-color: white;
                color: rgb(46,44,45)!important;
                text-align: left;
            }

            .artphoto {
                display: block;
                margin-left: auto!important;
                margin-right: auto!important;
                text-align:center;
            }
            .artphoto img{
                max-width:92%!important;
                max-height:100%!important;
                margin-top:-20%;
            }
            .arttitle{
                margin-left:40px;
                font-size:25px!important;

                margin-top: 40px;
            }
            .artdim{
                font-size:25px!important;
                margin-top: -10px;
                margin-left: 40px!important;
                color: rgb(161, 154, 141);
            }
            .artdesc{
                font-size:25px!important;
                margin-left: 40px!important;
                color: rgb(144, 144, 143);
            }
            .artdesc2{
                font-size:25px!important;
                margin-left: 40px!important;
                color: rgb(144, 144, 143);
            }
            .newImages{
                height: 20px;
                width: 15px;
            }
            .rightArrow{
                /*visibility:hidden!important;*/
                margin-top:-20px;
                margin-left:6%;
            }
            .leftArrow{
                /*visibility:hidden!important;*/
                margin-top:-65px; /*-90px*/
                margin-left:1%;
            }
            .location-title{
                font-size: 1.5em;
                font-family: "ScalaSans-RegularLF" !important;
                text-decoration: none;
                z-index: 1;
                position: absolute;
                height: 100%;
                width: 100%;
                top: 0;
                left: 0;
                opacity:0;
                transition: opacity .5s;
                background: white;
                color: black;
                /* position the text in t’ middle*/
                display: flex;
                align-items: center;
                justify-content: cenenter;
            }
            .series_name{
                visibility:hidden!important;
            }
            .icon{
                margin-top:45px;
                position:fixed!important;
            }
            .fa{
                position:fixed!important;
                font-size:70px;
                margin-left:0px;
            }
        }
        .series_name{
            visibility:visible;
            position:absolute;
            left:95;
            top:871;
        }
    </style>
@endsection

@section('content')
    <div class="series_name">
        @if ($art->series_id != 0)
            <p><strong> {{ $art->series->name }}</strong></p>
        @endif
    </div>
    <div class="artphoto">
        <img src="/img/{{$art->img}}" alt="{{$art->title}}" style="max-width:650px;max-height:650px;">
    </div>

    <div style='    margin-top: 100px;
    margin-left: 40px;'>

        @if ($artbefore!=null)

            <div class="leftArrow">

                <a  href="/art/{{$artbefore->url_mapped}}">
                    <img class="newImages" src="/img/left.png" alt="{{$artbefore->title}}">
                </a>

            </div>

        @endif


        @if ($artbefore==null)

            <div class="leftArrow">


                <img class="newImages" src="/img/ffffff.png">


            </div>

        @endif

        @if ($artafter!=null)

            <div class="rightArrow">

                <a  href="/art/{{$artafter->url_mapped}}">
                    <img class="newImages" src="/img/right.png" alt="{{$artafter->title}}"  >
                </a>
            </div>
        @endif
    </div>


    <div class="arttitle">
        <p><b>{{ $art->title }}</b></p>
    </div>
    <div class="artdim">
        <p>{{ $art->description1 }} @if($art->medium !== null)| {{ $art->medium }} @endif @if($art->year !== null)| {{ $art->year }} @endif</p>
    </div>

    @if(str_word_count($art-> description2) < 3)
        <div class="artdesc">
            <p>{{ $art->description2 }}</p>
        </div>
    @else
        <div class="artdesc2">
            <p>{{ $art->description2 }}</p>
        </div>
    @endif
@endsection
