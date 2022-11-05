<!DOCTYPE html>
<html lang="en">


<x-layout.head />

<!-- Body-->

<body style="overflow-x: clip;" class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <x-layout.auth-modal />

    <main class="page-wrapper">
        <x-layout.header.index />

        @yield('content')
        @if (isset($slot) and $slot !== null)
            {{ $slot }}
        @endif
        <x-layout.toolbar />

        <x-layout.script />
</body>


</html>
