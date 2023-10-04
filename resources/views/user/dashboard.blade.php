<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User | Dashboard</title>

</head>

<body style="background-color: #eee !important;height: 740px;">
    <div class="container" style="border: 0px solid red;background-color: #eee !important;">
        <div class="topnav">
            <a href="#"
                style="text-align: center;margin-left:180px;color: #fff;"><span><b>easypaisa</b></span></a>
            <a href="#" style="float: right;"><i class="fa fa-bell-o" style="color: #fff !important;"></i></a>
            <a href="#" style="float: right;"><i class="fa fa-search" style="color: #fff !important;"></i></a>

        </div>
        <div class="wrapper_one" style="background-color: #2ABC71;width: 100%;height: 170px;padding-left: 10px;">
            <div>&nbsp;</div>
            <div class="inner_box_div"
                style="background-color: #fff;border-radius: 10px;padding:12px;margin: 0px 20px;">
                <div class="row_box" style="">
                    <div class="column_box" style="float: left;"><span><b>easypaisa</b></span></div>
                    <div class="column_box" style="float: right;text-align: right;padding-top: 5px;"><img
                            src="{{ asset('assets/images/gift.png') }}" alt="gift" width="15px"> <span
                            style="font-size: 12px;">My Rewards</span></div>
                    <div class="column_box" style="float: left;text-align: left;padding-top: 5px;"><span
                            style="font-size: 11px;">Available Balance</span></div>
                    <div class="column_box" style="float: right;padding-top: 5px;">
                        &nbsp;
                    </div>
                    <div class="column_box" style="float: left;padding-top: 5px;">
                        <span style=""><b>Rs.17.88</b></span> <i class="fa fa-arrow-circle-o-right"
                            aria-hidden="true" style="color: #000 !important;"></i>
                    </div>
                    <div class="column_box" style="float: right;text-align: right;padding-top: 5px;">&nbsp;</div>
                    <div class="column_box" style="float: left;padding-top: 5px;">
                        <i class="fa fa-refresh" aria-hidden="true" style="color: #000;"></i>
                        <span style="font-size: 12px;padding-top: 5px;">Update Just Now</span>
                    </div>
                    <div class="column_box" style="float: right;text-align: right;padding-top: 5px;">
                        <a href=""><button
                                style="background-color: #2ABC71;border-radius: 10px;border: none;color: #fff;font-size:11px;padding:2px 10px;">Add
                                Cash</button></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="wrapper_two" style="margin: 0px 10px;">
            <div class="row">
                <div class="column">
                    <div class="inner_data" style="background-color: #fff;border-radius: 10px;padding:20px;">
                        <i class="fa fa-money" aria-hidden="true" style="font-size: 30px !important;"></i>
                        <h5 style="font-size: 11px;">Send Money</h5>
                    </div>
                </div>
                <div class="column">
                    <div class="inner_data" style="background-color: #fff;border-radius: 10px;padding:20px;">
                        <i class="fa fa-dashboard" aria-hidden="true" style="font-size: 30px !important;"></i>
                        <!-- <h5 style="font-size: 11px;">Easycash Loan</h5> -->
                        <h5 style="font-size: 11px;">Dashboard</h5>
                    </div>
                </div>
                <div class="column">
                    <div class="inner_data" style="background-color: #fff;border-radius: 10px;padding:20px;">
                        <i class="fa fa-user-plus" style="font-size: 30px !important;" aria-hidden="true"></i>
                        <h5 style="font-size: 11px;">Invite & Earn</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper_three" style="border: 0px solid green;padding: 0px 15px;">
            <p style="margin: 10px 0px;font-size: 16px;"><b>More With easypaisa</b></p>
            <div class="center">
                <div class="slider" data-pos="0">
                    <div class="slider__slides">
                        <div class="slider__slide">
                            <div class="row" style="padding: 17px 0px;">
                                <div class="column_slider">
                                    <!-- <div class="inner_data">
                                        <i class="fa fa-money" aria-hidden="true" style="font-size: 20px !important;"></i>
                                        <br/>
                                        <span style="font-size: 11px;">Easycash Loan</span>
                                    </div> -->
                                </div>
                                <div class="column_slider">
                                    <div class="inner_data">
                                        <i class="fa fa-gift" aria-hidden="true"
                                            style="font-size: 20px !important;"></i>
                                        <br />
                                        <span style="font-size: 11px;">Tohfa</span>
                                    </div>
                                </div>
                                <!-- <div class="column_slider">
                                            <div class="inner_data">
                                                <i class="fa fa-user-plus" style="font-size: 20px !important;" aria-hidden="true"></i>
                                                <br>
                                                <span style="font-size: 11px;">Invite & Earn</span>
                                            </div>
                                        </div> -->
                                <!--
                                        <div class="column_slider">
                                            <div class="inner_data">
                                                <img src="assets/images/raast.jpg" alt="gift" width="30px">
                                                <br>
                                                <span style="font-size: 11px;">Raast Payment</span>
                                            </div>
                                        </div> -->
                                <div class="column_slider">
                                    <div class="inner_data">
                                        <i class="fa fa-mobile" aria-hidden="true"
                                            style="font-size: 20px !important;"></i>
                                        <br />
                                        <span style="font-size: 11px;">Select package</span>
                                    </div>
                                </div>

                                <!-- <div class="column_slider">
                                            <div class="inner_data">
                                                <i class="fa fa-credit-card" aria-hidden="true" style="font-size: 20px !important;"></i>
                                                <br>
                                                <span style="font-size: 11px;">Buy Now <br> pay Later</span>
                                            </div>
                                        </div> -->


                                <div class="column_slider">
                                    <div class="inner_data">
                                        <i class="fa fa-money" aria-hidden="true"
                                            style="font-size: 20px !important;"></i>
                                        <br />
                                        <span style="font-size: 11px;">Send Money</span>
                                    </div>
                                </div>
                                <div class="column_slider">
                                    <div class="inner_data">
                                        <i class="fa fa-handshake-o" aria-hidden="true"
                                            style="font-size: 20px !important;"></i>
                                        <br />
                                        <span style="font-size: 11px;">Invest and earn</span>
                                    </div>
                                </div>
                                <div class="column_slider">
                                    <div class="inner_data">
                                        <!-- <img src="assets/images/rupee.png" alt="gift" width="25px">  -->
                                        <i class="fa fa-money" aria-hidden="true"
                                            style="font-size: 20px !important;"></i>
                                        <br />
                                        <span style="font-size: 11px;">Rs.1 Game</span>
                                    </div>
                                </div>

                                <div class="column_slider">
                                    <div class="inner_data">
                                        <i class="fa fa-archive" aria-hidden="true"
                                            style="font-size: 20px !important;"></i>
                                        <br />
                                        <span style="font-size: 11px;">Savings</span>
                                    </div>
                                </div>
                                <div class="column_slider">
                                    <div class="inner_data">
                                        <i class="fa fa-list-alt" aria-hidden="true"
                                            style="font-size: 20px !important;"></i>
                                        <br>
                                        <span style="font-size: 11px;">Promote and earn</span>
                                    </div>
                                </div>
                                <div class="column_slider">
                                    <div class="inner_data">
                                        <i class="fa fa-ellipsis-h" aria-hidden="true"
                                            style="font-size: 20px !important;"></i>
                                        <br />
                                        <span style="font-size: 11px;">See All</span>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="slider__slide">
                            <h1></h1>
                        </div>
                        <div class="slider__slide"></div>
                        <div class="slider__slide"></div>
                    </div>
                </div>
                <div class="slider__dots">
                    <a href="#" class="slider__indicator"></a>
                    <a href="#" class="slider__dot" data-pos="0"></a>
                    <a href="#" class="slider__dot" data-pos="1"></a>
                    <!-- <a href="#" class="slider__dot" data-pos="2"></a> -->
                    <!-- <a href="#" class="slider__dot" data-pos="3"></a> -->
                </div>
            </div>

        </div>
    </div>

    <div class="footer">
        <div class="row_footer">
            <div class="column_footer">
                <div style="text-align: center;">
                    <i class="fa fa-home"></i>
                    <br>
                    <span style="font-size: 12px;">Home</span>
                </div>
            </div>
            <div class="column_footer">
                <div style="text-align: center;">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <br>
                    <span style="font-size: 12px;">Cash Points</span>
                </div>
            </div>
            <div class="column_footer">
                <div>
                    <i class="fa fa-qrcode"
                        style="font-size: 35px !important;color: #fff;background-color: #2ABC71;padding:5px 5px;"></i>
                </div>

            </div>
            <div class="column_footer">
                <div style="text-align: center;">
                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                    <br>
                    <span style="font-size: 12px;">Promotions</span>
                </div>
            </div>
            <div class="column_footer">
                <div style="text-align: center;">
                    <i class="fa fa-user"></i>
                    <br>
                    <span style="font-size: 12px;">My Account</span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('assets/js/slider.js') }}"></script>
</body>

</html>
