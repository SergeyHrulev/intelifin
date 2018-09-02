<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', '2018-05-01 21:15:05') }}</lastmod>
        <changefreq>{{ 'weekly' }}</changefreq>
        <priority>{{ 1.0 }}</priority>
    </url>
    <url>
        <loc>{{ url('/servises') }}</loc>
        <lastmod>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', '2018-05-07 15:31:36') }}</lastmod>
        <changefreq>{{ 'weekly' }}</changefreq>
        <priority>{{ 0.9 }}</priority>
    </url>
    <url>
        <loc>{{ url('/fin-dictionary') }}</loc>
        <lastmod>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', '2018-05-06 11:24:47') }}</lastmod>
        <changefreq>{{ 'weekly' }}</changefreq>
        <priority>{{ 0.8 }}</priority>
    </url>
    <url>
        <loc>{{ url('/credit-expert') }}</loc>
        <lastmod>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', '2018-05-04 11:45:02') }}</lastmod>
        <changefreq>{{ 'weekly' }}</changefreq>
        <priority>{{ 0.9 }}</priority>
    </url>
    <url>
        <loc>{{ url('/chief-financial-officer') }}</loc>
        <lastmod>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', '2018-05-08 19:35:25') }}</lastmod>
        <changefreq>{{ 'weekly' }}</changefreq>
        <priority>{{ 0.9 }}</priority>
    </url>
    <url>
        <loc>{{ url('/cfo-school') }}</loc>
        <lastmod>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', '2018-05-09 20:44:07') }}</lastmod>
        <changefreq>{{ 'weekly' }}</changefreq>
        <priority>{{ 0.9 }}</priority>
    </url>
    <url>
        <loc>{{ url('/easy-start') }}</loc>
        <lastmod>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', '2018-05-10 15:08:21') }}</lastmod>
        <changefreq>{{ 'weekly' }}</changefreq>
        <priority>{{ 0.9 }}</priority>
    </url>
    <url>
        <loc>{{ url('/business-security') }}</loc>
        <lastmod>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', '2018-05-10 22:12:36') }}</lastmod>
        <changefreq>{{ 'weekly' }}</changefreq>
        <priority>{{ 0.9 }}</priority>
    </url>
    <url>
        <loc>{{ url('/personal-banking') }}</loc>
        <lastmod>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', '2018-05-11 09:13:45') }}</lastmod>
        <changefreq>{{ 'weekly' }}</changefreq>
        <priority>{{ 0.9 }}</priority>
    </url>
    <url>
        <loc>{{ url('/contacts') }}</loc>
        <lastmod>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', '2018-05-12 10:25:09') }}</lastmod>
        <changefreq>{{ 'weekly' }}</changefreq>
        <priority>{{ 0.8 }}</priority>
    </url>
    @foreach($articles as $article)
        <url>
            <loc>{{ url('/articles'). '/' . $article->slug }}</loc>
            @if($article->updated_at !== Null)
                <lastmod>{{ $article->updated_at }}</lastmod>
            @else
                <lastmod>{{ $article->created_at }}</lastmod>
            @endif
            <changefreq>{{ 'weekly' }}</changefreq>
            <priority>{{ 0.7 }}</priority>
        </url>
        @endforeach
    @foreach($events as $event)
        <url>
            <loc>{{ url('/events'). '/' . $event->slug }}</loc>
           @if($event->updated_at !== Null)
                <lastmod>{{ $event->updated_at }}</lastmod>
            @else
                <lastmod>{{ $event->created_at }}</lastmod>
            @endif
            <changefreq>{{ 'weekly' }}</changefreq>
            <priority>{{ 0.7 }}</priority>
        </url>
    @endforeach
</urlset>