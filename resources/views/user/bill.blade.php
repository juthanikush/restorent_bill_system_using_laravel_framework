<html>
    <head>
        <title>Restorent Billing System</title>
        <!-- CSS only -->
         <link rel="stylesheet" type="text/css" href="{{asset('fornt_asset/style.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="{{asset('fornt_asset/custom.js')}}"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{url('/')}}">Restorent Billing System</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link"  href="bill.html">Bill</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <form action="{{url('billing_detalis')}}" method="post">
            <div class="row">
                @csrf
            
                <div class="col-md-2"></div> 
                <div class="col-md-8" id="bill_detali" >
                <br><br>
                    @php
                        $u_id=rand(111111111,999999999);
                    @endphp
                    <label>Customer Name</label>
                    <input type="hidden" value="{{$u_id}}" name="u_id">
                    <input type="text" name="customer_name" placeholder="Customer Name" required><br><br>
                    <div id="all_detalis">
                    <div id="add">
                        <label>product Name</label>
                        <select required name="name[]" >
                            <option value="">Select Menue</option>
                            @foreach($data as $list)
                            <option value="{{$list->id}}">
                                {{$list->product_name}}
                            </option>
                            @endforeach
                        </select>
                        <label>Weight</label>
                        <input type="text" name="weight[]" placeholder="Weight" required><br><br>
                    </div>
                    <div id="add">
                    <label>product Name</label>
                        <select required name="name[]" >
                            <option value="">Select Menue</option>
                            @foreach($data as $list)
                            <option value="{{$list->id}}">
                                {{$list->product_name}}
                            </option>
                            @endforeach
                        </select>
                        <label>Weight</label>
                        <input type="text" name="weight[]" placeholder="Weight" required><br><br>
                    </div>
                    <div id="add">
                        <label>product Name</label>
                        <select required  name="name[]" >
                            <option value="">Select Menue</option>
                            @foreach($data as $list)
                            <option value="{{$list->id}}">
                                {{$list->product_name}}
                            </option>
                            @endforeach
                        </select>
                        <label>Weight</label>
                        <input type="text" name="weight[]" placeholder="Weight" required><br><br>
                    </div>
                    </div>
                    <button class="btn btn-success" onclick="add_more('kush')">Add+</button>
                    <button class="btn btn-primary" >Finisha</button>
                </div>
            
                <div class="col-md-2"></div>
            </div>
         </form>
    </body>

<script>
function add_more(kush){
  //alert(kush);
 var html='<div id="add"><label>product Name</label><select required  name="name[]" ><option value="">Select Menue</option>@foreach($data as $list)<option value="{{$list->id}}">{{$list->product_name}}</option>@endforeach</select>&nbsp;&nbsp;<label>Weight</label><input type="text" name="weight[]" placeholder="Weight" required><br><br></div>';
 jQuery('#all_detalis').append(html);
}
</script>
</html>