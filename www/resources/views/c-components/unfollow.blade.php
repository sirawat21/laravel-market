<form method="POST" action="{{ url('following/'.$id) }}">
    @csrf
    @method('delete')
    <button style="folat-right:1px;"type="submit" class="btn btn-sm btn-outline-danger">
    <span class="fa fa-window-close"></span>
        Unfollow
    </button>
</form>