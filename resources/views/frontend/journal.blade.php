@extends('frontend.master')
@section('title') FrontEnd @endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/dataTables.min.css')}}">
    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropbtn:hover, .dropbtn:focus {
            background-color: #3e8e41;
        }

        #myInput {
            box-sizing: border-box;
            background-image: url('../frontend/images/searchicon.png');
            background-position: 14px 12px;
            background-repeat: no-repeat;
            font-size: 16px;
            padding: 14px 70px 12px 45px;
            border: none;
            border-bottom: 1px solid #ddd;
        }

        #myInput:focus {outline: 3px solid #ddd;}

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f6f6f6;
            min-width: 230px;
            overflow: auto;
            border: 1px solid #ddd;
            z-index: 1;
            top:56px;
        }

        .dropdown-content a {
            color: black;
            padding: 0px 5px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {background-color: #ddd;}

        .show {display: block;}
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
                <div class="col-lg-8 post-list">
                    <!-- Start Post Area -->
                    <section class="post-area">
                        <div class="row">
                            {{--dynamic--}}
                            <div class="col-lg-12 col-md-12">
                                <table id="table_id" class="display">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Journal Name</th>
                                        <th>ISSN</th>
                                        <th>Launched</th>
                                        <th>Current Issue</th>
                                        <th>IF</th>
                                        <th>Upc. Articles</th>
                                        <th>Tot. Articles</th>
                                        <th>RSS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($journals as $journal)
                                        @php
                                             $values = explode(' ',trim($journal['name']));
                                         @endphp
                                           <tr>
                                            <td>
                                                @if ($journal['icon'] !=  null)
                                                    <figure class="mt-2" style="width: 80px; height: auto;">
                                                        <img src="{{ asset('storage/'.$journal['icon']) }}" class="img-fluid" alt="img" width="30px" height="30px">
                                                    </figure>
                                                @else
                                                    <figure class="mt-2" style="width: 80px; height: auto;">
                                                        <img src="{{asset('frontend/images/not_found_40.png')}}" class="img-fluid" alt="img" width="30px" height="30px">
                                                    </figure>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('category', $journal['id'])}}">{{$journal['name']}}</a>
                                            </td>
                                            <td>{{$journal['issn']}}</td>
                                            <td>{{date('Y', strtotime($journal['launched'])) }}</td>
                                            <td>{{$journal['current_issue']}}</td>
                                            <td>{{$journal['if']}}</td>
                                            <td>{{$journal['if']}}</td>
                                            <td>{{$journal['if']}}</td>
                                            <td>{{$journal['if']}}</td>
                                        </tr>
                                    @empty
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Start Post Area -->
                </div>
                <div class="col-lg-4 sidebar">
                    <div class="single-widget protfolio-widget">
                        <div class=""></div>
                        <div class="dropdown d-flex justify-content-center">
                            <button onclick="myFunction()" class="dropbtn">Find Active Journals</button>
                            <div id="myDropdown" class="dropdown-content">
                                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                                @forelse ($journals as $journal)
                                @php
                                    $values = explode(' ',trim($journal['name']));
                                @endphp
                                     <a><a href="{{route('category', $journal['id'])}}">{{$journal['name']}}</a></a>
                                @empty
                                    <p>No Journals</p>
                                @endforelse
                            </div>
                        </div>
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

        //datatable
        $(document).ready( function () {
            $('#table_id').dataTable({
                "columns": [
                    { "width": "3%" },
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null
                ]
            });
        } );

        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        //active category drop down
        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
    </script>
@endpush