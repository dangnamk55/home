<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer-logo">
                    <img src="img/homepage.png" alt="">
                </div>
                <div class="footer-social">
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="www.facebook.com/dnam189"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-lg-right">
                <ul class="footer-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href={{route('infomation')}}>Infomation</a></li>
                    <li><a href={{route('post')}}>Post</a></li>
                    <li><a href={{route('contact')}}>Contact</a></li>
                </ul>
                <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer section end -->



<!--====== Javascripts & Jquery ======-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
@yield('script')

</body>
</html>