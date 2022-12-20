<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <style>
      body {
        overflow: hidden;
        background-color:white;
        padding: 0px;
        padding-bottom: 0px;
      
      }
      .closebtn {
        position: absolute;
        left: 450px;
        top: 20px;
      }
      .rowan {
        margin-right: -2%;
        margin-bottom: 0%;
        
      }
      .mainbox {
        padding-bottom: 50%;
      }
      header {
        margin-right: 0%!important;
      }
       
      .ftco-section {
        margin-top: -3%!important;
        margin-bottom: 23%;
       
        padding-top: 3%!important;
      }
      .cal {
        padding-top: 5%!important;
        padding-bottom: 5%;
        height: 500px;
      }
      .elegant-calencar {
        background-color: #959595;
        height: 620px;
      }
      .event1 {
        margin-top: 5%;
        padding: 3%;
        padding-left: 10%;
        padding-top: 3%;
        padding-bottom: 1%;
        width: 70%;
        border-radius: 10px;
        background-color: white;
        box-shadow: #959595;
      }
      p {
        font-size: 18px;
      }
      
      #addbox {
        position: sticky;
        left: 50%;
        margin: 1%;
        margin-bottom: 4%;
        background-color: white;
        background-color:#959595;
        padding: 20px;
        border-radius: 100%;
        width: 20px;
        height: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.3s ease-in;
        z-index: 5;
      }
      #addbox:hover .fa-plus {
        color: #fff;
        transform: scale(1.4);
      }
      .ddown {
        margin-left: 28%;
      }
      #addbox .fa-plus {
        font-size: 25px;
        font-weight: 10;
        color: #fff;
        transform: 0.5s ease-out;
        background-image: url(pencil.png);
      }
      #addbox:hover {
        cursor: pointer;
        background-color:#E0B894;
        transform: scale(0.9);
      }
     
      @media (max-width: 990px) { 
        body {
          overflow: scroll;
        }
        .rowan {
          margin-left: -4%;
          margin-right: -15%;
        }
      
        #sidebarMenu {
          display: none!important;
        }
        .cal {
        height: 550px;
        }
        .event1 {
          margin-left: 15%;
        }
        #addbox {
          position: relative;
          margin-left: 35%;
        }
        
    }
        
    </style>
  </head>
  <body>
    <header class="py-1  border-bottom" style="background-color:#FFF8F359;">
        <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1.5fr 2fr;">
          <div class="icon">
            <a href="../Admin/Admin-Homepage.php" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none " data-bs-toggle="dropdown" aria-expanded="false">
              <svg class="bi me-2" width="1" height="32"><img style="margin: 0%;" src="./Images/gabai.png" alt="Gabai" title="Gabai" width="70" height="60"></svg>
            </a>
            
          </div>
    
          <div class="d-flex align-items-center offset-2">
            <h1 class="w-100 me-3">Home</h1>
    
            <button type="button" class="btn py-1" style="background-color: #fff; color: #FF0707; width: 19%; border-radius: 100px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16" style="color: #FF0707;">
