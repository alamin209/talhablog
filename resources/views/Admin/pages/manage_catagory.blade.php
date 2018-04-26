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
            @foreach($allcatory as $all)
                <?php $i++ ?>
                <td>{{ $i }}</td>
                <td>{{ $all->category_name }}</td>
               @if($all->Publication_status==1 )
                        <td> publish </td>
                    @else
                        <td> Not-publish </td>

                        @endif

                        </td>
                        <td>{{ $all->created_at}}</td>
                        <td> @if( $all->updated_at==null)
                        {{ "never update " }}

                              @else
                            {{ $all->updated_at }}
                                   @endif

                        </td>

                        <td class="center">
                            @if($all->Publication_status==1 )

                                <a class="btn btn-primary"href="{{ URL::to('/UnPublish-catagory/'.$all->id) }}"> UnPublish</a>
                            @else
                                <a class="btn btn-primary" href="{{ URL::to('/Publish-catagory/'.$all->id) }}"> Publish</a>

                            @endif

                                <a class="btn btn-primary" href="{{ URL::to('/edit-catagory/'.$all->id) }}">Edit</a>

                                <a class="btn btn-danger" href="{{ URL::to('/delete-catagory/'.$all->id) }}" onclick="return auth_check()"> Delete</a>
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