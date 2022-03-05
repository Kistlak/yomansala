@extends('layouts.web_main_template')

@section('css_section')
    <style>
        form {
            border: 3px solid white;
        }

        .container {
            padding: 20px;
        }

        input[type=text] {
            width: 50%;
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid rgb(198, 197, 197);
            box-sizing: border-box;
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif;
            font-size: 17px;
        }

        input[type=submit] {
            width: 50%;
            height: 5%;
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid rgb(46,44,45);
            box-sizing: border-box;
            text-align: left;
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif;
        }

        input[type=checkbox] {
            margin-top: 16px;
        }

        input[type=submit] {
            background-color: rgb(46,44,45);
            color: white;
            border: none;
            font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif;
        }

        .contact_page {
            margin-left: 45%;
            margin-top: 15%;
            line-height: 150%;
            font-size: large;
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

        #contact_email {
            color: black;
            text-decoration: none;
        }

        #insta_link {
            color: black;
            font-weight: bold;
        }

        .contact_page_info {
            margin-top: 8%;
            line-height: 20%;
            margin-left: 2.7%;
        }

        input[type=submit] {

            font-size:17px!important;
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
                margin-left: -120px;
                margin-top: -20px;
                background-color: white;
                color: rgb(46,44,45)!important;
                text-align: center;
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
                margin-top:44%!important;
                text-align: center!important;
                font-size:16px!important;
            }
            #contact_email {
                color: black!important;
                text-decoration: none;
                font-size:35px!important;
                line-height:40%!important;
            }
            #insta_link{
                color:black!important;
                font-size:35px!important;
            }
            input {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
            }
            input[type=text] {
                width: 110%!important;
                height:100px!important;
                padding: 12px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid rgb(198, 197, 197);
                box-sizing: border-box;
                font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif;
                font-size: 30px;
            }

            input[type=submit] {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                width: 110%;
                height: 120px!important;
                padding: 12px;
                margin: 8px 0;
                font-size:30px!important;
                display: inline-block;
                border: 1px solid rgb(46,44,45);
                box-sizing: border-box;
                text-align: left;
                font-family: "ScalaSans-RegularLF", 'Work Sans', sans-serif;
            }
            .container{
                margin-top:20%!important;
            }
            #contact_footer{
                visibility:hidden;
            }
            #phone_contact_footer{
                visibility:visible!important;
                font-weight: lighter;
                text-align:center;
            }
            .contact_page_info{
                line-height:20px;
            }
            .icon{
                margin-top:40px;
            }
            .fa{
                font-size:70px;
                margin-left:2px;
            }
        }

        #contact_footer{
            margin-left: 47%;
            margin-top: 20%;
            font-weight: lighter;
        }
        #phone_contact_footer{
            visibility:hidden;
        }
    </style>
@endsection

@section('content')
    <div class="contact_page">
        <div class="contact_page_info">
            <p><a id="contact_email" href="mailto:info@yosraemamizadeh.com">info@yosraemamizadeh.com</a></p>
            <a href="https://www.instagram.com/tavanstudio/" id="insta_link">@tavanstudio</a><br><br><br><br><br><br>
        </div>
        <form method="post" action="/contact">
            @csrf
            <div class="container">
                <input type="text" placeholder="First Name" name="fname" required>
                <input type="text" placeholder="Last Name" name="lname" required>
                <input type="text" placeholder="E-mail" name="email" required>
                <input type="submit" value="SIGN UP TO NEWS & UPDATES">
            </div>
        </form>
    </div>
    <footer id="contact_footer">
        &copy; Yosra Emamizadeh 2021. All rights reserved.<br>No part of this website may be reproduced without written permission by the artist.
    </footer>
    <footer id="phone_contact_footer">
        &copy; Yosra Emamizadeh 2021. All rights reserved.<br><span style="color:#818181">No part of this website may be reproduced <br>without written permission by the artist.</span>
    </footer>
@endsection
