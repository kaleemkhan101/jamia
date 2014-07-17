@extends('cats.layout')
@section('content')
<div class="row">
  <div class="col-md-4">  
    <div class="panel panel-default">
      <div class="panel-body">
        <img src="{{ asset('images/totalincome.png') }}" class="in-image"/>  
        <div class="in-bold">
         k
        </div>
        <div class="in-thin">
          k
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-body">
        <img src="{{ asset('images/totalinvoices.png') }}" class="in-image"/>  
        <div class="in-bold">
          c
        </div>
        <div class="in-thin">
         c
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-body">
        <img src="{{ asset('images/totalincome.png') }}" class="in-image"/>  
        <div class="in-bold">
         i
        </div>
        <div class="in-thin">
          i       
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="row">
  <div class="col-md-4">  
    <div class="panel panel-default">
      <div class="panel-body">
        <img src="{{ asset('images/totalincome.png') }}" class="in-image"/>  
        <div class="in-bold">
         k
        </div>
        <div class="in-thin">
          k
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-body">
        <img src="{{ asset('images/totalinvoices.png') }}" class="in-image"/>  
        <div class="in-bold">
          c
        </div>
        <div class="in-thin">
         c
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-body">
        <img src="{{ asset('images/totalincome.png') }}" class="in-image"/>  
        <div class="in-bold">
         i
        </div>
        <div class="in-thin">
          i       
        </div>
      </div>
    </div>
  </div>
</div>


<p>&nbsp;</p>

<div class="row">
  <div class="col-md-6">  
    <div class="panel panel-default dashboard" style="min-height:320px">
      <div class="panel-heading" style="background-color:#0b4d78">
        <h3 class="panel-title in-bold-white">
          <i class="glyphicon glyphicon-exclamation-sign"></i> Notifications
        </h3>
      </div>
     
    </div>  
  </div>
  <div class="col-md-6">  
    <div class="panel panel-default dashboard" style="min-height:320px">
      <div class="panel-heading" style="background-color:#e37329">
        <h3 class="panel-title in-bold-white">
          <i class="glyphicon glyphicon-time"></i> Invoices Past Due
        </h3>
      </div>
      <div class="panel-body">
        
           
              
          
         
      </div>
    </div>  
  </div>
</div>

      
@stop