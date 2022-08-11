<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="../Figma-Task-1/style.css"> --}}
    <link rel="stylesheet" href=" {{asset('css/style.css')}}">
    <link rel="stylesheet" href="../Figma-Task-1/index.js">
    <!-- <link rel="stylesheet" href="../Figma-Task-1/style2.css"> -->
<!-- <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> -->
<script src="jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>




<link href="http://fonts.cdnfonts.com/css/bigilla" rel="stylesheet">
<link href="http://fonts.cdnfonts.com/css/inter" rel="stylesheet">
<title>Document</title>
<style>
    .card {
    margin: 0 0.5em;
    background-color:    #C8ACA133;
    box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
    border: none;
    width: auto !important;
    height: auto !important;
  }

  .carousel-control-prev,
  .carousel-control-next {
    width: 7vh;
    height: 6vh;
    border-radius: 50%;
    top: 50%;
    padding:22px;
    transform: translateY(-50%);
  }
  .arrow-sider{
  margin-left:130px;
  margin-top: -50px;
}
  @media (min-width: 768px) {
    .carousel-item {
      margin-right: 0;
      flex: 0 0 25%;
      display: block;

    }
    .carousel-inner {
      display: flex;
    }
  }
  .card .img-wrapper {
      max-width: 100%;
      height: 14em;
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top: 50px;;

  }
  .card img {
       padding:20px;
      width:auto !important;
      height: auto !important;

  }
  @media (max-width: 767px) {
    .card .img-wrapper {
      height: 17em;
    }
  }
.card-body{
  display: flex;
  margin-left: 25px;
  background: #F4EEEC;
  box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.1);
  background-size: cover;
  border-radius: 8px;
  width: 80%;
 margin: 26px;
}

.direction-arrow{
  width: 28.58px;
  height: 17.81px;
  display: flex;
  float: right;


}
.slide-left{
 display: flex;

 margin-left:-114px;
 margin-bottom:20px;
}
.slide-right{
  display: flex;
 margin-right:-114px;
 margin-bottom:20px;

}

</style>
</head>
<body>
<div class="container-fluid">
    <section class="section-bg">

        <header class="top-menu">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                  <img class="bella navbar-brand" src="{{asset('images/Bella.png')}}">
                  <button style="margin-right:20px" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                    <form class="d-flex ml-auto">
                        <ul class=" list navbar-nav  ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" class="home">Home</a>
                              </li>
                            <li class="nav-item">
                                <a class="nav-link" class="about-us">About Us</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" class="reason-why">How it works</a>
                              </li>

                              <li class="nav-item">
                                <a class="nav-link" class="contact-us">Contact Us</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" class="help">Help</a>
                              </li>
                          </ul>
                    </form>
                  </div>
                </div>
              </nav>
        </header>
        <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="section-left">
                            <div class="icon">
                                <div class="question-mark" > <img src="{{ asset('images/Question.png') }}images/Question.png" alt=""></div>
                                <div class="heart-mark">  <img src="{{ asset('images/heart.png') }}" alt=""></div>
                                <div class="search-mark"><img src="{{ asset('images/search.png') }}" alt=""></div>




                            </div>
                            <div>
                                <div ><img class="main-img" src="{{ asset('images/Group 349.png') }}" alt=""></div>

                            </div>
                            <img class="back-img-1" src="{{ asset('images/Rectangle 2.png') }}"   alt="">

                        </div>

                    </div>

                    <div class="  col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="main-title">
                            <p>
                                Key Pieces of New Season
                            </p>
                        </div>
                        <!-- <img class="back-img-2" src="./images/backimg2.png" alt=""> -->
                        <div class="new-arrival">
                            <p>New Arrival</p>
                        </div>
                        <img class="line" src="{{ asset('images/Line.png') }}" alt="">



                        <div class="image3">




                            {{-- <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="img1" src="{{ ('images/unsplash_8WC3ibi7MTg.png') }}" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img2" src="{{ ('images/unsplash_B0G8xzwTVWc.png') }}" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/arrow.png') }}" class="arrow-sider"/>
                                    </div>

                                    <div class="carousel-item">
                                        <img class="img1" src="{{ ('images/unsplash_8WC3ibi7MTg.png') }}" alt="">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="slide-left" aria-hidden="true"><img src="{{ asset('images/left-arrow.png') }}" alt="previous button"/></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="slide-right" aria-hidden="true"><img src="{{ asset('images/right-arrow.png') }}" alt="previous button"/></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div> --}}







                                    <div class=" buttons col-md-2 col-xs-2">
                                        <div><img src="{{ ('images/small-slider-right.png') }}" alt=""></div>
                                        <div><img src="{{ ('images/small-slider-left.png') }}" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                              </div>
                              <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button> -->
                            </div>



                        </div>

                    </div>
                </div>
        </div>
    </section>
</div>

