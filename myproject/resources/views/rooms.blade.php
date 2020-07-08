<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Rooms - Bhaccasyoniztas Beach Resort Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
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
							<ul id="rooms">
								<li>
									<a href="{{ route('datphong') }}"><img src="images/first-class.jpg" alt="Img"></a>
									<h2><a href="#">First Class Room</a></h2>
									<p>
                                        Một căn hộ với đầy đủ tiện nghi bao gồm 1 phòng ngủ rộng rãi với view nhìn thẳng ra biển,phù hợp với hộ gia đình
                                    </p>
									<span class="rate">Rate: 220 / Day</span>
								</li>
								<li>
									<a href="{{ route('datphong') }}"><img src="images/deluxe.jpg" alt="Img"></a>
									<h2><a href="#">Deluxe Room</a></h2>
									<p>
                                        Căn phòng lý tưởng dành cho các cặp đôi, thích gần gũi với thiên nhiên
                                    </p>
									<span class="rate">Rate: 150 / Day</span>
								</li>
								<li>
									<a href="{{ route('datphong') }}"><img src="images/suite.jpg" alt="Img"></a>
									<h2><a href="#">Suite Room</a></h2>
									<p>
                                        1 căn nhà sàn lớn, phù hợp với các hội nhóm
                                    </p>
									<span class="rate">Rate: 180 / Day</span>
								</li>
                                <li>
                                    <a href="{{ route('datphong') }}">Đặt phòng</a>

                                </li>
							</ul>
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
</body>
</html>
