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
              <a href="{{url('add_menu')}}" class="btn btn-success">+Add Menu</a>
               <div class="card-body">
                  <table class="table">
                     <thead>
                        <tr>
                           <th style="width:15%;">No</th>
                           <th style="width:45%;">Product Name.</th>
                           <th style="width:45%;">Price.</th>
                           <th>Status</th>
                        </tr>
                     </thead>
                     <tbody>
                    
                       @php
                       $i=1;
                       @endphp
                       @if($data!="")
                       @foreach($data as $list)
                       
                        <tr>
                           <td>{{$i}}</td>
                           <td>{{$list->product_name}}</td>
                           <td>{{$list->price}}</td>
                           <td>
                             @if($list->status==1)
                              <a class="badge badge-warning" href="{{url('status/0')}}/{{$list->id}}">Active</a>
                            @else
                              <a class="badge badge-danger" href="{{url('status/1')}}/{{$list->id}}">Deactive</a>
                            @endif
                              <a class="badge badge-warning" href="{{url('update')}}/{{$list->id}}">Edit</a>
                              <a class="badge badge-warning" href="{{url('delete')}}/{{$list->id}}">Delete</a>
                              
                           </td>
                        </tr>
                        @php
                       $i++;
                       @endphp
                        @endforeach
                     @endif
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection