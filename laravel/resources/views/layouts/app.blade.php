<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBLIOTEKA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('styles')
</head>
<body class="bg-gray-100">
    <!-- header -->
      @include('layouts.header')

      @yield('content')
 

    <!-- Footer -->
    @include('layouts.footer')
</body>
</html>
