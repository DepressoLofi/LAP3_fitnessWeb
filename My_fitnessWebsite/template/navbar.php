    <!--navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent nav-blur fixed-top">
        <div class="container">
            <a class="navbar-brand fs-3 logo" href="#">LAPFitZone</a>
            <button class="navbar-toggler shadow-none border-0 " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header text-white border-bottom">
                    <h5 class="offcanvas-title logo" id="offcanvasNavbarLabel">LAPFitZone</h5>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <!--List of pages-->

                <div class="offcanvas-body d-flex flex-column flex-lg-row">
                    <ul class="navbar-nav justify-content-start justify-content-lg-center fs-6 flex-grow-1 pe-3 mb-lg-2 mt-lg-1">
                        <li class="nav-item mx-2 mx-lg-4">
                            <a href="#">Home</a>
                        </li>
                        <li class="nav-item mx-2  mx-lg-4">
                            <a href="#">About</a>
                        </li>
                        <li class="nav-item mx-2  mx-lg-4">
                            <a href="#">Plan</a>
                        </li>
                        <li class="nav-item mx-2  mx-lg-4">
                            <a href="#">Blog</a>
                        </li>
                        <li class="nav-item mx-2  mx-lg-4">
                            <a href="#">Contact</a>
                        </li>
                        <li class="d-lg-none nav-item mx-2">
                            <a href="#">Log in</a>
                        </li>
                    </ul>
                    <!--This is where login will take place-->
                    <div class="d-none d-lg-block justify-content-center align-items-center">
                        <a href="">
                            <button class="nav-button">Log in</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </nav>