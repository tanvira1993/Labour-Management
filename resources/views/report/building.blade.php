@extends('admin.app')

@section('content')
<section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>



<form role="form" action="/api/buidingWiseReport" method="GET">
        @csrf
        <div class="card-body">

            <div class="input-group input-group-sm">

                <select class="form-control" name="l_id" style="width:32%">
                    	<option value = "">All</option>
                    @foreach ($type as $key => $tp)
                        <option value="{{$tp->id}}" {{($tp->id == $filters['l_id'])?'selected':''}}>{{$tp->name}}</option>
                    @endforeach
                        
                </select>

                <select class="form-control" name="g_id" style="width:32%;">
                    	<option value = "">All</option>
                    @foreach ($group as $key => $grp)
                        <option value="{{$grp->id}}" {{($grp->id == $filters['g_id'])?'selected':''}}>{{$grp->name}}</option>
                    @endforeach
                        
                </select>

                <select class="form-control" name="b_id" style="width:32%;">
                    	<option value = "">All</option>
                    @foreach ($building as $key => $bl)
                        <option value="{{$bl->id}}" {{($bl->id == $filters['b_id'])?'selected':''}}>{{$bl->name}}</option>
                    @endforeach
                        
                </select>

                <span class="input-group-append">
                    <button type="submit" class="btn btn-info btn-flat" >Go</button>
                </span>
            </div>

		</div>


    </form>
        



            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>name</th>
                  <th>Type</th>
                  <th>Group</th>
                  <th>Building</th>
                  <th>id</th>
                </tr>
                </thead>
                <tbody>
                	@foreach($labour as $lbr)

	                	<tr>
		                  <td>{{$lbr->name}}</td>
		                  @foreach($type as $typ)
			                  @if($typ->id == $lbr->labour_type)
			                  	<td>{{$typ->name}}</td>
			                  @endif
			              @endforeach

			              @foreach($group as $gpr)
			                  @if($gpr->id == $lbr->group_id)
			                  	<td>{{$gpr->name}}</td>
			                  @endif
			              @endforeach

			              @foreach($building as $bldng)
			                  @if($bldng->id == $lbr->building_id)
			                  	<td>{{$bldng->name}}</td>
			                  @endif
			              @endforeach
		                  <td>{{$lbr->id}}</td>
		                </tr>
                	@endforeach
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('cs')
<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endsection

@section('js')
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection


