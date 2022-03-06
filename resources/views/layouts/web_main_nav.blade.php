<?php
    use App\Models\Home;
    $logo = Home::where('name', 'logo')->first();
?>
<div class="topnav">
    <a href="/" class="active"><img src="{{ URL::asset($logo->file_path) }}" width=800 height=250></a>
    <div id="myLinks" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="{{url('artist')}}">ARTIST</a>
            <a href="{{url('about')}}">ABOUT</a>
            <a href="{{url('art')}}">ART</a>
            <a href="{{url('podcast')}}">PODCAST</a>
            <a href="{{url('cv')}}">CV</a>
            <a href="{{url('contact')}}">CONTACTz</a>
        </div>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars fa-lg"></i>
    </a>
</div>
<div class="logo">
    <a href="/"><img src="{{ URL::asset($logo->file_path) }}" width=300></a>
</div>
<div class="sidenav">
    <a href="{{url('artist')}}">ARTIST</a>
    <a href="{{url('about')}}">ABOUT</a>
    <a href="{{url('art')}}">ART</a>
    <a href="{{url('podcast')}}">PODCAST</a>
    <a href="{{url('cv')}}">CV</a>
    <a href="{{url('contact')}}">CONTACT</a>
</div>
