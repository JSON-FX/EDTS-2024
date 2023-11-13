<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('title')
    @livewireStyles
</head>

<body>
    <div>
        {{-- section goes here --}}
        @yield('content')
    </div>
    @livewireStyles
</body>

</html>
