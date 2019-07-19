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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Gallery Record Form</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>

                                <form action="" data-parsley-validate method="post"
                                      enctype="multipart/form-data" class="form-horizontal form-label-left">
                                    <table border="1" class="table table-bordered table-striped table-hover">
                                        {{csrf_field()}}
                                        <tr>
                                            <th>
                                                <label for="title">Category</label>
                                            </th>
                                            <td>
                                                <select name="cat_id" id="cat_id" class="form-control">
                                                    @foreach($catData as $catValue)
                                                        <option value="{{$catValue->id}}">{{$catValue->name}}</option>
                                                    @endforeach
                                                </select>
                                                <span style="color:red;">Note: Category Not found? </span><a href="{{route('viewCategories')}}" target="_blank">click here</a> to add Category
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="title">Title</label>
                                            </th>
                                            <td>
                                                <input type="text" name="title" class="form-control" placeholder="Photo Title">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="des">Short About Photo</label>
                                            </th>
                                            <td>
                                                <textarea name="description" id="description" cols="10" rows="10"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <label for="photo">Image</label>
                                            </th>
                                            <td>
                                                <input type="file" name="photo" class="btn btn-default">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>List of Gallery Record</h2>
                                <div class="clearfix"></div>

                            </div>
                            <div class="x_content">
                                <table border="1" style="margin-bottom:30px; max-width:100%;" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($SlideData)>0)
                                        @foreach($SlideData as $key=>$slideValue)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$slideValue->title}}</td>
                                                <td>{{$slideValue->category->name}}</td>
                                                <td><img src="{{url('public/images/Slide/'.$slideValue->photo)}}" alt="Image Not Found" width="60"></td>
                                                <td>
                                                    <a href="{{url('addGallery/'.$slideValue->id.'/editGallery')}}" class="btn btn-info btn-xs">Edit</a>
                                                    <a href="{{url('addGallery/delete/'.$slideValue->id)}}"  onclick="return confirm('Are you sure you want to delete this Record?');" class="btn btn-danger btn-xs">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5">Record Not Found</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection