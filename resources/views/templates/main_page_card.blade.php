<div class="col-lg-4 col-sm-12 py-3">
    <div class="card" style="width: 18rem;">
        <img src="{{ asset($img) }}" alt="" class="card-img-top">
        <!-- /.card-img-top -->
        <div class="card-body">
            <p class="card-title" style="font-size: 30px;font-weight: bold;line-height: 1.2">{{ $title }}</p>
            <p class="card-subtitle mb-2 text-muted">{{ $description }}</p>
            <a href="{{ $url }}" class="card-link">Узнать больше <i class="fa fa-angle-double-right fa-lg"></i></a>
        </div>
        <!-- /.card-body -->

    </div>
</div>