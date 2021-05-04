@extends('admin/layout')
@section('page_title','Bill')
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
               <div class="card-body">
                  <table class="table">
                     <thead>
                        <tr>
                           <th style="width:15%;">No</th>
                           <th style="width:45%;">Customer Name.</th>
                           <th style="width:45%;">Customer Id.</th>
                           <th>view Bill</th>
                        </tr>
                     </thead>
                     <tbody>
                       @php
                       $i=1;
                       @endphp
                       @foreach($data as $list)
                       
                        <tr>
                           <td>{{$i}}</td>
                           <td>{{$list->customer_name}}</td>
                           <td>{{$list->u_id}}</td>
                           <td>
                           <a class="badge badge-warning" href="{{url('view_bill')}}/{{$list->u_id}}/{{$list->customer_name}}">view</a>
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