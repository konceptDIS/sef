@extends('admin.layouts.app')

@section('content')
<main class="page-content">
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="">
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Admin</a></li>
                        <li class="breadcrumb-item" aria-current="page">Blog</li>
                        <li class="breadcrumb-item active" aria-current="page">Categories</li>
                    </ol>
                </div>
            </div>
            <div class="">
                <div class="widgetbar">
                    <button class="btn btn-primary" onclick="$('#category-modal').modal('show');"><i class="ri-add-line align-middle mr-2"></i>New Category</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
            <!-- Start col -->
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">Registered Categories</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="datatable-kdis table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th data-breakpoints="xs">#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th data-breakpoints="xs sm">Added On</th>
                                    <th data-type="html" data-breakpoints="xs sm md">Info</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if($categories)
                                        @foreach ($categories as $key => $cat)
                                        <tr>
                                            <td>{{($key + 1)}}</td>
                                            <td>{{$cat->title}}</td>
                                            <td>{{$cat->description}}</td>
                                            <td>{{$cat->created_at->format('D, jS M | H:i')}}</td>
                                            <td>
                                                <div class="btn-group btn-group-sm" role="group" aria-label="action buttons">
                                                    <button type="button" class="btn ps-1 btn-primary" onclick="editCategory({{$cat->id}})">
                                                        <i class="bi bi-pen-fill"></i>
                                                    </button>
                                                    <button type="button" class="btn ps-1 btn-danger"  onclick="deleteCategory({{$cat->id}})">
                                                        <i class="bi bi-trash3-fill"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th data-breakpoints="xs">#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th data-breakpoints="xs sm">Added On</th>
                                        <th data-type="html" data-breakpoints="xs sm md">Info</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End col -->
        </div>
        <!--End row -->
    </div>
    <!-- End Contentbar -->
    <div class="modal fade" id="category-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleLargeModalLabel">Add Category</h5>
                    <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.addCategory')}}">
                        @csrf
                        <div class="form-group mb-2">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" required="required">
                        </div>
                        <div class="form-group mb-2">
                            <label>Description</label>
                            <textarea name="description" class="form-control" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-category-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalTitle">Edit Category</h5>
                    <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="edit-category-form" action="{{route('admin.updateCategory')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label>Title</label>
                            <input type="text" name="title" id="category-title" class="form-control" required="required">
                        </div>
                        <input type="hidden" name="id" id="category-id">
                        <div class="form-group mb-2">
                            <label>Description</label>
                            <textarea name="description" id="category-description" class="form-control" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection

@push('js')
<script>
    function editCategory(id){
        var url = '/admin/get-category/' + id;
        $.get(url, function(response, status){
            if(response.status == 'success'){
                $("#category-title").val(response.data.title);
                $("#category-description").val(response.data.description);
                $("#category-id").val(response.data.id);
            }else{
                Swal.fire("error", "Something went wrong. User was not blocked.");
            }
        });
    }
    function deleteCategory(id){
        Swal.fire({
            title: "Do you want to delete this item?",
            showCancelButton: true,
            confirmButtonText: "Yes"
        }).then((result) => {
            if (result.isConfirmed) {
                var url = '/admin/delete-category/' + id;
                $.ajax({
                    url: url,
                    type: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        response = JSON.parse(response);
                        if (response.status == 'success') {
                            Swal.fire("info", "Category deleted", "success");
                            location.reload();
                        } else {
                            Swal.fire("Oooops!", "The server was unable to handle your request at the moment!", "error");
                        }
                    },
                    error: function (xhr) {
                        console.error('Error:', xhr.responseText);
                        Swal.fire("Oooops!", "The server encountered an error while processing your request!", "error");
                    }
                });

            }
        });
    }
</script>
@endpush
