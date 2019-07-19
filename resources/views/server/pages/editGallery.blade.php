@extends($masterPath.'.master.master')

@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Gallery Record Update</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>

                                <form action="" data-parsley-validate method="post"
                                      enctype="multipart/form-data" class="form-horizontal form-label-left">
                                    <table border="1" class="table table-bordered table-striped table-hover">
                                    {{csrf_field()}}
                                        <input type="hidden" name="user_id" value="{{$updateSlideData->user_id}}">
                                            <tr>
                                                <th>
                                                    <label for="cat_id">Category Name</label>
                                                </th>
                                                <td>
                                                    <select name="cat_id" id="cat_id" class="form-control">
                                                        @foreach($CatData as $catalue)
                                                            <option value="{{$catalue->id}}" <?php if ($catalue->id == $updateSlideData->category->id) echo 'selected'?>>{{$catalue->name}}</option>
                                                                @endforeach
                                                    </select>
                                                    <span style="color:red;">Note: Category Not found? </span><a href="{{route('viewCategories')}}" target="_blank">click here</a> to add Category
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label for="des">Title</label>
                                                </th>
                                                <td>
                                                    <input type="text" name="title" value="{{$updateSlideData->title}}" class="form-control" id="title">
                                                </td>
                                            </tr>
                                        <tr>
                                            <th>
                                                <label for="training_photo">Photo</label>
                                            </th>
                                            <td>
                                                <input type="file" name="photo" class="btn btn-default">
                                                <img src="{{url('public/images/Slide/'.$updateSlideData->photo)}}" alt=""  width="60">
                                            </td>
                                        </tr>
                                            <tr>
                                                <th>
                                                    <label for="title">Short About Photo</label>
                                                </th>
                                                <td>
                                                    <textarea name="description" id="description" cols="10" rows="10">{!! $updateSlideData->description !!}</textarea>
                                                </td>
                                            </tr>
                                        <tr>
                                            <td colspan="2">
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection