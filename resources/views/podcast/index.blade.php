@extends('layouts.web_main_template')

@section('css_section')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

        h1{
            font-size:30px;
        }
        a {
            text-decoration: none;
            color: rgb(144, 144, 143);
        }

        a:hover{
            text-decoration: none;
            color: rgb(144, 144, 143);
        }
        .podcast_page {
            top: -45px;
            left: 30px;
            position: absolute;
        }

        .seasonsContainer{
            margin-top:730px;
            margin-bottom:50px;
        }

        .seasonsInnerContainer{
            margin-bottom:50px;
        }

        .portrait {
            position: absolute;
            left: 400px;
            top: 220px;
        }

        .podcast_logo {
            position: absolute;
            left: 910px;
            top: 290px;
        }
        .episode_img{
            width:90%;
        }
        .podcast_text {
            position: absolute;
            text-align: center;
            left: 835px;
            min-width:450px;
            top: 420px;
            line-height: 140%;
        }

        .appleMusic {
            position: absolute;
            left: 900px;
            top: 560px;
        }

        .spotify {
            position: absolute;
            left: 1075px;
            top: 560px;
        }

        .line-break {
            margin-top:11px;
            height:2px;
            background-color: rgb(198, 197, 197);
            width:100%;
        }
        .season{
            text-align: left;
            font-size: larger;
            font-weight: lighter;
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
            font-family: "ScalaSans-RegularL#eF", 'Work Sans', sans-serif;
        }

        b{
            font-family: "ScalaSans-BoldLF";
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
            .portrait {
                position: absolute;
                left: 140px;
                top: 0px;
                width:600;
            }
            .portrait img{
                object-fit: cover;
                width:900px;
                height:1150px;
            }
            .podcast_logo {
                position: absolute;
                left: 140px;
                top: 1200px;
            }
            .podcast_logo img{
                width: 890;
                height: 350;
            }
            .podcast_text{
                position: absolute;
                text-align: center;
                left: 140px;
                min-width:900px;
                max-width:1000px!important;
                top: 1590px;
                line-height: 140%;
            }
            .podcast_text p{
                font-size:28px;
                line-height: 50px;
            }
            .seasonsContainer{
                margin-top: 200%!important;
                min-width:110%;
            }
            .appleMusic {
                position: absolute;
                left: 320px;
                top: 1830px;
            }
            .appleMusic img{
                height:90;
                width:260;
            }
            .spotify {
                position: absolute;
                left: 620px;
                top: 1830px;
            }
            .spotify img{
                height:90;
                width:180;
            }

            a{
                color: rgb(198, 197, 197)!important;
            }

            .active {
                font-family: "ScalaSans-RegularLF";
                font-size:66px!important;
                margin-left: -20px;
                margin-top:-11px;
                background-color: white;
                color: rgb(46,44,45)!important;
                text-align: left;
            }

            .podcast_page{
                margin-top:35%!important;
                margin-left:-8%!important;
            }
            .icon{
                margin-top:52px;
            }
            .fa{
                font-size:77px!important;
                margin-right:10px;
            }
            body{
                overflow-x: hidden;
            }
            .col-2{
                margin-left:-90px;
                margin-top:-250px;
            }
            .col-3{
                margin-left:5px;
            }
            .text{
                visibility:hidden!important;
            }
            #episode{
                margin-left:50%;!important;
                margin-top:-400px!important;
                min-width:100%!important;
                min-height:100%!important;
            }
            .episode_img{
                width:600px;
                height:600px!important;
            }
            .season{
                margin-left:95px;
                width:70%;
            }
            .col-3{
                margin-top:600px!important;
            }
            .col-12{
                top:790;

            }
            #episode2{
                margin-left:50%;!important;
                margin-top:-500px!important;
                min-width:100%!important;
                min-height:100%!important;
                height:700px!important;
            }
            #title{
                font-size:60px!important;
                margin-left:-53%!important;
                color:black!important;
                text-align:center;
            }
            .season1gaps{
                position:fixed;
                height:2000px!important;
            }
        }
    </style>
@endsection

@section('content')
    <div class="podcast_page">

        <div class="portrait">
            <img id="podcastPortrait" src="img/{{$data->img}}" width=340 height=520>
        </div>
        <div class="podcast_logo">
            <img id="podcastLogo" src="img/{{$data->logo}}" width=300 height=120>
        </div>
        <div style="max-width:500px" class="podcast_text">
            <p> {{$data->description}}</p>
        </div>
        <div class="appleMusic">
            <a target="_blank" href="{{$data->applePodcastLink}}"><img src="img/listenApple.png" width="160" height="50"></a>
        </div>
        <div target="_blank" class="spotify">
            <a href="{{$data->spotifyLink}}"><img src="img/listenSpotify.png" width="130" height="50"></a>
        </div>

    </div>
    <div  class="container seasonsContainer">

        @foreach($seasons as $season)
            <div class="row">

                <div style="margin:40px 0px 40px 0px;" class="col-2">

                    <p class="season">{{$season->title}}</p>

                </div>
                <div style="margin:40px 0px 40px 0px;" class="col-10">
                    <div class="line-break"></div>
                </div>


                @foreach($SeasonEpisodes->where('season_id',$season->id) as $episode)
                    <div class="col-2" style="margin-top: 15px;">

                    </div>
                    <div class="col-3" style="margin-top: 15px;height:300px;">
                        <a target="_blank"  id="imagelink" href="{{$episode->link}}">
                            @if($season->id == 7)
                                <img id="episode" style="margin-top: 15px;" class="episode_img" src="img/{{$episode->img}}" height=220 >
                            @else
                                <img id="episode" style="margin-top: 15px;" class="episode_img" src="img/{{$episode->img}}" height=220>
                            @endif


                        </a>
                    </div>
                    <div class="col-7" style="margin-top: 15px;">
                        <div class="col-12" style="margin-top: 15px;">
                            <a target="_blank"  href="{{$episode->link}}">
                                <h1 id="title">{{$episode->title}}</h1>
                            </a>
                        </div>
                        <div class="col-12">
                            <p class="text">{{$episode->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
