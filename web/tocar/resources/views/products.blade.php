@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
          <div class="card-header text-white bg-danger">
              <h1>ติดต่อผู้ขาย</h1>
          </div>
          <div class="card-body bg-light" >
            <h1 class="card-title">คุณ :{{$id->name}}</h1>
            <h1 class="card-title">เบอร์ : {{$id->phonenumber}}</h1>
          </div>     
  </div>
</div>
<div class="pt-5">
</div>
@endsection
