@php
    use App\Models\Items;
    use App\Models\User;
    use App\Models\Images;
    use App\Models\Manufacturers;
@endphp
@forelse ($items as $item)
@php
    /* Get Item owner info */
    $owner = User::find($item->users_id);
    /* Get Manufacturer info */
    $manufacturer = Manufacturers::find($item->manufacturers_id);
    /* Get Image */
    $img = Images::where('items_id', $item->id)->first();
        if (empty($img)){
            $img = url('images/default/noimage.jpg');
        } else {
            $img = $img->getAttribute('image');
        }
    /* Cuted Item name */
    $item_name = (strlen($item->name) > 20) ? substr($item->name, 0, 20)."..." : $item->name;
@endphp
<div class="card c-box-shadow item-card">
    <a type="button" href="{{ url('item/'.$item->id) }}">
      <img class="card-img-top item-card-img" src="{{ asset($img) }}" alt="{{ $item->name }}">
    </a>
    <div class="card-body">
        <a class="card-head-a" href="{{ url('item/'.$item->id) }}">
            <h5 class="card-title">
                {{ $item_name }}
            </h5>
        </a>
        <div class="card-text">
        <table>
          <tr>
            <td>
              <b>Price</b>
            </td>
            <td>{{ number_format($item->price, 2) }}&nbsp;AUD</td>
          </tr>
          <tr>
            <td>
              <b>Seller</b>
            </td>
            <td>
                {{ $owner->name }}
                &nbsp;
                <a href="{{ url('profile/'.$owner->id) }}">
                  <span class="fa fa-link">
                  </span>
                  <span>profile</span>
                </a>
            </td>
          </tr>
          <tr>
            <td>
              <b>Made</b>
            </td>
            <td>{{ $manufacturer->name }}</td>
          </tr>
        </table>
        {{ $item->created_at }}
        </div>
    </div>
</div>
@empty
    ! No post item in Market yet.
@endforelse