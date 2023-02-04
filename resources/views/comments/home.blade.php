@extends('contacts.pearant')
@section('content')
    <header>

        <div class="row">
            <div class="col-1">
                <h1>Web trend store <br>a new style!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, facilis excepturi distinctio consequatur magnam accusamus amet quas exercitationem voluptatibus explicabo aperiam facere enim. Enim eligendi ut aliquam, molestiae deserunt cupiditate!</p>
                <a href="#">explore now &#8594;</a>
            </div>
            <div class="col-2">
                <img src="{{ asset('store/images/watch.png') }}">
            </div>
        </div>
    </header>
    <!-- Start Features -->
    <div class="features">
        <h1>our products</h1>
        <div class="row">
            <div class="features_box">
                <div class="products_box">
                    <img src="{{ asset('store/images/product1.png') }}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>pajamas</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p><sup>$</sup>40.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                    <img src="{{ asset('store/images/product2.png') }}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>rolex watch</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p><sup>$</sup>250.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                    <img src="{{ asset('store/images/product3.png') }}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>trousers</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p><sup>$</sup>30.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                    <img src="{{ asset('store/images/product4.png') }}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>T-Shirt</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p><sup>$</sup>15.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                    <img src="{{asset('store/images/product5.png')}}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>purse</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p><sup>$</sup>60.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                    <img src="{{asset('store/images/product6.png')}}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>perfume</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p><sup>$</sup>150.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                    <img src="{{asset('store/images/product7.png')}}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>blouse</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p><sup>$</sup>30.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                    <img src="{{ asset('store/images/product8.png') }}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>nike shoes</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p><sup>$</sup>200.00</p>
            </div>
        </div>
    </div>
    <!-- Start latest products -->
    <div class="features">
        <h1>latest products</h1>
        <div class="row">
            <div class="features_box">
                <div class="products_box">
                    <img src="{{ asset('store/images/product9.png') }}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>rolex watch</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p><sup>$</sup>100.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                    <img src="{{ asset('store/images/product10.png') }}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>shirt</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p><sup>$</sup>30.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                <img src="{{ asset('store/images/product11.png') }}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>trousers</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p><sup>$</sup>20.00</p>
            </div>
            <div class="features_box">
                <div class="products_box">
                    <img src="{{ asset('store/images/product12.png') }}">
                    <div class="info">
                        <a href="#">add to char <i class="far fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h3>dress</h3>
                <div class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p><sup>$</sup>40.00</p>
            </div>
        </div>
    </div>
    <!-- Start Discount Section -->
    <div class="discount">
        <div class="col1">
            <h1>apple watch</h1>
            <h4><sup>$</sup>250</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex neque, rerum earum recusandae vitae est, sapiente iure quidem quis accusamus perferendis, animi asperiores sunt tempore exercitationem vel facere harum aperiam</p>
            <a href="#">buy now &#8594;</a>
        </div>
        <div class="col2">
            <img src="{{asset('store/images/watch.png')}}">
        </div>
    </div>
    <!-- Start Testimonials -->
    <div class="testimonials">
        <h1>testimonials</h1>
        <div class="row">
            <div class="testimonials_box">
                <div class="img_box">
                    <img src="{{asset('store/images/testimonials1.png')}}">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quod alias, laborum delectus accusamus dolorem praesentium error. Impedit provident, quia fuga atque saepe cumque magnam ullam aut amet, neque incidunt</p>
                <h4>steve harvey</h4>
                <span>our customer</span>
            </div>
            <div class="testimonials_box">
                <div class="img_box">
                    <img src="{{ asset('store/images/testimonials2.png') }}">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quod alias, laborum delectus accusamus dolorem praesentium error. Impedit provident, quia fuga atque saepe cumque magnam ullam aut amet, neque incidunt</p>
                <h4>natalie sallaum</h4>
                <span>our customer</span>
            </div>
            <div class="testimonials_box">
                <div class="img_box">
                    <img src="{{ asset('store/images/testimonials3.png') }}">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quod alias, laborum delectus accusamus dolorem praesentium error. Impedit provident, quia fuga atque saepe cumque magnam ullam aut amet, neque incidunt</p>
                <h4>john wich</h4>
                <span>our customer</span>
            </div>
        </div>
    </div>
    <!-- Start Brand -->
    <div class="brand">
        <img src="{{ asset('store/images/brand1.png') }}">
        <img src="{{ asset('store/images/brand2.png') }}">
        <img src="{{ asset('store/images/brand3.png') }}set}}">
        <img src="{{ asset('store/images/brand4.png') }}set}}">
        <img src="{{ asset('store/images/brand5.png') }}set}}">
    </div>
@endsection
