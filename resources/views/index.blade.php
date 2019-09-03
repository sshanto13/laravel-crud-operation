@extends('parent')

@section('main')

<div align="right">
                <a href="{{ route('crud.create') }}" class="btn btn-primary">Create</a>
            </div>
<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Image</th>
  <th width="35%">First Name</th>
  <th width="15%">Last Name</th>
  <th width="40%">Action</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->first_name }}</td>
   <td>{{ $row->last_name }}</td>
   <td>
   <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
   <div class="btn-group mr-2" role="group" aria-label="Basic example">
    <a href={{route('crud.show', $row->id)}} class="btn btn-primary btn m-l-5">Show</a>
</div>
    <div class="btn-group mr-2" role="group" aria-label="Basic example">
    <a href={{route('crud.edit', $row->id)}} class="btn btn-primary btn m-l-5">Edit</a>
</div>
    <div class="btn-group mr-2" role="group" aria-label="Basic example">
  <form action="{{route('crud.destroy', $row->id)}}" method="post">
  @csrf
  @method('DELETE')

  <button type="submit" class="btn btn-danger">
    Delete
  </button>

  </form>
</div>
  </div>
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection