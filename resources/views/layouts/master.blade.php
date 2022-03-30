<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    @yield("meta-tags")

    @yield("first-styles")

    @include("layouts.head-css")

    @yield("last-styles")

    @yield("head-scripts")
</head>

<body>

@include('layouts.header')

@yield("content")

@include("layouts.footer")


@yield("first-scripts")
@include("layouts.scripts")
@yield("last-scripts")
</body>

</html>
