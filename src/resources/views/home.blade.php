<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./img/favicon.png" type="image/gif" sizes="16x16">
    <link
        rel="stylesheet"
        href="./library/bootstrap-5.0.0-beta1-dist/css/bootstrap.css"
    />
    <title>Mygames - Home</title>
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
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/upper-footer.css">
    <link rel="stylesheet" href="./css/page-header-footer.css">
</head>
<body>
<header class="header container-fluid">
    <div class="width-90 margin-auto">
        <div class="d-flex justify-content-between main-header">
            <div class="logo">
                <a href="index.html" class="site-logo d-none d-sm-none d-md-none d-lg-block d-xl-block" title="Mygames">
                    <img src="./img/logo.png" alt="Mygames" />
                </a>
                <a href="index.html" class="site-logo d-block d-sm-block d-md-block d-lg-none d-xl-none" title="Mygames">
                    <img src="./img/logo-alt.png" alt="Mygames" />
                </a>
            </div>
            <div class="contents">
                <div class="contents-top d-flex align-items-center">
                    <form class="search d-flex align-items-center">
                        <input type="text" id="input_search" name="search" autocomplete="off"/>
                        <button type="button" onclick="input_display()"><i class="fa fa-search"></i></button>
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
                    <div class="user-box d-flex align-items-center">
                        <a class="login-popup" title="Login">Login</a>
                        <a class="signup-popup" title="Sign Up">Sign Up</a>
                    </div>
                    <a href="cart" class="cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
                <nav class="main-navbar d-flex justify-content-end">
                    <ul class="navbar-menu">
                        <li class="nav-item"><a href="index.html">Trang chủ</a></li>
                        <li class="nav-item"><a href="products">Sản phẩm</a></li>
                        <li class="nav-item"><a href="#">About us</a></li>
                        <li class="nav-item"><a href="blogs">Blog</a></li>
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

