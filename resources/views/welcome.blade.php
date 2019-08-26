<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="app">
            <example-component></example-component>
            <div class="container">
                <div class="row">
                    @foreach ($images as $item)
                        <div class="col-2 mb-4">
                            <a href="{{ $item->original }}">
                                <img src="{{ $item->thumbnail }}" class="w-100">
                            </a>
                            <form action="/images/{{ $item->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="small btn btn-outline-danger mt-2">Delete</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
