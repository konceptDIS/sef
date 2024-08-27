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
                        <li class="breadcrumb-item" aria-current="page">Setting</li>
                        <li class="breadcrumb-item active" aria-current="page">Basic Info</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar">
        <div class="row mt-4">
            <form method="post" id="schlDetailsForm" action="" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$company->id ?? null}}">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card p-3 shadow-sm">
                            <p class="text-kdis-2 mb-3 subheader">Company Logo/Badge</p>
                            <div class="card-body text-center">
                                <img src="{{asset('storage/'.$company->logo ?? null)}}" alt="Image preview"
                                    class="img-fluid round" id="preview" style="height:100px;object-fit: cover;">
                            </div>
                            <div class="card-footer">
                                <div class="input-group">
                                    <input type="file" name="logo" id="fileInput" onchange="imgPreview('#preview', '#fileInput')" class="form-control" aria-label="Upload">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card p-3 shadow-sm">
                            <p class="text-kdis-2 mb-3 subheader">Company Details</p>
                            <div class="row g-3 mb-2">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" id="name" value="{{$company->name ?? null}}" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mb-2">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" id="address" value="{{$company->address ?? null}}"
                                            class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Slogan</label>
                                        <input type="text" name="slogan" id="slogan" value="{{$company->slogan ?? null}}"
                                            class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3 mb-2">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="input-group">
                                            <div class="input-group-text">@</div>
                                            <input type="email" name="email" id="email" value="{{$company->email ?? null}}"
                                                class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="fa fa-telephone"></i></div>
                                            <input type="tel" name="phone" id="phone" value="{{$company->phone ?? null}}"
                                                class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row text-center p-2">
                                <button type="submit" id="saveSetUpBtn" class="btn btn-primary">Save
                                    Changes</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>

        </div>

    </div>
</main>

@endsection

@push('js')
<script>

    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Hi. I am your text editor...',
            tabsize: 2,
            height: 150,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });

</script>
@endpush
