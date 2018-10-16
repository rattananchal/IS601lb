<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<div class="container"  >
    @include('includes.header')
    <main role="main">
   
        <div style ='margin-top: 100px'>@yield('content')</div>



    </main>

</div>
<footer class="container-fluid bg-dark text-white text-center">
    <div class="container">
        @include('includes.footer')
    </div>
</footer>



</body>
</html>
