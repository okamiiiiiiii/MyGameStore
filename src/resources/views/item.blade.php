<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./img/favicon.png" type="image/gif" sizes="16x16" />
    <link
        rel="stylesheet"
        href="./library/bootstrap-5.0.0-beta1-dist/css/bootstrap.css"
    />
    <title>Mygames - Item</title>
    <script
        src="https://kit.fontawesome.com/d362bd76db.js"
        crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        type="text/css"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/item.css" />
    <link rel="stylesheet" href="./css/page-header-footer.css" />
    <link rel="stylesheet" href="./css/upper-footer.css" />
</head>
<body>
<header class="header container-fluid">
    <div class="width-90 margin-auto">
        <div class="d-flex justify-content-between main-header">
            <div class="logo">
                <a
                    href="/"
                    class="site-logo d-none d-sm-none d-md-none d-lg-block d-xl-block"
                    title="Mygames"
                >
                    <img src="./img/logo.png" alt="Mygames" />
                </a>
                <a
                    href="/"
                    class="site-logo d-block d-sm-block d-md-block d-lg-none d-xl-none"
                    title="Mygames"
                >
                    <img src="./img/logo-alt.png" alt="Mygames" />
                </a>
            </div>
            <div class="contents">
                <div class="contents-top d-flex align-items-center">
                    <form class="search d-flex align-items-center">
                        <input
                            type="text"
                            id="input_search"
                            name="search"
                            autocomplete="off"
                        />
                        <button type="button" onclick="input_display()">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                    <ul class="social-links d-flex align-items-center">
                        <li>
                            <a href="#" class="facebook" title="Facebook" target="_blank"
                            ><i class="fab fa-facebook-f"></i
                                ></a>
                        </li>
                        <li>
                            <a href="#" class="twitter" title="Twitter" target="_blank"
                            ><i class="fab fa-twitter"></i
                                ></a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="google-plus"
                                title="Google Plus"
                                target="_blank"
                            ><i class="fab fa-google-plus-g"></i
                                ></a>
                        </li>
                        <li>
                            <a href="#" class="youtube" title="YouTube" target="_blank"
                            ><i class="fab fa-youtube"></i
                                ></a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="instagram"
                                title="Instagram"
                                target="_blank"
                            ><i class="fab fa-instagram"></i
                                ></a>
                        </li>
                        <li>
                            <a href="#" class="twitch" title="Twitch" target="_blank"
                            ><i class="fab fa-twitch"></i
                                ></a>
                        </li>
                    </ul>
                    <div class="user-box d-flex align-items-center">
                        <a class="login-popup" title="Login">Login</a>
                        <a class="signup-popup" title="Sign Up">Sign Up</a>
                    </div>
                    <a href="" class="cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
                <nav class="main-navbar d-flex justify-content-end">
                    <ul class="navbar-menu">
                        <li class="nav-item"><a href="/">Trang chủ</a></li>
                        <li class="nav-item"><a href="products">Sản phẩm</a></li>
                        <li class="nav-item"><a href="#">About us</a></li>
                        <li class="nav-item"><a href="#">Blog</a></li>
                        <li class="nav-item"><a href="#">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="nav-shortcut">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</header>

