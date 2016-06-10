@extends('template.app')
@section('content')
    <div class="container">
    <div id="carousel-example-generic" class="carousel slide under-carousel" data-ride="carousel">
        <div id="carousel_1" class="carousel slide">
            <!-- Carousel items -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">

                <div class="active item">
                    <img alt="First slide" src="/images/6568657360343391dffb4424a470fbd6.png">

                    <div class="carousel-caption">
                        <h1 style="color:black">We say YES!</h1>

                        <p>Small Business Financing. Specialty Lending Programs. Suited for the small to
                            medium sized business.</p>
                        <a class="btn btn-lg btn-primary" href="request/index.php" role="button">APPLY NOW<img
                                    src="/images/img-button-apply.png" alt="icon"></a>
                    </div>

                </div>


                <div class="item">
                    <img alt="First slide" src="/images/800ebf1c6054932221459164bf807c8b.png">

                    <div class="carousel-caption">
                        <h1 style="color:black">Business Loans</h1>

                        <p>Excellent credit or very poor credit we have a loan with payments and terms that
                            work for you.</p>
                        <a class="btn btn-lg btn-primary" href="request/index.php" role="button">APPLY NOW<img
                                    src="/images/img-button-apply.png" alt="icon"></a>
                    </div>
                </div>

            </div>

            <!-- Carousel nav -->
            <a class="carousel-control left" href="#carousel_1" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#carousel_1" data-slide="next">&rsaquo;</a>
        </div>
    </div>
    </div>



        <div class="row">

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                <div class="center">
                    <img src="images/109d15524820d86468f24abcb810c9c8.jpg" class="img-circle img-border"/>
                </div>
                <h3>Evaluating Your Business Differently</h3>
                Whether or not we decide to lend to you is based on your actual business performance, not some outdated
                set of data points. Lending today has become far too complex, impersonal and confusing.
            </div>


            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                <div class="center">
                    <img src="images/e25140e9ab18b189ac8bf4c6b66970e5.jpg" class="img-circle img-border"/>
                </div>
                <h3>Business Cash Advance</h3>

                <p>A key advantage to our business funding is that the payments are based only off your sales and
                    financial performance. In addition, we structure the payments as tiny daily (business days only)
                    payments instead of large monthly lump sum payments. We're also able to make sure that everything is
                    automated. This assists you by making your payments more manageable and easy to maintain, allowing
                    you to focus on your business. There are many more advantages to a business cash advance so give us
                    a call or apply online and one of our account specialists will fill you in on all the excellent
                    benefits that this unique funding program offers.</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

                <div class="center">
                    <img src="images/abd6bab6c348ca6950d33a295bee9032.jpg" class="img-circle img-border"/>
                </div>
                <h3>Increase Revenue</h3>

                <p>We provide an industry changing process that leverages technology to provide timely funding of the
                    capital you need to grow your business. Every business needs money to help support its growth
                    initiatives. We're able to process your files and get the funds to your account within 5 days. </p>
            </div>


        </div>


@stop