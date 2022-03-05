<x-app-layout>
<x-slot name="header">
    
    <div  class="row">
    <div class="col-10">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Podcast</h2>
    </div>

    <div class="col-2"> <a  class="btn btn-info" href="{{ route('Podcast.edit',$data->id) }}"> Edit</a> </div>
  
    </div>
 
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
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
   
    <div class="py-12">    
        <div class="col-lg-12 margin-tb"> 
            <table class="table table-bordered">
        <tr>
            <th>Image</th>
            <td> <img  src="/img/{{$data->img}}" width="120px" height="120px"></td> 
        </tr> 
    
        <tr>
        <th>Logo</th>
        <td><img  src="/img/{{$data->logo}}" width="90px" height="90px"></td>
        </tr> 
   
        <tr>
        <th>Description</th>
        <td>{{ $data->description }}</td>
        </tr> 
   
        <tr>
         <th>Apple podcast link</th> 
         <td>{{ $data->applePodcastLink }}</td> 
        </tr> 
     
        <tr>
        <th>Spotify link</th>
        <td>{{ $data->spotifyLink }}</td>
        </tr> 
      

    </table>
        </div>
    </div>
   
   
   
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
