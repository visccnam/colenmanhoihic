@extends('layouts.app')

@section('content')
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
                        <li>
                            <a href="admin/manageHome">Quản lý phòng</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div id="contents">
                <div id="adbox">
                    <img src="images/sea-sound.jpg" alt="Img">
                    <h1>Mùa hè thú vị</h1>
                    <p>
                        Ghé thăm chùa Long Sơn vào sáng sớm trước khi lấy một tô bún chả cá cho bữa trưa. Hãy dành buổi chiều tận hưởng bãi biển hoặc thư giãn bên hồ bơi tại Louisiane Brewhouse trước khi dừng chân ở Hòn Chồng vào buổi chiều muộn. Cuộc biểu tình cho một đêm đi chơi trên thị trấn....
                        <a href="#">xem thêm</a>
                    </p>
                </div>
                <div id="main">
                    <div class="box">
                        <div>
                            <div>
                                <h3>Blog</h3>
                                <ul>
                                    <li>
                                        <h4><a href="#">Cuộc thi hoa hậu bãi biển</a></h4>
                                        <span>April 02, 2023</span>
                                        <p>
                                            Cuộc thi hoa hậu bãi biển diễn ra với sự góp mặt của rất nhiều người mẫu nổi tiếng..
                                            <a href="#">xem thêm</a>
                                        </p>
                                    </li>
                                    <li>
                                        <h4><a href="https://nhatrangtoday.vn/tour-lan-bien-nha-trang-post716">Tour Lặn Biển Nha Trang</a></h4>
                                        <span>May 29, 2023</span>
                                        <p>
                                            Tour lặn biển Nha Trang này là tour lặn ngắm san hô được tổ chức hằng ngày dưới hình thức ghép đoàn. Người Biết Bơi hay không đều lặn được. Tour này đặc biệt rất thích hợp với những du khách muốn có nhiều thời gian để bơi lặn, khám phá đại dương và hòa mình cũng hàng ngàn loài san hô quý tại Khu Bảo Tồn Hòn Mun Nha Trang. Tour có nhiều lịch trình, có thể kết hợp tham quan đảo hoặc đi bộ dưới biển để quý khách lựa chọn..
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="sidebar">
                    <div class="section">
                        <a href="rooms.blade.php"><img src="images/rooms.png" alt="Img"></a>
                    </div>
                    <div class="section">
                        <a href="dives.blade.php"><img src="images/dive-site.png" alt="Img"></a>
                    </div>
                    <div class="section">
                        <a href="foods.blade.php"><img src="images/food.png" alt="Img"></a>
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
@endsection
