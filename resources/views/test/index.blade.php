<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Laravel 6 from index()</div>
        <p> Just output of random value: {{$r}}</p>
        @if ($r > 700)
            <p>greater</p>
        @else
            <p>less</p>
        @endif
        <ul>
            @foreach ($c as $countryName)
                <li>
                    {{$countryName}}
                </li>
            @endforeach
        </ul>
    </div>
</div>
</body>
</html>