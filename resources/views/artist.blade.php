@extends('layouts.web_main_template')

@section('css_section')
    <style>
        .artist_text_mobile{
            visibility:hidden;
        }
        .artist_text {
            margin-left: 43%;
            margin-top: 13%;
            line-height: 150%;
            color: rgb(45, 44, 44);
            font-size: 17px;
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif!important;

        }
        pre{
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif!important;

        }

        @font-face {
            unicode-range: U+00-FFFF;
            font-family: 'ScalaSans-RegularLF';
            src: url('fonts/ScalaSans-RegularLF.otf');
            src: url('fonts/ScalaSans-RegularLF.woff') format('woff2');
            src: url('fonts/ScalaSans-RegularLF.eot');
            src: url('fonts/ScalaSans-RegularLF.woff2') format('woff');
            src: url('fonts/ScalaSans-RegularLF.svg') format('svg');
            font-style:normal;
            font-weight:normal;
            unicode-range: U+00-FFFF;
        }

        @font-face {
            font-family: 'ScalaSans-BoldLF';
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
            .artist_text{
                visibility:hidden;
            }
            .artist_text_mobile{
                visibility:visible;
                margin-top:-15%;
                line-height:30px;
                margin-left:auto;
                margin-right:auto;
                width:90%;
                font-size:24px;
            }

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
                margin-left: 8%;
                background-color: white;
                color: rgb(46,44,45)!important;
                text-align: left;
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
        }
    </style>
@endsection

@section('content')
    <div class="artist_text">
        <pre>
            {{ $artist_info }}
        </pre>
    </div>
    <div class="artist_text_mobile">
        <p>
            Yosra is a visual artist whose works are an exploration of the relationships and connections we have within ourselves and the world around us. She is inspired by Islamic art, nature, and the conversations she has with other women.<br>
            <br>
            Yosra started drawing from a young age while growing up in Tehran. After completing her studies at the American University of Beirut, sheattended the Angel Academy of Art in Florence, Italy, and later earned hermasters degree in Museum Studies<br>from Harvard University. Yosra is currently based in Dubai and also runs her podcast Tavān Studio In Conversation.
        </p>
    </div>
@endsection
