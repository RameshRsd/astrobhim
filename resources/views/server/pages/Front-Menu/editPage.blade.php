@extends($masterPath.'.master.master')

@section('content')
    <div class="main_container">
        <div class="right_col" role="main">
            <div class="">
                <div class="col-md-12">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Update Page</h2>
                                <div class="clearfix"></div>

                            </div>
                            <div class="x_content">
                                <form action="" data-parsley-validate method="post" class="form-horizontal form-label-left">

                                    {{csrf_field()}}
                                <table border="1" style="margin-bottom:30px; max-width:100%;" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Page Name</th>
                                        <th>
                                            <input type="text" class="form-control" name="name" value="{{$pageData->name}}">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <th>
                                            <textarea class="content" name="intro" id="description" cols="50" rows="10" data-validation="required" data-validation-error-msg="Content is required">{{$pageData->intro}}</textarea>
                                        </th>
                                    </tr>
                                    </thead>
                                </table>
                                    <div>
                                        <button type="submit" class="btn btn-success btn-sm">Update</button>

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