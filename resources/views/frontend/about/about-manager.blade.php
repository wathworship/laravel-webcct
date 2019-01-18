
@extends('frontend.layouts.main')
@section('content')

<section class="mbr-section content4 features16 cid-rc611wrrVx" id="content4-t">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('mission')}}">พันธกิจ</a>
                    </li>
                    <li class="nav-item ">
                    <a  class="nav-link" href="{{url('structure')}}">โครงสร้างองค์กร</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="{{url('manager')}}">คณะผู้บริหาร</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('history')}}">ประวัติศาสตร์</a>
                    </li>
                </ul>
            </div>
        </div>
        <br>

        <div>
            <h2 class="align-center pb-3 mbr-fonts-style display-2">
                <strong>คณะผู้บริหาร</strong>
            </h2>
        </div>
    </div>
    <div class="container align-center">      
        <div class="row media-row">            
            <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/m1.png">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <h5 class="mbr-fonts-style display-manager">
                            ศจ.ดร.ทวีศักดิ์ มหชวโรจน์
                        </h5>
                    </div>
                    <div class="item-role px-2 display-7">
                        <p>ประธาน</p>
                    </div>
                    
                </div>
            </div>
            <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/m2.png">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <h5 class="mbr-fonts-style display-manager">
                            ศจ.วิรัช โกยดุลย์
                        </h5>
                    </div>
                    <div class="item-role px-2 display-7">
                        <p>รองประธาน</p>
                    </div>
                    
                </div>
            </div>
            <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/m3.png">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <h5 class="mbr-fonts-style display-manager">
                            ศจ.สยาม ม่วงศักดิ์
                        </h5>
                    </div>
                    <div class="item-role px-2 display-7">
                        <p>เลขาธิการ</p>
                    </div>
                    
                </div>
            </div>
            <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/m4.png">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <h5 class="mbr-fonts-style display-manager">
                            ผป.ชาญ โชตินทเศรษ
                        </h5>
                    </div>
                    <div class="item-role px-2 display-7">
                        <p>เหรัญญิก</p>
                    </div>
                    
                </div>
            </div>
        </div>    
    </div>
</section>

<!-- คณะกรรมการดำเนินงาน
<section class="features16 cid-rc61rmz2by" id="features16-w">
    <div class="container align-center">
        <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2"><strong>คณะกรรมการดำเนินงาน<br></strong><br></h2>
        
        <div class="row media-row">
            
        <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/1pm.jpg">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-manager">
                            ศบ.พรสรวง จิตต์แจ้ง
                            
                        </p>
                    </div>
                    <div class="item-role px-2">
                        <p>กรรมการดำเนินงาน</p>
                    </div>
                    
                </div>
            </div><div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/2pm.jpg">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-manager">
                            ผป.ประสิทธิ์ ธงทัศวรรธนะ
                        </p>
                    </div>
                    <div class="item-role px-2">
                        <p>กรรมการดำเนินงาน</p>
                    </div>
                    
                </div>
            </div></div>    
    </div>
</section>

<section class="features16 cid-rc61U8oEcs" id="features16-x">
    <div class="container align-center">
        
        
        <div class="row media-row">
            
        <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/3pm.jpg">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-manager">
                            ศจ.ดร.ศิริรัตน์ ปุสุรินทร์คำ
                        </p>
                    </div>
                    <div class="item-role px-2">
                        <p>กรรมการดำเนินงาน</p>
                    </div>
                    
                </div>
            </div><div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/4pm.jpg">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-manager">
                            ศจ.สิงขร รักสกุลใหม่
                        </p>
                    </div>
                    <div class="item-role px-2">
                        <p>กรรมการดำเนินงาน</p>
                    </div>
                    
                </div>
            </div><div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="assets/images/5pm.jpg">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-manager">
                            ศจ.อภิเดช ชัยราชา
                        </p>
                    </div>
                    <div class="item-role px-2">
                        <p>กรรมการดำเนินงาน</p>
                    </div>
                    
                </div>
            </div></div>    
    </div>
</section>
-->

@endsection