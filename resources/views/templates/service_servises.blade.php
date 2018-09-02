<div class="col-md-6 d-flex full-height">
    <a href="{{ route($url) }}">
        <div class="card bg-light h-100 w-100">
            @if(isset($img))
            <img class="card-img h-100" src="{{ asset($img) }}" style="opacity: 0.5" alt="">
            @endif
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
                <div class="text-secondary-dark bg-warning">
                    <h2 class="h2"><strong>{{ $title }}</strong></h2>
                    @isset($subtitle)
                        <p>{{ $subtitle }}</p>
                        @endisset
                </div>
            </div>
            <!-- /.card-img-overlay -->
        </div>
        <!-- /.card bg-light -->
    </a>
</div>