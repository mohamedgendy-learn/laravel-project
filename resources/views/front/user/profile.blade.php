<!DOCTYPE html>
<html>
   <head>
    <title>Profile</title>
     <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   </head>
   <style>
    *{
        padding: 0;
        margin: 0;
    }
    .back{
        min-height: 300px;
        
        background: blue;
        position: relative;
        box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
    }
    
    .image{
        background-color: red;
        height: 200px;
        width: 200px;
        border-radius:50% ;
        position: absolute;
        top: 190px;
        left: 100px;
        box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
        
    }
    .btn{
        position:absolute;
        left: 100px;
        top: 400px;
        min-width: 200px;
    }
    .big{
        margin-top: 0px;
    }
    .line{
        height: 1px;
        background-color: black;
        width: 90%;
        margin-top: 15px;
    }
    
    .group{
        margin-top: 80px;
    }
    .fs-4{
        display: inline;
    }
    .mark{
        display: inline;
        margin-left: 100px;
        
    }
    .move{
        border: 0;
        min-width: 300px;
        pointer-events:none;
    }
    #save{
        min-width: 100px;
        min-height: 50px;
        margin-top: 50px;
        border-radius:10px;
        pointer-events:none;
        
    }
    
    
   </style>
   <body style="height:2000px ;">

            @include('front.includes.navbar')
        <div class="back">
        </div>
        @if(Auth::user()->photo==null)
         <img class="image" src="{{asset('img/user.png')}}">
        @else
         <img class="image" src="{{asset('img/'.Auth::user()->photo )}}">
         @endif
         <form action="{{route('E_profile',Auth::user()->id)}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <label for="inputTag" style="cursor: pointer; margin-left:150px;" >
                Update Image<br>
                <i class="fa-solid fa-camera" style="margin-left:30px; font-size:40px;"></i>
                <input id="inputTag" name="photo" value="{{asset('img/'.Auth::user()->photo )}}" type="file" style="display: none;"/>
            </label>
            @if(Session::has('success'))
                <div class="alert alert-success" style="text-align:center ;" role="alert">
                {{Session::get('success')}}
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('error')}}
                </div>
            @endif    

           <div class="big">
               <div class="container">
                <div class="row">


                    <div class="col-lg-6 col-sm-12 ">
                        



                                    <div class="group">
                                        <p class="fs-2 " >Name :</p>
                                        <input type="text" name="name" id="name" class="move"  value="{{Auth::user()->name}}"> 
                                        <div class="mark">
                                        <i class="fa-solid fa-pen-to-square" id="name_E"></i>

                                        </div>
                                        
                                        <div class="line"></div>
                                    </div>

                                    <div class="group">
                                        <p class="fs-2 " >Email :</p>
                                        <input type="text" name="email" id="email" class="move"  value="{{Auth::user()->email}}"> 
                                        <div class="mark">
                                        <i class="fa-solid fa-pen-to-square" id="email_E"></i>

                                        </div>
                                        
                                        <div class="line"></div>
                                    </div>

                                    <div class="group">
                                        <p class="fs-2 " >Created-at :</p>
                                        <input type="text" name="created_at" id="created_at" class="move"  value="{{Auth::user()->created_at}}"> 
                                        <div class="mark">
                                        <i class="fa-solid fa-pen-to-square" id="created_E"></i>

                                        </div>
                                        
                                        <div class="line"></div>
                                    </div>
                                    <button type="submit"  class="btn-outline-secondary" id="save">Save</button>


                        </form>

                            

                    </div>


                    <div class="col-lg-6 col-sm-12">
                        <img src="{{asset('img/2.jpg')}}" style="max-width:360px ; max-height:360px;">

                    </div>

                </div>

               </div>

                   
               

           </div>


           <!-- footer -->
           <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><i class="fa fa-book-reader mr-3"></i>Edukate</h1>
                    </a>
                    <p class="m-0">Accusam nonumy clita sed rebum kasd eirmod elitr. Ipsum ea lorem at et diam est, tempor rebum ipsum sit ea tempor stet et consetetur dolores. Justo stet diam ipsum lorem vero clita diam</p>
                </div>
                <div class="col-md-6 mb-5">
                    <h3 class="text-white mb-4">Newsletter</h3>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button class="btn-primary" style="min-width: 100px;">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-twitter"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-facebook-f"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-linkedin-in"></i></a>
                        <a class="text-white" href="#"><i class="fab fa-2x fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Our Courses</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Web Design</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Apps Design</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Marketing</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Research</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>SEO</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Terms & Condition</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Regular FAQs</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Help & Support</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#">Educate</a>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="m-0">Designed by <a class="text-white" href="#">Mohamed Mahmoud</a>
                    </p>
                </div>
            </div>
        </div>
    </div>                
                    
    
               

                
                   
           <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    
    
    <script>
        document.getElementById('email_E').onclick=function(){
            document.getElementById('email').style.pointerEvents='all';
            document.getElementById('email').style.borderBottom='1px solid blue';
            document.getElementById('save').style.pointerEvents='all';

        }

        document.getElementById('name_E').onclick=function(){
            document.getElementById('name').style.pointerEvents='all';
            document.getElementById('name').style.borderBottom='1px solid blue';
            document.getElementById('save').style.pointerEvents='all';

        }

        
    </script>
               

          
            
           <script src="{{asset('js/main.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   </body>

</html>

