<html>
<link rel="shortcut icon" type="image/png" href="img/thumbnail.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400&display=swap" rel="stylesheet">
<style>

    h1{
        font-size:30px;
    }
    a {
        text-decoration: none;
        color: rgb(144, 144, 143);
    }
    .podcast_page {
        top: -45px;
        left: 30px;
        min-width: 9000px;
        position: absolute;
    }

    .portrait {
        position: absolute;
        left: 450px;
        top: 240px;
    }

    .podcast_logo {
        position: absolute;
        left: 870px;
        top: 290px;
    }

    .podcast_text {
        position: absolute;
        text-align: center;
        left: 835px;
        top: 420px;
        line-height: 140%;
    }

    .appleMusic {
        position: absolute;
        left: 860px;
        top: 560px;
    }

    .spotify {
        position: absolute;
        left: 1035px;
        top: 560px;
    }

    .season2 {
        position: absolute;
        text-align: left;
        top: 780px;
        left: 90;
        font-size: larger;
        font-weight: lighter;
    }

    .season1 {
        position: absolute;
        text-align: left;
        top: 3050px;
        left: 90;
        font-size: larger;
        font-weight: lighter;
    }

    .line-break {
        position: absolute;
        width: 980px;
        left: 450px;
        top: 800px;
        color: rgb(198, 197, 197);
    }

    .line-break2 {
        position: absolute;
        width: 980px;
        left: 450px;
        top:3075px;
        color: rgb(198, 197, 197);
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
        margin-left: 5%;
        margin-top: 3%;
    }

    #episode1{
        position: absolute;
        left: 450px;
        top: 1250px;
    }
    .text1{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 1275px;
        color: rgb(144, 144, 143);
    }
    #title1{
        position: absolute;
        left: 718px;
        top: 1230px;
    }
    #episode2{
        position: absolute;
        left: 450px;
        top: 1550px;
    }
    .text2{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 1575px;
        color: rgb(144, 144, 143);
    }
    #title2{
        position: absolute;
        left: 720px;
        top: 1530px;
    }
    #episode3{
        position: absolute;
        left: 450px;
        top: 1850px;
    }
    .text3{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 1875px;
        color: rgb(144, 144, 143);
    }
    #title3{
        position: absolute;
        left: 718px;
        top: 1830px;
    }
    #episode4{
        position: absolute;
        left: 450px;
        top: 2150px;
    }
    .text4{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 2175px;
        color: rgb(144, 144, 143);
    }
    #title4{
        position: absolute;
        left: 720px;
        top: 2130px;
    }
    #episode5{
        position: absolute;
        left: 450px;
        top: 2450px;
    }
    .text5{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 2475px;
        color: rgb(144, 144, 143);
    }
    #title5{
        position: absolute;
        left: 720px;
        top: 2430px;
    }
    #episode6{
        position: absolute;
        left: 450px;
        top: 2750px;
    }
    .text6{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 2775px;
        color: rgb(144, 144, 143);
    }
    #title6{
        position: absolute;
        left: 720px;
        top: 2730px;
    }
    #episode7{
        position: absolute;
        left: 450px;
        top: 3190px;
    }
    .text7{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 3215px;
        color: rgb(144, 144, 143);
    }
    #title7{
        position: absolute;
        left: 720px;
        top: 3175px;
    }
    #episode8{
        position: absolute;
        left: 450px;
        top: 3490px;
    }
    .text8{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 3515px;
        color: rgb(144, 144, 143);
    }
    #title8{
        position: absolute;
        left: 720px;
        top: 3475px;
    }
    #episode9{
        position: absolute;
        left: 450px;
        top: 3790px;
    }
    .text9{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 3815px;
        color: rgb(144, 144, 143);
    }
    #title9{
        position: absolute;
        left: 720px;
        top: 3775px;
    }
    #episode10{
        position: absolute;
        left: 450px;
        top: 4090px;
    }
    .text10{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 4115px;
        color: rgb(144, 144, 143);
    }
    #title10{
        position: absolute;
        left: 720px;
        top: 4075px;
    }
    #episode11{
        position: absolute;
        left: 450px;
        top: 4390px;
    }
    .text11{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 4415px;
        color: rgb(144, 144, 143);
    }
    #title11{
        position: absolute;
        left: 720px;
        top: 4375px;
    }
    #episode12{
        position: absolute;
        left: 450px;
        top: 4690px;
    }
    .text12{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 4715px;
        color: rgb(144, 144, 143);
    }
    #title12{
        position: absolute;
        left: 720px;
        top: 4675px;
    }
    #episode13{
        position: absolute;
        left: 450px;
        top: 4990px;
    }
    .text13{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 5015px;
        color: rgb(144, 144, 143);
    }
    #title13{
        position: absolute;
        left: 720px;
        top: 4975px;
    }
    #episode14{
        position: absolute;
        left: 450px;
        top: 5290px;
    }
    .text14{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 5315px;
        color: rgb(144, 144, 143);
    }
    #title14{
        position: absolute;
        left: 720px;
        top: 5275px;
    }
    #episode15{
        position: absolute;
        left: 450px;
        top: 5590px;
    }
    .text15{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 5615px;
        color: rgb(144, 144, 143);
    }
    #title15{
        position: absolute;
        left: 720px;
        top: 5575px;
    }
    #episode16{
        position: absolute;
        left: 450px;
        top: 5890px;
    }
    .text16{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 5915px;
        color: rgb(144, 144, 143);
    }
    #title16{
        position: absolute;
        left: 720px;
        top: 5875px;
    }
    #episode17{
        position: absolute;
        left: 450px;
        top: 6190px;
    }
    .text17{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 6215px;
        color: rgb(144, 144, 143);
    }
    #title17{
        position: absolute;
        left: 720px;
        top: 6175px;
    }
    #episode18{
        position: absolute;
        left: 450px;
        top: 950px;
    }
    .text18{
        position: absolute;
        line-height: 130%;
        left: 720px;
        top: 975px;
        color: rgb(144, 144, 143);
    }
    #title18{
        position: absolute;
        left: 720px;
        top: 930px;
    }
    .topnav{
        visibility:hidden;
        display:none;
    }
    @media (min-width: 100px) and (max-width: 1050px) {
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
            font-size:40px!important;
            color: rgb(198, 197, 197)!important;
        }

        .topnav a {
        color: grey;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        display: block;
        }

        .topnav a.icon {
        background: white;
        color: rgb(46,44,45)!important;
        display: block;
        position: absolute;
        left: 1250;
        top: 10;
        height:90px!important;
        width:90px!important;
        }

        .topnav a:hover {
        color: black;
        }

        .active {
        font-family: "ScalaSans-RegularLF";
        font-size:66px!important;
        margin-left: 30%;
        background-color: white;
        color: rgb(46,44,45)!important;
        text-align: left;
        }
        .fa{
            font-size:90px!important;
        }
        .podcast_page{
            margin-top:25%!important;
            margin-left:-8%!important;

        }
        body{
            overflow-x: hidden;
        }
}
</style>

