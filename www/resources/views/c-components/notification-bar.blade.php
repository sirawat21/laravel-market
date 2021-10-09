@if ($notification != null)
@foreach ($notification as $message)
    <div class="col-md-12">
        <div class="alert alert-{{ $status }} alert-dismissible fade show" role="alert">
            @if ($status == "danger")
                <span class="fa fa-exclamation"></span>
            @endif
            <span>
                {{ $message }}
            </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endforeach
@endif