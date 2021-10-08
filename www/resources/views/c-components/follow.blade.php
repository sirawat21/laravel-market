<form method="POST" action="{{ url('following') }}">
    @csrf
    <input type="hidden" name="following" value="{{ $current_profile_id }}">
    <button style="folat-right:1px;"type="submit" class="btn btn-sm btn-success">
        <span class="fa fa-plus"></span>
        Follow
    </button>
</form>