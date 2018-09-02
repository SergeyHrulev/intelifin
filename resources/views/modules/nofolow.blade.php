@if(isset($pagination))
    @if(parse_url(Request::fullUrl(), PHP_URL_PATH) == $pagination)
        @if(parse_url(Request::fullUrl(), PHP_URL_QUERY) !== null)
            <meta name="robots" content="noindex, follow">
            <link rel="canonical" href="{{ url($pagination) }}" />

            @if($data->previousPageUrl() !== Null)
                <link href="{{$data->previousPageUrl()}}" rel="prev">
            @endif
            @if($data->nextPageUrl() !== Null)
                <link href="{{$data->nextPageUrl()}}" rel="next">
            @endif
            @endif
        @endif
    @endif