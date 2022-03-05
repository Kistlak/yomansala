<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Podcast
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
 
            <div class="row">
        <div class="col-lg-12 margin-tb">           
            <div class="pull-right">
               
            </div>
        </div>
    </div>
 <div style="padding:10px;" class="container">
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('Podcast.update',$Podcast->id) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
     <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <div class="row">
                <div class="col-3">
                <img  src="/img/{{$Podcast->img}}" width="200px">          
                </div>
                <div class="col-3">
                 
                <input style="margin-top:50%;" type="file"  id="img" name="img" accept="image/*">
                </div>
                </div>
         
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Logo:</strong>
                
            
               
                <div class="row">
                <div class="col-3">
                <img  src="/img/{{$Podcast->logo}}" width="200px">        
                </div>
                <div class="col-3">
                <input type="file" id="logo"   name="logo" accept="image/*">
             
                </div>
                </div>
               
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:280px" name="description" placeholder="Description">{{$Podcast->description}}</textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apple podcast link:</strong>
                <input value="{{$Podcast->applePodcastLink}}" type="text" class="form-control"   name="applePodcastLink" placeholder="podcast link"/>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Spotify link:</strong>
                <input value="{{$Podcast->spotifyLink}}" type="text" class="form-control"  name="spotifyLink" placeholder="spotify link"/>
            </div>
        </div>
         
         
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-info">Update</button>
        </div>
    </div>
   
</form>
</div>
    </x-app-layout>
