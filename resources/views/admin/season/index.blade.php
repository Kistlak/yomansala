<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Seasons & Episodes

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
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div style="padding:20px" class="float-right">
                    <a class="btn btn-info" href="{{ route('Seasons.create') }}"> Create new season</a>
                </div>

                <div class="py-12">
                    <div class="col-lg-12 margin-tb">

                        <table class="table table-bordered" id="season_table">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            @if($seasons->count() > 0)
                                <tbody>
                                @foreach ($seasons as $season)
                                    <tr>

                                        <td>{{ $season->title }}</td>

                                        <td>
                                            <form action="{{ route('Seasons.destroy',$season->id) }}" method="POST">


                                                <div class="row">

                                                    <div class="col-1">

                                                        <a href="{{ route('Seasons.edit',$season->id) }}">
                                                            <img src="/img/edit.png" height="20px" width="20px"/></a>
                                                    </div>
                                                    <div class="col-1">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit"><span><img src="/img/trash.png"
                                                                                         height="20px"
                                                                                         width="20px"/></span></button>
                                                    </div>

                                                </div>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            @else
                                <tbody>
                                <tr>
                                    <td><p>No data.</p></td>
                                </tr>
                                </tbody>
                            @endif

                        </table>
                    </div>
                </div>
                <div style="padding:20px" class="float-right">
                    <a class="btn btn-info" href="{{ route('Episode.create') }}"> Create new episode</a>
                </div>
                <div class="py-12">


                    <div class="col-lg-12 margin-tb">

                        <table class="table table-bordered" id="episode_table">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Season</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @if($SeasonEpisodes->count() > 0)
                                <tbody>
                                @foreach ($SeasonEpisodes as $episode)
                                    <tr>

                                        <td><img src="/img/{{$episode->img}}" width="60px" height="60px"></td>
                                        <td>{{ $episode->title }}</td>

                                        @if($seasons->where('id', $episode->season_id)->first()!= null)
                                            <td>
                                                {{$seasons->where('id', $episode->season_id)->first()->title}}
                                            </td>
                                        @else
                                            <td style="color:red">No season</td>
                                        @endif

                                        <td>
                                            <form action="{{ route('Episode.destroy',$episode->id) }}" method="POST">


                                                <div class="row">
                                                    <div class="col-1">
                                                    </div>
                                                    <div class="col-2">

                                                        <a href="{{ route('Episode.edit',$episode->id) }}">
                                                            <img src="/img/edit.png" height="20px" width="20px"/></a>
                                                    </div>
                                                    <div class="col-2">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit"><span><img src="/img/trash.png"
                                                                                         height="20px"
                                                                                         width="20px"/></span></button>
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
                                <tr>
                                    <td><p>No data.</p></td>
                                </tr>
                                </tbody>
                            @endif

                        </table>
                        {{--    {!! $SeasonEpisodes->links() !!}--}}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#season_table').DataTable();

            $('#episode_table').DataTable();
        });
    </script>
</x-app-layout>
