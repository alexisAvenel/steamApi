<header id="top-bar" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <div class="navbar-brand">
                <a href="index.html" >
                    <h1>Les DaveLoppers</h1>
                </a>
            </div>
            <!-- /logo -->
        </div>
        <!-- main menu -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <div class="main-menu">
                <?php if($user): ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/" >Home</a></li>
                    <li><a href="/news">Game News</a></li>
                    <li><a href="service.html">Service</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="blog-fullwidth.html">Blog Full</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right sidebar</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <?php endif; ?>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>