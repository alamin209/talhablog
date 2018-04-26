@extend('admin_master')
@section('admin_main_content')
    <div class="col-md-12">
        <table class="orderexmple table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
            <thead>
            <tr>
                <th class="center"> Sr.NO </th>
                <th class="center"> Name </th>
                <th class="center"> Status</th>
                <th class="center"> Category Add date(d-m-y)</th>
                <th class="center"> Update  date(d-m-y)</th>
                <th class="center">Action</th>
            </tr>
            </thead>
            <tbody>

            <tr class="odd gradeX">
                <?php     $i=0; ?>
                @foreach($allcomments as $c)
                    <?php $i++ ?>
                    <td>{{ $i }}</td>
                    <td>{{ $c->comments }}</td>
                    @if($c->publish_status==0 )
                        <td> Not-publish </td>
                    @else
                        <td> publish </td>
                        @endif
                        </td>
                        <td>{{ $c->created_at}}</td>
                        <td> @if( $c->updated_at==null)
                                {{ "never update " }}
                            @else
                                {{ $c->updated_at }}
                            @endif
                        </td>

                        <td class="center">
                            @if($c->publish_status==1 )

                                <a class="btn btn-primary"href="{{ URL::to('/UnPublish-comment/'.$c->id) }}"> UnPublish</a>
                            @else
                                <a class="btn btn-primary" href="{{ URL::to('/Publish-comments/'.$c->id) }}"> Publish</a>
                            @endif
                            <a class="btn btn-primary" href="{{ URL::to('/edit-catagory/'.$c->id) }}">Edit</a>

                            <a class="btn btn-danger" href="{{ URL::to('/delete-catagory/'.$c->id) }}" onclick="return auth_check()"> Delete</a>
                        </td>
            </tr>

            @endforeach


            </tbody>
        </table>
    </div>
    <div id="txtHint"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function selectid3(x)
        {

            if (confirm("are you sure to delete this Category?"))
            {

                btn = $(x).data('panel-id');

                alert(btn);
                $.ajax({
                    type: 'POST',
                    url:'superAdminContoller/deleteCatagoryid',
                    data:'_token = <?php echo csrf_token() ?>',
                    data: {id: btn},
                    cache: false,
                    success: function (data) {
                        alert('Category deleted Successfully');
                        location.reload();
                    }

                });
            }
        }
    </script>
@endsection