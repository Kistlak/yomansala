<x-app-layout>

    <x-slot name="header">

    <div  class="row">
    <div class="col-10">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Arts</h2>
    </div>

    <div class="col-2"> <a  class="btn btn-info" href="{{ route('Arts.create') }}"> Create new art</a> </div>

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

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   <div style='padding:20px'>
    <table class="table table-bordered" id="myTable">
        <thead>
        <tr>
            <th>Image</th>
            <th>Series</th>
            <th>Title</th>
            <th>Size</th>
            <th>Medium</th>
            <th>Year</th>
            <th width="250px">Action</th>
        </tr>
        </thead>
        @if($arts->count() > 0)
            <tbody>
            @foreach ($arts as $art)

        <tr>
            <td> <img  src="/img/{{$art->img}}" width="60px" height="60px"></td>
            <td>
                @if ($art->series != null)
                    {{ $art->series->name }}
                @else
                    NA
                @endif
            </td>
            <td>{{ $art->title }}</td>
            <td>{{ $art->description1 }}</td>
            <td>
                @if ($art->medium != null)
                    {{ $art->medium }}
                @else
                    NA
                @endif
            </td>
            <td>
                @if ($art->year != null)
                    {{ $art->year }}
                @else
                    NA
                @endif
            </td>
            <td>
                <form action="{{ route('Arts.destroy',$art->id) }}" method="POST">
                    <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-3">
                    <a href="{{ route('Arts.edit',$art->id) }}">
                    <img src="/img/edit.png" height="20px" width="20px" /></a>
                    </div>
                    <div class="col-3">
                    @csrf
                    @method('DELETE')

                    <button type="submit"><span><img src="/img/trash.png" height="20px" width="20px"  /></span> </button>
                    </div>
                    <div class="col-8">
                    </div>
                    </div>

                </form>
            </td>
        </tr>

        @endforeach
            </tbody>
        @else
            <tbody>
            <tr> <td> <p>No data.</p></td></tr>
            </tbody>
        @endif
    </table>
{{--    {!! $arts->links() !!}--}}
    </div>


            </div>
        </div>
    </div>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

</x-app-layout>
