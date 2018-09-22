@extends('head')

@section('tittle','information')

@section('main')

<section class="page-top-section set-bg" data-setbg="img/info-bg.jpg">
    <div class="container">
        <h2>Information</h2>
    </div>
</section>

<section class="contact-section spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-5">

                <div class="contact-info">
                    <ul class="ct-list">
                        <li>
                            <h6>Name:</h6>
                            <p>Nguyễn Đăng Nam</p>
                        </li>
                        <li>
                            <h6>Address:</h6>
                            <p>Cổ Loa - Đông Anh - Hà Nội</p>
                        </li>
                        <li>
                            <h6>Phone:</h6>
                            <p>+84 984 786 731</p>
                        </li>
                        <li>
                            <h6>Email:</h6>
                            <p>dangnamk55@gmail.com</p>
                        </li>
                        <li>
                            <h6>Zalo:</h6>
                            <p>0984786731</p>
                        </li>
                    </ul>
                    <div class="contact-social">
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="www.facebook.com/dnam189"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="https://steamcommunity.com/id/dangnamm/"><i class="fa fa-steam"></i></a>
                        <a href="https://www.instagram.com/baihoai/"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7"><!-- map -->
                <iframe width="600" height="455" frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?q=x%C3%B3m%20m%C3%ADt&key=AIzaSyC8DZMsbtRCwSV0YpEpaWIFFc56x1n6FHI" allowfullscreen></iframe>
            </div>
        </div>

    </div>
</section>
@endsection