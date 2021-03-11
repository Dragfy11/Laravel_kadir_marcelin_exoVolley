  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ultimate Volleyball</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-dark">
    
    @include('components.headerCoach')

    <div class="main">
        @yield('content')
    </div>
    @include('components.footer')



    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>