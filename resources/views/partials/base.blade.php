@include('partials.head')


<body>
    @include('partials.header')
    <hr class="my-1 border-clr-pale1">
    @include('partials.back')

    @yield('content')
<hr class="my-1 border-clr-pale1">
    @include('partials.footer')
</body>

</html>


