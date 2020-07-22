@extends('frontend.master')
@section('title') FrontEnd @endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/dataTables.min.css')}}">
    <style>
        .green {
            color: #7CFC00;
        }
        .error{
            color: red;
        }
        .elementRequiredError {
            border: 1px solid red;
        }
    </style>
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
                <div class="col-lg-12 post-list">
                    <!-- Start Post Area -->
                    <section class="post-area">
                        <div class="row">
                            {{--dynamic--}}
                            <div class="col-lg-12 col-md-12">
                                {{--content section --}}
                                <form id="form1"  method="post">
                                    <ul class="nav nav-tabs col-md-12">
                                        <li class="active col-md-2"><a data-toggle="tab" class="activeHome" href="#home">Home</a></li>
                                        <li class="col-md-2"><a data-toggle="tab" href="#menu1">Manuscripts Information</a></li>
                                        <li class="col-md-2"><a data-toggle="tab" href="#menu2">Author Information</a></li>
                                        <li class="col-md-2"><a data-toggle="tab" href="#menu3">Suggest and Exclude Reviews </a></li>
                                        <li class="col-md-2"><a data-toggle="tab" href="#menu4">Upload Manuscripts</a></li>
                                        <li class="col-md-2"><a data-toggle="tab" href="#menu5">Confirm and Send Editors</a></li>
                                    </ul>
                                    <br>
                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                            <div class="form-group col-md-6">
                                                <input type="text" id="myFirstName" name="myFirstName" class="form-control elementRequired" placeholder="FirstName" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text"  id="myLastName" class="form-control" placeholder="LastName" >
                                            </div>
                                            <button class="btn btn-default btn-ok" type="button">Next</button>
                                        </div>
                                        <div id="menu1" class="tab-pane fade">
                                            <div class="form-group col-md-6">
                                                <input type="text"  id="myEmail" class="form-control elementRequired" placeholder="Email" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text"  id="myMobile" name="myMobile" class="form-control" placeholder="Mobile" >
                                            </div>
                                            <button class="btn btn-default btn-ok" type="button">Next</button>
                                        </div>
                                        <div id="menu2" class="tab-pane fade">
                                            <div class="form-group col-md-6">
                                                <input type="text"  id="DOB" class="form-control" placeholder="Date of Birth" >
                                            </div>
                                            <button class="btn btn-default btn-ok" type="button">Next</button>
                                        </div>
                                        <div id="menu3" class="tab-pane fade">
                                            <div class="form-group col-md-6">
                                                <input type="text"  id="menu3" class="form-control" placeholder="menu3" >
                                            </div>
                                            <button class="btn btn-default btn-ok" type="button">Next</button>
                                        </div>
                                        <div id="menu4" class="tab-pane fade">
                                            <div class="form-group col-md-6">
                                                <input type="text"  id="menu4" class="form-control" placeholder="menu4" >
                                            </div>
                                            <button class="btn btn-default btn-ok" type="button">Next</button>
                                        </div>
                                        <div id="menu5" class="tab-pane fade">
                                            <div class="form-group col-md-6">
                                                <input type="text"  id="mew" name="mew" class="form-control elementRequired"  placeholder="menu5" >
                                            </div>
                                            <input type="submit"  id="send" class="form-control"  value="Submit">
                                        </div>
                                    </div>
                                    <br />
                                    <div class="form-group col-md-6">
                                    </div>
                                </form>
                                {{--content section --}}
                            </div>
                        </div>
                    </section>
                    <!-- Start Post Area -->
                </div>


            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>



@endsection
@push('scripts')
    <script>

        // disable all tabs
        $('[data-toggle=tab]').click(function () {
            return false;}
        ).addClass("text-muted");

        var validated = function(tab){

            tab.unbind('click').removeClass('text-muted').addClass('green');
            tab.trigger('click')
            tab.parent().prev().find("a").addClass("fa fa-check");
            console.log('tab.prev()' , tab)
        }

        //validate inputs on click of button
        $('.btn-ok').click(function(){

           // $('#send').trigger('click')

            var allValid = true;
            // get each input in this tab pane and validate
            $(this).parents('.tab-pane').find('.elementRequired').each(function(i,e){

                // some condition(s) to validate each input
                var len = $(e).val().length;
                if (len>0){
                    // validation passed
                    allValid = true;
                    $(this).removeClass('elementRequiredError');
                } else {
                    // validation failed
                    $(this).addClass('elementRequiredError');
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




        //scroll to tabs
       // $('html, body').animate({scrollTop: '+=850px'}, 800);
         $('.activeHome').trigger('click')
        /*step tabs*/
        $("#form1").validate({
            ignore: [],  // ignore NOTHING
            rules: {
                "myFirstName": {
                    required: true
                },
                "myMobile": {
                    required: true
                }
            }
        });

        $('#send').on('click', function (e) {
            $("#form1").valid();
            var ele = $("#form1 :input.error:first");
            if (ele.is(':hidden')) {
                var tabToShow = ele.closest('.tab-pane');
                $('#form1 .nav-tabs a[href="#' + tabToShow.attr('id') + '"]').tab('show');
            }
        });

        /*step tabs*/

    </script>
@endpush