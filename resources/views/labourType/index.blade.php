@extends('admin.app')

@section('content')

    @include('messages.message')

    <div class="card-body">
        <table class="table table-bordered">
            <thead>                  
                <tr>
                    <th>Change</th>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $key => $data)

                    <tr>
                        <td >
                            <form action="{{route('labourType.destroy',$data->id)}}" method="post" >
                                @csrf
                                {{method_field('delete')}}
                                <button class="btn btn-primary alert-danger fas fa-trash-alt" onclick="return confirm('Are you sure?')" type="submit"></button>
                                <a href="{{  route('labourType.edit',$data->id)  }}"><i class=" btn btn-primary fa fa-edit"></i></a>
                            </form>
                        </td>
                        <td>{{$key+1}}</td>
                        <td>{{$data->name}}</td>
                    </tr>
                    
                @endforeach
                
            </tbody>
        </table>
    </div>
    
@endsection

