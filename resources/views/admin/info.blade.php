@extends('admin/layout')
@section('page_title','Informashion')
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
              <a href="{{url('add_info')}}" class="btn btn-success">+Add Informashion</a>
               <div class="card-body">
                  <table class="table">
                     <thead>
                        <tr>
                           <th style="width:15%;">No</th>
                           <th style="width:15%;">Hotel Name.</th>
                           <th style="width:15%;">GST No.</th>
                           <th style="width:15%;">Email.</th>
                           <th style="width:15%;">Phone No.</th>
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
                           <td>{{$list->hotel_name}}</td>
                           <td>{{$list->gst_no}}</td>
                           <td>{{$list->email}}</td>
                           <td>{{$list->phone_no}}</td>
                           <td>
                              <a class="badge badge-warning" href="{{url('info/update')}}/{{$list->id}}">Edit</a>
                              <a class="badge badge-warning" href="{{url('info/delete')}}/{{$list->id}}">Delete</a>
                              
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