<main class="container-fluid">
    <div id="overlay"></div>
    <div class="nav-mobi">
        <div class="nav-mobi-inner">
            <div class="nav-close-icon">
                <p>x</p>
            </div>
            <img src="./img/logo-alt.png" alt="" />
            <ul class="navmobi">
                <li><a href="/">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
            <ul class="mobi-social-links">
                <li>
                    <a href="#" class="facebook" title="Facebook" target="_blank"
                    ><i class="fab fa-facebook-f"></i
                        ></a>
                </li>
                <li>
                    <a href="#" class="twitter" title="Twitter" target="_blank"
                    ><i class="fab fa-twitter"></i
                        ></a>
                </li>
                <li>
                    <a
                        href="#"
                        class="google-plus"
                        title="Google Plus"
                        target="_blank"
                    ><i class="fab fa-google-plus-g"></i
                        ></a>
                </li>
                <li>
                    <a href="#" class="youtube" title="YouTube" target="_blank"
                    ><i class="fab fa-youtube"></i
                        ></a>
                </li>
                <li>
                    <a href="#" class="instagram" title="Instagram" target="_blank"
                    ><i class="fab fa-instagram"></i
                        ></a>
                </li>
                <li>
                    <a href="#" class="twitch" title="Twitch" target="_blank"
                    ><i class="fab fa-twitch"></i
                        ></a>
                </li>
            </ul>
            <div class="user-box mobi-user-box">
                <a class="login-popup login-popup-nav" title="Login">Login</a>
                <a class="signup-popup signup-popup-nav" title="Sign Up">Sign Up</a>
            </div>
        </div>
    </div>
    <div id="overlay-form"></div>
    <div class="login-wrapper">
        <div class="login-close">x</div>
        <div class="container login-form">
            <form action="" method="post">
                <div class="login-title">Login</div>
                <div class="login-content d-flex">
                    <input
                        type="text"
                        placeholder="Tên tài khoản"
                        name="uname"
                        required
                        autocomplete="off"
                    />
                    <input
                        type="text"
                        placeholder="Mật khẩu"
                        name="psw"
                        required
                        autocomplete="off"
                    />
                    <label>
                        <input type="checkbox" checked="checked" name="remember" />
                        Ghi nhớ Đăng nhập
                    </label>
                    <a href="">Đăng nhập</a>
                </div>
                <div class="login-bottom d-flex justify-content-between">
                    <a href="#">Bạn quên mật khẩu?</a>
                    <a href="#">Tạo tài khoản mới</a>
                </div>
            </form>
        </div>
    </div>
    <div class="login-wrapper signup-wrapper">
        <div class="login-close signup-close">x</div>
        <div class="container login-form">
            <form action="" method="post">
                <div class="login-title">Đăng kí</div>
                <div class="login-content d-flex">
                    <input
                        type="text"
                        placeholder="Tên đăng nhập"
                        name="uname"
                        required
                        autocomplete="off"
                    />
                    <input
                        type="text"
                        placeholder="Email"
                        name="email"
                        required
                        autocomplete="off"
                    />
                    <input
                        type="text"
                        placeholder="Mật khẩu"
                        name="psw"
                        required
                        autocomplete="off"
                    />
                    <input
                        type="text"
                        placeholder="Nhập lại mật khẩu"
                        name="re-psw"
                        required
                        autocomplete="off"
                    />
                    <a href="">Đăng kí</a>
                    <span
                    >Bạn đã có tài khoản?
                <a href="" class="login">Đăng nhập</a></span
                    >
                </div>
            </form>
        </div>
    </div>
    <div class="main-wrapper container-fluid">
        <div class="page-info container-fluid">
            <div class="page-info-inner width-90 margin-auto">
                <div class="page-title uppercase">ASSASSIN’S CREED: ORIGINS</div>
                <ul class="mybreadcrumb">
                    <li><a href="/">Trang chủ</a></li>
                    <li><a href="products">Sản phẩm</a></li>
                    <li><span>Giỏ hàng</span></li>
                </ul>
            </div>
        </div>
        <div class="main-content-wrapper margin-auto">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-sx-12 left-layout">
                    <div class="media-tab-content">
                        <div class="tab-panel active" role="tabpanel" id="image-gallery">
                            <div class="mySlides">
                                <img src="./img/gallery-1.jpg" style="width: 100%" />
                            </div>
                            <div class="mySlides">
                                <img src="./img/gallery-2.jpg" style="width: 100%" />
                            </div>
                            <div class="mySlides">
                                <img src="./img/gallery-3.jpg" style="width: 100%" />
                            </div>
                            <div class="mySlides">
                                <img src="./img/gallery-4.jpg" style="width: 100%" />
                            </div>
                            <div class="mySlides">
                                <img src="./img/gallery-5.jpg" style="width: 100%" />
                            </div>
                            <div class="mySlides">
                                <img src="./img/gallery-6.jpg" style="width: 100%" />
                            </div>
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            <div class="row">
                                <div class="column-img">
                                    <img
                                        class="demo cursor"
                                        src="./img/gallery-1.jpg"
                                        style="width: 100%"
                                        onclick="currentSlide(1)"
                                    />
                                </div>
                                <div class="column-img">
                                    <img
                                        class="demo cursor"
                                        src="./img/gallery-2.jpg"
                                        style="width: 100%"
                                        onclick="currentSlide(2)"
                                    />
                                </div>
                                <div class="column-img">
                                    <img
                                        class="demo cursor"
                                        src="./img/gallery-3.jpg"
                                        style="width: 100%"
                                        onclick="currentSlide(3)"
                                    />
                                </div>
                                <div class="column-img">
                                    <img
                                        class="demo cursor"
                                        src="./img/gallery-4.jpg"
                                        style="width: 100%"
                                        onclick="currentSlide(4)"
                                    />
                                </div>
                                <div class="column-img">
                                    <img
                                        class="demo cursor"
                                        src="./img/gallery-5.jpg"
                                        style="width: 100%"
                                        onclick="currentSlide(5)"
                                    />
                                </div>
                                <div class="column-img">
                                    <img
                                        class="demo cursor"
                                        src="./img/gallery-6.jpg"
                                        style="width: 100%"
                                        onclick="currentSlide(6)"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-box game-price">
                        <div class="top d-flex align-items-center justify-content-between">
                            <div class="content-box-title">Standard <span>Edition</span></div>
                            <i class="fab fa-windows"></i>
                        </div>
                        <p>GIÁ TỐT GIỮA TUẦN! Ưu đãi kết thúc trong 30 Tháng 3</p>
                        <div class="price">
                            <div class="percentage">-80%</div>
                            <div class="price-details">
                                <div class="price-1"><del>990.000đ</del></div>
                                <div class="price-2">198.000đ</div>
                            </div>
                            <div class="add-to-cart">
                                <a href="cart">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="content-box game-price">
                        <div class="top d-flex align-items-center justify-content-between">
                            <div class="content-box-title">Deluxe <span>Edition</span></div>
                            <i class="fab fa-windows"></i>
                        </div>
                        <p>GIÁ TỐT GIỮA TUẦN! Ưu đãi kết thúc trong 30 Tháng 3</p>
                        <div class="price">
                            <div class="percentage">-80%</div>
                            <div class="price-details">
                                <div class="price-1"><del>1.150.000đ</del></div>
                                <div class="price-2">231.000đ</div>
                            </div>
                            <div class="add-to-cart">
                                <a href="cart">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="content-box game-price">
                        <div class="top d-flex align-items-center justify-content-between">
                            <div class="content-box-title">Gold <span>Edition</span></div>
                            <i class="fab fa-windows"></i>
                        </div>
                        <p>GIÁ TỐT GIỮA TUẦN! Ưu đãi kết thúc trong 30 Tháng 3</p>
                        <div class="price">
                            <div class="percentage">-80%</div>
                            <div class="price-details">
                                <div class="price-1"><del>1.485.000đ</del></div>
                                <div class="price-2">297.000đ</div>
                            </div>
                            <div class="add-to-cart">
                                <a href="cart">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="content-box game-content">
                        <div class="content-box-title">Về <span>Trò chơi</span></div>
                        <p>Rốt cuộc sau hàng tháng trời khiến người chơi phải đoán già đoán non với những tin đồn đủ kiểu, sáng nay theo giờ Việt Nam (27-10-2017), tại buổi họp báo chính thức trước thềm E3 2017 của Microsoft, dòng game <b>Assassin’s Creed</b> đã chính thức trở lại với phiên bản mới. Đó chính là <b>Assassin’s Creed Origins</b>.</p>
                        <p>Đúng như các đồn đoán, <b>Assassin’s Creed Origins</b> sẽ có bối cảnh diễn ra tại Ai Cập cổ, nơi các Pharaoh vẫn nắm quyền trị vì đất nước của các Kim tự tháp. Cụ thể hơn, các sự kiện của <b>Assassin’s Creed Origins  </b> vào thời kỳ Đế quốc La Mã đã đặt chân đến Ai Cập và đang tìm cách dần dần khống chế đất nước này.</p>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/cUuKIpCM2o0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p>Nhân vật chính của game là Bayek – chiến binh lão luyện được xem như một trong “lá chắn” bảo hộ của Ai Cập và chính là người đã mở đường sáng lập hội Sát Thủ – <b>Assassin’s Brotherhood</b> – về sau này.</p>
                        <p>Bên cạnh thế giới mở rộng lớn, đa dạng mang “thương hiệu” Ubisoft trải dài từ những dải sa mạc khô cằn đến những ốc đảo xanh tươi, từ những con sóng bạc của Địa Trung Hải bao lao đến những kim tự tháp sừng sững trên cao nguyên Giza thần thánh, <b>Assassin’s Creed Origins</b> còn hứa hẹn mang đến sự cải tiến mạnh mẽ trong lối chơi của mình, đề cao sự tự do và khả năng triển khai các kế hoạch của người chơi cũng như cơ chế chiến đấu được làm mới một cách phù hợp với bước tiến của <b>Assassin’s Creed</b> trong phiên bản mới nhất này.</p>
                        <p>Mới đây, hãng game Pháp đã công bố chế độ chơi Discovery Tour (tên đầy đủ: Discovery Tour by Assassin’s Creed: Ancient Egypt) của <b>Assassin’s Creed Origins</b>. Đến với phiên bản <b>Assassin’s Creed</b> mới nhất vào đầu năm sau thông qua một bản cập nhật nội dung miễn phí, Discovery Tour là phần chơi thiên hoàn toàn về yếu tố giáo dục kết hợp giải trí, tập trung cung cấp cho người chơi các thông tin về lịch sử, địa lý, văn hóa,… của đất nước Ai Cập thời cổ đại khi cho phép bạn thoải mái “du lịch” trong thế giới của <b>Assassin’s Creed Origins</b> như một lữ khách thay vì một chiến binh.</p>
                        <p>Phỏng theo chính sử, thế giới của <b>Assassin’s Creed Origins</b> là nơi các thế lực chính trị và quân sự trong lẫn ngoài Ai Cập, đặc biệt là đế quốc La Mã hùng mạnh, tranh giành ảnh hưởng quyết liệt trong thời kỳ trị vì của Nữ Hoàng Cleopatra – vị Pharaoh cuối cùng của Ai Cập. Giữa hoàn cảnh lịch sử phức tạp đó, nhân vật chính Bayek sẽ đóng một vai trò quan trọng ảnh hưởng không nhỏ đến cán cân quyền lực ở đất nước của các Kim Tự Tháp cũng như có ảnh hưởng sâu sắc đến sự hình thành tổ chức Assassin.</p>
                    </div>
                    <div class="content-box system-requirements">
                        <div class="content-box-title">Cấu hình <span>Đề nghị</span></div>
                        <ul
                            class="nav d-flex"
                            id="games-platform"
                            role="tablist"
                        >
                            <li class="button-style-2 system-btn active uppercase">
                                <a data-toggle="tab" href="#system-windows" role="tab">Windows</a>
                            </li>
                            <li class="button-style-2 system-btn uppercase">
                                <a data-toggle="tab" href="#system-maxosx" role="tab"
                                >Mac OS X</a
                                >
                            </li>
                            <li class="button-style-2 system-btn uppercase">
                                <a data-toggle="tab" href="#system-linux" role="tab"
                                >Linux</a
                                >
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="system-windows">
                                <div class="item">
                                    <div class="list-name">Minimum<span>:</span></div>
                                    <ul>
                                        <li class="inline">
                                            <div class="title">OS<span>:</span></div>
                                            <div class="text">
                                                <p>Windows 10 64 Bit, Windows 8.1 64 Bit, Windows 8 64 Bit, Win 7 64 Bit</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Processor<span>:</span></div><div class="text">
                                                <p>Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs)</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Memory<span>:</span></div>
                                            <div class="text">
                                                <p>4 GB Ram</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Graphics<span>:</span></div><div class="text">
                                                <p>NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Storage<span>:</span></div>
                                            <div class="text">
                                                <p>72 GB available space</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Sound Card<span>:</span></div>
                                            <div class="text">
                                                <p>100% DirectX 10 compatible</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <div class="list-name">Recommended<span>:</span></div>
                                    <ul>
                                        <li class="inline">
                                            <div class="title">OS<span>:</span></div>
                                            <div class="text">
                                                <p>Windows 10 64 Bit, Windows 8.1 64 Bit, Windows 8 64 Bit, Win 7 64 Bit Service Pack 1</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Processor<span>:</span></div><div class="text">
                                                <p>Intel Core i5 3470 @ 3.2GHz (4 CPUs) / AMD X8 FX-8350 @ 4GHz (8 CPUs)</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Memory<span>:</span></div>
                                            <div class="text">
                                                <p>8 GB RAM</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Graphics<span>:</span></div><div class="text">
                                                <p>NVIDIA GTX 660 2GB / AMD HD 7870 2GB</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Storage<span>:</span></div>
                                            <div class="text">
                                                <p>72 GB available space</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Sound Card<span>:</span></div>
                                            <div class="text">
                                                <p>100% DirectX 10 compatible</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="system-maxosx">
                                <div class="item">
                                    <div class="list-name">Minimum<span>:</span></div>
                                    <ul>
                                        <li class="inline">
                                            <div class="title">OS<span>:</span></div>
                                            <div class="text">
                                                <p>MacOS X 10.8.5</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Processor<span>:</span></div><div class="text">
                                                <p>Intel Core i5 2.4 GHz</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Memory<span>:</span></div>
                                            <div class="text">
                                                <p>8 GB RAM</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Graphics<span>:</span></div><div class="text">
                                                <p>NVIDIA GeForce GT 640M</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Network<span>:</span></div>
                                            <div class="text">
                                                <p>Broadband Internet connection</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Storage<span>:</span></div>
                                            <div class="text">
                                                <p>7 GB available space</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <div class="list-name">Recommended<span>:</span></div>
                                    <ul>
                                        <li class="inline">
                                            <div class="title">OS<span>:</span></div>
                                            <div class="text">
                                                <p>MacOS X 10.8.5 or Newer</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Processor<span>:</span></div><div class="text">
                                                <p>Intel Core i7 2.4 GHz+</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Memory<span>:</span></div>
                                            <div class="text">
                                                <p>8 GB RAM</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Graphics<span>:</span></div><div class="text">
                                                <p>OpenGL 4.1 - ATI Radeon HD 5670, NVIDIA GeForce GT 640M</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Network<span>:</span></div>
                                            <div class="text">
                                                <p>Broadband Internet connection</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Storage<span>:</span></div>
                                            <div class="text">
                                                <p>7 GB available space</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="system-linux">
                                <div class="item">
                                    <div class="list-name">Minimum<span>:</span></div>
                                    <ul>
                                        <li class="inline">
                                            <div class="title">Processor<span>:</span></div>
                                            <div class="text">
                                                <p>2.4+ GHz Quad core</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Memory<span>:</span></div>
                                            <div class="text">
                                                <p>2 GB RAM</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Graphics<span>:</span></div><div class="text">
                                                <p>NVIDIA GTX 260 or ATI 4850</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Network<span>:</span></div>
                                            <div class="text">
                                                <p>Broadband Internet connection</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Storage<span>:</span></div>
                                            <div class="text">
                                                <p>7 GB available space</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <div class="list-name">Minimum<span>:</span></div>
                                    <ul>
                                        <li class="inline">
                                            <div class="title">Processor<span>:</span></div>
                                            <div class="text">
                                                <p>2.5+ GHz Quad core</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Memory<span>:</span></div>
                                            <div class="text">
                                                <p>4 GB RAM</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Graphics<span>:</span></div><div class="text">
                                                <p>NVIDIA GTX 260 or ATI 4850</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Network<span>:</span></div>
                                            <div class="text">
                                                <p>Broadband Internet connection</p>
                                            </div>
                                        </li>
                                        <li class="inline">
                                            <div class="title">Storage<span>:</span></div>
                                            <div class="text">
                                                <p>7 GB available space</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social">
                        <ul class="row social-share-links d-flex">
                            <li class="facebook">
                                <a href="">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Share on Facebook</span></a>
                            </li>
                            <li class="twitter">
                                <a href="">
                                    <i class="fab fa-twitter"></i>
                                    <span>Share on Twitter</span>
                                </a>
                            </li>
                            <li class="google-plus">
                                <a href="">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li class="pinterest">
                                <a href="">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </li>
                            <li class="linkedin">
                                <a href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li class="whatsapp">
                                <a href="">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                            <li class="envelope">
                                <a href="">
                                    <i class="far fa-envelope"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content-box comments-section">
                        <div class="content-box-title">Bình <span>Luận</span></div>
                        <div class="comment d-flex">
                            <div class="left">
                                <a class="avatar" href="">
                                    <img src="./img/avatar-1.png" alt="">
                                </a>
                            </div>
                            <div class="right">
                                <p class="username">
                                    <a href="">John Doe</a>
                                </p>
                                <p class="comment-text">Game rất cuốn. Chơi là ghiền</p>
                                <ul>
                                    <li>
                                        <i class="far fa-clock" aria-hidden="true"></i>
                                        <span>26.3.2021</span>
                                    </li>
                                    <li class="rep">
                                        <a href="#your-comment">
                                            <i class="fas fa-reply"></i>
                                            <span class="uppercase">Reply</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comment d-flex reply">
                            <div class="left">
                                <a class="avatar" href="">
                                    <img src="./img/avatar-2.png" alt="">
                                </a>
                            </div>
                            <div class="right">
                                <p class="username">
                                    <a href="">Johnny Depp</a>
                                </p>
                                <p class="comment-text">Game chơi rất cuốn hút, có nhiều thay đổi nhưng không hề mất chất, nhưng vẫn còn vài bug cần được fix lại, chung quy thì game rất ok.</p>
                                <ul>
                                    <li>
                                        <i class="far fa-clock" aria-hidden="true"></i>
                                        <span>26.3.2021</span>
                                    </li>
                                    <li class="rep">
                                        <a href="#your-comment">
                                            <i class="fas fa-reply"></i>
                                            <span class="uppercase">Reply</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comment d-flex reply">
                            <div class="left">
                                <a class="avatar" href="">
                                    <img src="./img/avatar-3.png" alt="">
                                </a>
                            </div>
                            <div class="right">
                                <p class="username">
                                    <a href="">Tom Cruise</a>
                                </p>
                                <p class="comment-text">Turns out Egypt was the best sandbox all along.</p>
                                <ul>
                                    <li>
                                        <i class="far fa-clock" aria-hidden="true"></i>
                                        <span>26.3.2021</span>
                                    </li>
                                    <li class="rep">
                                        <a href="#your-comment">
                                            <i class="fas fa-reply"></i>
                                            <span class="uppercase">Reply</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comment d-flex">
                            <div class="left">
                                <a class="avatar" href="">
                                    <img src="./img/avatar-1.png" alt="">
                                </a>
                            </div>
                            <div class="right">
                                <p class="username">
                                    <a href="">John Doe</a>
                                </p>
                                <p class="comment-text">Game rất cuốn. Chơi là ghiền</p>
                                <ul>
                                    <li>
                                        <i class="far fa-clock" aria-hidden="true"></i>
                                        <span>26.3.2021</span>
                                    </li>
                                    <li class="rep">
                                        <a href="#your-comment">
                                            <i class="fas fa-reply"></i>
                                            <span class="uppercase">Reply</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content-box your-comment" id="your-comment">
                        <div class="content-box-title">Bình Luận <span>Của Bạn</span></div>
                        <form action="" method="post" id="" class="comment-form">
                            <div class="form-textarea">
                                <textarea class="form-control" placeholder="Bình luận của bạn" rows="4"></textarea>
                            </div>
                            <div class="form-inputs">
                                <div class="name">
                                    <input class="form-control" placeholder="Tên" type="text" aria-required="true">
                                </div>
                                <div class="email">
                                    <input class="form-control" placeholder="Your Comment" type="text" aria-required="true">
                                </div>
                                <div class="button">
                                    <button type="button">Gửi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-sx-12 right-layout">
                    <div class="content-box game-details">
                        <div class="content-box-title">
                            Thông tin <span>Trò chơi</span>
                        </div>
                        <ul>
                            <li>
                                <div class="title">
                                    <i class="fas fa-tags" aria-hidden="true"></i
                                    ><span>Thể loại:</span>
                                </div>
                                <div class="content">
                                    <ul>
                                        <li>
                                            <p>Phiêu lưu,</p>
                                        </li>
                                        <li>
                                            <p>Hành động</p>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="far fa-clock" aria-hidden="true"></i
                                    ><span>Ngày ra mắt:</span>
                                </div>
                                <div class="content">
                                    <ul>
                                        <li>
                                            <p>27.12.2017</p>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="fas fa-cogs" aria-hidden="true"></i
                                    ><span>Nhà phát triển:</span>
                                </div>
                                <div class="content">
                                    <ul>
                                        <li>
                                            <p>Ubisoft Montreal</p>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="fas fa-globe" aria-hidden="true"></i
                                    ><span>Nhà phát hành:</span>
                                </div>
                                <div class="content">
                                    <ul>
                                        <li>
                                            <p>Ubisoft</p>
                                        </li>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="fas fa-tv" aria-hidden="true"></i
                                    ><span>Nền tảng:</span>
                                </div>
                                <div class="content">
                                    <ul>
                                        <li>
                                            <p>Steam,</p>
                                        </li>
                                        <li>
                                            <p>PlayStation 4</p>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="fas fa-users" aria-hidden="true"></i
                                    ><span>Chế độ:</span>
                                </div>
                                <div class="content">
                                    <ul>
                                        <li>
                                            <p>Co-op,</p>
                                        </li>
                                        <li>
                                            <p>Singleplayer</p>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="content-box poster">
                        <div class="content-box-title">Poster</div>
                        <img src="./img/poster.png" alt="">
                        <p>Ai Cập cổ đại, một vùng đất của sự hùng vĩ và đầy mưu mô, đang biến mất trong một cuộc chiến tranh giành quyền lực tàn nhẫn.</p>
                    </div>
                    <div class="content-box game-language">
                        <div class="content-box-title">Ngôn <span>ngữ</span></div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Ngôn ngữ</th>
                                <th scope="col">Giao diện</th>
                                <th scope="col">Âm thanh</th>
                                <th scope="col">Phụ đề</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Anh</th>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Đức</th>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Bồ Ban Nha</th>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Nhật Bản</th>
                                <td><i class="fas fa-check"></i></td>
                                <td></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">Tây Ban Nha</th>
                                <td></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="content-box pegi">
                        <div class="pegi-img">
                            <img src="./img/16.png" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <b>Quas, enim. Numquam magnam, nemo, fuga veniam earum ut libero</b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid newsletter">
            <form action="" method="get" class="newsletter-inner">
                <div
                    class="newsletter-wrapper d-flex justify-content-between align-items-center flex-wrap margin-auto width-90"
                >
                    <div class="item newsletter-title uppercase">newsletter</div>
                    <div class="item newsletter-input">
                        <input
                            type="text"
                            name="adress"
                            placeholder="Địa chỉ email của bạn"
                            autocomplete="off"
                        />
                    </div>
                    <div class="item newsletter-input">
                        <input
                            type="text"
                            name="last-name"
                            placeholder="Họ"
                            autocomplete="off"
                        />
                    </div>
                    <div class="item newsletter-input">
                        <input
                            type="text"
                            name="first-name"
                            placeholder="Tên"
                            autocomplete="off"
                        />
                    </div>
                    <div class="item submit">
                        <button type="submit">Gửi</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container-fluid social-media-section width-90 justify-content-between">
            <ul class="social-links d-flex justify-content-between">
                <li>
                    <a href="#" class="facebook" title="Facebook" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="twitter" title="Twitter" target="_blank">
                        <i class="fab fa-twitter"></i>
                        <span>Twitter</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="google-plus" title="Google Plus" target="_blank">
                        <i class="fab fa-google-plus-g"></i>
                        <span>Google Plus</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="youtube" title="YouTube" target="_blank">
                        <i class="fab fa-youtube"></i>
                        <span>Youtube</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="instagram" title="Instagram" target="_blank">
                        <i class="fab fa-instagram"></i>
                        <span>Instagram</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="twitch" title="Twitch" target="_blank">
                        <i class="fab fa-twitch"></i>
                        <span>Twitch</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</main>

