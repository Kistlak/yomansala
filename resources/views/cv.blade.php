@extends('layouts.web_main_template')

@section('css_section')
    <style>
        .home {
            margin-left: 38%;
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
            .fa-lg{
                top:60px;
            }

            a{
                color: rgb(198, 197, 197)!important;
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
            .home embed{
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
        <div class="" style="padding-bottom: 15px;">
            <a href="{{ URL::asset($cv->file_path) }}" target="_blank" style="text-decoration: none; font-size: 24px;">Download CV</a>
        </div>
        {{--    <embed src="{{ URL::asset($cv->file_path) }}" width="800px" height="2100px" />--}}
        <object width="400px" height="400px" data="https://docs.google.com/viewerng/viewer?url=http://127.0.0.1:8000/storage/personal/cEyfZoQ9DzSkg0VzDcofWater%20Bill%20-%202022-03-01.pdf"></object>
        <img src="img/3CFE8B86-6FC3-42EA-AC55-E0007F2CA775.jpg" width=600 height=600>
    </div>
@endsection
