<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/main.css"> 
    <link rel="stylesheet" href="/css/evo-calendar.min.css">
    <link rel="stylesheet" href="/css/evo-calendar.midnight-blue.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="/js/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--calendar link linbrary-->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css" rel='stylesheet' />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    </head>
<body>
    
          <!--All control -->
    <div class="contain">
        <div class="nav" id="navigate">
          <ul>
              <!--Section for icon with the text of this system -->
              <li>      
                      <img src="/img/icon.png" class="logo">
                      <span class="title">Schoolopedia</span>    
              </li>
  

              <!--Section for dashboard -->
              <li class="rounded">
                 <a>
                  <div class="design">
                      <i class="fa fa-dashcube" aria-hidden="true"></i>
                      <span class="descript"><a href="/dashboard">Dashboard</a></span>     
                  </div>
                 </a>
              </li>


              <!--Section for tacher management feature-->
              <li>
                 <a>
                      <div class="design">
                          <i class="fa fa-users" aria-hidden="true"></i>
                          <span class="descript">Teacher</span>
                          <i class="fa fa-chevron-circle-right ro-default ro1" aria-hidden="true"></i>
                     </div>
                      <!--part of submenu of teacher management this part you can insert the different link for html to navigate to another page-->
                      <div class="sub-menu2">
                          <div class="sub-container">
                            <div class="sub-2 sub "><a href="/addteach"><p>Add teacher</p></a></div>
                            <div class="sub-2 sub "><a href="/viewteacher"><p>View teacher</p></a></div>
                            <div class="sub-2 sub "><a href="htt.html"><p>sub-menu</p></a></div>
                            <div class="sub-2 sub "><a href="htt.html"><p>sub-menu</p></a></div>
                          </div>
                      </div>
                 </a>
              </li>



              <!--Section for class management feature -->
              <li>
                  <a>
                      <div class="design">
                          <i class="fa fa-university" aria-hidden="true"></i>
                          <span class="descript">Classes</span>
                          <i class="fa fa-chevron-circle-right ro-default ro2" aria-hidden="true"></i>
                      </div>
                      <!--part of submenu of class management this part you can insert the different link for html to navigate to another page-->

                      <div class="sub-menu3">
                          <div class="sub-container">
                              <div class="sub-3 sub"><a href="/addclass"><p class="{{'addclass'==request()->path() ? 'fixedLink' : '';}}">add class</p></a></div>
                              <div class="sub-3 sub"><a href="canva.html"><p>sub-menu-3</p></a></div>
                              <div class="sub-3 sub"><a href="canva.html"><p>sub-menu-3</p></a></div>
                              <div class="sub-3 sub"><a href="canva.html"><p>sub-menu-3</p></a></div>
                          </div>
                      </div>
                  </a>
              </li>


              <!--Section for student management feature -->
              <li>
                 <a>
                  <div class="design">
                      <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                      <span class="descript">Students</span>
                      <i class="fa fa-chevron-circle-right ro-default ro3" aria-hidden="true"></i>
                 </div>
                  <!--part of submenu of student management this part you can insert the different link for html to navigate to another page-->
                  <div class="sub-menu4">
                      <div class="sub-container">
                          <div class="sub-4 sub"><a href="/addstudent"><p class="{{'addstudent'==request()->path() ? 'fixedLink' : '';}}">add student</p></a></div>
                          <div class="sub-4 sub"><a href="/viewstudent"><p>view student</p></a></div>
                          <div class="sub-4 sub"><a href="jakma.html"><p>sub-menu-4</p></a></div>
                          <div class="sub-4 sub"><a href="jakma.html"><p>sub-menu-4</p></a></div>
                      </div>
                  </div>
                 </a>
              </li>


              <!--Section for attendance feature-->
              <li>
                 <a>
                  <div class="design">
                      <i class="fa fa-address-book" aria-hidden="true"></i>
                      <span class="descript">Attandance</span>
                      <i class="fa fa-chevron-circle-right ro-default ro4" aria-hidden="true"></i>
                  </div>
                  <!--part of submenu of attendance management this part you can insert the different link for html to navigate to another page-->
                  <div class="sub-menu5" >
                      <div class="sub-container">
                          <div class="sub-5 sub"><a href="addattendance.html"><p>add attendance</p></a></div>
                          <div class="sub-5 sub"><a href="steven.html"><p>sub-menu-5</p></a></div>
                          <div class="sub-5 sub"><a href="steven.html"><p>sub-menu-5</p></a></div>
                          <div class="sub-5 sub"><a href="steven.html"><p>sub-menu-5</p></a></div>
                      </div>
                  </div>
                 </a>
              </li>



              <!--Section for Mark control feature-->
              <li>                  
                  <a>
                  <div class="design">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      <span class="descript">Mark control</span>
                      <i class="fa fa-chevron-circle-right ro-default ro5" aria-hidden="true"></i>
                  </div>
                  <!--part of submenu of mark control  this part you can insert the different link for html to navigate to another page-->
                  <div class="sub-menu6" >
                      <div class="sub-container">
                          <div class="sub-6 sub"><a href="nany.html"><p>sub-menu-6</p></a></div>
                          <div class="sub-6 sub"><a href="nany.html"><p>sub-menu-6</p></a></div>
                          <div class="sub-6 sub"><a href="nany.html"><p>sub-menu-6</p></a></div>
                          <div class="sub-6 sub"><a href="nany.html"><p>sub-menu-6</p></a></div>
                      </div>
                  </div>
                  </a>
              </li>



              <!--Section for schedule control feature-->
              <li>
                  <a>
                  <div class="design">
                      <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                      <span class="descript">schedule control</span>
                      <i class="fa fa-chevron-circle-right ro-default ro6" aria-hidden="true"></i>
                  </div>
                  <!--part of submenu of schedule control this part you can insert the different link for html to navigate to another page-->
                  <div class="sub-menu7" >
                       <div class="sub-container">
                          <div class="sub-7 sub"><a href="cry.html"><p>sub-menu-7</p></a></div>
                          <div class="sub-7 sub"><a href="cry.html"><p>sub-menu-7</p></a></div>
                          <div class="sub-7 sub"><a href="cry.html"><p>sub-menu-7</p></a></div>
                          <div class="sub-7 sub"><a href="cry.html"><p>sub-menu-7</p></a></div>
                      </div>
                  </div>
                  </a>
              </li>



              <!--Section for More control feature-->
              <li>                   
                  <a>
                  <div class="design">
                      <i class="fa fa-bars" aria-hidden="true"></i>
                      <span class="descript">More control</span>
                      <i class="fa fa-chevron-circle-right ro-default ro7" aria-hidden="true"></i>
                  </div>
              <!--part of submenu of teacher management this part you can insert the different link for html to navigate to another page-->
                  <div class="sub-menu8" >
                      <div class="sub-container">
                          <div class="sub-8 sub"><a href="system.html"><p>sub-menu-8</p></a></div>
                          <div class="sub-8 sub"><a href="system.html"><p>sub-menu-8</p></a></div>
                          <div class="sub-8 sub"><a href="system.html"><p>sub-menu-8</p></a></div>
                          <div class="sub-8 sub"><a href="system.html"><p>sub-menu-8</p></a></div>
                      </div>
                  </div>
                  </a>
              </li>



  
              <!--Section for about option -->
              <li>
                 <a>
                  <div class="design">
                      <i class="fa fa-info-circle" aria-hidden="true"></i>
                      <span class="descript">About</span>
                      <span></span>
                  </div>
                 </a>
              </li>
              <!--end of "about option" section -->


              
              <!--Section for footer of the all feature-->
              <div class="bar-footer">
                  <!--part of logout part-->
                  <div class="logout">
                      <i class="fa fa-unlock another" aria-hidden="true"></i>
                      <span>Lock</span>
                      <span></span>
                  </div>
                  <!--end of logout-->

                  <!--part of footer icons like facebook email ........-->
                  <div class="nav-footer">
                      <span class="foot-ico"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                      <span class="foot-ico"><i class="fa fa-telegram" aria-hidden="true"></i></span>
                      <span class="foot-ico"><i class="fa fa-google" aria-hidden="true"></i></span>       
                  </div>
                  <!--end of footer icons -->
              </div>
          </ul>       
        </div>
        <!--end of the navigation section-->





        <!--The right main control section such top-bar graph calender ....................-->
        <div class="main">
            <!--part of top-bar of the system-->
          <div class="top-bar">
              <div class="toggle">
                  <span class="toggle-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
              </div>
              <div class="system-name">
                  SCHOOL MANAGEMENT SYSTEM
            
              </div>
              <!--part of user status control-->
              <div class="user-active"> 
                  
                  <div class="user">
                      <div class="box">
                           <div class="content">
                            <img src="/img/beautiful girl.jpg">
                           </div>
                      </div>                        
                  </div>
                  <div class="Notification">
                        <button  type="button" class="rightoff" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa fa-commenting comment" aria-hidden="true"></i></button>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel">Comment Notification</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                    ...............
                            </div>
                        </div>
                  </div>


                  <div class="Notification_permission">
                    <button  type="button" class="rightoff" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight"><i class="fa fa-id-card-o comment" aria-hidden="true"></i></button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight1" aria-labelledby="offcanvasRightLabel_copy">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel_copy">Teacher dialy permission</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                                I love you 
                        </div>
                    </div>
              </div>


                  
                  
                           
              </div>
              <!--end of user status control-->
          </div>
          <!--end of top-bar control-->

          <!--content section -->
          <div class="content-box">

         </div>
          <!--end content -->


        </div>
        <!--end of right main control section-->
  </div>

    <!--end of container-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="/js/calendar_libra.js">
        
    </script>

     <!--part of javascript or jquery to control the almost all of the system part -->   
    <script>   
        $(window).ready(function(){

            $('.ro3').toggleClass("rotate");
            $(".sub-menu4").slideDown(300);
            $(".sub-origin").css({"display":"none"});
            $(".logout").click(function(){
                if($(".fa-unlock").length){// here part of checking whether a particular class exist in the elemenet or not by using "length" property return boolean value
                  $('.another').removeClass('fa-unlock');
                  $('.another').addClass('fa-lock');
                  $(".un").css({"background-color":"red"});
                  $('.another').css("color","red");
                }else{
                    $('.another').css("color","black");
                    $('.another').removeClass('fa-lock');
                    $('.another').addClass('fa-unlock');
                    
                }
            })


            // part of the three line bar is clicked it will execute the following instruction
            $(".top-bar .toggle .toggle-icon").click(function(){
                
                $(".main").toggleClass("left");
                $(".nav").toggleClass("width");
                $(".sub-menu1").css("display","none");
                $(".sub-menu2").css("display","none");
                $(".sub-menu3").css("display","none");
                $(".sub-menu4").css("display","none");
                $(".sub-menu5").css("display","none");
                $(".sub-menu6").css("display","none");
                $(".sub-menu7").css("display","none");
                $(".nav-footer").toggleClass("vertical");
                $(".nav-footer span").toggleClass("trim");
                $(".about").toggleClass("hidden-about");
                $(".logout").toggleClass("show");

                // part of add backgroud to white when the user cliked on a particular feature
                

                $(".nav ul li:nth-child(3)").removeClass("background-changed");
                $(".nav ul li:nth-child(3) a").toggleClass("changed3");
                $(".nav ul li:nth-child(3) a").removeClass("love");

                $(".nav ul li:nth-child(4)").removeClass("background-changed");
                $(".nav ul li:nth-child(4) a").toggleClass("changed3");
                $(".nav ul li:nth-child(4) a").removeClass("love");

                $(".nav ul li:nth-child(5)").removeClass("background-changed");
                $(".nav ul li:nth-child(5) a").toggleClass("changed3");
                $(".nav ul li:nth-child(5) a").removeClass("love");

                $(".nav ul li:nth-child(6)").removeClass("background-changed");
                $(".nav ul li:nth-child(6) a").toggleClass("changed3");
                $(".nav ul li:nth-child(6) a").removeClass("love");

                $(".nav ul li:nth-child(7)").removeClass("background-changed");
                $(".nav ul li:nth-child(7) a").toggleClass("changed3");
                $(".nav ul li:nth-child(7) a").removeClass("love");

                $(".nav ul li:nth-child(8)").removeClass("background-changed");
                $(".nav ul li:nth-child(8) a").toggleClass("changed3");
                $(".nav ul li:nth-child(8) a").removeClass("love");

                $(".nav ul li:nth-child(9)").removeClass("background-changed");
                $(".nav ul li:nth-child(9) a").toggleClass("changed3");
                $(".nav ul li:nth-child(9) a").removeClass("love");
               
                // part of the ready function that is available

                // end of available part 
                
            })

            // here part of ready function that is available to give implementation
           
            //end of the part make the system name changes every one mininute


            // part of comment icon is click 
              $('.comment-cross-icon').click(function(){
                  $('.comment-dialog').fadeOut(100);
              })
              $('.comment').click(function(){
                $('.comment-dialog').fadeIn(100);
              })

        })


        $(".ro").click(function(){
            $(this).toggleClass("rotate");
           // $(".sub-menu1").slideToggle();
            $("ul li:nth-child(2)").toggleClass("active");
           // $(".sub-menu1").toggleClass("active");
            $(".nav ul li:nth-child(2) a").toggleClass("changed2");
            $(".nav ul li:nth-child(2) a").toggleClass("love");                  
        })


        // part of first feature is clicked 
        $(".ro1").click(function(){
            $(this).toggleClass("rotate");
            $(".sub-menu2").slideToggle();
            $("ul li:nth-child(3)").toggleClass("active");
            $(".sub-menu2").toggleClass("active");
            $(".nav ul li:nth-child(3) a").toggleClass("changed3");
            $(".nav ul li:nth-child(3) a").toggleClass("love");
            // part of move away the before and after of psudo eleent of css
            $(".nav ul li:nth-child(3)").toggleClass("background-changed");
            // end 
        })

        // part of second feature is clicked 
        $(".ro2").click(function(){
            $(this).toggleClass("rotate");
            $(".sub-menu3").slideToggle();
            $("ul li:nth-child(4)").toggleClass("active");
            $(".sub-menu3").toggleClass("active");
            $(".nav ul li:nth-child(4) a").toggleClass("changed4");
            $(".nav ul li:nth-child(4) a").toggleClass("love");
             // part of move away the before and after of psudo eleent of css
            $(".nav ul li:nth-child(4)").toggleClass("background-changed");
            // end 
        })

        // part of third feature is cliked
        $(".ro3").click(function(){
            $(this).toggleClass("rotate");
            $(".sub-menu4").slideToggle();
            $("ul li:nth-child(5)").toggleClass("active");
            $(".sub-menu4").toggleClass("active");
            $(".nav ul li:nth-child(5) a").toggleClass("changed5");
            $(".nav ul li:nth-child(5) a").toggleClass("love");
             // part of move away the before and after of psudo eleent of css
             $(".nav ul li:nth-child(5)").toggleClass("background-changed");
            // end 
        })

        // part of fourth feature is clicked
        $(".ro4").click(function(){
            $(this).toggleClass("rotate");
            $(".sub-menu5").slideToggle();
            $("ul li:nth-child(6)").toggleClass("active");
            $(".sub-menu5").toggleClass("active");
            $(".nav ul li:nth-child(6) a").toggleClass("changed6");
            $(".nav ul li:nth-child(6) a").toggleClass("love");
             // part of move away the before and after of psudo eleent of css
             // part of move away the before and after of psudo eleent of css
             $(".nav ul li:nth-child(6)").toggleClass("background-changed");
            // end 
        })

        // part of fifth feature is clicked 
        $(".ro5").click(function(){
            $(this).toggleClass("rotate");
            $(".sub-menu6").slideToggle();
            $("ul li:nth-child(7)").toggleClass("active");
            $(".sub-menu6").toggleClass("active");
            $(".nav ul li:nth-child(7) a").toggleClass("changed7");
            $(".nav ul li:nth-child(7) a").toggleClass("love");
             // part of move away the before and after of psudo eleent of css
             // part of move away the before and after of psudo eleent of css
             $(".nav ul li:nth-child(7)").toggleClass("background-changed");
            // end 
        })

        // part of sixth feature is clicked
        $(".ro6").click(function(){
            $(this).toggleClass("rotate");
            $(".sub-menu7").slideToggle();
            $("ul li:nth-child(8)").toggleClass("active");
            $(".sub-menu7").toggleClass("active");
            $(".nav ul li:nth-child(8) a").toggleClass("changed8");
            $(".nav ul li:nth-child(8) a").toggleClass("love");
             // part of move away the before and after of psudo eleent of css
             // part of move away the before and after of psudo eleent of css
             $(".nav ul li:nth-child(8)").toggleClass("background-changed");
            // end 
        })

        // part of seventh feature is clicked 
        $(".ro7").click(function(){
            $(this).toggleClass("rotate");
            $(".sub-menu8").slideToggle();
            $("ul li:nth-child(9)").toggleClass("active");
            $(".sub-menu8").toggleClass("active");
            $(".nav ul li:nth-child(9) a").toggleClass("changed9");
            $(".nav ul li:nth-child(9) a").toggleClass("love");
             // part of move away the before and after of psudo eleent of css
             // part of move away the before and after of psudo eleent of css
             $(".nav ul li:nth-child(9)").toggleClass("background-changed");
            // end 
        })

        // part of adding  or removing  immediately of the class when the user use mouse enter the sub-menu 
 
       
        // end of mouseenter section 
    </script>
</body>
</html>