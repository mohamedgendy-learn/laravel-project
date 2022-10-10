<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edukate - Online Education Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    
</head>

<body>
    

    @yield('content')

    

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user_DB/assets/js/core/popper.min.js')}}" ></script>
    <script src="{{asset('user_DB/assets/js/core/bootstrap.min.js')}}" ></script>



    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script > new WOW().init();</script>
    <script>
        
        switch(document.getElementById('act').value)
        {
            case'home':
              document.getElementById('home').classList.add('active');
              break;
            case'About':
                document.getElementById('about').classList.add('active');
                break;
            case'Courses':
                document.getElementById('course').classList.add('active');
                break;
            case'features':
                document.getElementById('features').classList.add('active');
                break;
            case'Contact':
                document.getElementById('contact').classList.add('active');
                break;
            case'Instractor':
                document.getElementById('features').classList.add('active');
                break;
            case'Tesimonial':
                document.getElementById('features').classList.add('active');
                break;
            default:
               document.getElementById('home').classList.add('active');
        }
       
        
    </script>
</body>

</html>