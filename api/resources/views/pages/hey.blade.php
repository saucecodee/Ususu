<!DOCTYPE html>
<html lang="en">
      <head>
            <title>{{config('app.name')}}</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link href="ass/css/bootstrap.min.css" rel="stylesheet">
            <link href="ass/css/style.css" rel="stylesheet">
      </head>
      <body>
            <h1>You are a {{$name}}</h1>
            <h3>{{$rabas->title}}</h3>

            {{-- @if(count($rabas) > 0)
                  @foreach ($rabas as $greet)
                        <li>{{ $greet }}</li>
                  @endforeach
            @endif --}}
      </body>
</html>