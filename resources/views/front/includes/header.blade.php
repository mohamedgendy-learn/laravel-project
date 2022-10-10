<div class="jumbotron jumbotron-fluid position-relative overlay-bottom wow slideInRight" data-wow-duration="1s" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            @if($page!='home')
                <h1 class="text-white display-1">{{$page}}</h1>
                <div class="d-inline-flex text-white mb-5">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">{{$page}}</p>
                </div>
             
              @else
                <h1 class="text-white mt-4 mb-4">Learn From Home</h1>
                <h1 class="text-white display-1 mb-5">Education Courses</h1>
            @endif
            
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Courses</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Courses 1</a>
                            <a class="dropdown-item" href="#">Courses 2</a>
                            <a class="dropdown-item" href="#">Courses 3</a>
                        </div>
                    </div>
                    <input type="text" class="form-control border-light radius" style="padding: 30px 25px;" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="btn btn-secondary px-4 px-lg-5">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>