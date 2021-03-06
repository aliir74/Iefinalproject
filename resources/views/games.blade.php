<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games</title>

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oxygen:400,700">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/games.css">
    <link rel="stylesheet" href="css/global.css">

    <script src="jquery.min.js"></script>
    <script src="https://use.fontawesome.com/e213c5fcce.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/games.js"></script>
</head>
<body>
<div id="primarybar" class="row">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <nav  class="navbar navbar-inverse transparent">
                <div class="container-fluid">
                    <div class="navbar-header navbar-right">
                        <a class="navbar-brand blackhover" href="#">
                            <span>امیرکبیر</span>
                            <span class="blue">استودیو</span>
                            <i class="fa fa-gamepad" aria-hidden="true"></i>
                        </a>
                    </div>
                    <ul class="nav navbar-nav">
                        @if (Auth::guest())
                            <li><a class="blackhover" href="/login"> ورود <i class="fa fa-user" aria-hidden="true"></i> </a></li>
                            @else
                                <!--<li><a class="blackhover" href="#"> Auth::user()->name <i class="fa fa-user" aria-hidden="true"></i> </a></li>-->
                            @endif

                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button class="btn btn-default noborder" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                            <input type="text" class="rtl form-control" placeholder="جست و جو ..">
                        </div>
                    </form>
                </div>
            </nav>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<div id="header" class="row">
    <div id="layerDiv" class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="headerCenter">
            <div class="col-md-2">
                <button id="headerButton" class="btn btn-info">شروع بازی</button>
            </div>
            <div id="headerText" class="col-md-8 rtl">
                <div id="headerTitle" class="row">عنوان نمونه</div>
                <div id="headerCat" class="row">کت۱، کت۲، کت۳</div>
                <div id="headerRate" class="blue row">
                    <!--
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    -->
                </div>
                <div id="headerOp" class="row">
                    ۴.۳ (۸۳ رای)
                </div>
            </div>
            <div class="col-md-2">
                <img id="headerImg" src="best_hd_assassins_creed_black_flag_game_wallpapers.jpg">
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<div id="tabs">
    <div class="col-md-2"></div>
    <div class="col-md-8 rtl">
        <ul class="nav nav-tabs center">
            <li class="active"><a data-toggle="tab" href="#gameDataTab" onclick="loadData(0)">اطلاعات بازی</a></li>
            <li><a data-toggle="tab" href="#ratingTab" onclick="loadData(1)">رتبه بندی و امتیازات</a></li>
            <li><a data-toggle="tab" href="#commentsTab" onclick="loadData(2)">نظرات کاربران</a></li>
            <li><a data-toggle="tab" href="#similarGTab" onclick="loadData(3)">بازی‌های مشابه</a></li>
            <li><a data-toggle="tab" href="#imgTab" onclick="loadData(4)">عکس‌ها و ویدیوها</a></li>
        </ul>
        <div class="tab-content">
            <div id="gameDataTab" class="tab-pane fade in active">
                <h3>اطلاعات بازی</h3>
                <br><hr class='style14'>
                <p id="infoContent">Some content.</p>
            </div>
            <div id="ratingTab" class="tab-pane fade">
                <h3>رتبه بندی و امتیازات</h3>
                <br><hr class='style14'>
                <div class="box">
                    <div class="title row">برترین‌ها</div><br>
                    <div class="header row">
                        <div class="num2">
                            <div class="rank">۲</div>
                            <img id="secondrankimg" class="photo" src="assets/OogwayNight.jpg" alt="profile">
                            <div id="hex2" class="hex">32</div>
                            <div id="rankDataContainer2" class="rankDataContainer">
                                <div class="username">سروش صحت</div>
                                <div id="score2" class="score">۱۰۰۰۰۰</div>
                            </div>
                        </div>
                        <div class="num1">
                            <div class="rank">۱</div>
                            <img id="firstrankimg" class="photo" src="assets/OogwayNight.jpg" alt="profile">
                            <div id="hex1" class="hex">32</div>
                            <div id="rankDataContainer1" class="rankDataContainer">
                                <div id="firstrankuser" class="username">سروش صحت</div>
                                <div id="firstrankscore" class="score">۱۰۰۰۰۰</div>
                            </div>
                        </div>
                        <div class="num3">
                            <div class="rank">۳</div>
                            <img id="thirdrankimg" class="photo" src="assets/OogwayNight.jpg" alt="profile">
                            <div id="hex3" class="hex">30</div>
                            <div id="rankDataContainer3" class="rankDataContainer">
                                <div class="username">سروش صحت</div>
                                <div id="score3" class="score">۱۰۰۰۰۰</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="scoreNav" class="row">
                            <div class="col-md-2">امتیاز</div>
                            <div class="col-md-2">تغییر رتبه</div>
                            <div class="col-md-1">سطح</div>
                            <div class="col-md-5">بازیکن</div>
                            <div class="col-md-1"></div>
                            <div class="scorerow col-md-1">رتبه</div>
                        </div>
                        <div id="scoreList" class="row">
                            <div class="rowList row">
                                <div class="col-md-2">۱۰۰۰</div>
                                <div class="col-md-2"><i class="fa fa-arrow-down" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-1">۲۰</div>
                                <div class="col-md-5"><img class="profileList" src="assets/oogway_hero.jpg">
                                    <div id="textlist1">علی ایرانی</div>
                                </div>
                                <div class="col-md-1"><i id="medal" class="fa fa-trophy" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-1">۱.</div>
                            </div>
                            <div class="rowList row">
                                <div class="col-md-2">۱۰۰۰</div>
                                <div class="col-md-2"><i class="fa fa-arrow-down" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-1">۲۰</div>
                                <div class="col-md-5"><img class="profileList" src="assets/oogway_hero.jpg">
                                    <div id="textlist1">علی ایرانی</div>
                                </div>
                                <div class="col-md-1"><i id="medal" class="fa fa-trophy" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-1">۱.</div>
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="list">
                        <div class="tmp" >.</div>
                        <hr>
                        <div class="listuser">
                            <div class="listrank">۴</div>
                            <img class="listphoto" src="assets/OogwayNight.jpg" alt="profile">
                            <div id="hex4" class="listhex">20</div>
                            <div class="listusername">علی ایرانی</div><br>
                            <div class="listscore">۱۲۰۹۸۴۴</div>
                            <div class="liststars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="listuser">
                            <div class="listrank">۵</div>
                            <img class="listphoto" src="assets/OogwayNight.jpg" alt="profile">
                            <div id="hex4" class="listhex">28</div>
                            <div class="listusername">علی ایرانی</div><br>
                            <div class="listscore">۱۲۰۹۸۴۴</div>
                            <div class="liststars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="listuser">
                            <div class="listrank">۶</div>
                            <img class="listphoto" src="../assets/OogwayNight.jpg" alt="profile">
                            <div id="hex4" class="listhex">28</div>
                            <div class="listusername">علی ایرانی</div><br>
                            <div class="listscore">۱۲۰۹۸۴۴</div>
                            <div class="liststars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>

                        </div>
                        <div class="listuser">
                            <div class="listrank">۷</div>
                            <img class="listphoto" src="../assets/OogwayNight.jpg" alt="profile">
                            <div id="hex4" class="listhex">28</div>
                            <div class="listusername">علی ایرانی</div><br>
                            <div class="listscore">۱۲۰۹۸۴۴</div>
                            <div class="liststars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>

                        </div>
                        <div class="listuser">
                            <div class="listrank">۸</div>
                            <img class="listphoto" src="../assets/OogwayNight.jpg" alt="profile">
                            <div id="hex4" class="listhex">28</div>
                            <div class="listusername">علی ایرانی</div><br>
                            <div class="listscore">۱۲۰۹۸۴۴</div>
                            <div class="liststars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>

                        </div>
                        <div class="listuser">
                            <div class="listrank">۹</div>
                            <img class="listphoto" src="../assets/OogwayNight.jpg" alt="profile">
                            <div id="hex4" class="listhex">28</div>
                            <div class="listusername">علی ایرانی</div><br>
                            <div class="listscore">۱۲۰۹۸۴۴</div>
                            <div class="liststars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>

                        </div>
                    </div>
                    -->
                    <br><br>
                    <div class="footer">
                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                    </div>
                </div>
                <p>Some content in menu 1.</p>
            </div>
            <div id="commentsTab" class="tab-pane fade">
                <h3>نظرات کاربران</h3>
                <br><hr class='style14'>
                <p>Some content in menu 2.</p>
            </div>
            <div id="similarGTab" class="tab-pane fade">
                <h3>بازی‌های مشابه</h3>
                <br><hr class='style14'>
                <p>Some content in menu 2.</p>
            </div>
            <div id="imgTab" class="tab-pane fade">
                <h3>عکس‌ها و ویدیو‌ها</h3>
                <br><hr class='style14'>
                <p>Some content in menu 2.</p>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<!--
    <div id="contactus" class="row">
        <div id="contactusOverlay">
            <div id="contactusTitle">به جامعه بازی سازان امیرکبیر بپیوندید</div>
            <div id="contactusDesc">بیش از ۵۰۰۰ عضو در سراسر کشور</div>
            <button id="contactusImg" class="btn btn-default">به ما بپیوندید</button>
        </div>
    </div>
    <div id="footer" class="row">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <nav  class="navbar navbar-inverse transparent">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand blackhover" href="#">
                                <span >امیرکبیر</span>
                                <span id="blue" >استودیو</span>
                                <i class="fa fa-gamepad " aria-hidden="true"></i>
                            </a>
                        </div>
                        <ul class="nav navbar-nav navbar-right bluecolor">
                            <li><a href="home.html" class="bluecolor">صفحه اصلی</a></li>
                            <li><a href="home.html" class="bluecolor">درباره ما</a></li>
                            <li><a href="home.html" class="bluecolor">ارتباط با سازندگان</a></li>
                            <li><a href="home.html" class="bluecolor">سوالات متداول</a></li>
                            <li><a href="home.html" class="bluecolor">حریم خصوصی</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <i class="facebookFont fa fa-facebook-square rounded" aria-hidden="true"></i>
                <i class="fa fa-twitter-square rounded" aria-hidden="true"></i>
                <i class="fa fa-instagram rounded" aria-hidden="true"></i>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div id="copyright" class="row">
        تمامی حقوق دانشگاه امیرکبیر محفوظ است
    </div>
    -->

</body>
</html>