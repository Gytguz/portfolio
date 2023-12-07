<!DOCTYPE html>
<html lang="en">

{{-- Head Section --}}
        @include('partials._head')

{{-- Body Section --}}
    <body class="">

        @include('partials._navbar')

{{-- Main Section --}}
        <main>
            {{ $slot ?? '' }}
        </main>

{{-- Footer Section --}}

        @include('partials._footer')

{{-- Components --}}
    <x-flash-message />

    </body>
</html>