<section class="qualities-box">
  <div class="container-fluid">
      <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">

        </div>

        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12" >
            <div class="info-1">
              <div  class="images" ><img src="{{ asset('images/fireEmoji.png') }}" alt="" class="info1">
               <div> <h1 class="heading">Safe Shopping</h1></div>
                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et</p></div>
              </div>





              <div ><img src="{{ asset('images/planEmojipng.png') }}" alt="" class="info1">
                <div><h1 class="heading">Fast Delivery</h1></div>
                <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et</p></div>
              </diV>

              <div ><img src="{{ asset('images/coinEmojipng.png') }}" alt="" class="info1">
              <div><h1 class="heading">Free Shipping</h1></div>
              <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et</p></div>
              </div>
           </div>

        </div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">

      </div>

    </div>

  </div>
</section>


<div class="container main2">
  <p class="trending-heading">Trending Products</p>
  <p class="trending-paragraph">Lorem ipsum dolor sit amet. Ut molestiae esse ad dignissimos vitae ea sunt consequatur et autem .</p>
</div>



<section>
    <div class="container">
      <div class="row">

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

      <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card">
                    <div class="img-wrapper"><img src="{{ asset('images/shoes1.png') }}" class="d-block w-100" alt="Blue Sneakers"> </div>
                    <div class="card-body">
                      <div class="card-title">
                       <div>
                        <div>Sports Wear</div>
                       <div>$32.43</div>
                       </div>

                       <div>
                        <img src="{{ asset('images/arrow.png') }}" class="arrow-sider"/>
                      </div>

                      </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="{{ asset('images/shoes2.png') }}" class="d-block w-100" alt="Nike Air "> </div>
                    <div class="card-body">
                      <div class="card-title">
                        <div>
                        <div>Nike Air</div>
                        <div>$32.43</div>
                      </div>
                       <div>
                        <img src="{{ asset('images/arrow.png') }}" class="arrow-sider"/>
                      </div>

                      </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="{{ asset('images/shoes3.png') }}" class="d-block w-100" alt="Nike Max"> </div>
                    <div class="card-body">
                      <div class="card-title">
                        <div>
                        <div>Nike Max</div>
                        <div>$32.43</div>
                      </div>
                       <div>
                        <img src="{{ asset('images/arrow.png') }}" class="arrow-sider"/>
                      </div>

                      </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="{{ asset('images/shoes4.png') }}" class="d-block w-100" alt="Gym Wear "> </div>
                    <div class="card-body">
                      <div class="card-title">
                        <div>
                        <div>Gym wear</div>
                        <div>$32.43</div>
                      </div>
                       <div>
                        <img src="{{ asset('images/arrow.png') }}" class="arrow-sider"/>
                      </div>

                      </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="{{ asset('images/shoes1.png') }}" class="d-block w-100" alt="Blue Sneakers"> </div>
                    <div class="card-body">

                      <div class="card-title">
                        <div>
                        <div>Sports Wear</div>
                        <div>$32.43</div>
                      </div>
                       <div>
                        <img src="{{ asset('images/arrow.png') }}" class="arrow-sider"/>
                      </div>

                      </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="{{ asset('images/shoes2.png') }}" class="d-block w-100" alt="Nike Air"> </div>
                    <div class="card-body">
                      <div class="card-title">
                        <div>
                        <div>Nike Air</div>
                        <div>$32.43</div>
                      </div>
                       <div>
                        <img src="{{ asset('images/arrow.png') }}" class="arrow-sider"/>
                      </div>

                      </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="{{ asset('images/shoes3.png') }}" class="d-block w-100" alt="Nike Max"> </div>
                    <div class="card-body">
                      <div class="card-title">
                        <div>
                        <div>Nike Max</div>
                        <div>$32.43</div>
                      </div>
                       <div>
                        <img src="{{ asset('images/arrow.png') }}" class="arrow-sider"/>
                      </div>

                      </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="{{ asset('images/shoes4.png') }}" class="d-block w-100" alt="Gym wear"> </div>
                    <div class="card-body">
                      <div class="card-title">
                        <div>
                        <div>Gym wear</div>
                        <div>$32.43</div>
                      </div>
                       <div>
                        <img src="{{ asset('images/arrow.png') }}" class="arrow-sider"/>
                      </div>

                      </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="{{ asset('images/shoes1.png') }}" class="d-block w-100" alt="Blue Sneakers"> </div>
                    <div class="card-body">
                      <div class="card-title">
                        <div>
                        <div>Sports Wear</div>
                        <div>$32.43</div>
                      </div>
                       <div>
                        <img src="{{ asset('images/arrow.png') }}" class="arrow-sider"/>
                      </div>

                      </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="slide-left" aria-hidden="true"><img src="{{ asset('images/left-arrow.png') }}" alt="previous button"/></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="slide-right" aria-hidden="true"><img src="{{ asset('images/right-arrow.png') }}" alt="previous button"/></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>





    </div>


  </div>
  </div>

  </section>

<section class="section4">
  <div class="container" style="margin-top: 100px">
    <div class="row">
      <div class=" section4-main-div col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class=" section4-left-div">
          <div>  <img class="ractangle" src="{{ asset('images/ractangle.png') }}" alt=""></div>
        <div>  <p class="inner-title-section4-left">Big Sale</p></div>
        </div>

     <div class="nike-shoes">
      <img src="./images/nike-shoes.png" alt="">
     </div>

      </div>

      <div class=" section4-right-div col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