<head>

</head>

<body>
<div class="topnav">
  <a href="/" class="active">YOSRA EMAMIZADEH</a>
  <div id="myLinks">
      <a href="artist">ARTIST</a>
      <a href="about">ABOUT</a>
      <a href="art">ART</a>
      <a href="podcast">PODCAST</a>
      <a href="cv">CV</a>
      <a href="contact">CONTACT</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars fa-lg"></i>
  </a>
</div>
    <div class="logo">
        <a href="/"><img src="img/Asset1.png" width=300></a>
    </div>
    <div class="sidenav">
        <a href="artist">ARTIST</a>
        <a href="about">ABOUT</a>
        <a href="art">ART</a>
        <a href="podcast"><span style="font-weight: 700;">PODCAST</span></a>
        <a href="cv">CV</a>
        <a href="contact">CONTACT</a>
    </div>
    <div class="podcast_page">
        <div class="portrait">
            <img id="podcastPortrait" src="img/Yosra_Portrait_0830-16.jpg" width=270 height=420>
        </div>
        <div class="podcast_logo">
            <img id="podcastLogo" src="img/podcastLogo.png" width=300 height=120>
        </div>
        <div class="podcast_text">
            <p>Tavan in Conversation is podcast Yosra started in<br>2020, where she interviews female artists and makers<br>in the MENASA region and the diaspora. The podcast<br>is now in it’s second season.
            </p>
        </div>
        <div class="appleMusic">
            <a target="_blank" href="https://podcasts.apple.com/us/podcast/tavan-studio-in-conversation/id1482800645"><img src="img/listenApple.png" width="160" height="50"></a>
        </div>
        <div target="_blank" class="spotify">
            <a href="https://open.spotify.com/show/6tllwCZ63PNDgoXVeVloTU"><img src="img/listenSpotify.png" width="130" height="50"></a>
        </div>
        <div class="season2">
            <p>Season II</p>
        </div>
        <div class="line-break">
            <hr>
        </div>

        <img id="episode1" src="img/S2:6 Tamara Barrage.JPG" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/tamara-barrage/id1482800645?i=1000512830628"><h1 id="title1">Tamara Barrage</h1></a>
        <p class="text1">Tamara Barrage is a Lebanese Artist and Designer recently based in Dubai. She earned a<br>masters degree in product design in Lebanon then later got her second masters degree<br>specializing in contextual design from the Netherlands. Her work explores tactile and<br>sensorial characteristics of various materials. I thoroughly enjoyed chatting with Tamara<br>about her obsession with texture and her crazy studio experiences. We talked a lot about<br>corn and chainsaws and had a good laugh. You will understand once you get deep into the<br>conversation. Her work is intriguing, makes you curious, and maybe even repulsed ( her<br>words not mine!) and creates a dialogue and connection that she enjoys experiencing and<br>observing from others.</p>

        <img id="episode2" src="img/S2:5 Afshan Daneshvar.jpg" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/afshan-daneshvar/id1482800645?i=1000508667267"><h1 id="title2">Afshan Daneshvar</h1></a>
        <p class="text2">Afshan Daneshvar is a visual artist who's work is deeply rooted and inspired by her Persian<br>culture and upbringing. Afshan talks about her journey on becoming an artist, how she fell<br>in love with paper, and how a vintage notebook from her grandfather spoke to her like a<br>language of secrets and inspired the repetitious theme and process in her work. In this<br>heartfelt conversation we talk about the relationship of the artist and their studio,<br>geographical moves, and the unexpected challenges caused by the
