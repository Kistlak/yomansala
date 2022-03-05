<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Edit Episode
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
   
<form action="{{ route('Episode.update',$episode->id) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" value="{{$episode->title}}" name="title" class="form-control" placeholder="Title">
            </div>
        </div>
 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Season:</strong>
  
      
                <select class="form-control" name="season_id">
                    @foreach($seasons as $item)
                    
                    @if($episode->season_id!=null && $episode->season_id == $item->id)
                    <option  selected="selected"  value="{{ $item->id }}">{{ $item->title }}</option>
                    @else
                    <option  value="{{ $item->id }}">{{ $item->title }}</option>
                    @endif
               

                    @endforeach
                    </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:280px" name="description" placeholder="Description">{{$episode->description}}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Link:</strong>
                <input type="text" class="form-control" value="{{$episode->link}}" id="link" name="link" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

            <div class="row">
            <strong>Image:</strong>
                <div class="col-3">
                <img  src="/img/{{$episode->img}}" width="200px">
                </div>
                <div class="col-3">
                 
                <input style="margin-top:50%;" type="file"  id="img" name="img" accept="image/*">
                </div>
                </div>
  
            </div>
        </div>
  
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </div>
   
</form>
</div>
    </x-app-layout>