<main>
    <div id="overlay"></div>
    <div class="nav-mobi">
        <div class="nav-mobi-inner">
            <div class="nav-close-icon">
                <p>x</p>
            </div>
            <img src="./img/logo-alt.png" alt="">
            <ul class="navmobi">
                <li><a href="index.html">Trang chủ</a></li>
                <li><a href="products">Sản phẩm</a></li>
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
                    <a class="signup-btn" href="">Đăng kí</a>
                    <span>Bạn đã có tài khoản? <a href="" class="login">Đăng nhập</a></span>
                </div>
            </form>
        </div>
    </div>
    <div class="wrapper">
        <div class="container-fluid slider">
            <div class="row main-row"></div>
            <div
                id="myCarousel"
                class="carousel slide carousel-fade"
                data-ride="carousel"
            >
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li
                        data-target="#myCarousel"
                        data-slide-to="0"
                        class="active"
                    ></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active slider-">
                        <img src="img/aco-slider.jpg" alt="tw3-slider" />
                        <div class="carousel-caption width-90 margin-auto">
                            <div>
                                <ul class="game-details d-flex justify-content-center">
                                    <li class="platform d-flex align-items-center">
                                        <i class="fas fa-tv"></i>
                                        <ul>
                                            <li>
                                                <a href="">Origin</a>
                                            </li>
                                            <li>
                                                <a href="">Playstation</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="gerne d-flex align-items-center">
                                        <i class="fas fa-tags"></i>
                                        <ul>
                                            <li>
                                                <a href="products">Hành động</a>
                                            </li>
                                            <li>
                                                <a href="products">Phiêu lưu</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="title">ASSASSIN’S CREED: ORIGINS</div>
                                <div class="text">
                                    Ai Cập cổ đại, một vùng đất của sự hùng vĩ và đầy mưu mô, đang biến mất trong một cuộc chiến tranh giành quyền lực tàn nhẫn. Khám phá những bí mật đen tối và những huyền thoại bị lãng quên khi bạn quay lại thời điểm thành lập duy nhất: Nguồn gốc của Assassin’s Brotherhood.
                                </div>
                                <div class="button d-flex justify-content-center">
                                    <div class="slider-button button-style">
                                        <a href="item">Chi tiết</a>
                                    </div>
                                    <div class="slider-button button-style">
                                        <a href="cart">Mua ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/tw3-slider.jpg" alt="aco-slider" />
                        <div class="carousel-caption">
                            <ul class="game-details d-flex justify-content-center">
                                <li class="platform d-flex align-items-center">
                                    <i class="fas fa-tv"></i>
                                    <ul>
                                        <li>
                                            <a href="">Playstation</a>
                                        </li>
                                        <li>
                                            <a href="">Steam</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="gerne d-flex align-items-center">
                                    <i class="fas fa-tags"></i>
                                    <ul>
                                        <li>
                                            <a href="products">Hành động</a>
                                        </li>
                                        <li>
                                            <a href="products">Phiêu lưu</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="title">THE WITCHER 3</div>
                            <div class="text">
                                Khi chiến tranh bùng nổ khắp Vương quốc phía Bắc, bạn thực hiện hợp đồng lớn nhất trong đời mình - truy tìm Đứa trẻ của lời tiên tri, một vũ khí sống có thể thay đổi bố cục của thế giới.
                            </div>
                            <div class="button d-flex justify-content-center">
                                <div class="button-style">
                                    <a href="item">Chi tiết</a>
                                </div>
                                <div class="button-style">
                                    <a href="cart">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img
                            src="img/cyberpunk2077-slider.jpg"
                            alt="cyberpunk2077-slider"
                        />
                        <div class="carousel-caption">
                            <ul class="game-details d-flex justify-content-center">
                                <li class="platform d-flex align-items-center">
                                    <i class="fas fa-tv"></i>
                                    <ul>
                                        <li>
                                            <a href="products">Playstation</a>
                                        </li>
                                        <li>
                                            <a href="products">Steam</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="gerne d-flex align-items-center">
                                    <i class="fas fa-tags"></i>
                                    <ul>
                                        <li>
                                            <a href="products">Hành động</a>
                                        </li>
                                        <li>
                                            <a href="products">Phiêu lưu</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="title">CYBERPUNK 2077</div>
                            <div class="text">
                                Cyberpunk 2077 là một câu chuyện phiêu lưu hành động, thế giới mở lấy bối cảnh ở Thành phố Đêm, một siêu đại nhân bị ám ảnh bởi sức mạnh, sự quyến rũ và sự thay đổi cơ thể. Bạn vào vai V, một lính đánh thuê sống ngoài vòng pháp luật đang theo đuổi một bộ phận cấy ghép có một không hai, chìa khóa dẫn đến sự bất tử.
                            </div>
                            <div class="button d-flex justify-content-center">
                                <div class="button-style">
                                    <a href="item">Chi tiết</a>
                                </div>
                                <div class="button-style">
                                    <a href="cart">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid main-content d-flex flex-wrap width-90">
        <div class="col-sm-12 col-md-4">
            <div class="main-content-item" id="main-content-item-1">
                <div class="inner">
                    <div class="content-title uppercase">Sản phẩm</div>
                    <div class="name uppercase">Mygame</div>
                    <div class="text">
                        Với nhiều lựa chọn từ AAA cho đến indie, thuộc mọi thể loại. Hãy tận hưởng các ưu đãi độc quyền, tự động cập nhật, cùng các tính năng tuyệt vời khác.
                    </div>
                    <div class="button-style-1 uppercase d-flex">
                        <a href="products">Sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="main-content-item" id="main-content-item-2">
                <div class="inner">
                    <div class="content-title uppercase">Đội ngũ phát triển</div>
                    <div class="name uppercase">Mygame</div>
                    <div class="text">
                        Mygames là website phân phối sản phẩm về Game bản quyền, Phần mềm, tiện ích hàng đầu Việt Nam.
                    </div>
                    <div class="button-style-1 uppercase d-flex">
                        <a href="">Đọc thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="main-content-item" id="main-content-item-3">
                <div class="inner">
                    <div class="content-title uppercase">Tài liệu & Hướng dẫn</div>
                    <div class="name uppercase">FAQ</div>
                    <div class="text">
                        Các câu hỏi thường gặp
                    </div>
                    <div class="button-style-1 uppercase d-flex">
                        <a href="">Liên hệ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid categorized-games width-90">
        <ul
            class="nav categorized-games-tab d-flex justify-content-center"
            id="games-platform"
            role="tablist"
        >
            <li class="button-style-2 platform-btn active uppercase">
                <a data-toggle="tab" href="#categorized-all" role="tab">Tất cả</a>
            </li>
            <li class="button-style-2 platform-btn uppercase">
                <a data-toggle="tab" href="#categorized-origin" role="tab"
                >Origin</a
                >
            </li>
            <li class="button-style-2 platform-btn uppercase">
                <a data-toggle="tab" href="#categorized-playstation" role="tab"
                >Playstation</a
                >
            </li>
            <li class="button-style-2 platform-btn uppercase">
                <a data-toggle="tab" href="#categorized-steam" role="tab"
                >Steam</a
                >
            </li>
            <li class="button-style-2 platform-btn uppercase">
                <a data-toggle="tab" href="#categorized-uplay" role="tab"
                >Uplay</a
                >
            </li>
            <li class="button-style-2 platform-btn uppercase">
                <a data-toggle="tab" href="#categorized-xbox" role="tab"
                >Xbox one</a
                >
            </li>
        </ul>
        <div class="tab-content categorized-games-tab-content">
            <div role="tabpanel" class="tab-pane active" id="categorized-all">
                <div class="game-list d-flex flex-wrap justify-content-between">
                    <div class="game col-sm-6 col-md-3">
                        <div class="poster">
                            <a href="item" title="Dead Space 3">
                                <img src="./img/item1.jpg" alt="Dead Space 3" />
                            </a>
                            <div class="gerne d-flex align-items-center uppercase">
                                <ul>
                                    <li>
                                        <a href="products" title="Adventure">Phiêu lưu</a>
                                    </li>
                                    <li>
                                        <a href="products" title="FPS">FPS</a>
                                    </li>
                                </ul>
                                <i class="fas fa-tags"></i>
                            </div>
                        </div>
                        <div class="content">
                            <div class="game-title uppercase">
                                <a href="item" title="Dead Space 3">Dead space 3</a>
                            </div>
                            <ul class="game-detail">
                                <li class="platform d-flex align-items-center">
                                    <i class="fas fa-tv"></i>
                                    <ul>
                                        <li>
                                            <a href="products" title="Steam">Steam</a>
                                        </li>
                                        <li>
                                            <a href="products" title="Playstation">Playstation</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="summary">
                                Consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt laoreet
                            </div>
                        </div>
                    </div>
                    <div class="game col-sm-6 col-md-3">
                        <div class="poster">
                            <a href="item" title="Dead Space 3">
                                <img src="./img/item2.jpg" alt="Dead Space 3" />
                            </a>
                            <div class="gerne d-flex align-items-center uppercase">
                                <ul>
                                    <li>
                                        <a href="products" title="Adventure">Phiêu lưu</a>
                                    </li>
                                    <li>
                                        <a href="products" title="FPS">FPS</a>
                                    </li>
                                </ul>
                                <i class="fas fa-tags"></i>
                            </div>
                        </div>
                        <div class="content">
                            <div class="game-title uppercase">
                                <a href="item" title="Dead Space 3">Game 2</a>
                            </div>
                            <ul class="game-detail">
                                <li class="platform d-flex align-items-center">
                                    <i class="fas fa-tv"></i>
                                    <ul>
                                        <li>
                                            <a href="products" title="Steam">Steam</a>
                                        </li>
                                        <li>
                                            <a href="products" title="Playstation">Playstation</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="summary">
                                Consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt laoreet
                            </div>
                        </div>
                    </div>
                    <div class="game col-sm-6 col-md-3">
                        <div class="poster">
                            <a href="item" title="Dead Space 3">
                                <img src="./img/item3.jpg" alt="Dead Space 3" />
                            </a>
                            <div class="gerne d-flex align-items-center uppercase">
                                <ul>
                                    <li>
                                        <a href="products" title="Adventure">Phiêu lưu</a>
                                    </li>
                                    <li>
                                        <a href="products" title="FPS">FPS</a>
                                    </li>
                                </ul>
                                <i class="fas fa-tags"></i>
                            </div>
                        </div>
                        <div class="content">
                            <div class="game-title uppercase">
                                <a href="item" title="Dead Space 3">Game 3</a>
                            </div>
                            <ul class="game-detail">
                                <li class="platform d-flex align-items-center">
                                    <i class="fas fa-tv"></i>
                                    <ul>
                                        <li>
                                            <a href="products" title="Steam">Steam</a>
                                        </li>
                                        <li>
                                            <a href="products" title="Playstation">Playstation</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="summary">
                                Consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt laoreet
                            </div>
                        </div>
                    </div>
                    <div class="game col-sm-6 col-md-3">
                        <div class="poster">
                            <a href="item" title="Dead Space 3">
                                <img src="./img/item4.jpg" alt="Dead Space 3" />
                            </a>
                            <div class="gerne d-flex align-items-center uppercase">
                                <ul>
                                    <li>
                                        <a href="products" title="Adventure">Phiêu lưu</a>
                                    </li>
                                    <li>
                                        <a href="products" title="FPS">FPS</a>
                                    </li>
                                </ul>
                                <i class="fas fa-tags"></i>
                            </div>
                        </div>
                        <div class="content">
                            <div class="game-title uppercase">
                                <a href="item" title="Dead Space 3">Game 4</a>
                            </div>
                            <ul class="game-detail">
                                <li class="platform d-flex align-items-center">
                                    <i class="fas fa-tv"></i>
                                    <ul>
                                        <li>
                                            <a href="products" title="Steam">Steam</a>
                                        </li>
                                        <li>
                                            <a href="products" title="Playstation">Playstation</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="summary">
                                Consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt laoreet
                            </div>
                        </div>
                    </div>
                    <div class="game col-sm-6 col-md-3">
                        <div class="poster">
                            <a href="item" title="Dead Space 3">
                                <img src="./img/item1.jpg" alt="Dead Space 3" />
                            </a>
                            <div class="gerne d-flex align-items-center uppercase">
                                <ul>
                                    <li>
                                        <a href="products" title="Adventure">Phiêu lưu</a>
                                    </li>
                                    <li>
                                        <a href="products" title="FPS">FPS</a>
                                    </li>
                                </ul>
                                <i class="fas fa-tags"></i>
                            </div>
                        </div>
                        <div class="content">
                            <div class="game-title uppercase">
                                <a href="item" title="Dead Space 3">Dead space 3</a>
                            </div>
                            <ul class="game-detail">
                                <li class="platform d-flex align-items-center">
                                    <i class="fas fa-tv"></i>
                                    <ul>
                                        <li>
                                            <a href="products" title="Steam">Steam</a>
                                        </li>
                                        <li>
                                            <a href="products" title="Playstation">Playstation</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="summary">
                                Consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt laoreet
                            </div>
                        </div>
                    </div>
                    <div class="game col-sm-6 col-md-3">
                        <div class="poster">
                            <a href="item" title="Dead Space 3">
                                <img src="./img/item2.jpg" alt="Dead Space 3" />
                            </a>
                            <div class="gerne d-flex align-items-center uppercase">
                                <ul>
                                    <li>
                                        <a href="products" title="Adventure">Phiêu lưu</a>
                                    </li>
                                    <li>
                                        <a href="products" title="FPS">FPS</a>
                                    </li>
                                </ul>
                                <i class="fas fa-tags"></i>
                            </div>
                        </div>
                        <div class="content">
                            <div class="game-title uppercase">
                                <a href="item" title="Dead Space 3">Game 2</a>
                            </div>
                            <ul class="game-detail">
                                <li class="platform d-flex align-items-center">
                                    <i class="fas fa-tv"></i>
                                    <ul>
                                        <li>
                                            <a href="products" title="Steam">Steam</a>
                                        </li>
                                        <li>
                                            <a href="products" title="Playstation">Playstation</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="summary">
                                Consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt laoreet
                            </div>
                        </div>
                    </div>
                    <div class="game col-sm-6 col-md-3">
                        <div class="poster">
                            <a href="item" title="Dead Space 3">
                                <img src="./img/item3.jpg" alt="Dead Space 3" />
                            </a>
                            <div class="gerne d-flex align-items-center uppercase">
                                <ul>
                                    <li>
                                        <a href="products" title="Adventure">Phiêu lưu</a>
                                    </li>
                                    <li>
                                        <a href="products" title="FPS">FPS</a>
                                    </li>
                                </ul>
                                <i class="fas fa-tags"></i>
                            </div>
                        </div>
                        <div class="content">
                            <div class="game-title uppercase">
                                <a href="item" title="Dead Space 3">Game 3</a>
                            </div>
                            <ul class="game-detail">
                                <li class="platform d-flex align-items-center">
                                    <i class="fas fa-tv"></i>
                                    <ul>
                                        <li>
                                            <a href="products" title="Steam">Steam</a>
                                        </li>
                                        <li>
                                            <a href="products" title="Playstation">Playstation</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="summary">
                                Consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt laoreet
                            </div>
                        </div>
                    </div>
                    <div class="game col-sm-6 col-md-3">
                        <div class="poster">
                            <a href="item" title="Dead Space 3">
                                <img src="./img/item4.jpg" alt="Dead Space 3" />
                            </a>
                            <div class="gerne d-flex align-items-center uppercase">
                                <ul>
                                    <li>
                                        <a href="products" title="Adventure">Phiêu lưu</a>
                                    </li>
                                    <li>
                                        <a href="products" title="FPS">FPS</a>
                                    </li>
                                </ul>
                                <i class="fas fa-tags"></i>
                            </div>
                        </div>
                        <div class="content">
                            <div class="game-title uppercase">
                                <a href="item" title="Dead Space 3">Game 4</a>
                            </div>
                            <ul class="game-detail">
                                <li class="platform d-flex align-items-center">
                                    <i class="fas fa-tv"></i>
                                    <ul>
                                        <li>
                                            <a href="products" title="Steam">Steam</a>
                                        </li>
                                        <li>
                                            <a href="products" title="Playstation">Playstation</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="summary">
                                Consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt laoreet
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-style-2 game-list-button d-flex justify-content-center uppercase">
                    <a href="products">Tất cả trò chơi</a>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="categorized-origin">
                <div class="game-list d-flex flex-wrap">
                    <div class="game col-sm-6 col-md-3">
                        <div class="poster">
                            <a href="item" title="Dead Space 3">
                                <img src="./img/item1.jpg" alt="Dead Space 3" />
                            </a>
                            <div class="gerne d-flex align-items-center uppercase">
                                <ul>
                                    <li>
                                        <a href="products" title="Adventure">Phiêu lưu</a>
                                    </li>
                                    <li>
                                        <a href="products" title="FPS">FPS</a>
                                    </li>
                                </ul>
                                <i class="fas fa-tags"></i>
                            </div>
                        </div>
                        <div class="content">
                            <div class="game-title uppercase">
                                <a href="item" title="Dead Space 3">Dead space 3</a>
                            </div>
                            <ul class="game-detail">
                                <li class="platform d-flex align-items-center">
                                    <i class="fas fa-tv"></i>
                                    <ul>
                                        <li>
                                            <a href="products" title="Steam">Steam</a>
                                        </li>
                                        <li>
                                            <a href="products" title="Playstation">Playstation</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="summary">
                                Consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt laoreet
                            </div>
                        </div>
                    </div>
                    <div class="game col-sm-6 col-md-3">
                        <div class="poster">
                            <a href="item" title="Dead Space 3">
                                <img src="./img/item2.jpg" alt="Dead Space 3" />
                            </a>
                            <div class="gerne d-flex align-items-center uppercase">
                                <ul>
                                    <li>
                                        <a href="products" title="Adventure">Phiêu lưu</a>
                                    </li>
                                    <li>
                                        <a href="products" title="FPS">FPS</a>
                                    </li>
                                </ul>
                                <i class="fas fa-tags"></i>
                            </div>
                        </div>
                        <div class="content">
                            <div class="game-title uppercase">
                                <a href="item" title="Dead Space 3">Game 2</a>
                            </div>
                            <ul class="game-detail">
                                <li class="platform d-flex align-items-center">
                                    <i class="fas fa-tv"></i>
                                    <ul>
                                        <li>
                                            <a href="products" title="Steam">Steam</a>
                                        </li>
                                        <li>
                                            <a href="products" title="Playstation">Playstation</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="summary">
                                Consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt laoreet
                            </div>
                        </div>
                    </div>
                    <div class="game col-sm-6 col-md-3">
                        <div class="poster">
                            <a href="item" title="Dead Space 3">
                                <img src="./img/item3.jpg" alt="Dead Space 3" />
                            </a>
                            <div class="gerne d-flex align-items-center uppercase">
                                <ul>
                                    <li>
                                        <a href="products" title="Adventure">Phiêu lưu</a>
                                    </li>
                                    <li>
                                        <a href="products" title="FPS">FPS</a>
                                    </li>
                                </ul>
                                <i class="fas fa-tags"></i>
                            </div>
                        </div>
                        <div class="content">
                            <div class="game-title uppercase">
                                <a href="item" title="Dead Space 3">Game 3</a>
                            </div>
                            <ul class="game-detail">
                                <li class="platform d-flex align-items-center">
                                    <i class="fas fa-tv"></i>
                                    <ul>
                                        <li>
                                            <a href="products" title="Steam">Steam</a>
                                        </li>
                                        <li>
                                            <a href="products" title="Playstation">Playstation</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="summary">
                                Consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt laoreet
                            </div>
                        </div>
                    </div>
                    <div class="game col-sm-6 col-md-3">
                        <div class="poster">
                            <a href="item" title="Dead Space 3">
                                <img src="./img/item4.jpg" alt="Dead Space 3" />
                            </a>
                            <div class="gerne d-flex align-items-center uppercase">
                                <ul>
                                    <li>
                                        <a href="products" title="Adventure">Phiêu lưu</a>
                                    </li>
                                    <li>
                                        <a href="products" title="FPS">FPS</a>
                                    </li>
                                </ul>
                                <i class="fas fa-tags"></i>
                            </div>
                        </div>
                        <div class="content">
                            <div class="game-title uppercase">
                                <a href="item" title="Dead Space 3">Game 4</a>
                            </div>
                            <ul class="game-detail">
                                <li class="platform d-flex align-items-center">
                                    <i class="fas fa-tv"></i>
                                    <ul>
                                        <li>
                                            <a href="products" title="Steam">Steam</a>
                                        </li>
                                        <li>
                                            <a href="products" title="Playstation">Playstation</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="summary">
                                Consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt laoreet
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-style-2 game-list-button d-flex justify-content-center uppercase">
                    <a href="">Tất cả trò chơi Origin</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid game-search">
        <form action="" method="get">
            <div class="container-fluid game-search-wrapper width-90">
                <div class="inner-item d-flex justify-content-between align-items-center">
                    <div class="item game-title uppercase">Mygames</div>
                    <div class="item game-keyword">
                        <input type="text" name="keyword" placeholder="Từ khóa" autocomplete="off">
                    </div>
                    <div class="item game-platform">
                        <select class="form-select" aria-label="Default select example" p>
                            <option class="select-option" selected>Nền tảng</option>
                            <option class="select-option" value="1">Mac OS X</option>
                            <option class="select-option" value="2">Microsoft Windows</option>
                            <option class="select-option" value="3">Origin</option>
                            <option class="select-option" value="4">Playstation 4</option>
                            <option class="select-option" value="5">Steam</option>
                            <option class="select-option" value="6">Uplay</option>
                            <option class="select-option" value="7">Xbox One</option>
                        </select>
                    </div>
                    <div class="item game-gerne">
                        <select class="form-select" aria-label="Default select example" p>
                            <option class="select-option" selected>Thể loại</option>
                            <option class="select-option" value="1">Hành động</option>
                            <option class="select-option" value="2">Phiêu lưu</option>
                            <option class="select-option" value="3">FPS</option>
                            <option class="select-option" value="4">Đua xe</option>
                            <option class="select-option" value="5">Nhập vai</option>
                            <option class="select-option" value="6">Giả lập</option>
                            <option class="select-option" value="7">Thể thao</option>
                            <option class="select-option" value="8">Chiến thuật</option>
                            <option class="select-option" value="9">Thẻ bài</option>
                        </select>
                    </div>
                    <div class="item game-language">
                        <select class="form-select" aria-label="Default select example" p>
                            <option class="select-option" selected>Ngôn ngữ</option>
                            <option class="select-option" value="1">Tiếng Anh</option>
                            <option class="select-option" value="2">Tiếng Đức</option>
                            <option class="select-option" value="3">Tiếng Pháp</option>
                            <option class="select-option" value="4">Tiếng Nga</option>
                            <option class="select-option" value="5">Tiếng Việt</option>
                            <option class="select-option" value="6">Tiếng Nhật</option>
                        </select>
                    </div>
                    <div class="item submit">
                        <button type="submit">Tìm kiếm</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <div class="container-fluid other-content">
        <div class="other-content-inner">
            <div class="inner-text">
                <div class="text-title">
                    <p class="white">Total war: <br>Three Kingdoms </br> </p>
                    <p class="yellow">ra mắt!</p>
                </div>
                <div class="text-content white">
                    Amet nisl purus in mollis nunc sed id. Commodo nulla facilisi nullam vehicula ipsum a arcu cursus. Volutpat ac tincidunt vitae semper. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Ante metus dictum at tempor fames ac
                </div>
                <div class="button d-flex">
                    <div class="button-style-1 uppercase btn btn-left">
                        <a href="item">Xem thêm</a>
                    </div>
                    <div class="button-style-1 uppercase btn btn-right">
                        <a href="cart">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid featured-game width-90">
        <div class="section-title uppercase">Trò chơi <span>nổi bật</span></div>
        <div class="featured-game-content">
            <div class="feature-game-detail d-flex flex-wrap justify-content-between">
                <div class="game featured-game-item">
                    <div class="poster">
                        <a href=""><img src="./img/item1.jpg" alt="Dead Space 3" /></a>
                        <div class="poster-inner">
                            <div class="game-title uppercase white">Dead space 3</div>
                            <div class="featured-game-info d-flex align-items-center uppercase">
                                <ul>
                                    <i class="fas fa-tv"></i>
                                    <li>Steam</li>
                                    <li>Playstation 4</li>
                                </ul>
                                <ul>
                                    <i class="fas fa-tags"></i>
                                    <li>Phiêu lưu</li>
                                    <li>FPS</li>
                                </ul>
                            </div>
                        </div>
                        <div class="poster-hover game-title">Dead space 3</div>
                    </div>
                </div>
                <div class="game featured-game-item">
                    <div class="poster">
                        <a href=""><img src="./img/item1.jpg" alt="Dead Space 3" /></a>
                        <div class="poster-inner">
                            <div class="game-title uppercase white">Dead space 3</div>
                            <div class="featured-game-info d-flex align-items-center uppercase">
                                <ul>
                                    <i class="fas fa-tv"></i>
                                    <li>Steam</li>
                                    <li>Playstation 4</li>
                                </ul>
                                <ul>
                                    <i class="fas fa-tags"></i>
                                    <li>Phiêu lưu</li>
                                    <li>FPS</li>
                                </ul>
                            </div>
                        </div>
                        <div class="poster-hover game-title">Dead space 3</div>
                    </div>
                </div>
                <div class="game featured-game-item">
                    <div class="poster">
                        <a href=""><img src="./img/item1.jpg" alt="Dead Space 3" /></a>
                        <div class="poster-inner">
                            <div class="game-title uppercase white">Dead space 3</div>
                            <div class="featured-game-info d-flex align-items-center uppercase">
                                <ul>
                                    <i class="fas fa-tv"></i>
                                    <li>Steam</li>
                                    <li>Playstation 4</li>
                                </ul>
                                <ul>
                                    <i class="fas fa-tags"></i>
                                    <li>Phiêu lưu</li>
                                    <li>FPS</li>
                                </ul>
                            </div>
                        </div>
                        <div class="poster-hover game-title">Dead space 3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid blog-news-wrapper">
        <div class="width-90 margin-auto">
            <div class="section-title uppercase">Bài viết <span>& Tin tức</span></div>
            <div class="blog-news d-flex flex-wrap justify-content-between mar">
                <div class="blog-news-item">
                    <a href="blog-item"><img src="./img/blog-1.jpg" alt=""></a>
                    <div class="blog-news-title">
                        <a href="">Trailer mới ra mắt!</a>
                    </div>
                    <div class="blog-news-content">Habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper massa sapien faucibus</div>
                    <ul class="d-flex flex-wrap">
                        <li class="blog-news-author">
                            <a href="">
                                <img src="./img/avatar-icon.png" alt="">
                                <span>John Doe</span>
                            </a>
                        </li>
                        <li class="type">
                            <i class="fas fa-folder-open"></i>
                            <a href="">Tin tức</a>
                        </li>
                        <li class="date">
                            <i class="fas fa-clock"></i>
                            <span>26/3/2020</span>
                        </li>
                    </ul>
                </div>
                <div class="blog-news-item">
                    <a href=""><img src="./img/blog-1.jpg" alt=""></a>
                    <div class="blog-news-title">
                        <a href="">Trailer mới ra mắt!</a>
                    </div>
                    <div class="blog-news-content">Habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper massa sapien faucibus</div>
                    <ul class="d-flex flex-wrap">
                        <li class="blog-news-author">
                            <a href="">
                                <img src="./img/avatar-icon.png" alt="">
                                <span>John Doe</span>
                            </a>
                        </li>
                        <li class="type">
                            <i class="fas fa-folder-open"></i>
                            <a href="">Tin tức</a>
                        </li>
                        <li class="date">
                            <i class="fas fa-clock"></i>
                            <span>26/3/2020</span>
                        </li>
                    </ul>
                </div>
                <div class="blog-news-item">
                    <a href=""><img src="./img/blog-1.jpg" alt=""></a>
                    <div class="blog-news-title">
                        <a href="">Trailer mới ra mắt!</a>
                    </div>
                    <div class="blog-news-content">Habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper massa sapien faucibus</div>
                    <ul class="d-flex flex-wrap">
                        <li class="blog-news-author">
                            <a href="">
                                <img src="./img/avatar-icon.png" alt="">
                                <span>John Doe</span>
                            </a>
                        </li>
                        <li class="type">
                            <i class="fas fa-folder-open"></i>
                            <a href="">Tin tức</a>
                        </li>
                        <li class="date">
                            <i class="fas fa-clock"></i>
                            <span>26/3/2020</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid other-content about-us">
        <div class="other-content-inner about-us-inner d-flex align-items-center">
            <div class="inner-img">
                <img src="./img/about-img.jpg" alt="">
            </div>
            <div class="inner-text">
                <div class="text-title">
                    <p class="white">Về chúng tôi</p>
                    <p class="yellow">Mygames</p>
                </div>
                <div class="text-content white">
                    Amet nisl purus in mollis nunc sed id. Commodo nulla facilisi nullam vehicula ipsum a arcu cursus. Volutpat ac tincidunt vitae semper. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Ante metus dictum at tempor fames ac
                </div>
                <div class="button d-flex">
                    <div class="button-style-1 uppercase btn btn-left">
                        <a href="">Đọc thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid game-shop width-90">
        <div class="section-title uppercase">Sản phẩm <span>khác</span>
        </div>
        <div class="game-shop-inner d-flex justify-content-between margin-auto">
            <div class="game-shop-item">
                <a href="">
                    <img src="./img/game-shop-1.jpg" alt="">
                </a>
                <a href="" class="game-shop-title uppercase">game pack dvd</a>
                <div class="game-shop-price">£56.00</div>
            </div>
            <div class="game-shop-item">
                <a href="">
                    <img src="./img/game-shop-1.jpg" alt="">
                </a>
                <a href="" class="game-shop-title uppercase">game pack dvd</a>
                <div class="game-shop-price">£56.00</div>
            </div>
            <div class="game-shop-item">
                <a href="">
                    <img src="./img/game-shop-1.jpg" alt="">
                </a>
                <a href="" class="game-shop-title uppercase">game pack dvd</a>
                <div class="game-shop-price">£56.00</div>
            </div>
        </div>
    </div>
    <div class="container-fluid newsletter">
        <form action="" method="get" class="newsletter-inner">
            <div class="newsletter-wrapper d-flex justify-content-between align-items-center flex-wrap margin-auto width-90">
                <div class="item newsletter-title uppercase">newsletter</div>
                <div class="item newsletter-input">
                    <input type="text" name="adress" placeholder="Địa chỉ email của bạn" autocomplete="off">
                </div>
                <div class="item newsletter-input">
                    <input type="text" name="last-name" placeholder="Họ" autocomplete="off">
                </div>
                <div class="item newsletter-input">
                    <input type="text" name="first-name" placeholder="Tên" autocomplete="off">
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
                <a
                    href="#"
                    class="google-plus"
                    title="Google Plus"
                    target="_blank"
                >
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
                                <a href="index.html">Trang chủ</a>
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
                        <div class="row">
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
                        </div>
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
            <div class="copyright-inner d-flex align-items-center justify-content-between">
                <div class="copyright-content">
                    <div class="copyright-logo">
                        <a href="index.html">
                            <img src="./img/logo.png" alt="">
                        </a>
                    </div>
                    <div class="copyright-text">Copyright © 2020 Vũ Hoàng Sơn - All rights reserved.</div>
                </div>
                <div class="copyright-nav">
                    <ul>
                        <li>
                            <a href="index.html">Trang chủ</a>
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
</body>
</html>