pandemic.</p>

        <img id="episode3" src="img/S2:4 Maitha Hamdan.JPG" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/maitha-hamdan/id1482800645?i=1000502357397"><h1 id="title3">Maitha Hamdan</h1></a>
        <p class="text3">With childhood anecdotes and stories about how art brought her closer to her children,<br>Emirati Artist Maitha Hamdan, immerses us in her creative and artistic life. Maitha talks<br>about being a multi disciplinary artist and business woman, how she came back to art<br>after leaving it during a rough patch in her life, and offers some insight on mom guilt and<br>self care.</p>

        <img id="episode4" src="img/S2:3 Hoda Tawakol.JPG" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/hoda-tawakol/id1482800645?i=1000498692887"><h1 id="title4">Hoda Tawakol</h1></a>
        <p class="text4">In this episode, Franco Egyptian artist Hoda Tawakol talks about the inspiration behind her<br>distinguishable voluminous fabric sculptures, her collaborative work with the Persian trio<br>Hesam Rahmanian and Ramin and Rokni Haerizadeh in the midst of a pandemic, and the<br>final push that got her to listen to her truth and transition into a career as a fulltime artist.<br>Hoda talks about the importance of the materials she uses, her creative process, and how<br>a small project initiated by her friend Abed Alkadiri pulled her out of a major low during the<br>early days of the pandemic.</p>

        <img id="episode5" src="img/S2:2 Manal Aldowayan.jpg" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/manal-aldowayan/id1482800645?i=1000494999878"><h1 id="title5">Manal Al Dowayan</h1></a>
        <p class="text5">In this episode I get to talk to the amazing and inspiring Manal Al Dowayan. Manal takes us<br>on a journey from her early days of black and white photography to her most recent<br>trampoline installations in the ancient city of Al Ula. She shares with us about the times when<br>she would secretly take art classes and how art residencies played an important role in her<br>career. Manal talks about visualizing the life she wanted and how she finds inspiration and<br>strength by surrounding and immersing herself in a female community both in her professional<br>and personal life.</p>

        <img id="episode6" src="img/S2:1 Alia Ali.jpg" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/alia-ali/id1482800645?i=1000491575927"><h1 id="title6">Alia Ali</h1></a>
        <p class="text6">Kicking off season 2 with multi media artist Alia Ali. Alia dives deep into her practice, expanding<br>on how her work is driven by her multicultural Yemeni-Bosnian roots within a geopolitical context.<br>We learn about her love and deep connection with textile, the reason behind her “faceless”<br>images, and the power of repeated texts. Alia gives us a look into her day to day studio practice<br>and the things she draws inspiration from which contribute to her creative living.</p>

        <div class="season1">
            <p>Season I</p>
        </div>
        <div class="line-break2">
            <hr>
        </div>

        <img id="episode7" src="img/S1:11 Chafa Ghaddar.jpg" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/chafa-ghaddar/id1482800645?i=1000479772087"><h1 id="title7">Chafa Ghaddar</h1></a>
        <p class="text7">
