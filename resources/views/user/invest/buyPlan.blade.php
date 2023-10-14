<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User | Dashboard</title>

</head>

<body style="background-color: #eee !important;height: 740px;">
    <x-alert />
    <div class="container" style="border: 0px solid red;background-color: #eee !important;">
        <div class="topnav">
            <a href="#"
                style="text-align: center;margin-left:180px;color: #fff;"><span><b>{{ env('APP_NAME') }}</b></span></a>
            <a href="#" style="float: right;"><i class="fa fa-bell-o" style="color: #fff !important;"></i></a>
            <a href="#" style="float: right;"><i class="fa fa-search" style="color: #fff !important;"></i></a>

        </div>
        <div class="wrapper_one" style="background-color: #2ABC71;width: 100%;height: 170px;padding-left: 10px;">
            <div>&nbsp;</div>
            <div class="inner_box_div"
                style="background-color: #fff;border-radius: 10px;padding:12px;margin: 0px 20px;">
                <div class="row_box" style="">
                    <div class="column_box" style="float: left;"><span><b>{{ env('APP_NAME') }}</b></span></div>
                    <div class="column_box" style="float: right;text-align: right;padding-top: 5px;">
                        <a href="{{ route('User.Dashboard') }}"><button
                                style="background-color: #2ABC71;border-radius: 10px;border: none;color: #fff;font-size:15px;padding:8px 12px;">Dashboard</button></a>
                    </div>
                    <div class="column_box" style="float: right;padding-top: 5px;">
                        &nbsp;
                    </div>
                    <div class="column_box" style="float: left;padding-top: 5px;">
                        <span style=""><b>Rs.{{ auth()->user()->balance }}</b></span> <i
                            class="fa fa-arrow-circle-o-right" aria-hidden="true" style="color: #000 !important;"></i>
                    </div>
                    <div class="column_box" style="float: right;text-align: right;padding-top: 5px;">&nbsp;</div>
                    <div class="column_box" style="float: left;padding-top: 5px;">
                        <a href="{{ route('User.Widthraw.Amount') }}" style="text-decoration: none;color:#000">
                            <i class="fa fa-refresh" aria-hidden="true" style="color: #000;"></i>
                            <span style="font-size: 12px;padding-top: 5px;">Update Just Now</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">{{ $plan->name }}</h3>
                        </div>
                        <div class="card-body">
                            <h4>To activat this plan you have to pay {{ $plan->investment }} on this number
                                0300-1234567. In {{ $plan->duration }} days you got {{ $plan->total_profit }} total
                                profit.</h4>
                                <form action="{{ route('User.Store.Plan') }}" method="POST" style="margin-top: 40px">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Your Sending Number</label>
                                        <input type="number" name="number" class="form-control"
                                            placeholder="Enter your sending number">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Your Account Name</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter Your Account Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Your Transcation Id</label>
                                        <input type="text" name="trxId" class="form-control"
                                            placeholder="Enter Trascation Id">
                                    </div>
                                    <button class="btn btn-success">Submit Request</button>
                                </form>
                        </div>
                    </div>
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
