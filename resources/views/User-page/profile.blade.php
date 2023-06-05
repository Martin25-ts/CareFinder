@extends('Header')

@section('title', 'CareFinder - Profile')
@push('script-conten')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    {{-- <script>
        $(document).ready(function() {
            var button = $("#login-button-confirm");
            var buttonWidth = button.outerWidth() - 12;
            console.log(buttonWidth * -1);
            button.css("box-shadow", "inset -" + buttonWidth + "px 0px 0px 0px #81B214");
        });
    </script> --}}
@endpush

@push('style-font-family')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium&display=swap" rel="stylesheet">
@endpush


<form action="/logout" method="GET">
    <input type="submit" value="Logout">
</form>

