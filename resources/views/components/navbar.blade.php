{{-- @props(['location']) --}}

{{-- @php
$active = 'text-white';
@endphp --}}

@foreach ($categories as $item)
    @php
    // if($location != 'footer') {
        $active = request()->routeIs($item) ? 'text-white':'text-gray-500';
    // }
    @endphp
    <a class="py-2 {{$active}} hover:text-gray-50" href="{{route($item)}}">{{$item}}</a>
@endforeach
