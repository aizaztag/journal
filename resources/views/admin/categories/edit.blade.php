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
                <form action="{{ route('admin.categories.update') }}" method="POST" role="form" >
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label" for="name">Name <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name', $targetCategory->name) }}"/>
                            <input type="hidden" name="id" value="{{ $targetCategory->id }}">
                            @error('name') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="launched">Launched <span class="m-l-5 text-danger"> *</span></label>
                            <div class="col-xs-5 date">
                                <div class="input-group input-append date" id="datePicker">
                                    <input class="form-control @error('launched') is-invalid @enderror" required="required" type="text" name="launched"  id="launched" value="{{ old('launched', $targetCategory->launched) }}"/>
                                    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                            </div>
                            @error('launched') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="issn">ISSN <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('issn') is-invalid @enderror" type="text" name="issn" id="issn" value="{{ old('issn', $targetCategory->issn) }}"/>
                            <input type="hidden" name="id" value="{{ $targetCategory->id }}">
                            @error('issn') {{ $message }} @enderror
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    @if ($targetCategory->icon != null)
                                        <figure class="mt-2" style="width: 80px; height: auto;">
                                            <img src="{{ asset('storage/'.$targetCategory->icon) }}" id="categoryIcon" class="img-fluid" alt="img">
                                        </figure>
                                    @endif
                                </div>
                                <div class="col-md-10">
                                    <label class="control-label">Category icon</label>
                                    <input class="form-control @error('icon') is-invalid @enderror" type="file" id="icon" name="icon"/>
                                    @error('icon') {{ $message }} @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Category</button>
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="{{ route('admin.categories.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
