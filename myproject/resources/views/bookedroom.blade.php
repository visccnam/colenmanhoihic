<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″/>
    <title>Rooms - Bhaccasyoniztas Beach Resort Website Template</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div id="background">
    <div id="page">
        <div id="header">
            <div id="logo">
                <a href="index.blade.php"><img src="images/logo.png" alt="LOGO" height="112" width="118"></a>
            </div>
            <div id="navigation">
                <ul>
                    <li class="selected">
                        <a href="index">Home</a>
                    </li>
                    <li>
                        <a href="about">About</a>
                    </li>
                    <li>
                        <a href="rooms">Rooms</a>
                    </li>
                    <li>
                        <a href="foods">Food</a>
                    </li>

                    <li>
                        <a href="contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="contents">
            <div class="box">
                <div>
                    <div class="body">
                        <h1>Rooms</h1>
                        <form method="post" action="{{ route('post_datphong') }}" class="was-validated">
{{--                            @method('P')--}}
                            @csrf
                            <div class="form-group">
                                <label for="nameCustomer" >Họ và tên</label>
                                <input type="text" class="form-control" id="nameCustomer"name="nameCustomer" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Điền họ và tên.</div>
                            </div>
                            <div class="form-group">
                                <label for="phonenumber">Số điện thoại</label>
                                <input type="text" class="form-control" id="phonenumber" name="phonenumber" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Điền số điện thoại.</div>
                            </div>

                            <div class="form-group">
                                <label >Type Rooms</label>
                                <select class="form-control col-md-3" name="loai_phong">

                                    @if($roomF->count())
                                        <option value="first class">First Class</option>
                                    @else
                                        <option disabled>First class đã hết phòng</option>
                                    @endif
                                    @if($roomD->count())

                                        <option value="deluxue room">Deluxue Room</option>
                                    @else
                                        <option disabled>Deluxue Room đã hết phòng</option>
                                    @endif
                                    @if($roomS->count())
                                        <option value="suite room">Suite Room</option>
                                    @else
                                        <option disabled>Suite Room đã hết phòng</option>
                                    @endif

                                </select>
{{--                                <div class="col-md 3 ">--}}
{{--                                    <label >First class</label>--}}
{{--                                    <select class="form-control col-md-3" name="loai_phong">--}}
{{--                                        <option></option>--}}
{{--                                       @if($roomF->count())--}}
{{--                                            @foreach($roomF as $room)--}}
{{--                                                <option>{{ $room->id }}</option>--}}
{{--                                            @endforeach--}}
{{--                                        @else--}}
{{--                                            <option disabled>Out of Room</option>--}}
{{--                                        @endif--}}

{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="col-md 3 ">--}}
{{--                                    <label >Deluxue Room</label>--}}
{{--                                    <select class="form-control col-md-3" name="loai_phong">--}}
{{--                                        <option></option>--}}

{{--                                        @foreach($roomD as $room)--}}
{{--                                            <option>{{ $room->id }}</option>--}}
{{--                                        @endforeach--}}

{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="col-md 3 ">--}}
{{--                                    <label >Suite Room</label>--}}
{{--                                    <select class="form-control col-md-3" name="loai_phong">--}}
{{--                                        <option></option>--}}
{{--                                        @foreach($roomS as $room)--}}
{{--                                            <option>{{ $room->id }}</option>--}}
{{--                                        @endforeach--}}

{{--                                    </select>--}}
{{--                                </div>--}}
                                <br>

                            </div>
                            <div class="form-group">
                                <legend class="bv-no-focus-ring col-form-label pt-0">Ngày checkin</legend>
                                <div class="bv-no-focus-ring">
                                    <input type="date" name="checkin" class="form-control col-md-3" value="" >
                                </div>
                                <div class="clear-fix"></div>
                            </div>
                            <div class="form-group">
                                <legend class="bv-no-focus-ring col-form-label pt-0 ">Ngày checkout</legend>
                                <div class="bv-no-focus-ring">
                                    <input type="date" name="checkout" class="form-control col-md-3" value="" >
                                </div>
                                <div class="clear-fix"></div>
                            </div>
                            <div class="form-group">
                                <legend class="bv-no-focus-ring col-form-label pt-0">Mô tả</legend>
                                <div class="bv-no-focus-ring">
                                    <textarea name="description" class="form-control" value="" ></textarea>
                                </div>
                                <div class="clear-fix"></div>
                            </div>

                            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div>
            <ul class="navigation">
                <li class="selected">
                    <a href="index">Home</a>
                </li>
                <li>
                    <a href="about">About</a>
                </li>
                <li>
                    <a href="rooms">Rooms</a>
                </li>
                <li>
                    <a href="foods">Food</a>
                </li>

                <li>
                    <a href="contact">Contact</a>
                </li>
            </ul>
            <div id="connect">
                <a href="http://pinterest.com/fwtemplates/" target="_blank" class="pinterest"></a> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
            </div>
        </div>
        <p>
            © 2023 by BHACCASYONIZTAS BEACH RESORT. All Rights Reserved
        </p>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#submit").click(function (e){
            alert("Đặt phòng thành công")
        }

        )
    })
</script>
</body>
</html>
