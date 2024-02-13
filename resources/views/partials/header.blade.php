<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ Route::currentRouteName()}}
    <div class="header">
        <img src="{{ Vite::asset('/resources/img/dc-logo.png') }}" alt="">


            <ul>
                  @foreach ($links as $link)
                  <li>
                <a class= "{{ Route::currentRouteName() === $link['link'] ? 'active' : ''}}" href="{{$link['link']}}">
                {{$link['label']}}
            </a>

            </li>
            @endforeach
        </ul>


    </div>




</body>
</html>
