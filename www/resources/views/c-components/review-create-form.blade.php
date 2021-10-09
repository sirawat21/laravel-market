<style>
    .review-form {
        margin-top:30px;
    }
</style>
<div class="row review-form">
    <div class="col-md-12">
        <div class="card c-box-shadow" style="padding: 10px 10px 10px 10px;">
<form method="post" action="{{ url('review') }}">
    @csrf
    <input type="hidden" name="items_id" value="{{ $item->id }}">
    <div>
        <label class="form-control-label" for="message">
            Comment:
        </label>
        <textarea required rows="3" class="form-control" id="message" name="message"></textarea>
    </div>
    <div>
        @include('c-components.rate-input-form')
    </div>
    <div>
        <input style="margin-top:10px;" class="btn btn-primary" value="Review" type="submit"/>
    </div>
</form>
</div>
</div>
</div>