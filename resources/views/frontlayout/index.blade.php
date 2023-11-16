<!DOCTYPE HTML>
<html lang="en-US">
@include('frontlayout.head')

<body>
    <!-- Loder Start-->
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div>
    <!-- Loder End -->

    @include('frontlayout.header')
    
    @yield('content')
    
   @include('frontlayout.footer')
   @include('frontlayout.script')
</body>

</html>