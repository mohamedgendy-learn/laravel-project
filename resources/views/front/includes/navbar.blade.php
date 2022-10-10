
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>Edukate</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="{{route('homepage')}}" class="nav-item nav-link " id="home">Home</a>
                    <a href="{{route('aboutpage')}}" class="nav-item nav-link" id="about">About</a>
                    <a href="{{route('coursespage')}}" class="nav-item nav-link" id="course">Courses</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="features" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0" id="beauty">
                            <input style="display:none;" id="act" value="{{$page}}">
                            <a href="{{route('featurespage')}}" class="dropdown-item">Our Features</a>
                            <a href="{{route('instractorpage')}}"  class="dropdown-item">Instructors</a>
                            <a href="{{route('opinionpage')}}" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="{{route('contactpage')}}" id="contact" class="nav-item nav-link">Contact</a>
                </div>
                @if(!empty(Auth::user()->name)) 
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        @if(Auth::user()->photo==null)
                            <img style="max-width:40px ; max-height:40px; border-radius: 50%;" src="{{asset('img/user.png')}}">
                        @else
                            <img style="max-width:40px ; max-height:40px; border-radius: 50%;" src="{{asset('img/'.Auth::user()->photo )}}">
                        @endif

                    </li>
               </ul>
                        <ul class="navbar-nav ms-auto">
                              <!-- Authentication Links -->
                              @guest
                                  @if (Route::has('login'))
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                      </li>
                                  @endif

                                  @if (Route::has('register'))
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                      </li>
                                  @endif
                              @else
                                  
                                  <li class="nav-item dropdown">
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{ Auth::user()->name }}
                                      </a>

                                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>
                                          <a class="dropdown-item" href="{{ route('user_DB') }}">
                                            
                                              {{ __('Dashboard') }}            
                                              
                                          </a>
                                          @if($page!='profile')
                                          <a class="dropdown-item" href="{{ route('profile') }}">
                                            
                                              {{ __('Profile') }}            
                                              
                                          </a>
                                          @endif

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                              @csrf
                                          </form>
                                      </div>
                                  </li>
                              @endguest
                        </ul>

                @else
                <a href="{{route('signuppage')}}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Sign Up</a>
                <a href="{{route('loginpage')}}" class="btn btn-primary py-2 px-4 d-none d-lg-block" style="margin-left:10px ;">Log In</a>
                @endif
            </div>
        </nav>
        
</div>






    