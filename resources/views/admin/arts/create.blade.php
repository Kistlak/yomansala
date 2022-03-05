<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Create Art
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

<form action="{{ route('Arts.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Size:</strong>
                <input class="form-control" name="description1" placeholder="Size"/>
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong>Medium:</strong>
                 <input type="text" name="medium" class="form-control" placeholder="Medium">
             </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong>Year:</strong>
                 <input type="text" name="year" class="form-control" placeholder="Year">
             </div>
         </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>About:</strong>
                <textarea class="form-control" style="height:280px" name="description2" placeholder="About"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" id="img" name="img" accept="image/*">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Choose a series:</strong>
                <select name="series" id="series">
                    <option value="none" selected="selected">None</option>
                    @foreach ($series as $option)
                        <option value="{{ $option->id }}">{{ $option->name }}</option>
                    @endforeach
                </select>

                <strong>Or simply create a new one:</strong>
                <input type="text" name="new_series" placeholder="New Series Here...">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </div>

</form>
  </div>
    </x-app-layout>
