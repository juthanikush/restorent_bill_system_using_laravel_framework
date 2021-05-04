@extends('admin/layout')
@section('page_title','Add Menu')
@section('container')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                    <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{url('manage_menu')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Product Name </label>
                                            <input type="text" name="product"  class="form-control" required placeholder="Enter Product Name" value="{{$product_name}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="weight">Weight </label>
                                            <div style="display:flex;">
                                                <div class="form-radio">
                                                    <label class="form-check-label">
                                                    
                                                    @if($weight==0)
                                                     <input type="radio" class="form-check-input" name="weight" id="optionsRadios1" value="0" checked> 0 </label>
                                                    @else
                                                     <input type="radio" class="form-check-input" name="weight" id="optionsRadios1" value="0"> 0 </label>
                                                    @endif
                                                    
                                                </div>&nbsp;
                                                <div class="form-radio">
                                                    <label class="form-check-label">
                                                    @if($weight==1)
                                                     <input type="radio" class="form-check-input" name="weight" id="optionsRadios1" value="1" checked> 250GR </label>
                                                    @else
                                                     <input type="radio" class="form-check-input" name="weight" id="optionsRadios1" value="1"> 250GR </label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="Category">Category Name </label>
                                            <select required name="category_id" name="category_id" class="form-control">
                                            <option value="">Select Categories</option>
                                            @foreach($category as $list)
                                            @if($category_id==$list->id)
                                                <option selected value="{{$list->id}}">
                                            @else
                                                <option value="{{$list->id}}">
                                            @endif
                                                    {{$list->category_name}}
                                                </option>
                                            @endforeach
                                            </select>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Price</label>
                                            <input type="text" name="price"  class="form-control" required placeholder="Enter Price" required value="{{$price}}">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <input type="hidden" name="id" value="{{$id}}" />
                                <a tyoe="reset" href="{{url('menu')}}" class="btn btn-light">Cancel</a>
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