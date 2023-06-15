@extends('layouts.app')

@section('title', 'Каталог')

@section('content')
	<main class="mb-5">
        <section class="catalog-hero hero">
            <div class="container">
                <h1 class="hero__title">КАТАЛОГ ПРОДУКЦИИ</h1>
                <div class="select" style="background: #fff; border-radius: 10px;">
                    <input class="select__input" type="hidden" name="">
                    <div class="select__head">ВСЯ ПРОДУКЦИЯ</div>
                    <ul class="select__list" style="display: none;">
                        <li class="select__item" data-id="1">банки</li>
                        <li class="select__item" data-id="2">БУТЫЛКИ</li>
                        <li class="select__item" data-id="3">ПРЕФОРМЫ</li>
                        <li class="select__item" data-id="4">ПЭТ-Преформа для банок</li>
                        <li class="select__item" data-id="5">ПРЕСС-ФОРМЫ</li>
                        <li class="select__item" data-id="6">КРЫШКИ</li>
                    </ul>
                </div>
                <button type="button" class="catalog-hero__filter-btn">фильтр</button>
                <div>
                    
                </div>
                <ul class="catalog-hero__list">
                    <li><button type="button" class="btn__item" data-id="1">банки</button></li>
                    <li><button type="button" class="btn__item" data-id="2">БУТЫЛКИ</button></li>
                    <li><button type="button" class="btn__item" data-id="3">ПРЕФОРМЫ</button></li>
                    <li><button type="button" class="btn__item" data-id="4">ПЭТ-Преформа для банок</button></li>
                    <li><button type="button" class="btn__item" data-id="5">ПРЕСС-ФОРМЫ</button></li>
                    <li><button type="button" class="btn__item" data-id="6">КРЫШКИ</button></li>
                </ul>
                <div class="catalog-hero__filter-wrapp">
                    <div class="mb-3 w-100">
                        <input class="filter__input w-100" type="text" placeholder="Я ищу ...">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <label for="" class="me-1">Объем</label>
                            <input class="filter__input" type="text" placeholder="10" style="width: 100px;">
                        </div>
                        <div class="d-flex align-items-center">
                            <label for="" class="me-1">Размер</label>
                            <input class="filter__input" type="text" placeholder="100" style="width: 100px;">
                        </div>
                        <input class="filter__input" type="text" placeholder="Горловина в мм." style="width: 200px;">
                        <input class="filter__input" type="text" placeholder="Поиск по цвету" style="width: 180px;">
                        <button type="button" class="filter__btn" style=" background-color: #5934C2; color: #fff;">Подобрать</button>
                    </div>
                    <div class="mt-3 mb-3 text-end">
                        <button type="button" class="filter__btn-1" style="color: #000;">Сбросить фильтр</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="filter d-none">
            <div class="container">
                <div class="mb-3 w-100">
                    <input class="filter__input w-100" type="text" placeholder="Я ищу ...">
                </div>
                <div class="mb-3 row">
                    <div class="col-6 d-flex align-items-center">
                        <label for="">Объем</label>
                        <input class="filter__input" type="text" placeholder="10" style="width: 100px;">
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <label for="">Размер</label>
                        <input class="filter__input" type="text" placeholder="100" style="width: 100px;">
                    </div>
                </div>
                <div class="mb-3">
                    <input class="filter__input" type="text" placeholder="Горловина в мм." style="width: 200px;">
                </div>
                <div class="mb-3">
                    <input class="filter__input" type="text" placeholder="Поиск по цвету" style="width: 180px;">
                </div>
                <div class="mb-3">
                    <button type="button" class="filter__btn">Подобрать</button>
                </div>
                <div class="mb-3">
                    <button type="button" class="filter__btn-1">Сбросить фильтр</button>
                </div>

            </div>
        </section>

        <section class="catalog-content catalog-content1" id="1">
            <div class="container">
                <h2>банки</h2>
                <div class="row justify-content-center justify-content-md-between">
                    @foreach ($products as $product)
						<x-product-preview :$product />
					@endforeach
                </div>
            </div>
        </section>
        <section class="catalog-content catalog-content2 d-none" id="2">
            <div class="container">
                <h2>БУТЫЛКИ</h2>
                <div class="row justify-content-center justify-content-md-between">

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a1.png" alt="">
                        <h3>Бутылка №1</h3>
                        <ul>
                            <li class="me-2">Артикул 001</li>
                            <li>Объем 1000мл.</li>
                        </ul>
                        <a href="card-2.html">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a2.png" alt="">
                        <h3>Бутылка №2</h3>
                        <ul>
                            <li class="me-2">Артикул 002</li>
                            <li>Объем 1500мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a3.png" alt="">
                        <h3>Бутылка №3</h3>
                        <ul>
                            <li class="me-2">Артикул 003</li>
                            <li>Объем 500мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a4.png" alt="">
                        <h3>Бутылка №4</h3>
                        <ul>
                            <li class="me-2">Артикул 004</li>
                            <li>Объем 1000мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a5.png" alt="">
                        <h3>Бутылка №5</h3>
                        <ul>
                            <li class="me-2">Артикул 005</li>
                            <li>Объем 100мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a6.png" alt="">
                        <h3>Бутылка №6</h3>
                        <ul>
                            <li class="me-2">Артикул 006</li>
                            <li>Объем 5л.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a7.png" alt="">
                        <h3>Бутылка №7</h3>
                        <ul>
                            <li class="me-2">Артикул 007</li>
                            <li>Объем 1000мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a8.png" alt="">
                        <h3>Бутылка №8</h3>
                        <ul>
                            <li class="me-2">Артикул 008</li>
                            <li>Объем 125мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a9.png" alt="">
                        <h3>Бутылка №9</h3>
                        <ul>
                            <li class="me-2">Артикул 009</li>
                            <li>Объем 1000мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a10.png" alt="">
                        <h3>Бутылка №10</h3>
                        <ul>
                            <li class="me-2">Артикул 0010</li>
                            <li>Объем 500мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a11.png" alt="">
                        <h3>Бутылка №11</h3>
                        <ul>
                            <li class="me-2">Артикул 0011</li>
                            <li>Объем 0.35л, 0.5л, 1л</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a12.png" alt="">
                        <h3>Бутылка №12</h3>
                        <ul>
                            <li class="me-2">Артикул 0012</li>
                            <li>Объем 100мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a13.png" alt="">
                        <h3>Бутылка №13</h3>
                        <ul>
                            <li class="me-2">Артикул 0013</li>
                            <li>Объем 500мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a14.png" alt="">
                        <h3>Бутылка №14</h3>
                        <ul>
                            <li class="me-2">Артикул 0014</li>
                            <li>Объем 0.35л, 0.5л, 1л</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a15.png" alt="">
                        <h3>Бутылка №16</h3>
                        <ul>
                            <li class="me-2">Артикул 0016</li>
                            <li>Объем 100мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a16.png" alt="">
                        <h3>Бутылка №17</h3>
                        <ul>
                            <li class="me-2">Артикул 0017</li>
                            <li>Объем 100мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a17.png" alt="">
                        <h3>Бутылка №18</h3>
                        <ul>
                            <li class="me-2">Артикул 0018</li>
                            <li>Объем 200мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a18.png" alt="">
                        <h3>Бутылка №19</h3>
                        <ul>
                            <li class="me-2">Артикул 0019</li>
                            <li>Объем 350мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a19.png" alt="">
                        <h3>Бутылка №20</h3>
                        <ul>
                            <li class="me-2">Артикул 0020</li>
                            <li>Объем 180мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a20.png" alt="">
                        <h3>Бутылка №25</h3>
                        <ul>
                            <li class="me-2">Артикул 0025</li>
                            <li>Объем 300мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a21.png" alt="">
                        <h3>Бутылка №27</h3>
                        <ul>
                            <li class="me-2">Артикул 0027</li>
                            <li>Объем 500мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a22.png" alt="">
                        <h3>Бутылка №28</h3>
                        <ul>
                            <li class="me-2">Артикул 0028</li>
                            <li>Объем 500мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a23.png" alt="">
                        <h3>Бутылка №29</h3>
                        <ul>
                            <li class="me-2">Артикул 0029</li>
                            <li>Объем 1000мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a24.png" alt="">
                        <h3>Бутылка №31</h3>
                        <ul>
                            <li class="me-2">Артикул 0031</li>
                            <li>Объем 500мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a25.png" alt="">
                        <h3>Бутылка №32</h3>
                        <ul>
                            <li class="me-2">Артикул 0032</li>
                            <li>Объем 250мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a26.png" alt="">
                        <h3>Бутылка №34</h3>
                        <ul>
                            <li class="me-2">Артикул 0034</li>
                            <li>Объем 250мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a27.png" alt="">
                        <h3>Бутылка №35</h3>
                        <ul>
                            <li class="me-2">Артикул 0035</li>
                            <li>Объем 500мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a28.png" alt="">
                        <h3>Бутылка №36</h3>
                        <ul>
                            <li class="me-2">Артикул 0036</li>
                            <li>Объем 500мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a29.png" alt="">
                        <h3>Бутылка №37</h3>
                        <ul>
                            <li class="me-2">Артикул 0037</li>
                            <li>Объем 300мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a30.png" alt="">
                        <h3>Бутылка №38</h3>
                        <ul>
                            <li class="me-2">Артикул 0038</li>
                            <li>Объем 200мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a31.png" alt="">
                        <h3>Бутылка №39</h3>
                        <ul>
                            <li class="me-2">Артикул 0039</li>
                            <li>Объем 200мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a32.png" alt="">
                        <h3>Бутылка №40</h3>
                        <ul>
                            <li class="me-2">Артикул 0040</li>
                            <li>Объем 2л.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a33.png" alt="">
                        <h3>Бутылка №41</h3>
                        <ul>
                            <li class="me-2">Артикул 0041</li>
                            <li>Объем 250мл.</li>
                        </ul>
                        <a href="#">от ...</a>  
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a34.png" alt="">
                        <h3>Бутылка №42</h3>
                        <ul>
                            <li class="me-2">Артикул 0042</li>
                            <li>Объем 1л.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a35.png" alt="">
                        <h3>Бутылка №43</h3>
                        <ul>
                            <li class="me-2">Артикул 0043</li>
                            <li>Объем 500мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a36.png" alt="">
                        <h3>Бутылка №44</h3>
                        <ul>
                            <li class="me-2">Артикул 0044</li>
                            <li>Объем 250мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a37.png" alt="">
                        <h3>Бутылка №45</h3>
                        <ul>
                            <li class="me-2">Артикул 0045</li>
                            <li>Объем 600мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a38.png" alt="">
                        <h3>Бутылка №46</h3>
                        <ul>
                            <li class="me-2">Артикул 0046</li>
                            <li>Объем 200мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a39.png" alt="">
                        <h3>Бутылка №47</h3>
                        <ul>
                            <li class="me-2">Артикул 0047</li>
                            <li>Объем 250мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a40.png" alt="">
                        <h3>Бутылка №48</h3>
                        <ul>
                            <li class="me-2">Артикул 0048</li>
                            <li>Объем 500мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a41.png" alt="">
                        <h3>Бутылка №49</h3>
                        <ul>
                            <li class="me-2">Артикул 0049</li>
                            <li>Объем 1л.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a42.png" alt="">
                        <h3>Бутылка №50</h3>
                        <ul>
                            <li class="me-2">Артикул 0050</li>
                            <li>Объем 1л.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a43.png" alt="">
                        <h3>Бутылка №51</h3>
                        <ul>
                            <li class="me-2">Артикул 0051</li>
                            <li>Объем 500мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a44.png" alt="">
                        <h3>Бутылка №52</h3>
                        <ul>
                            <li class="me-2">Артикул 0052</li>
                            <li>Объем 280мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a45.png" alt="">
                        <h3>Бутылка №53</h3>
                        <ul>
                            <li class="me-2">Артикул 0053</li>
                            <li>Объем 250мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a46.png" alt="">
                        <h3>Бутылка №54</h3>
                        <ul>
                            <li class="me-2">Артикул 0054</li>
                            <li>Объем 200мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a47.png" alt="">
                        <h3>Бутылка №55</h3>
                        <ul>
                            <li class="me-2">Артикул 0055</li>
                            <li>Объем 3000мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a48.png" alt="">
                        <h3>Бутылка №56</h3>
                        <ul>
                            <li class="me-2">Артикул 0056</li>
                            <li>Объем 1700мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a49.png" alt="">
                        <h3>Бутылка №57</h3>
                        <ul>
                            <li class="me-2">Артикул 0057</li>
                            <li>Объем 250-280мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a50.png" alt="">
                        <h3>Бутылка №59</h3>
                        <ul>
                            <li class="me-2">Артикул 0059</li>
                            <li>Объем 500мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/a51.png" alt="">
                        <h3>Бутылка №60</h3>
                        <ul>
                            <li class="me-2">Артикул 0059</li>
                            <li>Объем 500мл.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>




                </div>
            </div>
        </section>

        <section class="catalog-content catalog-content3 d-none" id="3">
            <div class="container">
                <h2>ПРЕФОРМЫ</h2>
                <div class="row justify-content-center justify-content-md-between">
                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/p1.png" alt="">
                        <h3>Преформа ПЭТ</h3>
                        <ul>
                            <li class="me-2">Артикул 100</li>
                            <li>Вес 24гр.</li>
                        </ul>
                        <a href="card-3.html">от ...</a>
                    </div>
                    
                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/p2.png" alt="">
                        <h3>Преформа ПЭТ</h3>
                        <ul>
                            <li class="me-2">Артикул 101</li>
                            <li>Вес 21гр.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/p3.png" alt="">
                        <h3>Преформа ПЭТ</h3>
                        <ul>
                            <li class="me-2">Артикул 102</li>
                            <li>Вес 23гр.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/p4.png" alt="">
                        <h3>Преформа ПЭТ</h3>
                        <ul>
                            <li class="me-2">Артикул 103</li>
                            <li>Вес 24гр.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/p5.png" alt="">
                        <h3>Преформа ПЭТ</h3>
                        <ul>
                            <li class="me-2">Артикул 104</li>
                            <li>Вес 28гр.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/p6.png" alt="">
                        <h3>Преформа ПЭТ</h3>
                        <ul>
                            <li class="me-2">Артикул 105</li>
                            <li>Вес 33гр.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/p7.png" alt="">
                        <h3>Преформа ПЭТ</h3>
                        <ul>
                            <li class="me-2">Артикул 106</li>
                            <li>Вес 34гр.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/p8.png" alt="">
                        <h3>Преформа ПЭТ</h3>
                        <ul>
                            <li class="me-2">Артикул 107</li>
                            <li>Вес 42гр.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/p9.png" alt="">
                        <h3>Преформа ПЭТ</h3>
                        <ul>
                            <li class="me-2">Артикул 108</li>
                            <li>Вес 51гр.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/p10.png" alt="">
                        <h3>Преформа ПЭТ</h3>
                        <ul>
                            <li class="me-2">Артикул 109</li>
                            <li>Вес 71гр.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/p11.png" alt="">
                        <h3>Преформа ПЭТ</h3>
                        <ul>
                            <li class="me-2">Артикул 110</li>
                            <li>Вес 93гр.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/p12.png" alt="">
                        <h3>Преформа ПЭТ</h3>
                        <ul>
                            <li class="me-2">Артикул 111</li>
                            <li>Вес 28, 31, 37гр.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                </div>
            </div>
        </section>

        <section class="catalog-content catalog-content4 d-none" id="4">
            <div class="container">
                <h2>ПЭТ-Преформа для банок</h2>
                <div class="row justify-content-center justify-content-md-between">
                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/aa.png" alt="">
                        <h3>ПЭТ-Преформа для банок</h3>
                        <ul>
                            <li class="me-2">Артикул 2001</li>
                            <li>Объем 58мм.</li>
                        </ul>
                        <a href="card-3.html">от ...</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="catalog-content catalog-content5 d-none" id="5">
            <div class="container">
                <h2>пресс-формы</h2>
                <div class="row justify-content-center justify-content-md-between">
                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/aa.png" alt="">
                        <h3>Пресс-форма</h3>
                        <ul>
                            <li class="me-2">Артикул 3001</li>
                            <li>Объем 58мм.</li>
                        </ul>
                        <a href="card-3.html">от ...</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="catalog-content catalog-content6 d-none" id="6">
            <div class="container">
                <h2>КРЫШКИ</h2>
                <div class="row justify-content-center justify-content-md-between">

                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/k1.png" alt="">
                        <h3>Крышка</h3>
                        <ul>
                            <li class="me-2">Артикул 1001</li>
                            <li>Дозатор 58мм.</li>
                        </ul>
                        <a href="card-4.html">от ...</a>
                    </div>
                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/k2.png" alt="">
                        <h3>Крышка</h3>
                        <ul>
                            <li class="me-2">Артикул 1002</li>
                            <li>Дозатор 58мм.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>
                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/k3.png" alt="">
                        <h3>Вкладыш</h3>
                        <ul>
                            <li class="me-2">Артикул 1004</li>
                            <li>Дозатор 58мм.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>
                    <div class="mb-3 catalog-content__card col-md-6 col-lg-4">
                        <img src="./images/k4.png" alt="">
                        <h3>Вкладыш</h3>
                        <ul>
                            <li class="me-2">Артикул 1004</li>
                            <li>Дозатор 58мм.</li>
                        </ul>
                        <a href="#">от ...</a>
                    </div>

                </div>
            </div>
        </section>


    </main>
@endsection
