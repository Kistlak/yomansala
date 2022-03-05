@extends('layouts.web_main_template')

@section('css_section')
    <style>
        .art_page {
            margin-left: 45%;
            margin-top: 1%;
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

        b{
            font-family: "ScalaSans-BoldLF";
        }

        div.gallery {
            border: 0px solid #ccc;
        }

        .img__description {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: grey;
            color: #fff;
            visibility: hidden;
            opacity: 0;

            /* transition effect. not necessary */
            transition: opacity .2s, visibility .2s;
        }

        div.gallery:hover{
            border: 1px solid white;
        }

        .image1wrap{
            position: relative;
            height: 400px;
            weight: 400px;

        }

        div.image1wrap:hover .img__description{
            visibility: visible;
            opacity: 0.1;
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif!important;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        body {
            padding: 20px;
        }

        h2 {
            margin-bottom: .5em;
        }

        .grid-container {
            /*display: grid;*/
            /*display: flex;*/
            /*flex-direction: row;*/
            /*flex-wrap: wrap;*/
            column-count: 2;
            column-gap: 17px;
            /*justify-content: space-between;*/
            width: 55vw;
            /*width: 1000px;*/
            /*grid-template-columns: repeat(auto-fill, minmax(230px, 0fr));*/
            /*grid-gap: 2em;*/
            /*row-gap: 1em!important;*/
            margin-left: 35%;
            margin-top: 11%;
        }
        /* hover styles */

        .location-listing {
            /*column-span: all;*/
            /*width: 27%;*/
            /*margin: 0 3%;*/
            position: relative;
            -webkit-column-break-inside: avoid;
            page-break-inside: avoid;
            break-inside: avoid;
        }

        .location-title {
            -webkit-column-break-inside: avoid;
            page-break-inside: avoid;
            break-inside: avoid;
        }

        .location-image {
            line-height: 0;
            overflow: hidden;
            /*height: 200px;*/
        }

        .img1 {
            object-fit: contain;

        }

        img.img1 {

        }

        .location-image img {
            filter: blur(0px);
            transition: filter 0.3s ease-in;
            transform: scale(1.1);
        }

        .location-title{
            font-size: 1.5em;
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif!important;
            text-decoration: none;
            z-index: 1;
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity .5s;
            background: white;
            color: black;
            /* position the text in t’ middle*/
            display: flex;
            align-items: center;
            justify-content: center;
            text-align:center;
        }

        .location-listing:hover .location-title {
            opacity: 0.4;
        }

        .location-listing:hover .location-image img {
            filter: blur(2px);
        }
        /* for touch screen devices */

        .img1{
            width: 100%;
            /* need to overwrite inline dimensions */
            height: auto;
        }
        .img2{
            width: 100%;
            /* need to overwrite inline dimensions */
            height: auto;
        }
        .img3{
            width: 100%;
            /* need to overwrite inline dimensions */
            height: auto;
        }
        .img4{
            width: 100%;
            /* need to overwrite inline dimensions */
            height: auto;
        }
        .img5{
            width: 100%;
            /* need to overwrite inline dimensions */
            height: auto;
        }
        .img6{
            width: 100%;
            /* need to overwrite inline dimensions */
            height: auto;
        }
        .img7{
            width: 100%;
            /* need to overwrite inline dimensions */
            height: auto;
        }

        #widepic{
            object-fit: fill;
            width:100%;
            height:auto;
            grid-column-start: 1;
            grid-column-end: 1;
            grid-row-start:3;
            grid-row-end:4;
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
                margin-left: 0%;
                margin-top:-35px;
                background-color: white;
                color: rgb(46,44,45)!important;
                text-align: left;
            }

            .container{
                margin-top:20%!important;
            }
            .fa{
                font-size:70px!important;
                margin-left:-30px;
            }
            .icon{
                margin-top:30px;
            }
            .grid-container {
                /*display: grid;*/
                /*display: flex;*/
                /*flex-direction: row;*/
                /*flex-wrap: wrap;*/
                /*justify-content: space-between;*/
                width: 80vw;
                /*width: 1000px;*/
                /*grid-template-columns: repeat(auto-fill, minmax(230px, 0fr));*/
                /*grid-gap: 2em;*/
                /*row-gap: 1em!important;*/
                margin-left: 7%;
                margin-top: 13%;
                column-count: 1!important;
            }
            .location-listing {
                /*width: 44%;*/
                margin: 10% 3%;
                position: relative;

            }

            .location-image {
                line-height: 0;
                overflow: hidden;
                /*height: 200px;*/
            }
            #widepic{
                object-fit: fill;
                width:100%;
                height:auto;

            }
            .location-title{
                font-weight:500;
                font-size: 1.8em;
                font-family: "ScalaSans-RegularLF" !important;
                font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif!important;
                text-decoration: none;
                z-index: 0;
                /*position: absolute;*/
                position: relative;
                height: 10%;
                width: 100%;
                /*top: 50%;*/
                /*left: 0;*/
                opacity:1;
                transition: opacity .5s;
                background: none;
                color: black!important;
                /* position the text in t’ middle*/
                display: flex;
                align-items: center;
                justify-content: center;
                text-align:center;
            }
        }
    </style>
@endsection

@section('content')
    <div class="child-page-listing">

        <div class="grid-container">

            @foreach($arts as $art)

                <article id="3685" class="location-listing">
                    <div class="location-image">
                        <a href="/art/{{$art->url_mapped}}">
                            <img class="img1" width="300" height="169" src="/img/{{$art->img}}" alt="{{$art->title}}">
                        </a>
                    </div>

                    <a class="location-title" href="/art/{{ $art->url_mapped }}">
                        {{ $art->title }}
                    </a>
                    <p></p>
                </article>

            @endforeach

        </div>
        <!-- end grid container -->

    </div>
@endsection