<footer>
    <div class="footer-wrapper container-fluid">
        <div class="footer-inner width-90 margin-auto">
            <div class="row">
                <div class="column col-xs-12 col-sm-6 col-md-4">
                    <div class="section-title">Về <span>chúng tôi</span></div>
                    <div class="column-text">
                        <p>
                            Amet nisl purus in mollis nunc sed id. Commodo nulla facilisi
                            nullam vehicula ipsum a arcu cursus. Volutpat a tincidunt
                            vitae semper pellentesque diam volutpat.
                        </p>
                    </div>
                    <div class="footer-menu">
                        <ul>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="/">Trang chủ</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="products">Sản phẩm</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="">Về chúng tôi</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="">Blog</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column col-xs-12 col-sm-6 col-md-4">
                    <div class="section-title">Bài viết <span>mới nhất</span></div>
                    <div class="blog-news-item column-item d-flex">
                        <a href=""><img src="./img/blog-1.jpg" alt="" /></a>
                        <div class="column-item-text">
                            <div class="blog-news-title column-item-title">
                                <a href="">Trailer mới ra mắt!</a>
                            </div>
                            <ul>
                                <li class="date">
                                    <i class="far fa-clock"></i>
                                    <span>26/3/2020</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-news-item column-item d-flex">
                        <a href=""><img src="./img/blog-1.jpg" alt="" /></a>
                        <div class="column-item-text">
                            <div class="blog-news-title column-item-title">
                                <a href="">Trailer mới ra mắt!</a>
                            </div>
                            <ul>
                                <li class="date">
                                    <i class="far fa-clock"></i>
                                    <span>26/3/2020</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-news-item column-item d-flex">
                        <a href=""><img src="./img/blog-1.jpg" alt="" /></a>
                        <div class="column-item-text">
                            <div class="blog-news-title column-item-title">
                                <a href="">Trailer mới ra mắt!</a>
                            </div>
                            <ul>
                                <li class="date">
                                    <i class="far fa-clock"></i>
                                    <span>26/3/2020</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column col-xs-12 col-sm-6 col-md-4">
                    <div class="section-title">Ứng dụng <span>& Nền tảng</span></div>
                    <ul class="app-platform">
                        <li>
                            <a href="">
                                <i class="fab fa-apple"></i>
                                <div>
                                    <p>Mua ngay trên</p>
                                    <p class="platform-name">Apple Store</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-google-play"></i>
                                <div>
                                    <p>Mua ngay trên</p>
                                    <p class="platform-name">Google Play</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-steam-symbol"></i>
                                <div>
                                    <p>Mua ngay trên</p>
                                    <p class="platform-name">Steam</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-windows"></i>
                                <div>
                                    <p>Mua ngay trên</p>
                                    <p class="platform-name">WinStore</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-xbox"></i>
                                <div>
                                    <p>Mua ngay trên</p>
                                    <p class="platform-name">Xbox</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-playstation"></i>
                                <div>
                                    <p>Mua ngay trên</p>
                                    <p class="platform-name">Playstation</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="column col-xs-12 col-sm-6 col-md-4 d-lg-none">
                    <div class="section-title">Liên lạc <span>với tôi</span></div>
                    <ul class="our-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Đường Nguyễn Lương Bằng, Kiến An, Hải Phòng, Việt Nam</p>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <p>sonvu056@gmail.com</p>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <p>0326297095</p>
                        </li>
                    </ul>
                    <p class="our-info-content">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit
                        mollitia temporibus blanditiis, voluptatem ipsa maiores nobis
                        laudantium molestias laboriosam? Eius explicabo obcaecati iure
                        sit ad pariatur incidunt id facere dolores.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright container-fluid">
        <div class="width-90 margin-auto">
            <div
                class="copyright-inner d-flex align-items-center justify-content-between"
            >
                <div class="copyright-content">
                    <div class="copyright-logo">
                        <a href="/">
                            <img src="./img/logo.png" alt="" />
                        </a>
                    </div>
                    <div class="copyright-text">
                        Copyright © 2020 Vũ Hoàng Sơn - All rights reserved.
                    </div>
                </div>
                <div class="copyright-nav">
                    <ul>
                        <li>
                            <a href="/">Trang chủ</a>
                        </li>
                        <li>
                            <a href="">CSKH</a>
                        </li>
                        <li>
                            <a href="">Liên hệ</a>
                        </li>
                        <li>
                            <a href="">Quảng cáo</a>
                        </li>
                        <li>
                            <a href="">Phương thức hoạt động</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="./js/myjs.js"></script>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides((slideIndex += n));
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides((slideIndex = n));
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
</body>
</html>
