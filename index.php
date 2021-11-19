<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CNPL-> technical: Assignment </title>
    <!-- Bootstrap CSS-CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./dist/css/style.css">
    <link rel="stylesheet" href="./dist/css/responsive.css">
</head>
    <!-- top nav -->
        <!-- <nav class="navbar navbar-expand-lg navbar-light _navbar_top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav> -->

          <div class="page-body">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-2 pg_col-1">
                    <nav class="sidebar" id="sidebar">
                        <ul class="nav">
                            <a class="navbar-brand" href="#"><span>L</span> Logo</a>
                          <li class="nav-item active">
                            <a class="nav-link" href="#">
                                <i class="fa fa-compass"></i>
                              <span class="menu-title">Dashboard</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-folder"></i>
                                <span class="menu-title">Classes</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-compass"></i>
                                <span class="menu-title">Resources</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-compass"></i>
                                <span class="menu-title">Learning Plan</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-compass"></i>
                              <span class="menu-title">Chat</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-compass"></i>
                              <span class="menu-title">Settings</span>
                            </a>
                          </li>
                        </ul>
                        <div class="_upg-cont pt-5">
                            <img src="./dist/img/upgrade-file.png" alt="">
                            <span>Upgrade to <b>PRO</b> for more resources.</span>
                            <a href="#">Upgrade</a>
                        </div>
                        <div class="closeBtn-1">
                            <i class="fa fa-times"></i>
                        </div>
                      </nav>
                  </div>
                  <div class="col-md-7 pg_col-2">
                      <div class="middle-nav-top">
                          <ul class="d-flex justify-content-between">
                              <li class="d-flex dashbord-span">
                                  <a class="d-md-none d-block pe-3 _opn-left-navbar" id="showNav1">
                                    <i class="fa fa-bars"></i>
                                  </a>
                                  <span>Dashboard</span>
                                </li>
                              <li class="d-flex pt-3">
                                  <p class="pe-2 _header_date">20 sept 2019, Friday</p>
                                  <a href="" class="btn px-2">
                                      <i class="fa fa-search"></i>
                                  </a>
                                  <a id="showProfile">
                                      <img src="./dist/img/avatar5.png" class="btn px-2" style="height:46px; width: 50px;">
                                  </a>
                              </li>
                          </ul>
                      </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="card user-card">
                                    <div class="crd-txt py-4 px-5">
                                        <h2>Welcome Back anna!</h2>
                                        <p class=" pt-4">You have learned <b>80%</b> of your goal this week! </p>
                                        <p>keep it up and improve your result!</p>
                                    </div>
                                    <div class="_hd-img">
                                        <img src="./dist/img/headimg.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 py-4">
                                <div class="card _crd-l-results">
                                    <div class="_l-results">
                                        <div class="container py-4">
                                        <div class="header">
                                            <span class="headerText">Latest results</span>
                                            <a href="#" class="rightElement">More &nbsp;&nbsp;<b>→</b></a>
                                        </div>
                                            <ul class="pt-4">
                                                <li>
                                                    <span class="unitText">Unit 5</span>
                                                    <span class="unitSeperator">-</span>
                                                    <span class="field">Technology</span>
                                                    <div class="progress-con">
                                                        <div class="progress red" style="width: 25%;"></div>
                                                    </div>
                                                    <span class="progressText red">25%</span>
                                                </li>
                                                <hr>
                                                <li>
                                                    <span class="unitText">Unit 12</span>
                                                    <span class="unitSeperator">-</span>
                                                    <span class="field">Ecology</span>
                                                    <div class="progress-con">
                                                        <div class="progress" style="width: 44%;"></div>
                                                    </div>
                                                    <span class="progressText">44%</span>
                                                </li>
                                                <hr>
                                                <li>
                                                    <span class="unitText">Unit 9</span>
                                                    <span class="unitSeperator">-</span>
                                                    <span class="field">Real estate</span>
                                                    <div class="progress-con">
                                                        <div class="progress" style="width: 40%;"></div>
                                                    </div>
                                                    <span class="progressText">40%</span>
                                                </li>
                                                <hr>
                                                <li>
                                                    <span class="unitText">Unit 8</span>
                                                    <span class="unitSeperator">-</span>
                                                    <span class="field">Education</span>
                                                    <div class="progress-con">
                                                        <div class="progress red" style="width: 15%;"></div>
                                                    </div>
                                                    <span class="progressText red">15%</span>
                                                </li>
                                                <hr>
                                                <li>
                                                    <span class="unitText">Unit 16</span>
                                                    <span class="unitSeperator">-</span>
                                                    <span class="field">Job market</span>
                                                    <div class="progress-con">
                                                        <div class="progress" style="width: 76%;"></div>
                                                    </div>
                                                    <span class="progressText">76%</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 py-4">
                                <div class="card _crd-timeSpent">
                                    <div class="timeSpent">
                                        <div class="header py-4 _t-spnd">
                                            <span class="headerText">Time spent on learning</span>
                                            <select class="rightElement">
                                                <option value="week">Last week</option>
                                                <option value="month">Last month</option>
                                                <option value="year">Last year</option>
                                            </select>
                                        </div>
                                        <div class="container">
                                            <div class="_t-spnd_day">
                                                <span class="name">Mon</span>
                                                <div class="progress-con">
                                                    <div class="progress writing"></div>
                                                    <div class="progress vocabulary"></div>
                                                    <div class="progress grammar"></div>
                                                    <div class="progress listening"></div>
                                                </div>
                                            </div>
                                            <div class="_t-spnd_day">
                                                <span class="name">Tue</span>
                                                <div class="progress-con">
                                                    <div class="progress writing"></div>
                                                    <div class="progress vocabulary"></div>
                                                    <div class="progress grammar"></div>
                                                    <div class="progress listening"></div>
                                                </div>
                                            </div>
                                            <div class="_t-spnd_day">
                                                <span class="name">Wed</span>
                                                <div class="progress-con">
                                                    <div class="progress writing"></div>
                                                    <div class="progress vocabulary"></div>
                                                    <div class="progress grammar"></div>
                                                    <div class="progress listening"></div>
                                                </div>
                                            </div>
                                            <div class="_t-spnd_day">
                                                <span class="name">Thu</span>
                                                <div class="progress-con">
                                                    <div class="progress writing"></div>
                                                    <div class="progress vocabulary"></div>
                                                    <div class="progress grammar"></div>
                                                    <div class="progress listening"></div>
                                                </div>
                                            </div>
                                            <div class="_t-spnd_day">
                                                <span class="name">Fri</span>
                                                <div class="progress-con">
                                                    <div class="progress writing"></div>
                                                    <div class="progress vocabulary"></div>
                                                    <div class="progress grammar"></div>
                                                    <div class="progress listening"></div>
                                                </div>
                                            </div>
                                            <div class="_t-spnd_day">
                                                <span class="name">Sat</span>
                                                <div class="progress-con">
                                                    <div class="progress writing"></div>
                                                    <div class="progress vocabulary"></div>
                                                    <div class="progress grammar"></div>
                                                    <div class="progress listening"></div>
                                                </div>
                                            </div>
                                            <div class="_t-spnd_day">
                                                <span class="name">Sun</span>
                                                <div class="progress-con">
                                                    <div class="progress writing"></div>
                                                    <div class="progress vocabulary"></div>
                                                    <div class="progress grammar"></div>
                                                    <div class="progress listening"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="legendContainer py-3 px-3">
                                            <div class="legend vocabulary">
                                                <div class="circle"></div>
                                                <span>Vocabulary</span>
                                            </div>
                                            <div class="legend grammar">
                                                <div class="circle"></div>
                                                <span>Grammar</span>
                                            </div>
                                            <div class="legend listening">
                                                <div class="circle"></div>
                                                <span>Listening</span>
                                            </div>
                                            <div class="legend writing">
                                                <div class="circle"></div>
                                                <span>Writing</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pb-5">
                                <div class="courses header py-4">
                                    <span class="headerText">Your courses</span>
                                    <a href="#" class="rightElement">More &nbsp;&nbsp;<b>→</b></a>
                                </div>
                                <div class="coursesContainer">
                                    <a href="#" class="course">
                                        <span class="level">B2</span>
                                        <span class="field">Business English</span>
                                        <span class="type">Grammar</span>
                                        <span class="arrow">→</span>
                                    </a>
                                    <a href="#" class="course">
                                        <span class="level">B2</span>
                                        <span class="field">Common English</span>
                                        <span class="type">Phrasal Verbs</span>
                                        <span class="arrow">→</span>
                                    </a>
                                    <a href="#" class="course">
                                        <span class="level">B2</span>
                                        <span class="field">Vocabulary</span>
                                        <span class="type">Grammar</span>
                                        <span class="arrow">→</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-3 pg_col-3">
                    <div class="aside">
                        <div class="logout">
                            <div class="header_aside py-4">
                                <span class="title">Logout</span>
                                <a href="#"><i class="fas fa-sign-out-alt"></i></a>
                            </div>
                        </div>
                        <div class="profile">
                            <img src="./dist/img/rightuser.png" alt="">
                            <span class="name">Anna Morrison</span>
                            <span class="title">Student</span>
                        </div>
                        <div class="languages">
                            <a href="#" class="language">
                                <span class="level">B2</span>
                                <span class="text">English</span>
                                <span class="levelDescription">High intermediate</span>
                                <div class="progress-con">
                                    <div class="progress" style="width: 56%;"></div>
                                </div>
                            </a>
                            <a href="#" class="language">
                                <span class="level">B2</span>
                                <span class="text">Spanish</span>
                                <span class="levelDescription">Advanced</span>
                                <div class="progress-con">
                                    <div class="progress" style="width: 75%;"></div>
                                </div>
                            </a>
                
                        </div>
                        <div class="reminders">
                            <div class="header py-4">
                                <span class="headerText">Reminders</span>
                                <a href="#" class="notifications"><i class="far fa-bell"></i><div class="circle"></div></a>
                            </div>
                            <a href="#" class="language">
                                <span class="level danger">
                                    <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Eng - Vocabulary test</span>
                                <span class="levelDescription">24 Sep 2019, Friday</span>
                            </a>
                            <a href="#" class="language">
                                <span class="level message">
                                    <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Eng - Send grammar homework</span>
                                <span class="levelDescription">24 Sep 2019, Friday</span>
                            </a>
                            <a href="#" class="language">
                                <span class="level message">
                                    <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Spanish - Send essey</span>
                                <span class="levelDescription">05 Oct 2019, Monday</span>
                            </a>
                            <a href="#" class="language">
                                <span class="level message">
                                    <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Spanish - Reading task</span>
                                <span class="levelDescription">01 Oct 2019, Monday</span>
                            </a>
                        </div>
                    </div>
                    <div class="closeBtn-2">
                        <i class="fa fa-times"></i>
                    </div>
                  </div>
              </div>
          </div>
        </div>

    <!-- Bootstrap JS-CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
$("#showNav1").click(function(){
    $(".pg_col-1").addClass("showClass-1");
    $("body").css({"height":"50vh","overflow":"hidden"});
});
$("#showProfile").click(function(){
    $(".pg_col-3").addClass("showClass-2");
    $("body").css({"height":"50vh","overflow":"hidden"});
});
$(".closeBtn-1").click(function(){
    $(".pg_col-1").removeClass("showClass-1");
    $("body").removeAttr("style");
});
$(".closeBtn-2").click(function(){
    $(".pg_col-3").removeClass("showClass-2");
    $("body").removeAttr("style");
});

</script>

</body>
</html>