<path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"></path>
<path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"></path>
</svg>
              Logout
            </button>
          </div>
        </div>
      </header>

     <!-- TAPOS NG HEADER --> <!-- TAPOS NG HEADER --> <!-- TAPOS NG HEADER --> <!-- TAPOS NG HEADER --> <!-- TAPOS NG HEADER --> <!-- TAPOS NG HEADER --> <!-- TAPOS NG HEADER -->

    <div class="container-fluid">
      <div class="row rowan" >
        <nav id="sidebarMenu" class="col-md-1 col-lg-1 d-md-block sidebar" style="padding-left: 5px; padding-bottom:350px; background-color:#959595">
            <div class="sidebar py-3" id="sidebar">
                <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                  <li class="nav-item">
                    <a class="nav-link  " aria-current="page" href="./Calendar.html" style="color:white; font-size: 17px;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home align-text-bottom" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                      Home
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="./Notes.html" style="color:black; font-size: 17px;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-layers" viewBox="0 0 16 16">
                        <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/>
                      </svg>
                     Notes
                    </a>
                  </li>          
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="./Classes.html" style="color:black; font-size: 17px;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" style="color: #fff;" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                      </svg>
                      Groups
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./Settings.html" style="color:black;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                      </svg>
                      <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                      </svg>
                      Settings
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="./trash.html" style="color:black; font-size: 16px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg>
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                      </svg>
                      Trash
                    </a>
                  </li>
                  
                  <li> 
                  </li>
                  <li>
                  </li>
                </ul>
              </div>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-3 gitna" style="background-color:white; margin-left: 0%!important; width: 91%; ">
          <main class="mt-3 mb-3 mainbox">
            <section class="ftco-section">
		<div class="container">
			<div class="row">
        <div class="col-lg-5 mb-3 mb-lg-5">
          <h4>Upcoming Events</h4>
          <div class="event1">
            <p class="text-sm-start" style="font-family: Roboto Slab;"><span style="color: #FF0606;" >8 </span> Feast of Immaculate Conception</p>           
          </div>
          <!-- END UNANG EVENT -->
          <div class="event1">
            <p class="text-start" style="font-family: Roboto Slab;"><span style="color: #FF0606;" >25 </span> Christmas Day</p>           
          </div>
          <!-- END PANGALAWA EVENT -->
          <div class="event1">
            <p class="text-start" style="font-family: Roboto Slab;"><span style="color: #FF0606;" >30 </span> Rizal Day</p>
          </div>
          <!-- END PANGATLO EVENT // START NUNG TODAY  -->
          <br>
          <br>
          <br>
          <br>    
          <h4>Today</h4>
          <div class="event1 align-items-end">
          <div class="event1" id="addbox" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <!-- Vertically centered modal -->
          
            <i class="fa fa-plus"></i>
          </div>
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
                    <div class="modal-content shadow mdlbg">
                      <div class="modal-header p-5 pb-4 border-bottom-0 text-center">
                        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                        <h6 class="fw-bold mb-0 fs-4 ">Would you like to add a new event?</h6>
                        <button type="button" class="btn-close closebtn" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>               
                        <div class="modal-body p-5 pt-0">
                          <form class="">
                            <div class="form-floating mb-3">
                              <input type="email" class="form-control rounded-3 " id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Add new event</label>
                            </div>
                            
                            <div class="align-items-center ddown">
                          <div class="btn-group align-items-center dropdown">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                              </svg>
                              Start
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">8:00</a></li>
                              <li><a class="dropdown-item" href="#">9:00</a></li>
                              <li><a class="dropdown-item" href="#">10:00</a></li>
                            </ul>
                          </div>

                          
                          <div class="btn-group dropdown">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                              </svg>
                              End
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">1:00</a></li>
                              <li><a class="dropdown-item" href="#">2:00</a></li>
                              <li><a class="dropdown-item" href="#">3:00</a></li>
                            </ul>
                          </div>
                            </div>
                            
                              
                              
                             <br>
                             <div class="modal-footer flex-nowrap p-0">
                              
                              <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end"><strong>ADD</strong></button>
                              <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal">CANCEL</button>
                            </div>
                                  
                           </form>
                        </div>
                      </div>
                  </div>
                </div>
          </div>

        
        </div>
        <!-- END UNANG ROW // END Events -->
        <div class="col-lg-7 mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-100">
            <!-- START CALENDAR -->
            <section class="ftco-section cal">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="elegant-calencar d-md-flex">
                      <div class="wrap-header d-flex align-items-center img" >
                        <p id="reset">Today</p>
                        <div id="header" class="p-0">
                          <!-- <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div> -->
                          <div class="head-info">
                            <div class="head-month"></div>
                              <div class="head-day"></div>
                          </div>
                          <!-- <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div> -->
                        </div>
                      </div>
                      <div class="calendar-wrap">
                        <div class="w-100 button-wrap">
                          <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div>
                          <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div>
                        </div>
                        <table id="calendar">
                          <thead>
                              <tr>
                                <th>Sun</th><br>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/main.js"></script>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
		</div>
	</section>

	
          

          </main>
      </main>
    
    
 
    <script src="User-Ui/js/jquery.min.js"></script>
    <script src="User-Ui/js/popper.js"></script>
    <script src="User-Ui/js/bootstrap.min.js"></script>
    <script src="User-Ui/js/main.js"></script>
    <script src="User-Ui/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>