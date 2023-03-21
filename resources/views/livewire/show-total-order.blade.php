{{-- {{$total = 0}} --}}
@if ($total != 0)

    <button class="py-2 px-3 rounded btn btn-success position-absolute top-50  position-fixed " id="btnShowOrder">
        <h5>عرض الطلبية</h5>
        <h5>${{ $total }}</h5>
    </button>
@else
    <button class="py-2 px-3 rounded btn btn-success position-absolute top-50  position-fixed d-none" id="btnShowOrder">
        <h5>عرض الطلبية</h5>
        <h5>${{ $total }}</h5>
    </button>
@endif
