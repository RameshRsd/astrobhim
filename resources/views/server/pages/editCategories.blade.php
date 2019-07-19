
@extends($masterPath.'.master.master')
@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Edit Category</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form action="" method="post">
                                    {{csrf_field()}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="searchApplicantData">Category Name</label>
                                            <input type="text" class="form-control" name="name" value="{{$editCategories->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="searchGender">About Category</label>
                                            <textarea name="description" id="description" cols="30" rows="10" value="{{$editCategories->description}}">{!! $editCategories->description !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
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