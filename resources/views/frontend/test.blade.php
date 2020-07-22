@extends('frontend.master')
@section('title') FrontEnd @endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/dataTables.min.css')}}">
@endsection
@section('content')
    <!-- Top Stories Area -->
    <section class="top-stories-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel active-stories-carousel">
                        <!-- single stories carousel -->
                        <div class="single-stories-carousel d-flex align-items-center">
                            <div class="stories-thumb">
                                <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/stories1.jpg')}}" alt="">
                            </div>
                            <div class="stories-details">
                                <h6><a href="">2nd Gen Smoke Alarm <br>
                                        get up from sleep</a></h6>
                                <p>September 14, 2018</p>
                            </div>
                        </div>
                        <!-- single stories carousel -->
                        <div class="single-stories-carousel d-flex align-items-center">
                            <div class="stories-thumb">
                                <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/stories2.jpg')}}" alt="">
                            </div>
                            <div class="stories-details">
                                <h6><a href="">2nd Gen Smoke Alarm <br>
                                        get up from sleep</a></h6>
                                <p>September 14, 2018</p>
                            </div>
                        </div>
                        <!-- single stories carousel -->
                        <div class="single-stories-carousel d-flex align-items-center">
                            <div class="stories-thumb">
                                <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/stories3.jpg')}}" alt="">
                            </div>
                            <div class="stories-details">
                                <h6><a href="">2nd Gen Smoke Alarm <br>
                                        get up from sleep</a></h6>
                                <p>September 14, 2018</p>
                            </div>
                        </div>
                        <!-- single stories carousel -->
                        <div class="single-stories-carousel d-flex align-items-center">
                            <div class="stories-thumb">
                                <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/stories4.jpg')}}" alt="">
                            </div>
                            <div class="stories-details">
                                <h6><a href="">2nd Gen Smoke Alarm <br>
                                        get up from sleep</a></h6>
                                <p>September 14, 2018</p>
                            </div>
                        </div>
                        <!-- single stories carousel -->
                        <div class="single-stories-carousel d-flex align-items-center">
                            <div class="stories-thumb">
                                <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/stories5.jpg')}}" alt="">
                            </div>
                            <div class="stories-details">
                                <h6><a href="">2nd Gen Smoke Alarm <br>
                                        get up from sleep</a></h6>
                                <p>September 14, 2018</p>
                            </div>
                        </div>
                        <!-- single stories carousel -->
                        <div class="single-stories-carousel d-flex align-items-center">
                            <div class="stories-thumb">
                                <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/stories6.jpg')}}" alt="">
                            </div>
                            <div class="stories-details">
                                <h6><a href="">2nd Gen Smoke Alarm <br>
                                        get up from sleep</a></h6>
                                <p>September 14, 2018</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Stories Area -->

    <!-- Start Post Silder Area -->
    <section class="post-slider-area">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="owl-carousel active-post-carusel">
                        <!-- single carousel item -->
                        <div class="single-post-carousel">
                            <div class="post-thumb">
                                <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/post1.jpg')}}" alt="">
                            </div>
                            <div class="post-details">
                                <h2><a href="#">2nd Gen Smoke Alarm get up <br>
                                        from sleep Daily</a></h2>
                                <div class="post-content d-flex justify-content-between">
                                    <div class="post-meta">
                                        <div class="thumb"><img src="{{ asset('frontend/img/author/a1.png')}}" alt=""></div>
                                        <div class="c-desc">
                                            <h6>Marvel Maison</h6>
                                            <p><span class="lnr lnr-calendar-full"></span>13th Oct, 2018</p>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.
                                            It’s exciting to think about setting up your own viewing station.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single carousel item -->
                        <div class="single-post-carousel">
                            <div class="post-thumb">
                                <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/post2.jpg')}}" alt="">
                            </div>
                            <div class="post-details">
                                <h2><a href="#">2nd Gen Smoke Alarm get up <br>
                                        from sleep Daily</a></h2>
                                <div class="post-content d-flex justify-content-between">
                                    <div class="post-meta">
                                        <div class="thumb"><img src="{{ asset('frontend/img/author/a1.png')}}" alt=""></div>
                                        <div class="c-desc">
                                            <h6>Marvel Maison</h6>
                                            <p><span class="lnr lnr-calendar-full"></span>13th Oct, 2018</p>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.
                                            It’s exciting to think about setting up your own viewing station.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single carousel item -->
                        <div class="single-post-carousel">
                            <div class="post-thumb">
                                <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/post3.jpg')}}" alt="">
                            </div>
                            <div class="post-details">
                                <h2><a href="#">2nd Gen Smoke Alarm get up <br>
                                        from sleep Daily</a></h2>
                                <div class="post-content d-flex justify-content-between">
                                    <div class="post-meta">
                                        <div class="thumb"><img src="{{ asset('frontend/img/author/a1.png')}}" alt=""></div>
                                        <div class="c-desc">
                                            <h6>Marvel Maison</h6>
                                            <p><span class="lnr lnr-calendar-full"></span>13th Oct, 2018</p>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.
                                            It’s exciting to think about setting up your own viewing station.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Post Silder Area -->

    <!-- Start main body Area -->
    <div class="main-body section-gap">
        <div class="container box_1170">
            <div class="row">
                <div class="col-lg-8 post-list">
                    <!-- Start Post Area -->
                    <section class="post-area">
                        <div class="row">
                            {{--dynamic--}}
                            <div class="col-lg-12 col-md-12">

                                <div class="container" id="myWizard">
                                    <div class="navbar">
                                        <div class="navbar-inner">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#step1" data-toggle="tab">Step 1</a></li>
                                                <li><a href="#step2" data-toggle="tab" class="disable" disabled="">Step 2</a></li>
                                                <li><a href="#step3" data-toggle="tab">Step 3</a></li>
                                                <li><a href="#step4" data-toggle="tab">Step 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <form class="tab-content" method="post" id="myForm">
                                        <div class="tab-pane active" id="step1">
                                            <p>Here is the content for the first step...</p>
                                            <input class="form-control" id="input1" name="input1" required="">
                                            <button class="btn btn-default btn-ok" type="button">OK</button>
                                        </div>
                                        <div class="tab-pane" id="step2">
                                            <p>Here is the content for step 2...</p>
                                            <input class="form-control" id="input2" name="input2" required="">
                                            <button class="btn btn-default btn-ok" type="button">OK</button>
                                        </div>
                                        <div class="tab-pane" id="step3">
                                            <p>Here is the content for step 3...</p>
                                            <input class="form-control" id="input3" name="input3" required="">
                                            <input class="form-control" id="input4" name="input4" required="">
                                            <button class="btn btn-default btn-ok" type="button">OK</button>
                                        </div>
                                        <div class="tab-pane" id="step4">
                                            <p>This is the last step. You're done.</p>
                                            <button class="btn btn-default btn-submit" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- Start Post Area -->
                </div>


                <div class="col-lg-4 sidebar">
                    <div class="single-widget protfolio-widget">
                        <img class="img-fluid" src="{{ asset('frontend/img/blog/user2.png')}}" alt="">
                        <a href="#">
                            <h4>Peter Anderson</h4>
                        </a>
                        <p class="p-text">
                            Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend
                            money on boot camp whenyou can get. Boot camps have itssuppor ters andits detractors.
                        </p>
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                        <img src="{{ asset('frontend/img/sign.png')}}" alt="">
                    </div>

                    <div class="single-widget popular-posts-widget">
                        <div class="jq-tab-wrapper" id="horizontalTab">
                            <div class="jq-tab-menu">
                                <div class="jq-tab-title active" data-tab="1">Popular</div>
                                <div class="jq-tab-title" data-tab="2">Latest</div>
                            </div>
                            <div class="jq-tab-content-wrapper">
                                <div class="jq-tab-content active" data-tab="1">
                                    <div class="single-popular-post d-flex flex-row">
                                        <div class="popular-thumb">
                                            <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/stories1.jpg')}}" alt="">
                                        </div>
                                        <div class="popular-details">
                                            <h6><a href="">2nd Gen Smoke Alarm <br>
                                                    get up from sleep</a></h6>
                                            <p>September 14, 2018</p>
                                        </div>
                                    </div>
                                    <div class="single-popular-post d-flex flex-row">
                                        <div class="popular-thumb">
                                            <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/stories2.jpg')}}" alt="">
                                        </div>
                                        <div class="popular-details">
                                            <h6><a href="">2nd Gen Smoke Alarm <br>
                                                    get up from sleep</a></h6>
                                            <p>September 14, 2018</p>
                                        </div>
                                    </div>
                                    <div class="single-popular-post d-flex flex-row">
                                        <div class="popular-thumb">
                                            <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/stories3.jpg')}}" alt="">
                                        </div>
                                        <div class="popular-details">
                                            <h6><a href="">2nd Gen Smoke Alarm <br>
                                                    get up from sleep</a></h6>
                                            <p>September 14, 2018</p>
                                        </div>
                                    </div>
                                    <div class="single-popular-post d-flex flex-row">
                                        <div class="popular-thumb">
                                            <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/stories4.jpg')}}" alt="">
                                        </div>
                                        <div class="popular-details">
                                            <h6><a href="">2nd Gen Smoke Alarm <br>
                                                    get up from sleep</a></h6>
                                            <p>September 14, 2018</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="jq-tab-content active" data-tab="2">

                                    <div class="single-popular-post d-flex flex-row">
                                        <div class="popular-thumb">
                                            <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/stories2.jpg')}}" alt="">
                                        </div>
                                        <div class="popular-details">
                                            <h6><a href="">2nd Gen Smoke Alarm <br>
                                                    get up from sleep</a></h6>
                                            <p>September 14, 2018</p>
                                        </div>
                                    </div>
                                    <div class="single-popular-post d-flex flex-row">
                                        <div class="popular-thumb">
                                            <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/stories3.jpg')}}" alt="">
                                        </div>
                                        <div class="popular-details">
                                            <h6><a href="">2nd Gen Smoke Alarm <br>
                                                    get up from sleep</a></h6>
                                            <p>September 14, 2018</p>
                                        </div>
                                    </div>
                                    <div class="single-popular-post d-flex flex-row">
                                        <div class="popular-thumb">
                                            <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/stories1.jpg')}}" alt="">
                                        </div>
                                        <div class="popular-details">
                                            <h6><a href="">2nd Gen Smoke Alarm <br>
                                                    get up from sleep</a></h6>
                                            <p>September 14, 2018</p>
                                        </div>
                                    </div>
                                    <div class="single-popular-post d-flex flex-row">
                                        <div class="popular-thumb">
                                            <img class="img-fluid" src="{{ asset('frontend/img/posts/carousel/stories4.jpg')}}" alt="">
                                        </div>
                                        <div class="popular-details">
                                            <h6><a href="">2nd Gen Smoke Alarm <br>
                                                    get up from sleep</a></h6>
                                            <p>September 14, 2018</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-widget category-widget">
                        <h4 class="title">Post Categories</h4>
                        <ul>
                            <li>
                                <a href="#" class="justify-content-between align-items-center d-flex">
                                    <p><img src="{{ asset('frontend/img/bullet.png')}}" alt="">International (56)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="justify-content-between align-items-center d-flex">
                                    <p><img src="{{ asset('frontend/img/bullet.png')}}" alt="">Tours and Travels (45)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="justify-content-between align-items-center d-flex">
                                    <p><img src="{{ asset('frontend/img/bullet.png')}}" alt="">Cooking Tips (23)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="justify-content-between align-items-center d-flex">
                                    <p><img src="{{ asset('frontend/img/bullet.png')}}" alt="">Life Style and Fashion (72)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="justify-content-between align-items-center d-flex">
                                    <p><img src="{{ asset('frontend/img/bullet.png')}}" alt="">Organic News (37)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="justify-content-between align-items-center d-flex">
                                    <p><img src="{{ asset('frontend/img/bullet.png')}}" alt="">Games and Sports (19)</p>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="single-widget tags-widget">
                        <h4 class="title">Post Tags</h4>
                        <ul>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Art</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Techlology</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Technology</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script src="{{asset('frontend/js/dataTables.min.js')}}"></script>

@endsection
@push('scripts')
    <script>

        // disable all tabs
        $('[data-toggle=tab]').click(function () {
            return false;}
        ).addClass("text-muted");

        var validated = function(tab){
            tab.unbind('click').removeClass('text-muted').addClass('green');
        }

        //validate inputs on click of button
        $('.btn-ok').click(function(){

            var allValid = true;
            // get each input in this tab pane and validate
            $(this).parents('.tab-pane').find('.form-control').each(function(i,e){

                // some condition(s) to validate each input
                var len = $(e).val().length;
                if (len>0){
                    // validation passed
                    allValid = true;
                } else {
                    // validation failed
                    allValid = false;
                }

            });

            if (allValid) {
                var tabIndex = $(this).parents('.tab-pane').index();
                validated($('[data-toggle]').eq(tabIndex+1));
            }

        });

        // always validate first tab
        validated($('[data-toggle]').eq(0));

        // form submit
        $( "#myForm" ).submit(function( event ) {
            console.log("Handler for .submit() called..");
            console.log( $( this ).serialize() );
            event.preventDefault();
        });




    </script>
@endpush