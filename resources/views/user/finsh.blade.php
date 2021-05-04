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
                    <a class="nav-link"  href="{{url('bill')}}">Bill</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
         <div class="row">
             <div class="col-md-2"></div>
             <div class="col-md-8 main" id="print">
                 <div class="center">
                 @php
                    $date=date('Y-m-d');
                    $i=1;
                    $total=0;
                 @endphp
                     <p class="name">{{$info[0]->hotel_name}}</p>
                     <p>Date:  {{$date}}</p>
                     <p>GST NO:{{$info[0]->gst_no}}</p>
                     <p>Phone No:{{$info[0]->phone_no}}</p>
                     <p>Email:{{$info[0]->email}}</p>

                     <table class="table" style="width:95%">
                        <tr>
                            <td style="width:10px">No</td>
                            <td style="width:50px">Product Name</td>
                            <td style="width:20px">Qty/250Gr</td>
                            <td style="width:15px">Price</td>
                            <td style="width:15px">Total</td>
                        </tr>
                        @foreach($data as $list)
                        
                        <tr>
                            <td style="width:10px">{{$i}}</td>
                            <td style="width:50px">{{$list->product_name}}</td>
                            <td style="width:20px">{{$list->weight}}</td>
                            <td style="width:15px">{{$list->price}}</td>
                            <td style="width:15px">{{$totalpri=$list->weight * $list->price}}</td>
                            
                        </tr>
                        @php
                          $i++;
                          $total+=$totalpri;
                          $gst=$total*28/100;
                          $grand=$total+$gst;
                        @endphp
                        @endforeach
                        
                        <tr>
                            <td colspan="4">Total</td>
                            <td  style="width:15px">{{$total}}</td>
                        </tr>
                        <tr>
                            <td colspan="4">Gst</td>
                            <td style="width:15px">{{$gst}}</td>
                        </tr>
                        <tr>
                            <td colspan="4">Grand Total</td>
                            <td style="width:15px">{{$grand}}</td>
                        </tr>
                    </table>
                 </div>
           </div>
            <div class="col-md-1"></div>
         </div>
         <br><br>
         <center><a href="javascript:void(0)" onclick="bill('#main')" class="btn btn-success">Print</a></center>
    </body>
</html>