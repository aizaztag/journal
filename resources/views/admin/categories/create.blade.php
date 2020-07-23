@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1>
        </div>
    </div>
    @include('admin.partials.flash')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="tile">
                <h3 class="tile-title">{{ $subTitle }}</h3>
                <form action="{{ route('admin.categories.store') }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label" for="name">Name <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}"/>
                            @error('name') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="launched">Launched <span class="m-l-5 text-danger"> *</span></label>
                            <div class="col-xs-5 date">
                                <div class="input-group input-append date" id="datePicker">
                                    <input class="form-control @error('launched') is-invalid @enderror" required="required" type="text" name="launched"  id="launched" value="{{ old('launched') }}"/>
                                    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                            </div>
                            @error('launched') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="issn">ISSN <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('issn') is-invalid @enderror" type="text" name="issn" id="issn" value="{{ old('issn') }}"/>
                            @error('issn') {{ $message }} @enderror
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-10">
                                    <label class="control-label">Category icon</label>
                                    <input class="form-control @error('icon') is-invalid @enderror" type="file" id="icon" name="icon"/>
                                    @error('icon') {{ $message }} @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Category</button>
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="{{ route('admin.categories.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {{--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />--}}
    <script src="{{asset('backend/js/bootstrap-datepicker.min.js')}}"></script>
    <script >
        $(document).ready(function () {
            $('#datePicker')
                .datepicker({
                    format: 'yyyy-mm-dd'
                })
                .on('changeDate', function(e) {
                    // Revalidate the date field
                    // $('#eventForm').formValidation('revalidateField', 'date');
                });
        });
    </script>
@endpush