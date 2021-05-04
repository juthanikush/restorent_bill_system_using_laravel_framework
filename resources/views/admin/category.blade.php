@extends('admin/layout')
@section('page_title','Category')
@section('container')

<div class="main-panel">
   <div class="content-wrapper">
      <div class="row">
      @if(session()->has('message'))
<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
{{session('message')}}
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
   </button>
</div>
@endif
         <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <a href="{{url('manage_category')}}" class="btn btn-success">+Add Category</a>
               <div class="card-body">
                  <table class="table">
                     <thead>
                        <tr>
                           <th style="width:15%;">No</th>
                           <th style="width:45%;">Catagory Name.</th>
                           <th>Status</th>
                        </tr>
                     </thead>
                     <tbody>
                       @php
                       $i=1;
                       @endphp
                       @foreach($data as $list)
                       
                        <tr>
                           <td>{{$i}}</td>
                           <td>{{$list->category_name}}</td>
                           <td>
                             @if($list->status==1)
                              <a class="badge badge-warning" href="{{url('admin/status/0')}}/{{$list->id}}">Active</a>
                            @else
                              <a class="badge badge-danger" href="{{url('admin/status/1')}}/{{$list->id}}">Deactive</a>
                            @endif
                              <a class="badge badge-warning" href="{{url('admin/update')}}/{{$list->id}}">Edit</a>
                              <a class="badge badge-warning" href="{{url('admin/delete')}}/{{$list->id}}">Delete</a>
                              
                           </td>
                        </tr>
                        @php
                       $i++;
                       @endphp
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection