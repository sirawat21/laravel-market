<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="img-box text-center">
                @foreach ($imgs as $img)
                    <img src="{{ url($img) }}" class="rounded img-responsive img-item">
                @endforeach
            </div>
        </div>
    </div>
</div>