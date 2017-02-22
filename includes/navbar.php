<!--================================
HEADER
=================================-->
<header>
    <!-- Navigation Menu start-->
    <nav class="navbar do-main-menu" role="navigation">
        <div class="container">

            <!-- Navbar Toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Logo -->
                <a class="navbar-brand" href="index.php"><img class="logo" src="images/Logo_338.png" alt="THREE38inc"></a>

            </div>
            <!-- Navbar Toggle End -->

            <!-- navbar-collapse start-->
            <div id="nav-menu" class="navbar-collapse do-menu-wrapper collapse" role="navigation">
                <ul class="nav navbar-nav do-menus">
                    
                    <li>
                        <a href="index.php#slider" id="aTagHome">Home</a>
                    </li>
                    <li>
                        <a href="index.php#about-us" id="aTagAbout-us">About us</a>
                    </li>
                    <li>
                        <a href="index.php#services" id="aTagServices">Services</a>
                    </li>
                    <li>
                        <a href="index.php#portfolio" id="aTagPortfolio">Portfolio</a>
                    </li>
                    <li<?php if(basename($_SERVER['PHP_SELF'])=="contact-us.php")echo' class="active"';?>>
                        <a href="contact-us.php" id="aTagContact-us">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- navbar-collapse end-->

            <!-- SIDE MENU BTN -->
            <div class="do-side-menu-opener">
                <a class="do-side-menu-image" ><img class="logo" src="images/dmg_logo.png" id="do-side-menu-open-button" alt="DO"></a>
<!--                <button class="do-side-menu-button" id="do-side-menu-open-button"></button>-->
            </div>
            <!-- SIDE MENU BTN END -->

        </div>
    </nav>
    <!-- Navigation Menu end-->
</header>
<!-- HEADER END -->