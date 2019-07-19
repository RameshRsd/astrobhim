@extends($masterPath.'.master.master')

@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
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
                    <hr>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add Service Details</h2>
                                <div class="clearfix"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>

                                <form action="" data-parsley-validate method="post"
                                      enctype="multipart/form-data" class="form-horizontal form-label-left">

                                    {{csrf_field()}}
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="training_title">Service Name *
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="name" class="form-control col-md-7 col-xs-12">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="training_content">Description*
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea type="text" name="description"  id="content" class="form-control col-md-7 col-xs-12"></textarea>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>List of Service Details</h2>
                                <div class="clearfix"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table border="1" style="margin-bottom:30px; max-width:100%;" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Service Name</th>
                                        <th>Service Description</th>
                                        <th>Publish By</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($serviceData)>0)
                                        @foreach($serviceData as $key=>$Value)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$Value->name}}</td>
                                                <td>{!! $Value->description !!}</td>
                                                <td>
                                                    @foreach($userData as $users)
                                                        @if($users->id == $Value->user_id)
                                                            {{$users->name}}
                                                        @else
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a href="{{url('editService/edit/'.$Value->id)}}" class="btn btn-info btn-xs">Edit</a>
                                                    <a href="{{url('addService/delete/'.$Value->id)}}"  onclick="return confirm('Are you sure you want to delete this Record?');" class="btn btn-danger btn-xs">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr style="text-align: center; color:red;">
                                            <td colspan="7">Record Not Found</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                                {{$serviceData->links()}}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection