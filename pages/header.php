
<header id="header" class="site-header header-scrolled position-relative text-black bg-light">
    <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/main-logo.png" class="logo">
            </a>
            <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <svg class="navbar-icon">
                    <use xlink:href="#navbar-icon"></use>
                </svg>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
                <div class="offcanvas-header px-4 pb-0">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/main-logo.png" class="logo">
                    </a>
                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas"
                        aria-label="Close" data-bs-target="#bdNavbar"></button>
                </div>
                <div class="offcanvas-body">
                    <ul id="navbar"
                        class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link me-4 active"  href="#billboard">Home</a>
                        </li>
                       <?php if($_SESSION["type"]=="admin"){?>
                            <li class="nav-item">
                                <a class="nav-link me-4" onclick="loader('userDetails')" href="#company-services">user-Details</a>
                            </li>
                            <?php } ?>
                       
                            <?php if($_SESSION["type"]=="user"){?>
                       
                            <li class="nav-item">
                                <a class="nav-link me-4" href="#company-services">Services</a>
                            </li>
                            <?php } ?>
                      
                        <li class="nav-item">
                            <a class="nav-link me-4" onclick="loader('productDetails')" href="#mobile-products">Products</a>
                        </li>
                        <?php if($_SESSION["type"]=="user"){?>
                            <li class="nav-item">
                                <a class="nav-link me-4" href="#smart-watches">Watches</a>
                            </li>
                            <?php } ?>
                      
                        <li class="nav-item">
                            <a class="nav-link me-4" onclick="loader('saleDetails')" href="#yearly-sale">Sale</a>
                        </li>
                        <?php if($_SESSION["type"]=="user"){?>
                            <li class="nav-item">
                                <a class="nav-link me-4" href="#latest-blog">Blog</a>
                            </li>
                            <?php } ?>
                       
                        <li class="nav-item">
                            <div class="user-items ps-5">
                                <ul class="d-flex justify-content-end list-unstyled">
                                    <li class="search-item pe-3">
                                        <a href="#" class="search-button">
                                            <svg class="search">
                                                <use xlink:href="#search"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="pe-3 nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle link-dark" data-bs-toggle="dropdown"
                                            role="button" aria-expanded="false">
                                            <svg class="user">
                                                <use xlink:href="#user"></use>
                                            </svg>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="Profile.php" class="dropdown-item">Profile</a>
                                            </li>
                                            <li>
                                                <form method="post">
                                                    <button name="Logout" class="dropdown-item">Log-out</button>
                                                </form>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>