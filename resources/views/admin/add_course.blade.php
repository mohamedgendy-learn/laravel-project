@extends('admin.parts.main')

@section('content')

        <section id="line-awesome-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header" style="text-align:center ;">
                                    <h4 class="card-title">Add New Course</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                        @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div><br />
                                        @endif

                                       <div class="container" style="max-width:900px ;">

                                           <form action="{{route('createcourse')}}" method="POST">
                                             @csrf
                                                <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-2 col-form-label">Course Name</label>
                                                <div class="col-sm-10" >
                                                    <input type="text" name="name" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                                </div>
                                                </div>

                                                <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-2 col-form-label">Skill-Level</label>
                                                <div class="col-sm-10" >
                                                    <input type="text" name="skill-level" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                                </div>
                                                </div>

                                                <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-2 col-form-label">Duration</label>
                                                <div class="col-sm-10" >
                                                    <input type="text" name="duration" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                                </div>
                                                </div>

                                                <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-2 col-form-label">Langauge</label>
                                                <div class="col-sm-10" >
                                                    <input type="text" name="language" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                                </div>
                                                </div>

                                                

                                                <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-2 col-form-label">Price</label>
                                                <div class="col-sm-10" >
                                                    <input type="text" name="price" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                                </div>
                                                </div>

                                                <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-2 col-form-label">Lectures</label>
                                                <div class="col-sm-10" >
                                                    <input type="text" name="lectures" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                                </div>
                                                </div>

                                                <div class="row mb-3">
                                                <label for="colFormLabel" class="col-sm-2 col-form-label">Photo</label>
                                                <div class="col-sm-10" >
                                                    <input type="file" name="photo"  class="form-control" id="colFormLabel" placeholder="col-form-label">
                                                </div>
                                                </div>
                                                <button type="submit" style="margin-left:200px; margin-bottom:20px ;" class="btn btn-primary">Add The Course</button>
                                            </form>     
                                               
                                       </div>


                                </div>
                            </div>
                        </div>
                    </div>
        </section>

@stop