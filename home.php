<!-- header  -->

<?php include 'header.php';?>
<style>
     .mt-50{
         margin-top:50px;
     }

.product-card {
    display: block;
    position: relative;
    width: 100%;
    border: 1px solid #e5e5e5;
    border-radius: 5px;
    background-color: #fff;
}

.mb-30 {
    margin-bottom: 30px !important;
}

.product-badge {
    position: absolute;
    height: 24px;
    padding: 0 14px;
    border-radius: 3px;
    color: #fff !important;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: .025em;
    line-height: 24px;
    white-space: nowrap;
    top: 12px;
    left: 12px;
}

.bg-secondary {
    background-color: #dc3545  !important;
}

.bg-success {
    background-color: #21bd4a  !important;
}

.product-thumb>img {
    display: block;
    width: 100%;
    padding: 14px;
}

.product-category {
    width: 100%;
    margin-bottom: 6px;
    font-size: 12px;
}

.product-card-body {
    padding: 18px;
    padding-top: 15px;
    text-align: center;
}

.product-category>a {
    transition: color .2s;
    color: #999;
    text-decoration: none;
}

.product-title {
    margin-bottom: 18px;
    font-size: 16px;
    font-weight: normal;
}

.product-title>a {
    transition: color .3s;
    color: #232323;
    text-decoration: none;
}

.product-price {
    display: inline-block;
    margin-bottom: 10px;
    padding: 9px 15px;
    border-radius: 4px;
    background-color: #3ba9fc;
    color: #ffffff;
    font-size: 16px;
    font-weight: normal;
    text-align: center;
}

.product-button-group {
    display: table;
    width: 100%;
    border-top: 1px solid #e5e5e5;
    table-layout: fixed;
}

.product-button-group a:hover{
      color: #3ba9fc;
}

.product-button:first-child {
    border-bottom-left-radius: 5px;
}

.product-button {
    display: table-cell;
    position: relative;
    height: 62px;
    padding: 10px;
    transition: background-color .3s;
    border: 0;
    border-right: 1px solid #e5e5e5;
    background: none;
    color: #505050;
    overflow: hidden;
    vertical-align: middle;
    text-align: center;
    text-decoration: none;
}
.product-button:hover>span {
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
}

.product-button>span {
    display: block;
    position: absolute;
    bottom: 9px;
    left: 0;
    width: 100%;
    -webkit-transform: translateY(12px);
    -ms-transform: translateY(12px);
    transform: translateY(12px);
    font-size: 12px;
    white-space: nowrap;
    opacity: 0;
}

.product-button>i, .product-button>span {
    transition: all .3s; 
}

.product-button>i {
    display: inline-block;
    position: relative;
    margin-top: 5px;
    font-size: 18px;
}

