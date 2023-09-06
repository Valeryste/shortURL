@foreach($items as $item)
    <a href = "{{route('shortURL.show',$item->shortURL)}}" >{{$item->shortURL}}</a>

@endforeach