Wrapping up season 1 of Tavan Studio in Conversation with an in-depth chat about frescos,<br>surfaces, decay, and time with artist and muralist Chafa Ghaddar. Chafa walks us through her<br>journey of observing the natural and also distressed landscapes of Lebanon and the transition to<br>the heat and crystal blue pool surfaces of Dubai and how that has impacted her fresco thought<br>process and work. Chafa also opens up about her experience as a new mother and gives us a very<br>honest and raw depiction of her time spent during the lockdown.</p>

        <img id="episode8" src="img/S1:10 Afra Al Dhaheri.jpg" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/afra-al-dhaheri/id1482800645?i=1000475501997"><h1 id="title8">Afra Al Dhaheri</h1></a>
        <p class="text8">In this episode I get to sit down and have a late night chat with visual artist Afra Al Dhaheri. Afra's<br>work is rooted in her experiences growing up in Abu Dhabi and the wider UAE – a place of recent<br>and rapid change. We really get to go deep into her
practice and the visual language of her work,<br>her relationship with materials, and the questions she ponders while creating . We also talk about the<br>importance of choosing the right gallery to be represented by, how productivity and creativity have<br>been challenged during the lock down, and much more. Afra is also an Assistant Professor in Visual<br>Arts at Zayed University , Abu Dhabi, and the cofounder of Bait15.</p>

        <img id="episode9" src="img/S1:9 Nahla Al Tabbaa.jpg" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/nahla-al-tabbaa/id1482800645?i=1000474234592"><h1 id="title9">Nahla Al Tabbaa</h1></a>
        <p class="text9">Nahla Al Tabbaa is an independent educator, artist, consultant and urban researcher with various<br>institutions including Art Jameel, Frying Pan Adventures, previously the Sharjah Art Foundation, and<br>the co-founder of Daftar Asfar, an artist sketchbook platform. In this episode we delve deep into<br>Nahla's socially engaged art practice, her love of food and storytelling, her approach to the reactivity<br>of art especially during the current COVID-19 pandemic, and how all her various interests and skills<br>enhance and complement one another to create her wholehearted creative lifestyle.</p>

        <img id="episode10" src="img/S1:8 Soheila Sokhanvari.jpg" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/soheila-sokhanvari/id1482800645?i=1000472611838"><h1 id="title10">Soheila Sokhanvari</h1></a>
        <p class="text10">One of my 2019 highlights was having the opportunity to interview a favorite artist of mine,<br>Soheila Sokhanvari! Her intricate and masterful work is thought provoking and enchanting, wistfully<br>transporting you into a world of patterns and nostalgia. In this episode Soheila talks to us about her<br>collection of family photos, magic realism, how textile and patterns are political, her creative process,<br>and much more. I would also like to thank Kristin Hjellegjerde Gallery for allowing me to crash their<br>private party and Aziz Bindeid-Barnes for fixing me a hot cup of hibiscus tea on that chilly London<br>evening.</p>

        <img id="episode11" src="img/S1:7 Sara Naim.jpg" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/sara-naim/id1482800645?i=1000470665474"><h1 id="title11">Sara Naim</h1></a>
        <p class="text11">In this episode, artist Sara Naim talks about her love of photography, experimenting with different<br>materials, what "home" means to her, and how borders (on all levels) are ultimately just illusions.<br>We discuss her at home studio practice and how being represented by a gallery has impacted her<br>lifestyle and much more. Tune in to
