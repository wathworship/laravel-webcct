@extends('frontend.layouts.main')

@section('content')
<section class="features1 cid-office" id="features1-18">    
    <div class="container">
        <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong>ติดต่อเรา</strong></h2><br>
            <!-- Nav tabs -->
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" href="{{url('office')}}">สำนักงาน</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('education')}}" >สถาบันการศึกษา</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('medical')}}">สถาบันการแพทย์</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('others')}}">ติดต่ออื่นๆ</a>
                </li>
            </ul>
    </div><br>    

    <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6">
                <div class="pb-3 align-center">
                    <img src="assets/images/cct_cnx.png" class="office1">
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5 align-center">สภาคริสตจักรในประเทศไทย เชียงใหม่</h4>
                    <p class="mbr-text mbr-fonts-style display-7">อาคาร 75 ปี สภาคริสตจักรในประเทศไทย (ศูนย์พันธกิจภาคเหนือ)
                    <br>ถ.รัตน์โกสนทร์ ต.วัดเกต อ.เมือง จ.เชียงใหม่ 50000
                    <br> โทร: 0-5324-4381-2
                    <br> แฟกซ์: 0-5324-4381-2</p>
                </div>
                <div class="container">
                    <ul class="list-group">
                        <li class="list-group-item" style="padding-left:40px;">หน่วยงานเผยแพร่พระกิตติคุณ</a></li>
                        <li class="list-group-item" style="padding-left:40px;">หน่วยงานคริสเตียนศึกษาและบรรณศาสตร์</a></li>
                        <li class="list-group-item" style="padding-left:40px;">หน่วยงานประทีปของไทย</a></li>
                        <li class="list-group-item" style="padding-left:40px;">หน่วยงานพัฒนาและบริการสังคม</a></li>
                        <li class="list-group-item" style="padding-left:40px;">หน่วยงานสตรี (กรุงเทพฯ)</a></li>
                        <li class="list-group-item" style="padding-left:40px;">สำนักงานเลขาธิการสภาฯ</a></li>
                        <li class="list-group-item" style="padding-left:40px;">หน่วยงานศิษยาภิบาล</a></li>
                        <li class="list-group-item" style="padding-left:40px;">หน่วยงานอนุชน</a></li>
                        <li class="list-group-item" style="padding-left:40px;">หน่วยงานสวัสดิการ</a></li>
                        <li class="list-group-item" style="padding-left:40px;">พันธกิจเอดส์</a></li>
                        <li class="list-group-item" style="padding-left:40px;">สำนักงานนโยบายฯ</a></li>
                        <li class="list-group-item" style="padding-left:40px;">ฝ่ายบ้านและครอบครัว</a></li>  
                        <li class="list-group-item" style="padding-left:40px;">ฝ่ายสารสนเทศ (เชียงใหม่)</a></li>
                        <li class="list-group-item" style="padding-left:40px;">ฝ่ายอาคารสำนักงานสภาคริสตจักรในประเทศไทย(เชียงใหม่)</a></li>
                        <li class="list-group-item" style="padding-left:40px;">งานประวัติศาสตร์สภาคริสตจักร</a></li>                
                    </ul>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6">
                <div class="pb-3 align-center">
                    <img src="assets/images/cct_bkk.png"  class="office2">
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5 align-center">สภาคริสตจักรในประเทศไทย กรุงเทพฯ</h4>
                    <p class="mbr-text mbr-fonts-style display-7">อาคารสภาคริสตจักรในประเทศไทย 
                    <br>328 ถ.พญาไท เขตราชเทวี กรุงเทพฯ 10400
                    <br> โทร: 0-2214-6000-9
                    <br> แฟกซ์: 0-2214-6010</p>
                </div>
                <div class="container">
                    <ul class="list-group">
                        <li class="list-group-item" style="padding-left:40px;">หน่วยงานตรวจสอบบัญชีภายใน (กรุงเทพฯ)</a></li>
                        <li class="list-group-item" style="padding-left:40px;"> หน่วยงานทรัพย์สิน (กรุงเทพฯ)</a></li>
                        <li class="list-group-item" style="padding-left:40px;"> หน่วยงานบัญชี การเงิน(กรุงเทพฯ)</a></li>
                        <li class="list-group-item" style="padding-left:40px;"> หน่วยงานบุคลากร</a></li>
                        <li class="list-group-item" style="padding-left:40px;"> หน่วยงานสตรี (กรุงเทพฯ)</a></li>
                        <li class="list-group-item" style="padding-left:40px;"> สำนักงานเลขาธิการสภาฯ</a></li>
                        <li class="list-group-item" style="padding-left:40px;"> สำนักงานคุ้มครองเด็ก</a></li>
                        <li class="list-group-item" style="padding-left:40px;"> ฝ่ายข่าวคริสตจักร</a></li>
                        <li class="list-group-item" style="padding-left:40px;"> ฝ่ายวิเทศสัมพันธ์</a></li>
                        <li class="list-group-item" style="padding-left:40px;"> ฝ่ายสารสนเทศ (กรุงเทพฯ)</a></li>
                        <li class="list-group-item" style="padding-left:40px;"> ฝ่ายอาคารสำนักงานสภาคริสตจักรในประเทศไทย (กรุงเทพฯ)</a></li>
                        <li class="list-group-item" style="padding-left:40px;"> โรงเรียนภาษายูเนี่ยน โทร. 0-2233-4482</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection