@foreach ($data as $item)
<div class=" bg-white p-2">
    <div><img src="{{$item['imageUrl']}}" /></div>
    <div class="text-sm">{{$item['name']}}</div>
    <div class="flex justify-around">
        <div>{{$item['price']}}</div>
        <div>{{$item['extra']}}</div>
    </div>
    <div class="flex justify-center items-center"><a class="btn border border-gray-400 py-2 px-5 rounded-sm" href="{{$item['link']}}">Lue lisää</a></div>
</div>

@endforeach