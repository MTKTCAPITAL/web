<!DOCTYPE html>
<html>
<head>
    <title>MTKT Capital</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<header>
    <div class="navbar-wrapper">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header" style="clear:both">
                    <a href="/">
                        <div id="logo"></div>
                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="test">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Financial Products <b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="products-overview">Overview</a></li>
                                <li><a href="products">Our Financial Products</a></li>
                                <li><a href="products-programs">Types of Programs</a></li>
                                <li><a href="faq">FAQ </a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Customers <b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="customers-for-you">Are We Right For You?</a></li>
                                <li><a href="transactions">Recent Transactions</a></li>
                                <li><a href="privacy">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="about">Overview</a></li>
                                <li><a href="careers">Careers</a></li>
                            </ul>
                        </li>
                        <li><a href="contact">Contact Us</a></li>
                        <li><a href="forms/apply">APPLY NOW<span class="apply-img float"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>


<div class="container-fluid">
    @yield('content')
</div>



<footer class="footer">
</footer>

</body>
</html>
