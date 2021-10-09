@php
    use App\Models\Reviews;
    use App\Models\User;
    $reviews = Reviews::All()->where('items_id', $item->id);
@endphp
<style>
    .review-list {
        margin-top:15px;
        margin-bottom:15px;
        padding: 10px 10px 10px 10px;
    }
</style>
<div class="col-md-12">
    @foreach($reviews as $review)
    <div class="card c-box-shadow review-list">
        <div class="col-md-12">
            <p>
                <a href="{{ url('profile/'.$review->users_id) }}">
                    <span class="fa fa-user"></span>
                    {{ User::find($review->users_id)->name }}
                </a>
                <span><b>|</b></span>
                {{ $review->updated_at }}
            </p>
            <p>Rate: {{ str_repeat("★", $review->rate) }}</p>
        </div>
        <div class="col-md-12">
            <p class="badge badge-pill badge-dark" style="font-size:15px;">
                <span class="fa fa-thumbs-up "></span><span> 0 </span>
                <span>&nbsp;<b>|</b>&nbsp;</span>
                <span class="fa fa-thumbs-down"></span><span> 0 </span>
                <form>
                    <button class="btn btn-sm btn-outline-success">
                        <span class="fa fa-thumbs-up"></span>
                        Like
                    </button>
                </form>
                <!-- <button class="btn btn-sm btn-outline-danger">
                    <span class="fa fa-thumbs-down"></span>
                    Dislike 
                </button> -->
            </p>
        </div>
        <div class="col-md-12">
            <p>{{ $review->message }}</p>
        </div>
    </div>
    @endforeach
</div>