<!DOCTYPE html>
<html>
@include("layouts.partials.head")
<body>
    @include("layouts.partials.navbar")
    <div class="container">
        @yield('content')
    </div>
</body>
</html>