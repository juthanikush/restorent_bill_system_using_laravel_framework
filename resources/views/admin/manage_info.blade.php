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
                            <form class="forms-sample" action="{{url('manage_info')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label >Hotel Name </label>
                                    <input type="text" name="hotel_name"  value="{{$hotel_name}}" class="form-control" required placeholder="Hotel Name" >
                                </div>
                                <div class="form-group">
                                    <label >Gst No </label>
                                    <input type="text" name="gst"  value="{{$gst_no}}"   class="form-control" required placeholder="GST NO" >
                                </div>
                                <div class="form-group">
                                    <label >Email </label>
                                    <input type="email" name="email"  value="{{$email}}"   class="form-control" required placeholder="Email" >
                                </div>
                                <div class="form-group">
                                    <label>Phone No </label>
                                    <input type="text" name="phone"   value="{{$phone_no}}"  class="form-control" required placeholder="Phone No" >
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