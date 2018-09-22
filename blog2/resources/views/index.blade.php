@extends('head')

@section('title','đăng nam homepage')

@section('main')

<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <div class="hero-slide-item set-bg" data-setbg="img/slide1.jpg">
            <div class="hs-text">
                <h2 class="hs-title-1"><span>Đăng Nam</span></h2>
                <h2 class="hs-title-2"><span>Web developer</span></h2>
                <h2 class="hs-title-3"><span>do my best</span></h2>
            </div>
        </div>
        <div class="hero-slide-item set-bg" data-setbg="img/honda.jpg">
            <div class="hs-text">
                <h2 class="hs-title-1"><span>Diệt chủng</span></h2>
                <h2 class="hs-title-2"><span>Nuclear weapon</span></h2>
                <h2 class="hs-title-3"><span>Gà con hầm nấm</span></h2>
            </div>
        </div>
    </div>

    <section class="add-section spad">
        <div class="container">
            <div class="add-warp">
                <div class="add-slider owl-carousel">
                    <div class="as-item set-bg" data-setbg="img/add/php2.png"></div>
                    <div class="as-item set-bg" data-setbg="img/add/php1.jpg"></div>
                    <div class="as-item set-bg" data-setbg="img/add/php3.jpg"></div>
                </div>
                <div class="row add-text-warp">
                    <div class="col-lg-4 col-md-5 offset-lg-8 offset-md-7">
                        <div class="add-text text-white">
                            <div class="at-style"></div>
                            <h2>Primary Skills</h2>
                            <ul>
                                <li>Html</li>
                                <li>CSS</li>
                                <li>JavaScript</li>
                                <li>Database</li>
                                <li>PHP</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>


<section class="recipes-section spad pt-0">
    <div class="container">
        <div class="section-title">
            <h2>My favorites</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="recipe">
                    <img src="img/recipes/msx.jpg" alt="">
                    <div class="recipe-info-warp">
                        <div class="recipe-info">
                            <h3>Honda msx 125</h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-md-6">
                <div class="recipe">
                    <img src="img/recipes/jaychou.jpg" alt="">
                    <div class="recipe-info-warp">
                        <div class="recipe-info">
                            <h3>Jay Chou</h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star is-fade"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="recipe">
                    <img src="img/recipes/dota2.jpg" alt="">
                    <div class="recipe-info-warp">
                        <div class="recipe-info">
                            <h3>Dota2</h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="recipe">
                    <img src="img/recipes/watch.jpg" alt="">
                    <div class="recipe-info-warp">
                        <div class="recipe-info">
                            <h3>Watch</h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star is-fade"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="recipe">
                    <img src="img/recipes/book.jpg" alt="">
                    <div class="recipe-info-warp">
                        <div class="recipe-info">
                            <h3>reading</h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star is-fade"></i>
                                <i class="fa fa-star is-fade"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="recipe">
                    <img src="img/recipes/cat.jpg" alt="">
                    <div class="recipe-info-warp">
                        <div class="recipe-info">
                            <h3>Cattttt</h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
