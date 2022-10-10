<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
	
    <!-- Font Icon --> 
    <link rel="stylesheet" href="{{asset('login/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('login/css/style.css')}}">
</head>
<body>

    <div class="main">
             
            <section class="signup">
                    <div class="container">
                        
                        <div class="signup-content">
                            <div class="signup-form">
                              
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div><br />
                                    @endif 
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger">
                                            <ul>                                        
                                                <li>{{ Session::get('error') }}</li>                                       
                                            </ul>
                                        </div><br />
                                  @endif 
                                  
                                <h2 class="form-title">Sign up</h2>
                                
                                <form method="POST" class="register-form" action="{{route('regist')}}" id="register-form">
                                  @csrf
                                    <div class="form-group">
                                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                        <input type="text" name="name" id="name" placeholder="Your Name"/>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                                        <input type="email" name="email" id="email" placeholder="Your Email"/>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                        <input type="password" name="password" id="pass" placeholder="Password"/>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                        <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                                       
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                                        
                                    </div>
                                    <div class="form-group form-button">
                                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                                    </div>
                                </form>
                            </div>
                            <div class="signup-image">
                                <a href="{{route('loginpage')}}" class="signup-image-link">I am already member</a>
                                <figure><img src="{{asset('login/images/signup-image.jpg')}}" alt="sing up image"></figure>
                                
                                <button type="button" class="btn btn-primary" style="margin-right: 30px;min-width:300px; margin-bottom:20px;"><a href="{{route('social','facebook')}}" class="change"> Facebook</a></button>
                              <button type="button" class="btn btn-danger" style="min-width:300px;"><a href="#" class="change">Google</a> </button>
                            </div>
                        </div>
                    </div>
            </section>
    </div>

    <!-- JS -->
    <script src="{{asset('login/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('login/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>