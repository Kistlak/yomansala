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

                    <form action="{{ route('home.update') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12" style="padding-bottom: 20px;">
                                <div class="form-group">
                                    <strong>Logo:</strong>
                                    <div class="row">
                                        <div class="col-3">
                                            @if($logo->file_path == null)
                                                <div>No logo uploaded</div>
                                            @else
                                                <img  src="{{ URL::asset($logo->file_path) }}" width="200px">
                                            @endif
                                        </div>
                                        <div class="col-3">
                                            <input type="file"  id="img" name="logo" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12" style="padding-bottom: 10px;">
                                <div class="form-group">
                                    <strong>Banner:</strong>
                                    <div class="row">
                                        <div class="col-3">
                                            @if($banner->file_path == null)
                                                <div>No banner uploaded</div>
                                            @else
                                                <img  src="{{ URL::asset($banner->file_path) }}" width="200px">
                                            @endif
                                        </div>
                                        <div class="col-3">
                                            <input type="file"  id="img" name="banner" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </div>

                    </form>

{{--                        <form action="{{ route('home.update') }}" enctype="multipart/form-data" method="POST">--}}
{{--                            @csrf--}}
{{--                            @method('PUT')--}}
{{--                            <div class="row">--}}

{{--                                <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <strong>Banner:</strong>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-3">--}}
{{--                                                @if($banner->file_path == null)--}}
{{--                                                    <div>No banner uploaded</div>--}}
{{--                                                @else--}}
{{--                                                    <img  src="{{ URL::asset($banner->file_path) }}" width="200px">--}}
{{--                                                @endif--}}
{{--                                            </div>--}}
{{--                                            <div class="col-3">--}}
{{--                                                <input type="file"  id="img" name="about_image" accept="image/*">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">--}}
{{--                                    <button type="submit" class="btn btn-info">Submit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </form>--}}
                </div>
</x-app-layout>