learn about Sara's creative process and her thought provoking<br>work.</p>

        <img id="episode12" src="img/S1:6 Arghavan Khosravi.jpg" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/arghavan-khosravi/id1482800645?i=1000463722528"><h1 id="title12">Arghavan Khosravi</h1></a>
        <p class="text12">Happy 2020 and welcome to a new episode of Tavan Studio in Conversation with Iranian artist<br>Arghavan Khosravi. It was a pleasure visiting Arghavan at her NYC studio on the last day of 2019<br>surrounded by her art work in preparation for her solo exhibition at Stems Gallery in Brussels. In this<br>episode Arghavan talks about her journey as an artist, how she continues to create more and more<br>work when facing doubt, and being conscious of not being an opportunist but rather create honest<br>work as a reaction to things that are happening around her.</p>

        <img id="episode13" src="img/S1:5 Feda Eid.jpg" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/feda-eid/id1482800645?i=1000459973849"><h1 id="title13">Feda Aid</h1></a>
        <p class="text13">As we wrap up 2019, I got the opportunity to chat with the amazing Lebanese-American artist, stylist,<br>and thrifter, Feda Eid. Feda talks about her journey growing up in the states, her visit to Beirut after<br>many years, and how a car accident changed her life. Learn more about her photography, styling,<br>community and museum projects, and overall creative living in this episode.</p>

        <img id="episode14" src="img/S1:4 Rama Duwaji.jpg" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/rama-duwaji/id1482800645?i=1000458929763"><h1 id="title14">Rama Duwaji</h1></a>
        <p class="text14">In this episode, Syrian illustrator Rama Duwaji talks about figuring out her art career and passion<br>post college. We take a virtual trip to Beirut and learn about her residency at Haven for Artists, then<br>make our way to Damascus as she talks about her return post the civil war. In her work, Rama<br>explores topics regarding beauty standards, mental health, and self care and expands on how a<br>platform like social media can be a double edged sword.</p>

        <img id="episode15" src="img/S1:3 Noush Anand .jpg" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/noush-anand/id1482800645?i=1000456275107"><h1 id="title15">Noush Anand</h1></a>
        <p class="text15">Noush Anand, also known by her stage name "Noush like Sploosh", is a Dubai based multidisciplinary<br>artist. In this episode we discuss her creative process and how it was important for her to be honest<br>with herself and honor her body and soul while building a "home" in what she wanted to do -sing! She<br>talks about how she learned to let go of judgment , and how some of her lyrics are a result of her<br>crying while she was in the corporate world doing admin work. We also get a glimpse into her creative<br>working space and see how she utilizes her home in her daily practice.</p>

        <img id="episode16" src="img/S1:2 Ruba Al Araji.jpg" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/ruba-al-araji/id1482800645?i=1000453606235"><h1 id="title16">Ruba Al Araji</h1></a>
        <p class="text16">In this episode's sit down with Dubai based Iraqi artist, Ruba Al-Araji, we discuss how Ruba's love for<br>comic books came from her parents, her amazing residency in Japan #visitjapan, and the reality of<br>having a day job and how it can affect your own perception about being an artist.</p>

        <img id="episode17" src="img/S1:1 Sophiya Khwaja.jpg" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/sophiya-khwaja/id1482800645?i=1000452795557"><h1 id="title17">Sophiya Khwaja</h1></a>
        <p class="text17">In this very first episode of Tavan Studio in Conversation, we speak with Dubai based Pakistani Artist,<br>Sophiya Khwaja. Sophiya is a prolific printmaker and an active member of the Dubai art scene. In this<br>episode, Sophiya talks about how she manages being an artist and an entrepreneur, how studying art<br>helped her in business, and how 4 hour long walks are important and totally OK.</p>

        <img id="episode18" src="img/S2:7 Lena Kassicieh.jpg" width=220 height=220>
        <a target="_blank" href="https://podcasts.apple.com/us/podcast/sophiya-khwaja/id1482800645?i=1000452795557"><h1 id="title18">Lena Kassicieh</h1></a>
        <p class="text18">Lena Kassicieh is a Palestinian-American multi disciplinary artist and maker. She talks about growing<br>up in a family of doctors and medical professionals, beauty school dreams, and letting her innate<br>curiosity and attraction to whimsical and ironic everyday life observations pour into her creative<br>process . We follow Lena’s journey from New Mexico to Amman and then to Dubai and learn about<br>her experiences in the art world which empowered her to realize, accept, and validate herself as an artist.<br>It was such a pleasure to speak with Lena about her art process, thought process, and creative living. </p>
    </div>

</body>
<script>
    function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
</html>
