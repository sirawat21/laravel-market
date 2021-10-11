@php
    use App\Models\User;
    use App\Models\Votes;
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
    @php
        $vote = Votes::where('reviews_id', '=', $review->id)->first();
    @endphp
    <div class="card c-box-shadow review-list">
        <div class="col-md-12">
            <p>
                <a href="{{ url('reviews/'.$review->users_id) }}">
                    <span class="fa fa-user"></span>
                    {{ User::find($review->users_id)->name }}
                </a>
                <span><b>|</b></span>
                {{ $review->updated_at }}
                &emsp;
      <!-- Delete Link -->
      @auth
        @if (Auth::user()->type == "moderator")
        <div style="position:absolute;right:10px;">
          <form method="POST" action="{{ url('review/'.$review->id) }}">
                @method('delete')
                @csrf
                <input type="hidden" value="{{ $review->id }}">
                <button type="submit" class="btn btn-sm btn-outline-danger">
                  <span class="fa fa-trash"></span>
                  Remove
                </button>
          </form>
        </div>
        @endif
      @endauth
      <!-- Delete Link -->
        </p>
            <p>Rate: {{ str_repeat("★", $review->rate) }}</p>
        </div>
        <div class="col-md-12">
            <p class="badge badge-pill badge-dark" style="font-size:15px;">
                <span class="fa fa-thumbs-up "></span><span> {{ $vote->like }} </span>
                <span>&nbsp;<b>|</b>&nbsp;</span>
                <span class="fa fa-thumbs-down"></span><span> {{ $vote->dislike }} </span>
                <!-- Like Dislike Button -->
                @auth
                <form method="post"  action="{{ url('vote/'.$vote->id) }}">
                    @csrf
                    @method('put')
                    <input type="hidden" name="items_id" value="{{ $review->items_id }}">
                    @if ($vote->like == 0)
                    <input type="hidden" name="status" value="1">
                    <button type="submit" class="btn btn-sm btn-outline-success">
                        <span class="fa fa-thumbs-up"></span>
                        Like
                    </button>
                    @else
                    <input type="hidden" name="status" value="0">
                    <button type="submit" class="btn btn-sm btn-outline-danger">
                        <span class="fa fa-thumbs-down"></span>
                        Dislike 
                    </button>
                    @endif
                </form>
                @endauth
                <!-- Like Dislike Button -->
            </p>
        </div>
        <div class="col-md-12">
            <p>{{ $review->message }}</p>
        </div>
    </div>
    @endforeach
    {{ $reviews->links() }}
</div>