<div class="row p-0 d-flex justify-content-between">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    @foreach ($Data as $item)
    <div class="col-12 col-lg-5 border  p-0 my3">
        <h4 class="p-2">{{ $item->section_name }}</h4>
        <div class="">
            <div class="card-head">
                <img src="{{ url($item->image) }}" alt="" class="w-100 h-100">
            </div>
            <div class="card-body">
                <table class="w-100">
                    {{--  --}}
                    @foreach ($item->Meal as $meal)
                        <tr>
                            <td class="py-3">
                                <span>{{ $meal->meal }}</span>
                            </td>
                            <td class="py-3">
                                <button class="py-1 px-3 rounded">مكونات الوجبة</button>
                                <button class="py-1 px-3 rounded btn btn-success" wire:click.prevent="AddAitem({{$meal->id}})">اضافة</button>
                            </td>
                        </tr>

                    @endforeach
                    @if (!isset($item->Meal[0]))
                    <tr>
                        <td>
                            <h4>هذا القسم لايحتوي علي عناصر</h4>
                        </td>
                    </tr>
                @endif
                </table>
            </div>
        </div>
    </div>
@endforeach
{{-- <hr> --}}
{{-- {{echo implode(',',\Session::get('order'))}} --}}
</div>
