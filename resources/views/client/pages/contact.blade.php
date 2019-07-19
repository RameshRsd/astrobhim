@extends($masterPath.'.master.master')

@section('content')

    <section class="contact" style="margin:20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class=""  style="padding:5px; background-color: #fff;">

                    <h4  style="padding:5px; background-color: orangered; color:#fff;">Leave Message</h4>
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
                        <form action="{{url('contact')}}" method="post">
                            {{csrf_field()}}
                                    <div class="form-group col-md-12">
                                        <label for="name">Name <font color="#ff0000">*</font></label>
                                        <input type="text" class="form-control" id="name" name="name" data-validation="required" data-validation-error-msg="Name is required" placeholder="Insert your name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="contact">Contact Number <font color="#ff0000">*</font></label>
                                        <input type="text" class="form-control" id="contact" name="contact" value="" placeholder="Insert Your Contact Number">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control " id="email" name="email" placeholder="Insert your valid email address">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="control-label" for="des">Message <font color="#ff0000">*</font></label>
                                        <textarea name="message"  class="form-control"  id="description" cols="30" rows="10"  placeholder="Drop your messages"></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="form-group  col-xs-offset-4  col-sm-4">
                                            <button type="submit" class="btn  btn-login green">Send</button>
                                            <button type="reset" class="btn  btn-login red">Reset</button>
                                        </div>
                                    </div>
                        </form>
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="contact-sec"  style="padding:5px; background-color: #fff;">
                        <h4   style="padding:5px; background-color: orangered; color:#fff;">Contact Information</h4>
                        @foreach($officeInfo as $infoValue)
                        <p><i class="fa fa-briefcase"></i> {{$infoValue->office_name}}</p>
                        <p><i class="fa fa-map-marker"></i> {{$infoValue->office_address}}</p>
                        <p><i class="fa fa-phone"></i> @if(isset($infoValue->office_tel)){{$infoValue->office_tel}}, {{$infoValue->office_mob}}@else{{$infoValue->office_mob}}@endif</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> {{$infoValue->office_email}}</p>
                            @endforeach
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top:15px;">
                    <div class="contact-sec"  style="padding:5px; background-color: #fff;">
                        <h4   style="padding:5px; background-color: orangered; color:#fff;">Find us on Facebook</h4>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAstrology-Yoga-Counselling-Service-Center-2290070777985063%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline&width=340&height=310&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=211117182877230" width="100%" height="310" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-top:20px;">
                    <div class="col-md-12 col-xs-12">
                        <div class="contact-sec"  style="padding:5px; background-color: #fff;">
                        <h4   style="padding:5px; background-color: orangered; color:#fff;">Find us on Map</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.9688322217926!2d85.30975441506232!3d27.718248582787393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19e254d198bf%3A0x4f82a9cb6275271e!2sAstrology+%26+Yoga+Counselling+Service+Center!5e0!3m2!1sen!2snp!4v1547636519116" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>                    </div>
                    </div>
            </div>
        </div>
    </section>



@endsection