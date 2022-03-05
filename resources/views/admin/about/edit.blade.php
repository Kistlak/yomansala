<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create About
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

                    <form action="{{ route('about.update') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Description:</strong>
                                    <textarea class="form-control" id="summary-ckeditor" name="description">{!! $about->description !!}</textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Image:</strong>
                                    <div class="row">
                                        <div class="col-3">
                                            <img  src="{{ URL::asset($about->file_path) }}" width="200px">
                                        </div>
                                        <div class="col-3">

                                            <input style="margin-top:50%;" type="file"  id="img" name="about_image" accept="image/*">
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

                <script>
                    CKEDITOR.replace( 'summary-ckeditor', {
                        {{--filebrowserUploadUrl: "{{route('SavePostAd', ['_token' => csrf_token() ])}}",--}}
                        {{--filebrowserUploadMethod: 'form'--}}
                    });

                    $('.content').richText({
                        // text formatting
                        bold: true,
                        italic: true,
                        underline: true,

                        // text alignment
                        leftAlign: true,
                        centerAlign: true,
                        rightAlign: true,
                        justify: true,

                        // lists
                        ol: true,
                        ul: true,

                        // title
                        heading: true,

                        // fonts
                        fonts: true,
                        fontList: ["Arial",
                            "Arial Black",
                            "Comic Sans MS",
                            "Courier New",
                            "Geneva",
                            "Georgia",
                            "Helvetica",
                            "Impact",
                            "Lucida Console",
                            "Tahoma",
                            "Times New Roman",
                            "Verdana"
                        ],
                        fontColor: true,
                        fontSize: true,

                        // uploads
                        imageUpload: true,
                        fileUpload: true,


                        // link
                        urls: true,

                        // tables
                        table: true,

                        // code
                        removeStyles: true,
                        code: true,

                        // colors
                        colors: [],

                        // dropdowns
                        fileHTML: '',
                        imageHTML: '',

                        // translations
                        translations: {
                            'title': 'Title',
                            'white': 'White',
                            'black': 'Black',
                            'brown': 'Brown',
                            'beige': 'Beige',
                            'darkBlue': 'Dark Blue',
                            'blue': 'Blue',
                            'lightBlue': 'Light Blue',
                            'darkRed': 'Dark Red',
                            'red': 'Red',
                            'darkGreen': 'Dark Green',
                            'green': 'Green',
                            'purple': 'Purple',
                            'darkTurquois': 'Dark Turquois',
                            'turquois': 'Turquois',
                            'darkOrange': 'Dark Orange',
                            'orange': 'Orange',
                            'yellow': 'Yellow',
                            'imageURL': 'Image URL',
                            'fileURL': 'File URL',
                            'linkText': 'Link text',
                            'url': 'URL',
                            'size': 'Size',
                            'responsive': '<a href="https://www.jqueryscript.net/tags.php?/Responsive/">Responsive</a>',
                            'text': 'Text',
                            'openIn': 'Open in',
                            'sameTab': 'Same tab',
                            'newTab': 'New tab',
                            'align': 'Align',
                            'left': 'Left',
                            'justify': 'Justify',
                            'center': 'Center',
                            'right': 'Right',
                            'rows': 'Rows',
                            'columns': 'Columns',
                            'add': 'Add',
                            'pleaseEnterURL': 'Please enter an URL',
                            'videoURLnotSupported': 'Video URL not supported',
                            'pleaseSelectImage': 'Please select an image',
                            'pleaseSelectFile': 'Please select a file',
                            'bold': 'Bold',
                            'italic': 'Italic',
                            'underline': 'Underline',
                            'alignLeft': 'Align left',
                            'alignCenter': 'Align centered',
                            'alignRight': 'Align right',
                            'addOrderedList': 'Add ordered list',
                            'addUnorderedList': 'Add unordered list',
                            'addHeading': 'Add Heading/title',
                            'addFont': 'Add font',
                            'addFontColor': 'Add font color',
                            'addFontSize': 'Add font size',
                            'addImage': 'Add image',
                            'addVideo': 'Add video',
                            'addFile': 'Add file',
                            'addURL': 'Add URL',
                            'addTable': 'Add table',
                            'removeStyles': 'Remove styles',
                            'code': 'Show HTML code',
                            'undo': 'Undo',
                            'redo': 'Redo',
                            'close': 'Close'
                        },

                        // privacy
                        youtubeCookies: false,

                        // dev settings
                        useSingleQuotes: false,
                        height: 0,
                        heightPercentage: 0,
                        id: "",
                        class: "",
                        useParagraph: false,
                        maxlength: 0,

                        // callback function after init
                        callback: undefined
                    });
                </script>
</x-app-layout>