<div class="section4-right-div-top">
  <div class="col-sm-6">
    <p class="bigsale">BIG SALE</p>
    <p class="newitem">NEW ITEM</p>
  </div>
  <div class="bag col-sm-6">
    <img src="./images/bag.png" alt="">
  </div>
</div>
         <div class="section4-right-div-bottom">
          <div class=" shirt col-sm-6">
            <img src="./images/shirt.png" alt="">
          </div>
          <div class="shirt col-sm-6">
            <p class="bigsale1">BIG SALE</p>
            <p class="newitem1">NEW ITEM</p>

          </div>
         </div>


      </div>
    </div>
  </div>
</section>
<section class="section5">
  <div class="testmonial"><p>Testimonials</p></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

        <div class="part" >
          <div class="part-top">
            <div class="girl-image"><img src="{{ asset('images/girl-imagepng.png') }}" alt=""></div>
            <div class="part-title">
              <p class="bold">Lorem Ipsum</p>
              <p class="light">Lorem Ipsum</p>
            </div>
            <div class="sign"><img src="{{ asset('images/sign.png') }}" alt=""></div>
          </div>
          <div class="para">
            <p>Leave Zoom links behind. Move
              from room to room in one click,
              and keep track of open rooms
              in the room list.</p>
          </div>
        </div>

      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="part" >
          <div class="part-top">
            <div class="girl-image"><img src="{{ asset('images/girl-imagepng.png') }}" alt=""></div>
            <div class="part-title">
              <p class="bold">Lorem Ipsum</p>
              <p class="light">Lorem Ipsum</p>
            </div>
            <div class="sign"><img src="{{ asset('images/sign.png') }}" alt=""></div>
          </div>
          <div class="para">
            <p>Leave Zoom links behind. Move
              from room to room in one click,
              and keep track of open rooms
              in the room list.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="part" >
          <div class="part-top">
            <div class="girl-image"><img src="{{ asset('images/girl-imagepng.png') }}" alt=""></div>
            <div class="part-title">
              <p class="bold">Lorem Ipsum</p>
              <p class="light">Lorem Ipsum</p>
            </div>
            <div class="sign"><img src="{{ asset('images/sign.png') }}" alt=""></div>
          </div>
          <div class="para">
            <p>Leave Zoom links behind. Move
              from room to room in one click,
              and keep track of open rooms
              in the room list.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer >
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="first">
          <p class="name">E-commerce</p>
          <p class="address">© 2022 TeamHub Technologies, Inc.
            All rights reserved.</p>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="second">
        <nav class="navbar navbar-expand-lg navbar-light ">
          <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

              <form class="linkss d-flex ml-auto">
                  <ul class=" list navbar-nav  ml-auto">
                      <li class="nav-item2">
                          <a class="nav-link2" class="home">Home</a>
                        </li>
                      <li class="nav-item2">
                          <a class="nav-link2" class="about-us">About Us</a>
                        </li>
                        <li class="nav-item2">
                          <a class="nav-link2" class="reason-why">How it works</a>
                        </li>

                        <li class="nav-item2">
                          <a class="nav-link2" class="contact-us">Contact Us</a>
                        </li>
                        <li class="nav-item2">
                          <a class="nav-link2" class="help">Help</a>
                        </li>
                    </ul>
              </form>
            </div>
          </div>
        </nav>
      </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="links">
          <div><img class="facebook" src="{{ asset('images/facebooklogo.png') }}" alt=""></div>
          <div><img class="instagram" src="{{ asset('images/instagramlogo.png') }}" alt=""></div>
          <div><img class="facebook" src="{{ asset('images/twitterlogo.png') }}" alt=""></div>
        </div>
      </div>
    </div>
  </div>
<div class=""></div>
</footer>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    var multipleCardCarousel = document.querySelector(
        "#carouselExampleControls"
      );
      if (window.matchMedia("(min-width: 768px)").matches) {
        var carousel = new bootstrap.Carousel(multipleCardCarousel, {
          interval: false,
        });
        var carouselWidth = $(".carousel-inner")[0].scrollWidth;
        var cardWidth = $(".carousel-item").width();
        var scrollPosition = 0;
        $("#carouselExampleControls .carousel-control-next").on("click", function () {
          if (scrollPosition < carouselWidth - cardWidth * 4) {
            scrollPosition += cardWidth;
            $("#carouselExampleControls .carousel-inner").animate(
              { scrollLeft: scrollPosition },
              600
            );
          }
        });
        $("#carouselExampleControls .carousel-control-prev").on("click", function () {
          if (scrollPosition > 0) {
            scrollPosition -= cardWidth;
            $("#carouselExampleControls .carousel-inner").animate(
              { scrollLeft: scrollPosition },
              600
            );
          }
        });
      } else {
        $(multipleCardCarousel).addClass("slide");
      }



    </script>



</body>
</html>
