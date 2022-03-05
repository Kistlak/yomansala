<html>
<link rel="shortcut icon" type="image/png" href="img/thumbnail.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400&display=swap" rel="stylesheet">
<style>
    .artphoto {
        margin-left: 650px;
        margin-top: 100px;
    }
    .arttitle{
        margin-left: 795px;
        margin-top: 40px;
    }
    .artdim{
        margin-top: -10px;
        margin-left: 830px;
        color: rgb(161, 154, 141);
    }
    .artdesc{
        margin-left: 740px;
        color: rgb(144, 144, 143);
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
    
    .sidenav a:active {
        font-weight: 200;
    }
    
    .logo {
        margin-left: 5%;
        margin-top: 3%;
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
        margin-left: 8%;
        background-color: white;
        color: rgb(46,44,45)!important;
        text-align: left;
        }
        .fa{
            font-size:70px!important;
        }
        .artphoto {
        margin-left: 20%!important;
    }
        img{
            width:600!important;
            height:750!important;
        }
    .arttitle{
        font-size:20px!important;
        margin-left: 44%;
        margin-top: 40px;
    }
    .artdim{
        margin-top: -10px;
        margin-left: 48.2%!important;
        color: rgb(161, 154, 141);
    }
    .artdesc{
        margin-left: 39.6%!important;
        color: rgb(144, 144, 143);
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
    <a href="art">ART</a>
    <a href="podcast">PODCAST</a>
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
        <a href="art"><span style="font-weight: 700;">ART</span></a>
        <a href="podcast">PODCAST</a>
        <a href="contact">CONTACT</a>
    </div>
    <div class="artphoto">
    <img src="img/Introspection III.jpg" alt="Introspection III" width="400" height="500">
    </div>
    <div class="arttitle">
    <p><b>Introspection III</b></p>
    </div>
    <div class="artdim">
    <p>9" x 12"</p>
    </div>
    <div class="artdesc">
    <p>Colored Pencil and Gold Acrylic</p>
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