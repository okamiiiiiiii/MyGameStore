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
    <link rel="stylesheet" href="./css/blog.css" />
    <link rel="stylesheet" href="./css/blog-item.css">
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
                <li class="nav-item"><a href="/">Trang ch???</a></li>
                <li class="nav-item"><a href="products">S???n ph???m</a></li>
                <li class="nav-item"><a href="#">About us</a></li>
                <li class="nav-item"><a href="#">Blog</a></li>
                <li class="nav-item"><a href="#">Li??n h???</a></li>
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
            <li><a href="/">Trang ch???</a></li>
            <li><a href="#">S???n ph???m</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Li??n h???</a></li>
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
                placeholder="T??n t??i kho???n"
                name="uname"
                required
                autocomplete="off"
              />
              <input
                type="text"
                placeholder="M???t kh???u"
                name="psw"
                required
                autocomplete="off"
              />
              <label>
                <input type="checkbox" checked="checked" name="remember" />
                Ghi nh??? ????ng nh???p
              </label>
              <a href="">????ng nh???p</a>
            </div>
            <div class="login-bottom d-flex justify-content-between">
              <a href="#">B???n qu??n m???t kh???u?</a>
              <a href="#">T???o t??i kho???n m???i</a>
            </div>
          </form>
        </div>
      </div>
      <div class="login-wrapper signup-wrapper">
        <div class="login-close signup-close">x</div>
        <div class="container login-form">
          <form action="" method="post">
            <div class="login-title">????ng k??</div>
            <div class="login-content d-flex">
              <input
                type="text"
                placeholder="T??n ????ng nh???p"
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
                placeholder="M???t kh???u"
                name="psw"
                required
                autocomplete="off"
              />
              <input
                type="text"
                placeholder="Nh???p l???i m???t kh???u"
                name="re-psw"
                required
                autocomplete="off"
              />
              <a href="">????ng k??</a>
              <span
                >B???n ???? c?? t??i kho???n?
                <a href="" class="login">????ng nh???p</a></span
              >
            </div>
          </form>
        </div>
      </div>
      <div class="main-wrapper container-fluid">
        <div class="page-info container-fluid">
          <div class="page-info-inner width-90 margin-auto">
            <div class="page-title uppercase">ASSASSIN???S CREED: ORIGINS</div>
            <ul class="mybreadcrumb">
              <li><a href="/">Trang ch???</a></li>
              <li><a href="products">Blog</a></li>
              <li><span>Blog-item</span></li>
            </ul>
          </div>
        </div>
        <div class="main-content-wrapper margin-auto">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-sx-12 left-layout">
              <div class="media-tab-content">
                <div
                  class="tab-panel active"
                  role="tabpanel"
                  id="image-gallery"
                >
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
              <div class="content-box game-content">
                <div class="content-box-title">V??? <span>Tr?? ch??i</span></div>
                <p>
                  R???t cu???c sau h??ng th??ng tr???i khi???n ng?????i ch??i ph???i ??o??n gi??
                  ??o??n non v???i nh???ng tin ?????n ????? ki???u, s??ng nay theo gi??? Vi???t Nam
                  (27-10-2017), t???i bu???i h???p b??o ch??nh th???c tr?????c th???m E3 2017
                  c???a Microsoft, d??ng game <b>Assassin???s Creed</b> ???? ch??nh th???c
                  tr??? l???i v???i phi??n b???n m???i. ???? ch??nh l??
                  <b>Assassin???s Creed Origins</b>.
                </p>
                <p>
                  ????ng nh?? c??c ?????n ??o??n, <b>Assassin???s Creed Origins</b> s??? c??
                  b???i c???nh di???n ra t???i Ai C???p c???, n??i c??c Pharaoh v???n n???m quy???n
                  tr??? v?? ?????t n?????c c???a c??c Kim t??? th??p. C??? th??? h??n, c??c s??? ki???n
                  c???a <b>Assassin???s Creed Origins </b> v??o th???i k??? ????? qu???c La M??
                  ???? ?????t ch??n ?????n Ai C???p v?? ??ang t??m c??ch d???n d???n kh???ng ch??? ?????t
                  n?????c n??y.
                </p>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe
                    width="560"
                    height="315"
                    src="https://www.youtube.com/embed/cUuKIpCM2o0"
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                  ></iframe>
                </div>
                <p>
                  Nh??n v???t ch??nh c???a game l?? Bayek ??? chi???n binh l??o luy???n ???????c
                  xem nh?? m???t trong ???l?? ch???n??? b???o h??? c???a Ai C???p v?? ch??nh l??
                  ng?????i ???? m??? ???????ng s??ng l???p h???i S??t Th??? ???
                  <b>Assassin???s Brotherhood</b> ??? v??? sau n??y.
                </p>
                <p>
                  B??n c???nh th??? gi???i m??? r???ng l???n, ??a d???ng mang ???th????ng hi???u???
                  Ubisoft tr???i d??i t??? nh???ng d???i sa m???c kh?? c???n ?????n nh???ng ???c ?????o
                  xanh t????i, t??? nh???ng con s??ng b???c c???a ?????a Trung H???i bao lao ?????n
                  nh???ng kim t??? th??p s???ng s???ng tr??n cao nguy??n Giza th???n th??nh,
                  <b>Assassin???s Creed Origins</b> c??n h???a h???n mang ?????n s??? c???i
                  ti???n m???nh m??? trong l???i ch??i c???a m??nh, ????? cao s??? t??? do v?? kh???
                  n??ng tri???n khai c??c k??? ho???ch c???a ng?????i ch??i c??ng nh?? c?? ch???
                  chi???n ?????u ???????c l??m m???i m???t c??ch ph?? h???p v???i b?????c ti???n c???a
                  <b>Assassin???s Creed</b> trong phi??n b???n m???i nh???t n??y.
                </p>
                <img
                  src="./img/gallery-5.jpg"
                  alt=""
                  style="margin-bottom: 2rem"
                />
                <p>
                  M???i ????y, h??ng game Ph??p ???? c??ng b??? ch??? ????? ch??i Discovery Tour
                  (t??n ?????y ?????: Discovery Tour by Assassin???s Creed: Ancient
                  Egypt) c???a <b>Assassin???s Creed Origins</b>. ?????n v???i phi??n b???n
                  <b>Assassin???s Creed</b> m???i nh???t v??o ?????u n??m sau th??ng qua m???t
                  b???n c???p nh???t n???i dung mi???n ph??, Discovery Tour l?? ph???n ch??i
                  thi??n ho??n to??n v??? y???u t??? gi??o d???c k???t h???p gi???i tr??, t???p trung
                  cung c???p cho ng?????i ch??i c??c th??ng tin v??? l???ch s???, ?????a l??, v??n
                  h??a,??? c???a ?????t n?????c Ai C???p th???i c??? ?????i khi cho ph??p b???n tho???i
                  m??i ???du l???ch??? trong th??? gi???i c???a
                  <b>Assassin???s Creed Origins</b> nh?? m???t l??? kh??ch thay v?? m???t
                  chi???n binh.
                </p>
                <p>
                  Ph???ng theo ch??nh s???, th??? gi???i c???a
                  <b>Assassin???s Creed Origins</b> l?? n??i c??c th??? l???c ch??nh tr???
                  v?? qu??n s??? trong l???n ngo??i Ai C???p, ?????c bi???t l?? ????? qu???c La M??
                  h??ng m???nh, tranh gi??nh ???nh h?????ng quy???t li???t trong th???i k??? tr???
                  v?? c???a N??? Ho??ng Cleopatra ??? v??? Pharaoh cu???i c??ng c???a Ai C???p.
                  Gi???a ho??n c???nh l???ch s??? ph???c t???p ????, nh??n v???t ch??nh Bayek s???
                  ????ng m???t vai tr?? quan tr???ng ???nh h?????ng kh??ng nh??? ?????n c??n c??n
                  quy???n l???c ??? ?????t n?????c c???a c??c Kim T??? Th??p c??ng nh?? c?? ???nh h?????ng
                  s??u s???c ?????n s??? h??nh th??nh t??? ch???c Assassin.
                </p>
              </div>
              <div class="social">
                <ul class="row social-share-links d-flex">
                  <li class="facebook">
                    <a href="">
                      <i class="fab fa-facebook-f"></i>
                      <span>Share on Facebook</span></a
                    >
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
              <div class="content-box author">
                <div class="content-box-title">t??c <span>gi???</span></div>
                <div class="comment d-flex">
                  <div class="left">
                    <a class="avatar" href="">
                      <img src="./img/avatar-1.png" alt="" />
                    </a>
                  </div>
                  <div class="right">
                    <ul class="author-social d-flex align-items-center">
                      <li>
                        <a
                          href="#"
                          class="facebook"
                          title="Facebook"
                          target="_blank"
                          ><i class="fab fa-facebook-f"></i
                        ></a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="twitter"
                          title="Twitter"
                          target="_blank"
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
                        <a
                          href="#"
                          class="instagram"
                          title="Instagram"
                          target="_blank"
                          ><i class="fab fa-instagram"></i
                        ></a>
                      </li>
                    </ul>
                    <p class="username">
                      <a href="">John Doe</a>
                    </p>
                    <p class="comment-text">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Quasi, enim expedita autem ullam nesciunt provident
                      voluptate laudantium similique suscipit magni dolore nemo
                      architecto, a, deleniti perferendis. Eveniet, asperiores.
                      Iure, molestias?
                    </p>
                  </div>
                </div>
              </div>
              <div class="content-box your-comment" id="your-comment">
                <div class="content-box-title">
                  B??nh Lu???n <span>C???a B???n</span>
                </div>
                <form action="" method="post" id="" class="comment-form">
                  <div class="form-textarea">
                    <textarea
                      class="form-control"
                      placeholder="B??nh lu???n c???a b???n"
                      rows="4"
                    ></textarea>
                  </div>
                  <div class="form-inputs">
                    <div class="name">
                      <input
                        class="form-control"
                        placeholder="T??n"
                        type="text"
                        aria-required="true"
                      />
                    </div>
                    <div class="email">
                      <input
                        class="form-control"
                        placeholder="Your Comment"
                        type="text"
                        aria-required="true"
                      />
                    </div>
                    <div class="button">
                      <button type="button">G???i</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-sx-12 right-layout">
              <div class="content-box">
                <div class="content-box-title">
                  B??i vi???t <span>M???i nh???t</span>
                </div>
                <div class="lateset-blog">
                  <div class="blog-news-item column-item d-flex">
                    <a href=""><img src="./img/blog-1.jpg" alt="" /></a>
                    <div class="column-item-text">
                      <div class="blog-news-title latest-blog-title">
                        <a href="">Trailer m???i ra m???t!</a>
                      </div>
                      <ul>
                        <li class="latest-blog-date">
                          <i class="far fa-clock"></i>
                          <span>26/3/2020</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="lateset-blog">
                  <div class="blog-news-item column-item d-flex">
                    <a href=""><img src="./img/blog-1.jpg" alt="" /></a>
                    <div class="column-item-text">
                      <div class="blog-news-title latest-blog-title">
                        <a href="">Trailer m???i ra m???t!</a>
                      </div>
                      <ul>
                        <li class="latest-blog-date">
                          <i class="far fa-clock"></i>
                          <span>26/3/2020</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="lateset-blog">
                  <div class="blog-news-item column-item d-flex">
                    <a href=""><img src="./img/blog-1.jpg" alt="" /></a>
                    <div class="column-item-text">
                      <div class="blog-news-title latest-blog-title">
                        <a href="">Trailer m???i ra m???t!</a>
                      </div>
                      <ul>
                        <li class="latest-blog-date">
                          <i class="far fa-clock"></i>
                          <span>26/3/2020</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="lateset-blog">
                  <div class="blog-news-item column-item d-flex">
                    <a href=""><img src="./img/blog-1.jpg" alt="" /></a>
                    <div class="column-item-text">
                      <div class="blog-news-title latest-blog-title">
                        <a href="">Trailer m???i ra m???t!</a>
                      </div>
                      <ul>
                        <li class="latest-blog-date">
                          <i class="far fa-clock"></i>
                          <span>26/3/2020</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="lateset-blog">
                  <div class="blog-news-item column-item d-flex">
                    <a href=""><img src="./img/blog-1.jpg" alt="" /></a>
                    <div class="column-item-text">
                      <div class="blog-news-title latest-blog-title">
                        <a href="">Trailer m???i ra m???t!</a>
                      </div>
                      <ul>
                        <li class="latest-blog-date">
                          <i class="far fa-clock"></i>
                          <span>26/3/2020</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="lateset-blog">
                  <div class="blog-news-item column-item d-flex">
                    <a href=""><img src="./img/blog-1.jpg" alt="" /></a>
                    <div class="column-item-text">
                      <div class="blog-news-title latest-blog-title">
                        <a href="">Trailer m???i ra m???t!</a>
                      </div>
                      <ul>
                        <li class="latest-blog-date">
                          <i class="far fa-clock"></i>
                          <span>26/3/2020</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="content-box category">
                <div class="content-box-title">Danh <span>m???c</span></div>
                <ul>
                  <li>eSport (1)</li>
                  <li>Matches (3)</li>
                  <li>News (4)</li>
                  <li>Reviews (6)</li>
                  <li>Videos (1)</li>
                </ul>
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
                  placeholder="?????a ch??? email c???a b???n"
                  autocomplete="off"
                />
              </div>
              <div class="item newsletter-input">
                <input
                  type="text"
                  name="last-name"
                  placeholder="H???"
                  autocomplete="off"
                />
              </div>
              <div class="item newsletter-input">
                <input
                  type="text"
                  name="first-name"
                  placeholder="T??n"
                  autocomplete="off"
                />
              </div>
              <div class="item submit">
                <button type="submit">G???i</button>
              </div>
            </div>
          </form>
        </div>
        <div
          class="container-fluid social-media-section width-90 justify-content-between"
        >
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
    </main>

    <footer>
      <div class="footer-wrapper container-fluid">
        <div class="footer-inner width-90 margin-auto">
          <div class="row">
            <div class="column col-xs-12 col-sm-6 col-md-4">
              <div class="section-title">V??? <span>ch??ng t??i</span></div>
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
                    <a href="/">Trang ch???</a>
                  </li>
                  <li>
                    <i class="fas fa-caret-right"></i>
                    <a href="products">S???n ph???m</a>
                  </li>
                  <li>
                    <i class="fas fa-caret-right"></i>
                    <a href="">V??? ch??ng t??i</a>
                  </li>
                  <li>
                    <i class="fas fa-caret-right"></i>
                    <a href="">Blog</a>
                  </li>
                  <li>
                    <i class="fas fa-caret-right"></i>
                    <a href="">Li??n h???</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="column col-xs-12 col-sm-6 col-md-4">
              <div class="section-title">B??i vi???t <span>m???i nh???t</span></div>
              <div class="blog-news-item column-item d-flex">
                <a href=""><img src="./img/blog-1.jpg" alt="" /></a>
                <div class="column-item-text">
                  <div class="blog-news-title column-item-title">
                    <a href="">Trailer m???i ra m???t!</a>
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
                    <a href="">Trailer m???i ra m???t!</a>
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
                    <a href="">Trailer m???i ra m???t!</a>
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
              <div class="section-title">???ng d???ng <span>& N???n t???ng</span></div>
              <ul class="app-platform">
                <li>
                  <a href="">
                    <i class="fab fa-apple"></i>
                    <div>
                      <p>Mua ngay tr??n</p>
                      <p class="platform-name">Apple Store</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fab fa-google-play"></i>
                    <div>
                      <p>Mua ngay tr??n</p>
                      <p class="platform-name">Google Play</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fab fa-steam-symbol"></i>
                    <div>
                      <p>Mua ngay tr??n</p>
                      <p class="platform-name">Steam</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fab fa-windows"></i>
                    <div>
                      <p>Mua ngay tr??n</p>
                      <p class="platform-name">WinStore</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fab fa-xbox"></i>
                    <div>
                      <p>Mua ngay tr??n</p>
                      <p class="platform-name">Xbox</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fab fa-playstation"></i>
                    <div>
                      <p>Mua ngay tr??n</p>
                      <p class="platform-name">Playstation</p>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="column col-xs-12 col-sm-6 col-md-4 d-lg-none">
              <div class="section-title">Li??n l???c <span>v???i t??i</span></div>
              <ul class="our-info">
                <li>
                  <i class="fas fa-map-marker-alt"></i>
                  <p>???????ng Nguy???n L????ng B???ng, Ki???n An, H???i Ph??ng, Vi???t Nam</p>
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
                Copyright ?? 2020 V?? Ho??ng S??n - All rights reserved.
              </div>
            </div>
            <div class="copyright-nav">
              <ul>
                <li>
                  <a href="/">Trang ch???</a>
                </li>
                <li>
                  <a href="">CSKH</a>
                </li>
                <li>
                  <a href="">Li??n h???</a>
                </li>
                <li>
                  <a href="">Qu???ng c??o</a>
                </li>
                <li>
                  <a href="">Ph????ng th???c ho???t ?????ng</a>
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
