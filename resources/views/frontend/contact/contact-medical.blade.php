@extends('frontend.layouts.main')

@section('content')
<section class="features1 cid-education" id="features1-18">
    
    <div class="container">
            <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong>
                    ติดต่อเรา</strong></h2><br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                <a class="nav-link" href="{{url('office')}}">สำนักงาน</a>
                </li>
                <li class="nav-item">
                <a href="{{url('education')}}" class="nav-link">สถาบันการศึกษา</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="{{url('medical')}}">สถาบันการแพทย์</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('other')}}">ติดต่ออื่นๆ</a>
                </li>
            </ul>
    </div><br><br>

    <div class="container">

        <div class="row">
            <div class="col-md-6">    
                <ul class="list-group">
                    <li class="list-group-item pink-c display-contact"> โรงพยาบาลกรุงเทพคริสเตียน</li>
                    <li class="list-group-item"><i class="icon fa fa-home" aria-hidden="true"></i>
                    124 ถ.สีลม แขวงสุริยวงศ์ เขตบางรัก กรุงเทพฯ 10500</li>
                    <li class="list-group-item"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-2233-6981-9 </li>
                    <li class="list-group-item"><i class="icon fa fa-fax"></i> แฟกซ์: 0-2236-2911 </li>
                    <a href="https://www.bch.in.th/"><li class="list-group-item"></i> https://www.bch.in.th/ </li></a>
                </ul>
            </div>
            <div class="col-md-6">    
                <ul class="list-group">
                    <li class="list-group-item pink-c display-contact"> โรงพยาบาลกรุงเทพคริสเตียนนครปฐม</li>
                    <li class="list-group-item"><i class="icon fa fa-home" aria-hidden="true"></i>
                    173 ถ.25 มกรา ต.พระปฐมเจดีย์ อ.เมือง จ.นครปฐม 73000</li>
                    <li class="list-group-item"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-3421-3453-60 </li>
                    <li class="list-group-item"><i class="icon fa fa-fax"></i> แฟกซ์:  0-3421-3453 ต่อ 409 </li>
                    <a href="#"><li class="list-group-item"></i>  โรงพยาบาลกรุงเทพคริสเตียนนครปฐม </li></a>
                </div>
            <div class="col-md-6">    
                <ul class="list-group">
                    <li class="list-group-item pink-c display-contact"> โรงพยาบาลแพร่คริสเตียน</li>
                    <li class="list-group-item"><i class="icon fa fa-home" aria-hidden="true"></i>
                        7 ถ.ยันตรกิจโกศล ต.ในเวียง อ.เมือง จ.แพร่ 54000</li>
                    <li class="list-group-item"><i class="icon fa fa-mobile"></i> โทรศัพท์: -</li>
                    <li class="list-group-item"><i class="icon fa fa-fax"></i> แฟกซ์:  0-5452-2835</li>
                    <a href="http://www.phraechristian.com/"><li class="list-group-item"> http://www.phraechristian.com/</li></a>
                </ul>
            </div>
            <div class="col-md-6">    
                <ul class="list-group">
                    <li class="list-group-item pink-c display-contact"> โรงพยาบาลแมคคอร์มิค</li>
                    <li class="list-group-item"><i class="icon fa fa-home" aria-hidden="true"></i>
                        133 ถ.แก้วนวรัฐ ต.วัดเกต อ.เมือง จ.เชียงใหม่ 50000</li>
                    <li class="list-group-item"><i class="icon fa fa-mobile"></i> โทรศัพท์:  0-5392-1777</li>
                    <li class="list-group-item"><i class="icon fa fa-fax"></i> แฟกซ์:0-5392-1734</li>
                    <a href="http://www.mccormick.in.th/"><li class="list-group-item">http://www.mccormick.in.th/</li></a>
                </ul>
            </div>
            <div class="col-md-6">    
                <ul class="list-group">
                    <li class="list-group-item pink-c display-contact"> โรงพยาบาลโอเวอร์บรุ๊ค</li>
                    <li class="list-group-item"><i class="icon fa fa-home" aria-hidden="true"></i>
                        17 ถ.สิงหไคล อ.เมือง จ.เชียงราย 57000</li>
                    <li class="list-group-item"><i class="icon fa fa-mobile"></i> โทรศัพท์: -</li>
                    <li class="list-group-item"><i class="icon fa fa-fax"></i> แฟกซ์:  0-5371-6755</li>
                    <a href="http://www.overbrook-hospital.com/"><li class="list-group-item"> http://www.overbrook-hospital.com/ </li></a>
                </ul>
            </div>
            <div class="col-md-6">    
                <ul class="list-group">
                    <li class="list-group-item pink-c display-contact"> สถานพยาบาลคริสเตียนแม่น้ำแควน้อย</li>
                    <li class="list-group-item"><i class="icon fa fa-home" aria-hidden="true"></i>
                        17 ถ.สิงหไคล อ.เมือง จ.เชียงราย 57000</li>
                    <li class="list-group-item"><i class="icon fa fa-mobile"></i> โทรศัพท์:-</li>
                    <li class="list-group-item"><i class="icon fa fa-fax"></i> แฟกซ์:0-5371-6755</li>
                    <a href="สถานพยาบาลคริสเตียนแม่น้ำแควน้อย"><li class="list-group-item"></i>สถานพยาบาลคริสเตียนแม่น้ำแควน้อย </li></a>
                </ul>
            </div>
            <div class="col-md-6">    
                <ul class="list-group">
                    <li class="list-group-item pink-c display-contact"> สถานพยาบาลแวนเซนด์วูร์ด</li>
                    <li class="list-group-item"><i class="icon fa fa-home" aria-hidden="true"></i>
                    129 ถ.เจริญประเทศ ต.เวียงเหนือ อ.เมือง จ.ลำปาง 5200</li>
                    <li class="list-group-item"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-5421-7007 </li>
                    <li class="list-group-item"><i class="icon fa fa-fax"></i> แฟกซ์: 0-5422-2671</li>
                    <a href="#"><li class="list-group-item">.....</li></a>
              </ul>
            </div>
            <div class="col-md-6">    
                <ul class="list-group">
                    <li class="list-group-item pink-c display-contact"> สถาบันแมคเคนเพื่อการฟื้นฟูสภาพ</li>
                    <li class="list-group-item"><i class="icon fa fa-home" aria-hidden="true"></i>
                        68-69 ม.8 ต.ป่าแดด อ.เมือง จ.เชียงใหม่ 50000</li>
                    <li class="list-group-item"><i class="icon fa fa-mobile"></i> โทรศัพท์:0-5312-4264 </li>
                    <li class="list-group-item"><i class="icon fa fa-fax"></i> แฟกซ์:0-5312-4263</li>
                    <a href="http://www.mckean.or.th/"><li class="list-group-item">http://www.mckean.or.th/ </li></a>
                </ul>
            </div>
        </div>

    </div>
        
 
   
</section>
@endsection