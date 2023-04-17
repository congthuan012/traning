<!DOCTYPE html>
<html lang="en">

<head>
    @include('widgets.head')

</head>

<body>
    <div class="container-fluid">
        @yield('content')
    </div>

    @include('widgets.script')
    @yield('scripts')
</body>

</html>
