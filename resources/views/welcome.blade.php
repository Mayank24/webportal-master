@extends('frontLayout.app')
@section('title') WEB PORTAL @stop

@section('style')

@stop
@section('content')

        <!-- Page Wrap ===========================================-->
<div id="wrap"> 
  
  <!--======= TOP BAR =========-->

  
  <!--======= HEADER =========-->
  <header>

      <!--======= LOGO =========-->
     
      <!--======= SEARCH =========-->
  <div class="top-bar">
	   <div class="logo"> <a href="#."><img src="images/logo.png" alt="" ></a> </div>
    <div class="container">
      <ul class="left-bar-side">
        <li> <a href="#."><i class="fa fa-lock"></i> Login</a> </li>
        <li> <a href="#."><i class="fa fa-user"></i> My Account</a> </li>
        <li> <a href="#."><i class="fa fa-heart"></i> My Favourites </a></li>
      </ul>

    </div>
  </div>

    
    <!--======= NAV =========-->
    <nav>
      <div class="container"> 
        
        <!--======= MENU START =========-->
        <ul class="ownmenu">
          <li class="active"><a href="02-index.html">Home</a>
          </li>

          <li><a href="05-products.html">Malls & Shopping Centers</a>
			  <ul class="dropdown">
              <li><a href="06-by-categories.html">City Name</a></li>
              <li><a href="06-by-categories.html">City Name</a></li>
            </ul>
          </li>
          <li><a href="07-By-Stores.html">Shops & Stores</a>
			<!--======= DROP DOWN =========-->
            <ul class="dropdown">
              <li><a href="06-by-categories.html">Category Name</a></li>
              <li><a href="06-by-categories.html">Automotive</a></li>
              <li><a href="06-by-categories.html">Baby Items</a></li>
              <li><a href="06-by-categories.html">beverages</a></li>
              <li><a href="04-coupons.html">coupon codes</a></li>
            </ul>			
			</li>
			
          <li><a href="04-coupons.html">Coupons </a> </li>
          <li><a href="10-Blog.html">Events & Festivals</a> 
            
          </li>
          <li><a href="16-Contact.html">Contact</a> </li>

        </ul>
        
        <!--======= Sign up Now =========-->
        <div class="sub-nav-co"> <a href="08-Signup.html">Sign up now</a> </div>
      </div>
    </nav>
  </header>
  
  <!--======= BANNER =========-->
  <div id="banner">
    <div class="flexslider">
      <ul class="slides">
        <li> <img src="images/slide-3.jpg" alt="" > 
          
          <!--======= BANNER INNER =========-->
          
          <div class="banner-up">
            <div class="container">
              <div class="slide-products slide-products-txt">
                <div class="col-xs-12 no-padding"> 
                  
                  <!--======= BANNER TEXT =========-->
                  <div class="text-slide2">
                    <h1>Women Accessories</h1>
                    <h3>get coupon for 45% off</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>  <video  loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <source src="images/Sliders/Three-Swans.webm" type="video/webm">
        <source src="images/Sliders/Three-Swans.webm" type="video/mp4">
        
