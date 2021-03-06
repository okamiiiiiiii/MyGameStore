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
    <title>Mygames - Products</title>
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
    <link rel="stylesheet" href="./css/page-header-footer.css" />
    <link rel="stylesheet" href="./css/upper-footer.css">
    <link rel="stylesheet" href="./css/products.css" />
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
              <a href="cart" class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
              </a>
            </div>
            <nav class="main-navbar d-flex justify-content-end">
              <ul class="navbar-menu">
                <li class="nav-item"><a href="/">Trang ch???</a></li>
                <li class="nav-item"><a href="#">S???n ph???m</a></li>
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
    <main>
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
            <div class="page-title uppercase">S???n ph???m</div>
            <ul class="mybreadcrumb">
              <li><a href="/">Trang ch???</a></li>
              <li><span>S???n ph???m</span></li>
            </ul>
          </div>
        </div>
        <div class="container-fluid game-search">
          <form action="" method="get">
            <div class="container-fluid game-search-wrapper width-90">
              <div
                class="inner-item d-flex justify-content-between align-items-center"
              >
                <div class="item game-keyword">
                  <input
                    type="text"
                    name="keyword"
                    placeholder="T??? kh??a"
                    autocomplete="off"
                  />
                </div>
                <div class="item game-category">
                  <select
                    class="form-select"
                    aria-label="Default select example"
                    p
                  >
                    <option class="select-option" selected>Danh m???c</option>
                    <option class="select-option" value="1">
                      Early Access
                    </option>
                    <option class="select-option" value="2">
                      Free to play
                    </option>
                  </select>
                </div>
                <div class="item game-platform">
                  <select
                    class="form-select"
                    aria-label="Default select example"
                    p
                  >
                    <option class="select-option" selected>N???n t???ng</option>
                    <option class="select-option" value="1">Mac OS X</option>
                    <option class="select-option" value="2">
                      Microsoft Windows
                    </option>
                    <option class="select-option" value="3">Origin</option>
                    <option class="select-option" value="4">
                      Playstation 4
                    </option>
                    <option class="select-option" value="5">Steam</option>
                    <option class="select-option" value="6">Uplay</option>
                    <option class="select-option" value="7">Xbox One</option>
                  </select>
                </div>
                <div class="item game-gerne">
                  <select
                    class="form-select"
                    aria-label="Default select example"
                    p
                  >
                    <option class="select-option" selected>Th??? lo???i</option>
                    <option class="select-option" value="1">H??nh ?????ng</option>
                    <option class="select-option" value="2">Phi??u l??u</option>
                    <option class="select-option" value="3">FPS</option>
                    <option class="select-option" value="4">??ua xe</option>
                    <option class="select-option" value="5">Nh???p vai</option>
                    <option class="select-option" value="6">Gi??? l???p</option>
                    <option class="select-option" value="7">Th??? thao</option>
                    <option class="select-option" value="8">Chi???n thu???t</option>
                    <option class="select-option" value="9">Th??? b??i</option>
                  </select>
                </div>
                <div class="item game-language">
                  <select
                    class="form-select"
                    aria-label="Default select example"
                    p
                  >
                    <option class="select-option" selected>Ng??n ng???</option>
                    <option class="select-option" value="1">Ti???ng Anh</option>
                    <option class="select-option" value="2">Ti???ng ?????c</option>
                    <option class="select-option" value="3">Ti???ng Ph??p</option>
                    <option class="select-option" value="4">Ti???ng Nga</option>
                    <option class="select-option" value="5">Ti???ng Vi???t</option>
                    <option class="select-option" value="6">Ti???ng Nh???t</option>
                  </select>
                </div>
                <div class="item submit">
                  <button type="submit">T??m ki???m</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="gametab container-fluid">
          <div
            class="game-list d-flex flex-wrap justify-content-between width-90 margin-auto"
          >
            <div class="row">
              <div class="game col-sm-6 col-md-3">
                <div class="poster">
                  <a href="item" title="Dead Space 3">
                    <img src="./img/item1.jpg" alt="Dead Space 3" />
                  </a>
                  <div class="gerne d-flex align-items-center uppercase">
                    <ul>
                      <li>
                        <a href="" title="Adventure">Phi??u l??u</a>
                      </li>
                      <li>
                        <a href="" title="FPS">FPS</a>
                      </li>
                    </ul>
                    <i class="fas fa-tags"></i>
                  </div>
                </div>
                <div class="content">
                  <div class="game-title uppercase">
                    <a href="" title="Dead Space 3">Dead space 3</a>
                  </div>
                  <ul class="game-detail">
                    <li class="platform d-flex align-items-center">
                      <i class="fas fa-tv"></i>
                      <ul>
                        <li>
                          <a href="" title="Steam">Steam</a>
                        </li>
                        <li>
                          <a href="" title="Playstation">Playstation</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <div class="summary">
                    Journey across space to the icy planet of Tau Volantis with
                    Isaac Clarke and Sgt. John Carver to discover and destroy
                    the source of the Necromorph outbreak.
                  </div>
                </div>
              </div>
              <div class="game col-sm-6 col-md-3">
                <div class="poster">
                  <a href="" title="Call of Duty">
                    <img src="./img/item2.jpg" alt="Call of Duty" />
                  </a>
                  <div class="gerne d-flex align-items-center uppercase">
                    <ul>
                      <li>
                        <a href="" title="Action">H??nh ?????ng</a>
                      </li>
                      <li>
                        <a href="" title="FPS">FPS</a>
                      </li>
                    </ul>
                    <i class="fas fa-tags"></i>
                  </div>
                </div>
                <div class="content">
                  <div class="game-title uppercase">
                    <a href="" title="Call of Duty">World War II</a>
                  </div>
                  <ul class="game-detail">
                    <li class="platform d-flex align-items-center">
                      <i class="fas fa-tv"></i>
                      <ul>
                        <li>
                          <a href="" title="Steam">Steam</a>
                        </li>
                        <li>
                          <a href="" title="Playstation">Playstation</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <div class="summary">
                    Call of Duty?? returns to its roots with Call of Duty??: WWII
                    - a breathtaking experience that redefines World War II for
                    a new gaming generation.
                  </div>
                </div>
              </div>
              <div class="game col-sm-6 col-md-3">
                <div class="poster">
                  <a href="" title="Satisfactory">
                    <img src="./img/item3.jpg" alt="Satisfactory" />
                  </a>
                  <div class="gerne d-flex align-items-center uppercase">
                    <ul>
                      <li>
                        <a href="" title="Adventure">Phi??u l??u</a>
                      </li>
                      <li>
                        <a href="" title="Building">X??y d???ng</a>
                      </li>
                    </ul>
                    <i class="fas fa-tags"></i>
                  </div>
                </div>
                <div class="content">
                  <div class="game-title uppercase">
                    <a href="" title="Satisfactory">Satisfactory</a>
                  </div>
                  <ul class="game-detail">
                    <li class="platform d-flex align-items-center">
                      <i class="fas fa-tv"></i>
                      <ul>
                        <li>
                          <a href="" title="Steam">Steam</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <div class="summary">
                    Satisfactory is a first-person open-world factory building
                    game with a dash of exploration and combat. Play alone or
                    with friends, explore an alien planet, create multi-story
                    factories, and enter conveyor belt heaven!
                  </div>
                </div>
              </div>
              <div class="game col-sm-6 col-md-3">
                <div class="poster">
                  <a href="" title="Doom Eternal">
                    <img src="./img/item4.jpg" alt="Doom Eternal" />
                  </a>
                  <div class="gerne d-flex align-items-center uppercase">
                    <ul>
                      <li>
                        <a href="" title="Adventure">Phi??u l??u</a>
                      </li>
                      <li>
                        <a href="" title="FPS">FPS</a>
                      </li>
                    </ul>
                    <i class="fas fa-tags"></i>
                  </div>
                </div>
                <div class="content">
                  <div class="game-title uppercase">
                    <a href="" title="Doom Eternal">Doom Eternal</a>
                  </div>
                  <ul class="game-detail">
                    <li class="platform d-flex align-items-center">
                      <i class="fas fa-tv"></i>
                      <ul>
                        <li>
                          <a href="" title="Steam">Steam</a>
                        </li>
                        <li>
                          <a href="" title="Playstation">Playstation</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <div class="summary">
                    Hell???s armies have invaded Earth. Become the Slayer in an
                    epic single-player campaign to conquer demons across
                    dimensions and stop the final destruction of humanity. The
                    only thing they fear... is you.
                  </div>
                </div>
              </div>
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
                    <a href="./products">S???n ph???m</a>
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
  </body>
</html>
