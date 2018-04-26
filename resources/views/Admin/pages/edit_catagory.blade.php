@extend('admin_master')
@section('admin_main_content')
    <section class="content-header">
        <h1>
            User Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">User profile</li>

        </ol>
    </section>
    <div class="col-md-12">
        <h3 class="bd-success text-primary  text-center " style="font-family:monospace;font-weight:bold">
            @if(Session ::has('message'))
                {{ session('message') }}
            @endif
        </h3>
        {{ Form::open(['url'=>'/update-category/'.$allcatoryinfor->id,'class'=>"form-horizontal"  ])   }}
        <div class="form-group">
            <label for="inputName" class="col-md-2 control-label">Category Name</label>

            <div class="col-sm-10">
                <input type="text"  name="category_name" class="form-control" id="inputName" value= {{ "$allcatoryinfor->category_name" }}>
            </div>
        </div>
        <div class="form-group">
            <label for="inputExperience" class="col-sm-2 control-label">Description</label>

            <div class="col-sm-10">
                <textarea class="form-control" name="category_description" id="inputExperience" >{{"$allcatoryinfor->category_description" }}</textarea>
            </div>
        </div>


        <div class="form-group">
            <label for="inputSkills" class="col-sm-2 control-label">Status</label>

            <div class="col-sm-10">
                {{--<input type="text" class="form-control" id="inputSkills" placeholder="Skills">--}}
                <select class="form-control" name="status">

                    {{--<option value="1">Publish </option>--}}
                    {{--<option value="0">Not published </option>--}}

                    <option value="1"  {{ ($allcatoryinfor->Publication_status=='1')?'selected="selected"':'' }} >Publish</option>
                    <option value="0" {{ ($allcatoryinfor->Publication_status=='0')?'selected="selected"':'' }}>Not published </option>

                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </div>
        {!! Form::close()  !!}
    </div>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@endsection