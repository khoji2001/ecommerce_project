<!DOCTYPE html>
<html>
<head>
    <title>Laravel E-commerce</title>
</head>
<body>
    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @yield('content')
</body>
</html>