</video>
          <div class="banner-up">
            <div class="container">
              <div class="slide-products slide-products-txt">
                <div class="col-xs-12 no-padding"> 
                  
                  <!--======= BANNER TEXT =========-->
                  <div class="text-slide2">
                    <h1>Women Accessories</h1>
                    <h3>get coupon for 45% off</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  

  <!--======= COUPON TABS =========-->
  <section class="coupen-tab">
    <div role="tabpanel"> 

      <!--======= COUPON NAV TAB =========-->
      <div class="tab-role">

       <div class="copo-tab">
       <div class="container">
	       <ul class="nav nav-tabs">
            <li role="presentation" class="col-xs-2 active"><a href="#most"  role="tab" data-toggle="tab">Popular Coupons</a></li>
            <li role="presentation" class="col-xs-4"><a href="#mob-elec"  role="tab" data-toggle="tab">Popular Malls & Shopping Centers</a></li>
            <li role="presentation" class="col-xs-2"><a href="#clot-sho"  role="tab" data-toggle="tab">Hot Offers</a></li>
            <li role="presentation" class="col-xs-4"><a href="#flight"  role="tab" data-toggle="tab">Upcoming Events & advertizing</a></li>
          </ul>
          </div>
          </div>
       
        <div class="container">
          <!--======= TAB PANES =========-->
          <div class="tab-content"> 
            
            <!--======= MOST PAPULAR =========-->
            <div role="tabpanel" class="tab-pane active" id="most">
              <div class="row"> 
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-1.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="17-coupon page.html" class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-2.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-2.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-3.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-3.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-4.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-4.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-5.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-5.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-6.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-6.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-1.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-7.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-2.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            
            <!--======= MOBILE AND ELETRONIC =========-->
            <div role="tabpanel" class="tab-pane" id="mob-elec">
              <div class="row"> 
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-1.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-2.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-2.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-1.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-3.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-7.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-4.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            
            <!--======= SLOTH AND SHOES =========-->
            <div role="tabpanel" class="tab-pane" id="clot-sho">
              <div class="row"> 
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-3.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-5.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-4.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-5.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-6.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            
            <!--======= FLIGHTS =========-->
            <div role="tabpanel" class="tab-pane" id="flight">
              <div class="row"> 
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-1.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-2.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-3.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-4.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            
            <!--======= BABY =========-->
            <div role="tabpanel" class="tab-pane" id="baby">
              <div class="row"> 
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-1.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-2.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-3.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-4.jpg" alt="" > 
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-1.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-7.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            
            <!--======= OTHER =========-->
            <div role="tabpanel" class="tab-pane" id="other">
              <div class="row"> 
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-1.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-2.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-3.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-4.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-5.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-6.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                
                <!--======= ROW =========-->
                <div class="col-md-6">
                  <ul class="row">
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-1.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    <!--======= COUPON 1 =========-->
                    <li class="col-sm-6">
                      <div class="offer-in"> <img class="img-responsive" src="images/co-img-7.jpg" alt="" > 
                        
                        <!--======= SMALL IMAGE =========--> 
                        <span class="small-spon"><img src="images/d-small-img-1.jpg" alt=""></span>
                        <h6>Flat 20% + Extra 30% Off 
                          On AllProducts </h6>
                        <p class="text-uppercase">Expires: 1/31/2015 </p>
                        <div class="btm-offer">
                          <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                        </div>
                        <!--======= SMALL IMAGE HOVER =========-->
                        <div class="off-over">
                          <h6>Flat 20% + Extra 30% Off 
                            On AllProducts </h6>
                          <p class="text-uppercase">Expires: 1/31/2015 </p>
                          <a href="#." class="btn">get coupon code</a>
                          <div class="btm-offer">
                            <p class="text-uppercase"> + up to <span>5% Cash Back </span>(was 3%) </p>
                            
                            <!--======= SHARE INFO =========-->
                            <ul class="btm-info">
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-bookmark"></i> Save</a></li>
                              <li class="col-xs-4"> <a href="#."><i class="fa fa-share"></i> Share </a></li>
                              <li class="col-xs-4"><a href="#."> <i class="fa fa-comments"></i> Discuss</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <!--======= CLIENTS REVIEW =========-->
  
	      <section id="team"> 
            <div class="container"> 
      <!--======= TITTLE =========-->
      <div class="tittle">
        <h3>Our Sponsors DEALS</h3>
      </div>
			  </div>
        <!--======= Advertizing1 =========-->
        <div class="row">
          <div class="col-md-6">
            <ul class="row">
              <li class="col-sm-6">
                <div class="team"> 
                  
                  <!--======= HOVER DETAIL =========-->
                  <div class="img"> <img src="images/team-1.jpg" alt="" >
                    <h5>Coca Cola</h5>
                  </div>
                      <div class="social_icons">
                        <ul>
                          <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a> </li>
                          <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a> </li>
                          <li class="dribbble"> <a href="#."><i class="fa fa-dribbble"></i> </a> </li>
                          <li class="googleplus"> <a href="#."><i class="fa fa-google"></i> </a> </li>
                          <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a> </li>
                          <li class="pinterest"> <a href="#."><i class="fa fa-pinterest"></i> </a> </li>
                        </ul>
                      </div>                  
                  <!--======= HOVER DECTION =========-->

                </div>
              </li>
				
              <!--======= Advertizing1 =========-->
             <li class="col-sm-6">
                <div class="team"> 
                  
                  <!--======= HOVER DETAIL =========-->
                  <div class="img"> <img src="images/team-1.jpg" alt="" >
                    <h5>Coca Cola</h5>
                  </div>
                      <div class="social_icons">
                        <ul>
                          <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a> </li>
                          <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a> </li>
                          <li class="dribbble"> <a href="#."><i class="fa fa-dribbble"></i> </a> </li>
                          <li class="googleplus"> <a href="#."><i class="fa fa-google"></i> </a> </li>
                          <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a> </li>
                          <li class="pinterest"> <a href="#."><i class="fa fa-pinterest"></i> </a> </li>
                        </ul>
                      </div>                  
                  <!--======= HOVER DECTION =========-->

                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="row">
              <li class="col-sm-6">
                <div class="team"> 
                  
                  <!--======= HOVER DETAIL =========-->
                  <div class="img"> <img src="images/team-1.jpg" alt="" >
                    <h5>Coca Cola</h5>
                  </div>
                      <div class="social_icons">
                        <ul>
                          <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a> </li>
                          <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a> </li>
                          <li class="dribbble"> <a href="#."><i class="fa fa-dribbble"></i> </a> </li>
                          <li class="googleplus"> <a href="#."><i class="fa fa-google"></i> </a> </li>
                          <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a> </li>
                          <li class="pinterest"> <a href="#."><i class="fa fa-pinterest"></i> </a> </li>
                        </ul>
                      </div>                  
                  <!--======= HOVER DECTION =========-->

                </div>
              </li>
				
              <!--======= Advertizing1 =========-->
             <li class="col-sm-6">
                <div class="team"> 
                  
                  <!--======= HOVER DETAIL =========-->
                  <div class="img"> <img src="images/team-1.jpg" alt="" >
                    <h5>Coca Cola</h5>
                  </div>
                      <div class="social_icons">
                        <ul>
                          <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a> </li>
                          <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a> </li>
                          <li class="dribbble"> <a href="#."><i class="fa fa-dribbble"></i> </a> </li>
                          <li class="googleplus"> <a href="#."><i class="fa fa-google"></i> </a> </li>
                          <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a> </li>
                          <li class="pinterest"> <a href="#."><i class="fa fa-pinterest"></i> </a> </li>
                        </ul>
                      </div>                  
                  <!--======= HOVER DECTION =========-->

                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
	

  
  <!--======= FOOTER =========-->
  <footer>
    <div class="container">
      <ul class="row">
        <li class="col-sm-4">
          <h6>about MOS</h6>
          <p>Hello we are MOS. We are here to provide you the best offers through our coupons. Hello we are 
            MOS. We are here to provide you coupons.</p>
          <p></p>
          <p>Contact@mos.com.sa</p>
          <p>http://mos.com.sa</p>
        </li>
        <li class="col-sm-4">
          <h6>quick link</h6>
          <div class="row links">
            <ul class="col-xs-4">
              <li><a href="#.">Home</a> </li>
              <li><a href="#.">stores</a> </li>
              <li><a href="#.">contact </a> </li>
              <li><a href="#.">careers</a> </li>
              <li><a href="#.">blog</a> </li>
            </ul>
            <ul class="col-xs-8">
              <li><a href="#.">Sitemap</a> </li>
              <li><a href="#.">Press</a> </li>
              <li><a href="#.">Privacy Policy & Opt Out</a> </li>
              <li><a href="#.">List your business on CD</a> </li>
              <li><a href="#.">Terms of Service</a> </li>
            </ul>
          </div>
        </li>
        <li class="col-sm-4">
          <div class="subcribe">
            <h6>Subscribe To Mail!</h6>
            <p>Get our Daily email newsletter with 
              Special Services, Updates, Offers and more!</p>
            <input type="search" class="form-control" placeholder="Email Address">
            <button type="submit">SIGNUP!</button>
          </div>
        </li>
      </ul>
    </div>
    <div class="rights">
      <p>copyrights © 2018 MOS. All rights reserved </p>
      <ul class="social_icons">
        <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a></li>
        <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a></li>
        <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a></li>
        <li class="tumblr"> <a href="#."><i class="fa fa-tumblr"></i> </a></li>
      </ul>
    </div>
  </footer>
</div>
@endsection
@section('scripts')
@endsection