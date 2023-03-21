<div>
    {{-- Stop trying to control. --}}
    @if (isset($Data) && $Data != null)
        <div class="card-body">

            @foreach ($Data as $item)
                <table class="w-100">
                    <tr>
                        <td class="py-3">
                            <span>{{ $item->meal }}</span>
                        </td>
                        <td class="py-3">
                            <button class="py-1 px-3 rounded">مكونات الوجبة</button>
                            {{-- This Button on Click will remove item of order --}}
                            <button class="py-1 px-3 rounded btn btn-warning"
                                wire:click.prevent="RomoveItem({{ $item->id }})">ازالة </button>
                            {{ $item->id }}
                        </td>
                    </tr>
                </table>
            @endforeach
        </div>

        <div class="py-2">
            {{-- conferm the order --}}
            <button class="py-1 px-3 rounded">تاكيد الطلبية</button>
            {{-- Refuse Order --}}
            @livewire('refuse-order')
            {{--  --}}
        </div>
    @else
        <h5 class="text-center">القائمة فارغة</h5>

    @endif

    {{-- {{session('order')}} --}}
</div>
