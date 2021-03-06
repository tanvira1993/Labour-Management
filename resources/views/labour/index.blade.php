@extends('admin.app')

@section('content')

    @include('messages.message')

    <div class="card-body">
        <table class="table table-bordered">
            <thead>                  
                <tr>
                    <th style="width: 200px">Change</th>
                    <th >Job ID</th>
                    <th>Name</th>
                    <th>Labour Type</th>
                    <th>Group</th>
                    <th>Building</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($labour as $key => $data)

                    <tr>
                        <td >
                            <form action="{{route('labour.destroy',$data->id)}}" method="post" >
                                @csrf
                                {{method_field('delete')}}
                                <button class="btn btn-primary alert-danger fas fa-trash-alt" onclick="return confirm('Are you sure?')" type="submit"></button>
                                <a href="{{  route('labour.edit',$data->id)  }}"><i class=" btn btn-primary fa fa-edit"></i></a>
                                <a href="{{  route('labour.show',$data->id)  }}"><i class=" btn btn-primary fas fa-info"></i></a>
                            </form>
                        </td>
                        <td>{{'EP-'}}{{$key}}</td>
                        <td>{{$data->name}}</td>
                        <td>
                        	@foreach($labourType as $lt)

	                        	@if($lt->id == $data->labour_type)
	                        	{{$lt->name}}
	                        	@endif

                        	@endforeach
                        </td>

                        <td>
                        	@foreach($group as $lt)

	                        	@if($lt->id == $data->group_id)
	                        	{{$lt->name}}
	                        	@endif

                        	@endforeach
                        </td>

                        <td>
                        	@foreach($building as $lt)

	                        	@if($lt->id == $data->building_id)
	                        	{{$lt->name}}
	                        	@endif

                        	@endforeach
                        </td>


                    </tr>
                    
                @endforeach
                
            </tbody>
        </table>
    </div>
    
@endsection

