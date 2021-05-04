@extends('admin/layout')
@section('page_title','Add Informashion')
@section('container')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                    <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{url('manage_category')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name </label>
                                    <input type="text" name="category"  class="form-control" required placeholder="Enter category" value="{{$category_name}}">
                                </div>
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <input type="hidden" name="id" value="{{$id}}" />
                                <a tyoe="reset" href="{{url('admin')}}" class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection