@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
    <main>
        <x-h1>Контакты</x-h1>

        <section class="contact">
            <div class="container">
                <h2>Адрес офиса и производства ООО «Альфапласт»:</h2>
                <div class="contact__text">{{ contacts()->address }}</div>
                <ul class="contact__list">
                    @if (contacts()->primary_phone)
                        <li><a href="tel:{{ clear_phone(contacts()->primary_phone) }}">{{ contacts()->primary_phone }}</a></li>
                    @endif
                    @if (contacts()->secondary_phone)
                        <li><a href="tel:{{ clear_phone(contacts()->secondary_phone) }}">{{ contacts()->secondary_phone }}</a></li>
                    @endif
                    @if (contacts()->email)
                        <li><a href="mailto:{{ contacts()->email }}">{{ contacts()->email }}</a></li>
                    @endif
                    <li class="ps-2 p-0">
                        @if (contacts()->instagram)
                            <a class="contact__a" href="{{ contacts()->instagram }}">
                                <img src="{{ Vite::asset('resources/images/inst.png') }}" alt="">
                            </a>
                        @endif
                        @if (contacts()->vk)
                            <a href="{{ contacts()->vk }}">
                                <img src="{{ Vite::asset('resources/images/vk.png') }}" alt="">
                            </a>
                        @endif
                    </li>
                </ul>
                <div style="position:relative;overflow:hidden;">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?from=tabbar&ll=37.316106%2C56.005309&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoxNTgzNDI2MTIwEqAB0KDQvtGB0YHQuNGPLCDQnNC-0YHQutC-0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwg0LPQvtGA0L7QtNGB0LrQvtC5INC-0LrRgNGD0LMg0KXQuNC80LrQuCwg0LTQtdGA0LXQstC90Y8g0J_QvtGP0YDQutC-0LLQviwg0JrQu9GD0YjQuNC90YHQutCw0Y8g0YPQu9C40YbQsCwgMiIKDbFDFUIVcAVgQg%2C%2C&source=serp_navig&z=17.1"
                        style="position:relative;" width="560" height="400" frameborder="1"
                        allowfullscreen="true"></iframe>
                </div>
            </div>
        </section>

    </main>
@endsection
