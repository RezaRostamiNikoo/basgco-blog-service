<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    @include('layouts.head')
</head>
<body>
<livewire:components.header.show-header />
{{$slot}}

@include('layouts.footer')

<livewire:scripts/>

</body>
</html>
