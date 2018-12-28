@extends('frontend.layouts.main')

@section('content')
<section class="features1 cid-education" id="features1-18">    
    <div class="container">
        <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong>ติดต่อเรา</strong></h2><br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                <a class="nav-link" href="{{url('office')}}">สำนักงาน</a>
                </li>
                <li class="nav-item">
                <a href="{{url('education')}}" class="nav-link">สถาบันการศึกษา</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('medical')}}">สถาบันการแพทย์</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="{{url('other')}}">ติดต่ออื่นๆ</a>
                </li>
            </ul>
    </div><br>

    <div class="container">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-others1-tab" data-toggle="pill" href="#pills-others1" role="tab" aria-controls="pills-others1" aria-selected="true"> บ้านพัก</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-others2-tab" data-toggle="pill" href="#pills-others2" role="tab" aria-controls="pills-others2" aria-selected="false"> หน่วยงานอื่นๆ</a>
            </li>
        </ul><br>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-others1" role="tabpanel" aria-labelledby="pills-others1-tab">
                    
                <div class="row">
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact">สำนักกลางนักเรียนคริสเตียน</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                            328/1-2 ถ.พญาไท แขวงถนนเพชรบุรี เขตราชเทวี กรุงเทพฯ 10400</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-2215-0628-9  </li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: 0-2214-4291</li>
                            <a href=" http://www.sccthailand.org/index.php "><li class="list-group-item"> http://www.sccthailand.org/index.php</li></a>
                        </ul>
                    </div>
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact">บ้านพักและศูนย์ฝึกอบรมปราณบุรี</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                            104/6-9 ม.3 ซ.ลิขิต ต.ปากน้ำปราณ อ.ปราณบุรี จ.ประจวบคีรีขันธ์ 77120</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-3263-1735-6 </li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: - </li>
                            <a href="http://www.christiancampthailand.com/index.php/homepage "><li class="list-group-item">http://www.christiancampthailand.com/index.php/homepage </i> </li></a>
                        </ul>
                    </div>
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact">บ้านพักกรุงเทพคริสเตียน</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                                    123 ซ.ศาลาแดง 2 ถ.สีลม เขตบางรัก กรุงเทพฯ 10500</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-2233-6303, 0-2233-2206 </li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: 0-2237-1742</li>
                            <a href="#"><li class="list-group-item">ศูนย์สร้างสาวกเพื่อการประกาศ </li></a>
                        </ul>
                    </div>
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact">บ้านสัมมนา สภาคริสตจักร (หาดเจ้าสำราญ)</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                                    123 ซ.ศาลาแดง 2 ถ.สีลม เขตบางรัก กรุงเทพฯ 10500</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-3247-8067, 0-347-8068  </li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์:  - </li>
                            <a href=" http://www.cbnsiam.com/ "><li class="list-group-item">   http://www.cbnsiam.com/  </li></a>
                        </ul>
                    </div>
                </div>
                   
            </div>
            <div class="tab-pane fade" id="pills-others2" role="tabpanel" aria-labelledby="pills-others2-tab">
            
                <div class="row">
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact"> สถาบันคริสเตียนนิเทศสัมพันธ์ (CCI)</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                            131 ถ.แก้วนวรัฐ ต.วัดเกต อ.เมือง จ.เชียงใหม่ 50000</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-5324-2090, 0-5324-8191 </li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: 0-5330-6419 </li>
                            <a href="#"><li class="list-group-item">... </li></a>
                        </ul>
                    </div>
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact"> ศูนย์พันธกิจคริสเตียนไทย-เกาหลี</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                            76/1-4 ถ.เจริญราษฎร์ ต.ในเมือง อ.เมือง จ.ลำพูน 51000</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-5356-0518, 0-5356-0603-4  </li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: 0-5351-1237 </li>
                            <a href="#"><li class="list-group-item">  ..... </li></a>
                        </ul>
                    </div>
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact"> ศูนย์สร้างสาวกเพื่อการประกาศ</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                            153 ม.11 บ้านท่าตูม ถ.มิตรภาพอุดร-หนองคาย ต.หมูม่น อ.เมือง จ.อุดรธานี 41000</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-4226-6464  </li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: 0-4226-6464</li>
                            <a href="#"><li class="list-group-item">ศูนย์สร้างสาวกเพื่อการประกาศ </li></a>
                        </ul>
                    </div>
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact"> ซี.บี.เอ็น สยาม</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                            320 หมู่2 หมู่บ้านโพธิ์ทองเจริญ ถ.เชียงใหม่-แม่สรวย ต.เชิงดอย อ.ดอยสะเก็ด จ.เชียงใหม่ 50220</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์:0-5329-1164-5 </li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์:  - </li>
                            <a href=" http://www.cbnsiam.com/ "><li class="list-group-item">   http://www.cbnsiam.com/  </li></a>
                        </ul>
                    </div>

                </div>
            
            </div>
        </div>
    </div>
   
</section>
@endsectiony