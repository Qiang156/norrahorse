@foreach ($data as $item)
<div class="border">
    <div class="flex justify-center"><img src="{{$item['imageUrl']}}" class="h-90"></div>
    <div class="text-xl text-center uppercase">{{$item['title']}}</div>
    <div class="border">{{$item['description']}}</div>
    <a href="{{$item['link']}}">Lue lisää...</a>
</div>    
@endforeach
