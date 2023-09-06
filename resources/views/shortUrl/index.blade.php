@foreach($items as $item)
    <a href = "{{route('shortURL.show',$item->id)}}" >{{$item->shortURL}}</a>

@endforeach
