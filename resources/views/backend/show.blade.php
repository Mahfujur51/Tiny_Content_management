@extends('layouts.app')
@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            Add Product
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Sl</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Section</th>
                    <th>Action</th>
                </tr>
                @foreach ($post as $key=>$posts)
                {{-- expr --}}
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{str_limit($posts->title,15)}}</td>
                    <td>
                        @if ($posts->type==1)
                        <span class="badge badge-info">Image</span>
                        @else
                        <span class="badge badge-secondary">Video</span>
                        @endif
                    </td>
                    <td>
                        @if ($posts->status==0)
                        <span class="badge badge-warning">UnPublished</span>
                        @else
                        <span class="badge badge-success">Published</span>
                        @endif
                    </td>
                    <td>
                        @if ($posts->section==1)
                        <span class="badge badge-warning">Section 1</span>
                        @else
                        <span class="badge badge-success">Section 2</span>
                        @endif
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#status-{{$posts->id}}">Change Status</button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-{{$posts->id}}">Delete</button>

                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
<!-- Change Status -->

<!-- Delete -->
@foreach ($post as $posts)
<!-- Modal -->
<div class="modal fade" id="status-{{$posts->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Are You Sure To delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('update.status',$posts->id) }}" method="post">
        @csrf
      <div class="modal-body">
        <label for="">Select Status</label>
        <select name="status" id="" class="form-control">

            <option value="{{$posts->status}}" >
                @if ($posts->status==0)
                Unpublished
                @else
                Published

                @endif
            </option>
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>


      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <input type="submit" class="bnt btn-success" value="Change Status">
      </div>
      </form>
    </div>
  </div>
</div>
@endforeach
@foreach ($post as $posts)
    {{-- expr --}}

<!-- Delete -->
<!-- Modal -->
<div class="modal fade" id="delete-{{$posts->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Are You Sure To delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{ route('post.delete',$posts->id) }}" type="button" class="btn btn-primary">Delete Parmanent</a>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
