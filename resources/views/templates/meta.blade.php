@if(!empty($head))
    <title>{{ $head['metatitle'] }}</title>
    {{--<meta name="keywords" content="{{ $head['metakey'] }}">--}}
    <meta name="description" content="{{ $head['metadesc'] }}">
    <meta property="og:title" content="{{ $head['metatitle'] }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ url('/img/social.jpg') }}">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:description" content="{{ $head['metadesc'] }}">
    <meta property="og:determiner" content="auto">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:site_name" content="{{ config('app.url') }}">
    @if($head['metacanonical'] != '')
        <link rel="canonical" href="{{ $head['metacanonical'] }}">
    @endif
    @if($head['nofollow'] !== null)
        <meta name="robots" content="index, nofollow">
    @endif
@endif
@if(isset($pagination))
    @include('modules.nofolow', ['pagination' => $pagination->name, 'data' => $pagination->data])
    @endif
