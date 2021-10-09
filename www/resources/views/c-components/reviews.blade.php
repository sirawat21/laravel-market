@php
    use App\Models\Reviews;
    use App\Models\User;
    $reviews = Reviews::All()->where('items_id', $item->id);
@endphp
<style>
    .review-list {
        margin-top:15px;
        margin-bottom:15px;
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
            <p>{{ $review->message }}</p>
        </div>
    </div>
    @endforeach
</div>