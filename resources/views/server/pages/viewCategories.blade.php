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
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add Categories</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form action="" method="post">
                                    {{csrf_field()}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="searchApplicantData">Category Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Category Name">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="searchGender">About Category</label>
                                            <textarea name="description" id="description" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>List of Categories</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                @if(count($viewCat)>0)
                                    <h2>Category || Total <span style="color:red; font-weight:bolder">{{count($viewCat)}}</span> Found</h2>
                                @else
                                @endif

                                @if(count($viewCat)>0)

                                    <table class="table-condensed table-bordered table-hover">
                                        <thead>
                                        <tr style="background-color:grey; color:#fff;">
                                            <th>S.N</th>
                                            <th>Category Name</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($viewCat as $key=>$value)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$value->name}}</td>
                                                <td>{!! $value->description !!}</td>
                                                <td>
                                                    @if($value->id == 1)
                                                        <a disabled="disabled" class="btn btn-danger btn-xs" title="This Record Can not be edited">Edit</a>
                                                        @else
                                                    <a href="{{url('viewCategories/'.$value->id.'/editCategories')}}" class="btn btn-primary btn-xs">Edit</a>
                                                    @endif
                                                    {{--<a href="{{url('viewApplication/delete/'.$value->id)}}" onclick="return confirm('Are you sure you want to delete this Trainee?');">Delete</a>--}}
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                @else
                                    <table class="table-condensed table-bordered table-hover">
                                        <thead>
                                        <tr style="background-color:grey; color:#fff;">
                                            <th>S.N</th>
                                            <th>Category Name</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan="4"><h2 class="btn-danger" style="text-align:center;">Record Not Found</h2></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                @endif
                                {{--{{$viewTrainee->links()}}--}}

                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection