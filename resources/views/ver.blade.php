<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                Document
            </title>
        </meta>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        </link>
        <meta content="{{ csrf_token() }}" name="csrf-token">
        </meta>
    </head>
    <body>
        <h1>
            holaaa
        </h1>
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-offset-2">
                    <div id="app">
                        <form action="{{ route('guardar') }}" method="post">
                            @csrf
                            <input name="descripcion" type="text">
                            </input>
                            <button type="submit">
                                OK
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script src="{{ asset('js/app.js') }}" type="text/javascript">
</script>
