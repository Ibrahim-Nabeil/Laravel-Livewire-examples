@extends('layouts/app/document')
@section('page-content')
    <div class="w-100 ">

        {{-- show total price aside for user --}}
        @livewire('show-total-order')

        {{--  end --}}
        <div class="w-100  row position-fixed ">
            <div class=" bg-light border  h-75  m50-auto p-4   col-10 col-lg-6 order" id="Order">
                <h5 class="text-end">
                    <button class="p-2 rounded" id="btnHiddenOrder">X</button>
                </h5>
                <h2 class="text-center">Lorem ipsum dolor sit amet consectetur. $55</h2>
                <div class="row p-0 ">
                    <div class="col-12  border  p-0 my3">
                        <div class="">
                            <div>
                                {{-- this hidden menu if user add item will put that item in menu --}}
                                @livewire('user-show-order')
                                {{-- end --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="">


            {{-- header --}}
            <header>
                <div class="header mb-5 ">
                    <div class="d-flex p-1">
                        @if (\Auth::guard('web')->check())
                            <a>
                                <button class="py-2 bg-light rounded border px-4 mx-1"
                                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                    تسجيل خروج</button>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                            <a href="{{ url('Admin') }}">
                                <button class="py-2 bg-light rounded border px-4 mx-1"> لوحة الادارة</button>
                            </a>
                        @else
                            <a href="login">
                                <button class="py-2 bg-light rounded border px-4 mx-1">تسجيل دخول</button>
                            </a>
                            <a href="register">
                                <button class="py-2 bg-light rounded border px-4 mx-1">انشاء حساب</button>
                            </a>
                        @endif

                    </div>
                    <div class="header-section-a ">
                        {{-- <img src="{{ url('images/') }}" alt="" class="w-100 h-100"> --}}
                    </div>
                    <div class="header-section-b bg-slice py-2">

                        <h1 class="text-center p-3 text-uppercase wow fadeInLeft" data-wow-duration="2s"
                            data-wow-offset="250">
                            Lorem ipsum dolor sit amet </h1>
                        <p class="text-center text-dark fs-4">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis minus
                            voluptas dignissimos tenetur cum eveniet ullam repellendus eaque, nesciunt omnis nulla nemo
                            possimus quo fugiat at iusto aliquam? Ducimus, officiis.
                        </p>
                    </div>
                </div>

            </header>
        </div>
        {{--  --}}
        <div class="container">
            {{-- <div class="">
            <ul class="d-flex justify-content-center py-1">
                <li class="py-2 bg-light rounded border px-2 mx-1 ">Lorem ipsum </li>
                <li class="py-2 bg-light rounded border px-2 mx-1 ">Lorem ipsum </li>
                <li class="py-2 bg-light rounded border px-2 mx-1 ">Lorem ipsum </li>
                <li class="py-2 bg-light rounded border px-2 mx-1 ">Lorem ipsum </li>
                <li class="py-2 bg-light rounded border px-2 mx-1 ">Lorem ipsum </li>
                <li class="py-2 bg-light rounded border px-2 mx-1 ">Lorem ipsum </li>
                <li class="py-2 bg-light rounded border px-2 mx-1 ">Lorem ipsum </li>
                <li class="py-2 bg-light rounded border px-2 mx-1 ">Lorem ipsum </li>
                <li class="py-2 bg-light rounded border px-2 mx-1 ">Lorem ipsum </li>
            </ul>
        </div> --}}
            {{-- main --}}
            <main>
                <div class="container-page ">
                    {{--  --}}
                    {{-- @livewire('new-articles') --}}
                    {{--  --}}
                    <div class="favorits py-3 bg-light p-4">
                        <h3 class="py-4  w-100">Lorem ipsum dolor sit amet.</h3>

                        <div class=" d-flex justify-content-center py-2">
                            <input type="text" class="col-8 px-3">
                            <input type="button" value="send" class="btn-serch py-1 px-3">
                        </div>
                    </div>
                    {{--  --}}

                    {{-- create pagination using bootstrap --}}
                    {{-- <div class=" py-4 ">
                    {{ $Data->links() }}
                </div> --}}
                    <div class="my-4">
                        <div class="">
                            {{--  --}}
                            @livewire('user-add-meal')
                            {{-- @livewire('user-show-order') --}}

                            {{-- <div class="col-12 col-lg-5 border  p-0 my3">
                            <h4 class="p-2">Lorem ipsum dolor sit amet.</h4>
                            <div class="">
                                <div class="card-head">
                                    <img src="{{ url('images/smoothie-1.png') }}" alt="" class="w-100 h-100">
                                </div>
                                <div class="card-body">
                                    <table class="w-100">
                                        <tr>
                                            <td class="py-3">
                                                <span>Lorem ipsum dolor sit amet.</span>
                                            </td>
                                            <td class="py-3">
                                                <button class="py-1 px-3 rounded">مكونات الوجبة</button>
                                                <button class="py-1 px-3 rounded btn btn-success">اضافة</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3">
                                                <span>Lorem ipsum dolor sit amet.</span>
                                            </td>
                                            <td class="py-3">
                                                <button class="py-1 px-3 rounded">مكونات الوجبة</button>
                                                <button class="py-1 px-3 rounded btn btn-success">اضافة</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3">
                                                <span>Lorem ipsum dolor sit amet.</span>
                                            </td>
                                            <td class="py-3">
                                                <button class="py-1 px-3 rounded">مكونات الوجبة</button>
                                                <button class="py-1 px-3 rounded btn btn-success">اضافة</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3">
                                                <span>Lorem ipsum dolor sit amet.</span>
                                            </td>
                                            <td class="py-3">
                                                <button class="py-1 px-3 rounded">مكونات الوجبة</button>
                                                <button class="py-1 px-3 rounded btn btn-success">اضافة</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-3">
                                                <span>Lorem ipsum dolor sit amet.</span>
                                            </td>
                                            <td class="py-3">
                                                <button class="py-1 px-3 rounded">مكونات الوجبة</button>
                                                <button class="py-1 px-3 rounded btn btn-success">اضافة</button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                </div>

                {{--  --}}
                {{-- <div class="favorits">
                <h3 class="py-4 px-2 bg-light">Lorem ipsum dolor sit amet.</h3>
                <div class="">
                    @livewire('list-of-some-topics-with-title')
                </div>
            </div> --}}
                <div class="border bg-info p-3 mt-4">home</div>
            </main>
            {{--  --}}
        </div>

    </div>
@endsection
