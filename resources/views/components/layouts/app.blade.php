<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head />

<body>
    <div id="app">
        {{ $slot }}
    </div>
</body>

</html>