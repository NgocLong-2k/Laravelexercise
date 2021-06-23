@extends('admin.layouts.app')
@section('title', 'Categories')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Categories</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>
    <div class="table-responsive">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <p>{{session()->get('errors')->first()}}</p>
            </div>
        @endif

        @if (session()->get('success'))
            <div class="alert alert-success" role="alert">
                <p>{{session()->get('success')}}</p>
            </div>
        @endif

        <table class="table">
            <caption>List of Categories</caption>
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Photo</th>
                <th scope="col">Price</th>
                <th>-</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td>{{$category->photo}}</td>
                    <td>{{$category->min_price}}</td>
                    <td>
                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('admin.products.edit', $category->id)}}">Edit</a></li>
                                <li><a class="dropdown-item" href="{{route('admin.products.show', $category->id)}}">Preview</a></li>
                                <li><a class="dropdown-item" href="#">Publish</a></li>
                                <li><a class="dropdown-item delete" attr_id="{{$category->id}}" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No products!</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{$categories->links('vendor.pagination.bootstrap-4')}}
        </div>
    </div>
@stop

@section('modal')
    <div class="modal fade" id="deleleItem" aria-hidden="true" aria-labelledby="deleleItemToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('admin.category.delete')}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" id="del_id" name="item" value="0" />
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleleItemToggleLabel">Product Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure to want to deleted this product!
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" >Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script type="text/javascript">
        var myModal = new bootstrap.Modal(document.getElementById('deleleItem'), {
            keyboard: false
        })
        $('.delete').click(function(){
            $id = $(this).attr('attr_id');
            $('#del_id').val($id);
            myModal.show();
        });
    </script>
@stop
