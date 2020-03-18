@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-header text-white bg-dark">
                    รายละเอียดรถ
                </div>
               
                <div class="card-body bg-light">
                <form method="POST" action="{{route('post')}}" enctype="multipart/form-data">
                  {{-- {{csrf_field()}} --}}
                      @csrf
                      <div class="form-group">
                        <label for="number">ผู้ขาย</label>
                        <input type="text" name="name" class="form-control"  placeholder="">
                     </div>

                        <div class="form-group">
                            <label for="number">เบอร์ติดต่อ</label>
                            <input type="text" name="phonenumber" class="form-control"  placeholder="number">
                        </div>

                        <div class="form-group">
                          <label for="">ยี่ห้อ</label>
                          <select class="custom-select" name="brand">
                            <option selected>กรุณาเลือก</option>
                            <option value="Toyota">Toyota </option>
                            <option value="Honda">Honda </option>
                            <option value="Mazda">Mazda </option>
                            <option value="Nissan">Nissan </option>
                            <option value="Mitsubishi">Mitsubishi  </option>
                            <option value="Suzuki">Suzuki  </option>
                            <option value="Mercedes-Benz">Mercedes-Benz</option>
                           
                          </select>
                          
                      </div>
                        
                       

                        <div class="form-group">
                            <label for="">ปี่ที่ผลิต</label>
                            <select class="custom-select" name="year">
                              <option selected>กรุณาเลือก</option>
                              <option value="2001">2001</option>
                              <option value="2002">2002</option>
                              <option value="2003">2003</option>
                              <option value="2004">2004</option>
                              <option value="2005">2005</option>
                              <option value="2006">2006</option>
                              <option value="2007">2007</option>
                              <option value="2008">2008</option>
                              <option value="2009">2009</option>
                              <option value="2010">2010</option>
                            </select>
                            
                        </div>

                        <div class="form-group">
                            <label for="">ระบบเกียร์</label>
                            <select class="custom-select" name="gearsystem">
                              <option selected>กรุณาเลือก</option>
                              <option value="Manual">Manual</option>
                              <option value="Automatic">Automatic</option>
                            </select>
                            
                        </div>

                        <div class="form-group">
                            <label for="">เลขไมล์</label>
                            <select class="custom-select" name="mileage">
                              <option selected>กรุณาเลือก</option>
                              <option value="250-255K">250-255K</option>
                              <option value="255-260K">255-260K</option>
                              <option value="260-265K">260-265K</option>
                              <option value="265-270K">265-270K</option>
                              <option value="270-275K">270-275K</option>
                              <option value="275-280K">275-280K</option>
                              <option value="280-285K">280-285K</option>
                              <option value="285-290K">285-290K</option>
                              <option value="290-295K">290-295K</option>
                              <option value="295-300k">295-300k</option>
                            </select>
                            
                        </div>

                        <div class="form-group">
                            <label >ราคาที่ต้องการขาย</label>
                            <input type="text" class="form-control" name="price" placeholder="">
                        </div>

                        <div class="form-group">
                          <label >เลือกรูปรถยนต์</label>
                          <div class="custom-file" >
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="file">
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                          </div>
                         </div>

                         <div class="form-group">
                          <input  class="btn btn-secondary " type="submit" value="กดเพื่อลงประกาศขาย"></button>
                         </div>
               </form>
               <form method="get" action="{{route('delete')}}">

                <div class="form-group">
                  <input class="btn btn-danger " type="submit" value="ลบข้อมูล"></button>
                 </div>
               </form>
                </div>
        </div>
    </div>
</div>
@endsection
