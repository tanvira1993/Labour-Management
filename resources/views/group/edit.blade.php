

@extends('admin.app')

@section('content')


    @include('messages.message')
    
    <div class="col-md-6">

        <div class="card card-primary">

            <div class="card-header">
                <h3 class="card-title">Update Category</h3>
            </div>

            <form role="form" action="{{route('group.update',$data->id)}}" method="POST">
            @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name"><span style="color:red">*</span>Category Name</label>
                        <input type="text" class="form-control" id="name" value="{{ $data->name }}" name="name">
                    </div>

                    <div class="form-group">
                        <label><span style="color:red">*</span>Status</label>
                        <select class="form-control " style="width: 100%;" name="status">
                            <option {{ ($data->status == 1) ? 'selected' : '' }} value="1" >Yes</option>
                            <option {{ ($data->status == 0) ? 'selected' : '' }} value="0">No</option>
                        </select>
                    
                    </div>
                </div>

                {{method_field('PUT')}}

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
        
    </div>
    
@endsection
