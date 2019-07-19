@extends($masterPath.'.master.master')

@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <div class="col-sm-12 col-md-12 col-xs-12">
                        <p class="font-size-sm text-muted">
                            @if(session('success'))
                                <span class="alert alert-success"> {{session('success')}}</span>
                        @endif
                        @if($errors->any())
                            <ul  class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                            @endif
                            </p>
                    </div>

                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Guruji Introduction</h2><br>
                                <div class="clearfix"></div>
                                <i class="btn btn-danger btn-xs">Shown on Home page</i>

                            </div>
                            <div class="x_content">
                                <br/>

                                <form action="{{route('introPost')}}" data-parsley-validate method="post"
                                      enctype="multipart/form-data" class="form-horizontal form-label-left">
                                        {{csrf_field()}}
                                        <div class="col-sm-4">
                                            <label for="">Photo</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <img src="{{url('public/images/staff/').'/'.$guruji->photo}}" class=" img-circle" style="width:25%; border:1px solid #f3f3f3; padding:5px;" alt="" />
                                            <input type="file" name="photo" class="form-control">
                                        </div>
                                        <div style="clear: both; margin-top:10px;"></div>
                                        <div class="col-sm-4">
                                            <label for="">Name</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="name" class="form-control" value="{{$guruji->name}}">
                                        </div>
                                        <div style="clear: both; margin-top:10px;"></div>
                                        <div class="col-sm-4">
                                            <label for="">Title</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="title" class="form-control" value="{{$guruji->title}}">
                                        </div>
                                        <div style="clear: both; margin-top:10px;"></div>
                                        <div class="col-sm-4">
                                            <label for="">Moible Number</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="number" class="form-control" value="{{$guruji->number}}">
                                        </div>
                                        <div style="clear: both; margin-top:10px;"></div>
                                        <div class="col-sm-4">
                                            <label for="">Introduction</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <textarea type="text" id="description" name="intro" class="form-control" value="{{$guruji->intro}}">{!! $guruji->intro !!}</textarea>
                                        </div>
                                        <div style="clear: both; margin-top:10px;"></div>
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Contact Information</h2><br>
                                <i class="btn btn-danger btn-xs">Shown on Header/Footer/Contact page</i>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>

                                <form action="{{route('introPostContact')}}" method="post">
                                        {{csrf_field()}}
                                        <div style="clear: both; margin-top:10px;"></div>
                                        <div class="col-sm-12">
                                            <label for="">Office Name</label>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" name="office_name" class="form-control" value="{{$contactInfo->office_name}}">
                                        </div>
                                        <div style="clear: both; margin-top:10px;"></div>
                                        <div class="col-sm-12">
                                            <label for="">Office Address</label>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" name="office_address" class="form-control" value="{{$contactInfo->office_address}}">
                                        </div>
                                        <div style="clear: both; margin-top:10px;"></div>
                                        <div class="col-sm-12">
                                            <label for="">Office Telephone</label>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" name="office_tel" class="form-control" value="{{$contactInfo->office_tel}}">
                                        </div>
                                        <div style="clear: both; margin-top:10px;"></div>
                                        <div class="col-sm-12">
                                            <label for="">Mobile Number</label>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" name="office_mob" class="form-control" value="{{$contactInfo->office_mob}}">
                                        </div>
                                        <div style="clear: both; margin-top:10px;"></div>
                                        <div class="col-sm-12">
                                            <label for="">Email Address</label>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" name="office_email" class="form-control" value="{{$contactInfo->office_email}}">
                                        </div>
                                        <div style="clear: both; margin-top:10px;"></div>
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection