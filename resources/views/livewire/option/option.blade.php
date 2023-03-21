<div>
    @foreach ($sections as $item)
    {{-- <option value="{{$item->id}}">{{$item->section_name}}</option> --}}
    <option value="{{$item}}">{{$item}}</option>
        
    @endforeach
</div>