.product-button:hover>i {
    -webkit-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
     transform: translateY(-10px);
}
.bootom-text.text-right.pt-3.pb-3 a{
    font-size: 14px;
    padding: 5px 10px;
    font-weight: 600;
}
.blog-box {
    border: 1px solid#e0e2e4;
    padding: 10px;
}
.btn-group-lg>.btn, .btn-lg {
    padding: 6px 12px;
    font-size: 15px;
    line-height: 1.3333333;
    border-radius: 6px;
}
.bootom-text.text-right a {
    padding: 8px 12px;
    display: inline-block;
    font-size: 14px;
    font-weight: 500;
}
</style>
<!-- header close  -->

    <!-- Slider Section Start -->

       <div class="deal-coupon-slider-wrapper">
                    <div id="deal-coupon-slider" class="owl-carousel owl-theme slider-list">
                        <!-- Slider Single Item Start -->
                        <!-- <div class="item">
                            <div class="hero-area bg--img" style="background-image: url('assets/img/slider/slider1.jpg');">
                            </div>
                        </div> -->
                        <!-- Slider Single Item End -->


                        <!-- Slider Single Item Start -->
                        <div class="item">
                            <div class="hero-area bg--img" style="background-image: url('assets/img/slider/slider2.jpg');">
                                <div class="row">
                                    <div class="col-xs-3 col-xs-offset-1">
                                        <div class="offer owl-fadeInRight">
                                            <img src="assets/img/slider/offer.png" alt="" class="img-responsive"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider Single Item End -->

                        <!-- Slider Single Item Start -->
                        <div class="item">
                            <div class="hero-area bg--img" style="background-image: url('assets/img/slider/slider3.jpg');">
                                <div class="row">
                                    <div class="col-xs-3 col-xs-offset-1">
                                        <div class="offer owl-fadeInDown">
                                            <img src="assets/img/slider/offer.png" alt="" class="img-responsive"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider Single Item End -->

                        <!-- Slider Single Item Start -->
                        <div class="item">
                            <div class="hero-area bg--img" style="background-image: url('assets/img/slider/slider4.jpg');">
                                <div class="row">
                                    <div class="col-xs-3 col-xs-offset-1">
                                        <div class="offer owl-fadeInUp">
                                            <img src="assets/img/slider/offer.png" alt="" class="img-responsive"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider Single Item End -->
                    </div>
                    
        </div>
      </div>

    <!-- Slider Section End -->


    <!-- trending stores start -->
     <div class="trending-stores-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-heading">Top 4 stores of the month!</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 no-padding-left-right">
                    <div class="single-store">
                        <img src="assets/img/stores/store1.jpg" alt="Store" class="img-responsive"/>
                        <div class="store-btn-wrapper">
                            <a href="single-store.html" class="btn btn-sm">Visit Store</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 no-padding-left-right">
                    <div class="single-store">
                        <img src="assets/img/stores/store4.jpg" alt="Store" class="img-responsive"/>
                        <div class="store-btn-wrapper">
                            <a href="single-store.html" class="btn btn-sm">Visit Store</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 no-padding-left-right">
                    <div class="single-store">
                        <img src="assets/img/stores/store5.jpg" alt="Store" class="img-responsive"/>
                        <div class="store-btn-wrapper">
                            <a href="single-store.html" class="btn btn-sm">Visit Store</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 no-padding-left-right">
                    <div class="single-store">
                        <img src="assets/img/stores/store6.jpg" alt="Store" class="img-responsive"/>
                        <div class="store-btn-wrapper">
                            <a href="single-store.html" class="btn btn-sm">Visit Store</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
     </div>
    <!-- trending stores end -->


    <!-- New Deal Section Start -->

    <div class="new-deal-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xs-12">
                    <h3 class="section-heading">Top Deals</h3>
                </div>
                <div class="col-md-2 col-xs-12">
                    <div class="view-all">
                        <a href="category.html">View All</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-pd">
                    <div class="product-card mb-30">
                        <div class="product-badge bg-secondary border-default text-body">-30%</div>
                        <div class="pro-img text-center">
                            <a class="" href="#" data-abc="true">
                                <img src="assets/img/stores/product-1.png" alt="" width="150px" />
                            </a>
                       </div>
                        <div class="product-card-body">
                             <p>Back in stock date is unavailable at this time</p>
                             <h5>Smart Watch</h5>
                             <button class="btn btn-default btn-lg btn-brand">Revel Coupon</button>
                        </div>
                        <div class="bootom-text text-right ">
                             <a href="#">See all watch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-pd">
                    <div class="product-card mb-30">
                        <div class="product-badge bg-secondary border-default text-body">-30%</div>
                        <div class="pro-img text-center">
                            <a class="" href="#" data-abc="true">
                                <img src="assets/img/stores/product-1.png" alt="" width="150px" />
                            </a>
                       </div>
                        <div class="product-card-body">
                             <p>Back in stock date is unavailable at this time</p>
                             <h5>Smart Watch</h5>
                             <button class="btn btn-default btn-lg btn-brand">Revel Coupon</button>
                        </div>
                        <div class="bootom-text text-right ">
                             <a href="#">See all watch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-pd">
                    <div class="product-card mb-30">
                        <div class="product-badge bg-secondary border-default text-body">-30%</div>
                        <div class="pro-img text-center">
                            <a class="" href="#" data-abc="true">
                                <img src="assets/img/stores/product-1.png" alt="" width="150px" />
                            </a>
                       </div>
                        <div class="product-card-body">
                             <p>Back in stock date is unavailable at this time</p>
                             <h5>Smart Watch</h5>
                             <button class="btn btn-default btn-lg btn-brand">Revel Coupon</button>
                        </div>
                        <div class="bootom-text text-right ">
                             <a href="#">See all watch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-pd">
                    <div class="product-card mb-30">
                        <div class="product-badge bg-secondary border-default text-body">-30%</div>
                        <div class="pro-img text-center">
                            <a class="" href="#" data-abc="true">
                                <img src="assets/img/stores/product-1.png" alt="" width="150px" />
                            </a>
                       </div>
                        <div class="product-card-body">
                             <p>Back in stock date is unavailable at this time</p>
                             <h5>Smart Watch</h5>
                             <button class="btn btn-default btn-lg btn-brand">Revel Coupon</button>
                        </div>
                        <div class="bootom-text text-right ">
                             <a href="#">See all watch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-pd">
                    <div class="product-card mb-30">
                        <div class="product-badge bg-secondary border-default text-body">-30%</div>
                        <div class="pro-img text-center">
                            <a class="" href="#" data-abc="true">
                                <img src="assets/img/stores/product-1.png" alt="" width="150px" />
                            </a>
                       </div>
                        <div class="product-card-body">
                             <p>Back in stock date is unavailable at this time</p>
                             <h5>Smart Watch</h5>
                             <button class="btn btn-default btn-lg btn-brand">Revel Coupon</button>
                        </div>
                        <div class="bootom-text text-right ">
                             <a href="#">See all watch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-pd">
                    <div class="product-card mb-30">
                        <div class="product-badge bg-secondary border-default text-body">-30%</div>
                        <div class="pro-img text-center">
                            <a class="" href="#" data-abc="true">
                                <img src="assets/img/stores/product-1.png" alt="" width="150px" />
                            </a>
                       </div>
                        <div class="product-card-body">
                             <p>Back in stock date is unavailable at this time</p>
                             <h5>Smart Watch</h5>
                             <button class="btn btn-default btn-lg btn-brand">Revel Coupon</button>
                        </div>
                        <div class="bootom-text text-right ">
                             <a href="#">See all watch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-pd">
                    <div class="product-card mb-30">
                        <div class="product-badge bg-secondary border-default text-body">-30%</div>
                        <div class="pro-img text-center">
                            <a class="" href="#" data-abc="true">
                                <img src="assets/img/stores/product-1.png" alt="" width="150px" />
                            </a>
                       </div>
                        <div class="product-card-body">
                             <p>Back in stock date is unavailable at this time</p>
                             <h5>Smart Watch</h5>
                             <button class="btn btn-default btn-lg btn-brand">Revel Coupon</button>
                        </div>
                        <div class="bootom-text text-right ">
                             <a href="#">See all watch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-pd">
                    <div class="product-card mb-30">
                        <div class="product-badge bg-secondary border-default text-body">-30%</div>
                        <div class="pro-img text-center">
                            <a class="" href="#" data-abc="true">
                                <img src="assets/img/stores/product-1.png" alt="" width="150px" />
                            </a>
                       </div>
                        <div class="product-card-body">
                             <p>Back in stock date is unavailable at this time</p>
                             <h5>Smart Watch</h5>
                             <button class="btn btn-default btn-lg btn-brand">Revel Coupon</button>
                        </div>
                        <div class="bootom-text text-right ">
                             <a href="#">See all watch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-pd">
                    <div class="product-card mb-30">
                        <div class="product-badge bg-secondary border-default text-body">-30%</div>
                        <div class="pro-img text-center">
                            <a class="" href="#" data-abc="true">
                                <img src="assets/img/stores/product-1.png" alt="" width="150px" />
                            </a>
                       </div>
                        <div class="product-card-body">
                             <p>Back in stock date is unavailable at this time</p>
                             <h5>Smart Watch</h5>
                             <button class="btn btn-default btn-lg btn-brand">Revel Coupon</button>
                        </div>
                        <div class="bootom-text text-right ">
                             <a href="#">See all watch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-pd">
                    <div class="product-card mb-30">
                        <div class="product-badge bg-secondary border-default text-body">-30%</div>
                        <div class="pro-img text-center">
                            <a class="" href="#" data-abc="true">
                                <img src="assets/img/stores/product-1.png" alt="" width="150px" />
                            </a>
                       </div>
                        <div class="product-card-body">
                             <p>Back in stock date is unavailable at this time</p>
                             <h5>Smart Watch</h5>
                             <button class="btn btn-default btn-lg btn-brand">Revel Coupon</button>
                        </div>
                        <div class="bootom-text text-right ">
                             <a href="#">See all watch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-pd">
                    <div class="product-card mb-30">
                        <div class="product-badge bg-secondary border-default text-body">-30%</div>
                        <div class="pro-img text-center">
                            <a class="" href="#" data-abc="true">
                                <img src="assets/img/stores/product-1.png" alt="" width="150px" />
                            </a>
                       </div>
                        <div class="product-card-body">
                             <p>Back in stock date is unavailable at this time</p>
                             <h5>Smart Watch</h5>
                             <button class="btn btn-default btn-lg btn-brand">Revel Coupon</button>
                        </div>
                        <div class="bootom-text text-right ">
                             <a href="#">See all watch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-pd">
                    <div class="product-card mb-30">
                        <div class="product-badge bg-secondary border-default text-body">-30%</div>
                        <div class="pro-img text-center">
                            <a class="" href="#" data-abc="true">
                                <img src="assets/img/stores/product-1.png" alt="" width="150px" />
                            </a>
                       </div>
                        <div class="product-card-body">
                             <p>Back in stock date is unavailable at this time</p>
                             <h5>Smart Watch</h5>
                             <button class="btn btn-default btn-lg btn-brand">Revel Coupon</button>
                        </div>
                        <div class="bootom-text text-right ">
                             <a href="#">See all watch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Deal Section End -->


    <!-- section for banner -->

    <section>
        <div class="container">
            <div class="banner-wrapper mb-30">
                <a href="#">
                    <img src="assets/img/slider/banner3.jpg" alt="Banner" class="" width="100%" />
                </a>
            </div>
        </div>
    </section>

    <!-- section for banner close -->

    <!-- section for deal of day -->
      
    <section>
        <div class="container">
            <div class="row">
                    <div class="col-md-10 col-xs-12">
                         <h3 class="section-heading">Bests  Deals on this Day</h3>
                    </div>
                    <div class="col-md-12">
                    <div id="new-deal-carousel" class="owl-carousel owl-theme new-deal-list">
                        <!-- Deal Single Item Start -->
                        <div class="item deal-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="deal-thumb">
                                        <img src="assets/img/deal/deal1.jpg" alt="" class="img-responsive"/>
                                        <div class="deal-badge">
                                            87%
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" >
                                                <span class="popOver" data-toggle="tooltip" data-placement="top" title="70%"> </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                               <div class="col-md-8">
                                    <div class="deal-content">
                                        <h6><a href="single-coupon-code.html">Special Flash Sale </a></h6>
                                        <p>Get 87% discount, on every single categories, so hurry up.....</p>
                                        <div class="deal-content-bottom">
                                            <p><i class="fa fa-clock-o"></i> 0 days, 0h Remaining</p>
                                            <a type="button" data-toggle="modal" data-target="#coupon-code" class="btn btn-sm">Get It</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <!-- Deal Single Item Start -->
                       <div class="item deal-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="deal-thumb">
                                        <img src="assets/img/deal/deal1.jpg" alt="" class="img-responsive"/>
                                        <div class="deal-badge">
                                            87%
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" >
                                                <span class="popOver" data-toggle="tooltip" data-placement="top" title="70%"> </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                               <div class="col-md-8">
                                    <div class="deal-content">
                                        <h6><a href="single-coupon-code.html">Special Flash Sale </a></h6>
                                        <p>Get 87% discount, on every single categories, so hurry up.....</p>
                                        <div class="deal-content-bottom">
                                            <p><i class="fa fa-clock-o"></i> 0 days, 0h Remaining</p>
                                            <a type="button" data-toggle="modal" data-target="#coupon-code" class="btn btn-sm">Get It</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Deal Single Item Start -->
                        <div class="item deal-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="deal-thumb">
                                        <img src="assets/img/deal/deal1.jpg" alt="" class="img-responsive"/>
                                        <div class="deal-badge">
                                            87%
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" >
                                                <span class="popOver" data-toggle="tooltip" data-placement="top" title="70%"> </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                               <div class="col-md-8">
                                    <div class="deal-content">
                                        <h6><a href="single-coupon-code.html">Special Flash Sale </a></h6>
                                        <p>Get 87% discount, on every single categories, so hurry up.....</p>
                                        <div class="deal-content-bottom">
                                            <p><i class="fa fa-clock-o"></i> 0 days, 0h Remaining</p>
                                            <a type="button" data-toggle="modal" data-target="#coupon-code" class="btn btn-sm">Get It</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Deal Single Item Start -->
                        <div class="item deal-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="deal-thumb">
                                        <img src="assets/img/deal/deal1.jpg" alt="" class="img-responsive"/>
                                        <div class="deal-badge">
                                            87%
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" >
                                                <span class="popOver" data-toggle="tooltip" data-placement="top" title="70%"> </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                               <div class="col-md-8">
                                    <div class="deal-content">
                                        <h6><a href="single-coupon-code.html">Special Flash Sale </a></h6>
                                        <p>Get 87% discount, on every single categories, so hurry up.....</p>
                                        <div class="deal-content-bottom">
                                            <p><i class="fa fa-clock-o"></i> 0 days, 0h Remaining</p>
                                            <a type="button" data-toggle="modal" data-target="#coupon-code" class="btn btn-sm">Get It</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Deal Single Item Start -->
                        <div class="item deal-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="deal-thumb">
                                        <img src="assets/img/deal/deal1.jpg" alt="" class="img-responsive"/>
                                        <div class="deal-badge">
                                            87%
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" >
                                                <span class="popOver" data-toggle="tooltip" data-placement="top" title="70%"> </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                               <div class="col-md-8">
                                    <div class="deal-content">
                                        <h6><a href="single-coupon-code.html">Special Flash Sale </a></h6>
                                        <p>Get 87% discount, on every single categories, so hurry up.....</p>
                                        <div class="deal-content-bottom">
                                            <p><i class="fa fa-clock-o"></i> 0 days, 0h Remaining</p>
                                            <a type="button" data-toggle="modal" data-target="#coupon-code" class="btn btn-sm">Get It</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                 </div>
            </div>
        </div> 
    </section>

    <!-- section for deal of day close -->

    
    <!-- how to get cashback -->

    <section class="cash-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="">How to get cashback?</h2>
                </div>
            </div>
            <div class="row">
                  <div class="col-md-4">
                        <div class="cashback-1 text-center">
                             <h1>1</h1>
                             <h4>Register on Our site</h4>
                             <p>This is Only 1 Minute</p> 
                        </div>
                  </div>
                  <div class="col-md-4">
                        <div class="cashback-1 text-center">
                             <h1>2</h1>
                             <h4>Choose Offer and buy it</h4>
                             <p>You Will get cashback points once <br> We approve your purchase</p> 
                        </div>
                  </div>
                  <div class="col-md-4">
                        <div class="cashback-1 text-center">
                             <h1>3</h1>
                             <h4>Register on Our site</h4>
                             <p>Go to your profile and click on <br> request button</p> 
                        </div>
                  </div>
            </div>
        </div>
    </section>

    <!-- how to get cashback close -->

    

    <!-- blog section -->
        <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="section-heading"> Latest Blog</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-item-wrapper">
                        <div class="single-blog-item">
                            <div class="row">
                                <div class="col-md-3">
                                     <div class="blog-box">
                                            <div class="blog-thumb">
                                                <a href="single-blog-layout-1.html">
                                                    <img src="assets/img/blog/blog1.jpg" alt="Blog" class="img-responsive img-rounded"/>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <h4><a href="single-blog-layout-1.html">Proper Way To Connect Multiple Device</a></h4>
                                                <div class="blog-tags">
                                                    <ul>
                                                        <li class="blog-author"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Adam Smith</a></li>
                                                        <li class="blog-date"><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Jan. 15 2017</a></li>
                                                    </ul>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, ridens eligendi an nec, his nostro dolorum splendide te Docendi intellegebat eu pro.</p>
                                                <a class="btn btn-brand readmore"  href="single-blog-layout-1.html">Read More</a>
                                            </div>
                                     </div>
                                </div>
                                <div class="col-md-3">
                                     <div class="blog-box">
                                            <div class="blog-thumb">
                                                <a href="single-blog-layout-1.html">
                                                    <img src="assets/img/blog/blog1.jpg" alt="Blog" class="img-responsive img-rounded"/>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <h4><a href="single-blog-layout-1.html">Proper Way To Connect Multiple Device</a></h4>
                                                <div class="blog-tags">
                                                    <ul>
                                                        <li class="blog-author"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Adam Smith</a></li>
                                                        <li class="blog-date"><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Jan. 15 2017</a></li>
                                                    </ul>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, ridens eligendi an nec, his nostro dolorum splendide te Docendi intellegebat eu pro.</p>
                                                <a class="btn btn-brand readmore"  href="single-blog-layout-1.html">Read More</a>
                                            </div>
                                     </div>
                                </div>
                                <div class="col-md-3">
                                     <div class="blog-box">
                                            <div class="blog-thumb">
                                                <a href="single-blog-layout-1.html">
                                                    <img src="assets/img/blog/blog1.jpg" alt="Blog" class="img-responsive img-rounded"/>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <h4><a href="single-blog-layout-1.html">Proper Way To Connect Multiple Device</a></h4>
                                                <div class="blog-tags">
                                                    <ul>
                                                        <li class="blog-author"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Adam Smith</a></li>
                                                        <li class="blog-date"><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Jan. 15 2017</a></li>
                                                    </ul>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, ridens eligendi an nec, his nostro dolorum splendide te Docendi intellegebat eu pro.</p>
                                                <a class="btn btn-brand readmore"  href="single-blog-layout-1.html">Read More</a>
                                            </div>
                                     </div>
                                </div>
                                <div class="col-md-3">
                                     <div class="blog-box">
                                            <div class="blog-thumb">
                                                <a href="single-blog-layout-1.html">
                                                    <img src="assets/img/blog/blog1.jpg" alt="Blog" class="img-responsive img-rounded"/>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <h4><a href="single-blog-layout-1.html">Proper Way To Connect Multiple Device</a></h4>
                                                <div class="blog-tags">
                                                    <ul>
                                                        <li class="blog-author"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Adam Smith</a></li>
                                                        <li class="blog-date"><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Jan. 15 2017</a></li>
                                                    </ul>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, ridens eligendi an nec, his nostro dolorum splendide te Docendi intellegebat eu pro.</p>
                                                <a class="btn btn-brand readmore"  href="single-blog-layout-1.html">Read More</a>
                                            </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         </section>
    <!-- blog section close -->

   
     <!-- section how to ue coupon -->
     <section>
           <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                         <h2 class="section-heading"> How to use coupon?</h2>
                     </div>
                </div>
                <div class="row">
                     <div class="col-md-4">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                     <div class="col-md-4">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                     <div class="col-md-4">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                </div>
                <hr>
                <div class="row">
                    <h5>Why use CouponsMyra?</h5>
                         <div class="col-md-12">
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                         </div> 
                </div>
                <div class="row">
                    <h5>How to gets the maximum benefit out of CouponsMyar</h5>
                         <div class="col-md-12">
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                         </div> 
                </div>
           </div>
      </section>
    <!-- section how to ue coupon close-->

   
    <!--section notificatiobn  -->

    <section class="blog-bg">
        <div class="container">
             <div class="row">
                     <div class="col-md-6">
                            <div class="widget widget-newsletter">
                                <div class="widget-newsletter-area">
                                    <h3>Sign-up for the best deals on the internet!</h3>
                                    <p>Realtime deals, promo codes and offer updates from all online stores!</p>
                                    <form id="cbx-subscribe-form" class="navbar-form" role="search">
                                        <div class="input-group st-u">
                                            <input type="email" id="subscribe" required class="form-control st-s" placeholder="Your Email" name="email">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default st-t" type="submit"><i class="fa fa-send-o"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                     </div>
                     <div class="col-md-6">
                         <img src="assets/img/blog/emailgirl.png" alt="emailgirl" />
                     </div>
             </div>
        </div>
   </section>

    <!--section notificatiobn close  -->

<!-- footer   -->
<?php include 'footer.php';?>

 <!-- footer close  -->