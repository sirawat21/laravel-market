@php
    use App\Models\Reviews;
    use App\Models\User;
    $reviews = Reviews::All()->where('items_id', $item->id);
    $current_user = User::find(Auth::user()->id);
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
                {{ User::find($review->users_id)->name }}|
                {{ $review->updated_at }}
            </p>
            <p>Rate: {{ $review->rate }}</p>
            <p>{{ $review->message }}</p>
        </div>
    </div>
    @endforeach
</div>