@extend('admin_master')
@section('admin_main_content')
<div class="col-md-12">
<table class="orderexmple table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
    <thead>
    <tr>
        <th class="center"> Sr.NO </th>
        <th class="center"> Name </th>
        <th class="center"> Description</th>
        <th class="center"> Status</th>
        <th class="center"> Category Add date(d-m-y)</th>
        <th class="center">Action</th>
    </tr>
    </thead>
    <tbody>

        <tr class="odd gradeX">

            <td>4</td>
            <td class="center">demo1</td>
            <td class="center">demo2</td>
            <td class="center">

            </td>
            <td class="center">
                demo4
            </td>

            <td class="center">
                <button  class="btn btn-primary btn-xs">

                    <i class="fa fa-pencil"></i>
                </button>

                <button type="button" class="btn btn-danger btn-xs">

                    <i class="fa fa-trash-o "></i>
                </button>
            </td>
        </tr>


    </tbody>
</table>
</div>
@endsection