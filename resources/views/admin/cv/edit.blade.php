<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create CV
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
                    @if ($message = Session::get('success'))
                        <div class="upload_done" style="padding-bottom: 20px; color: red;">{{$message}}</div>
                    @endif

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

                    <form action="{{ route('cv.update') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Cv:</strong>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="{{ URL::asset($cv->file_path) }}" target="_blank">View CV</a>
                                        </div>
                                        <div class="col-md-12" style="padding-top: 20px;">
                                            <input type="file"  id="cv" name="cv">
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
