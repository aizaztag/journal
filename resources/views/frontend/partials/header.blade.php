<header id="header">
    <div class="container box_1170 main-menu">
        <div class="row align-items-center justify-content-center d-flex">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="index.html">ABOUT</a></li>
                    <li><a href="/">JOURNALS</a></li>
                    <li><a href="archive.html">RESEARCH TOPIC</a></li>
                    <li><a href="archive.html">ARTICLES</a></li>
                </ul>

            </nav>
            <button type="button" class="btn btn-primary">Submit</button>
        </div>
        @auth
            <ul>
                <li class="float-right"><a href="/logout" style="position:relative; bottom: 27px">Logout</a></li>
            </ul>
        @else
            <nav>
                <ul>
                    <li class="float-right"><a href="/login" style="position:relative; bottom: 27px">Login</a></li>
                    <li class="float-right"><a href="/register" style="position:relative; right:-100px; bottom: 27px">Register</a></li>
                </ul>
            </nav>
        @endauth

    </div>

    <div class="search_input" id="search_input_box">
        <div class="container box_1170">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search for journals , articles and more">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
