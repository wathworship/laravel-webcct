@extends('frontend.layouts.main')


@section('content')
<section class="mbr-section content4 features11 cid-rc5Trh2eua" id="features11-s">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">                
                <h2 class="text-center pb-3 mbr-fonts-style display-2">
                    <strong>ประวัติสภาคริสตจักรในประเทศไทย</strong>
                </h2>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('mission')}}">พันธกิจ</a>
                    </li>
                    <li class="nav-item active">
                    <a href="{{url('structure')}}" class="nav-link">โครงสร้างองค์กร</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('manager')}}">คณะผู้บริหาร</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('history')}}">ประวัติศาสตร์</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><br>    
    <div class="container align-left">
        <div class="row">
            <div class="hidden-xs">
                <h4>รูปเส้นทางประวัติศาสตร์ของสภาคริสตจักรในประเทศไทย</h4>
                <p>
                    <img src="assets/zoom_in.png" width="32" height="32" align="middle">
                    <font color="#FF6600">คลิกบนรูปภาพเพื่อขยาย</font>
                </p>
                <span class='zoom' id='history_pic'>
                    <img src='assets/images/cct_history.jpg' width='100%' height="300">
                </span>                
            </div>
        </div> 
    </div>       
</section>

<section class="mbr-section article content1 cid-rcs1huoDsQ" id="content1-y">
    <div class="container align-left">
        <div class="row">
            <div class="display-7">
                    <p>คริสตจักรโปรเตสแต้นท์ในประเทศไทย มีประวัติศาสตร์ย้อนไปตั้งแต่ในปี ค.ศ. 1828 เมื่อศาสจนาจารย์จาคอบ ทอมลิน และศาสนาจารย์นายแพทย์คาร์ล กุตสลาฟ เข้ามาเผยแพร่คริสตศาสนานิกาย โปรเตสแตนท์ เป็นครั้งแรกในประเทศไทย</p>

                    <p>ในปี ค.ศ.1840 มิชชันนารีคณะเพรสไบทีเรียนอเมริกันเข้ามาในประเทศไทย และตั้งรากฐานอย่างมั่นคงในปี 1847 มิชชันนารีชุดนี้ประกอบด้วยนายแพทย์ ซามูเอล เฮาส์ ศาสนาจารย์สตีเฟน และนางแมรี่ แมตตูน มิชชันนารีคณะนี้ได้จัดตั้ง คริสตจักรเพรสไบทีเรียนที่กรุงเทพฯ เมื่อวันที่ 31 สิงหาคม ค.ศ. 1849 ต่อมาได้จัดตั้งเพรสไบเทอรี่แห่งสยามในวันที่ 1 กันยายน 1858</p>
                    
                    <p>เมื่อถึงปี ค.ศ. 1861 คณะมิชชันนารีขยายงานไปสู่ภูมิภาคโดยได้จัดตั้งศูนย์มิชชันนารีที่เพชรบุรี โดยการนำของครอบครัวศาสนาจารย์ดาเนียล แมคกิลวารี และครอบครัวศาสนาจารย์ ซามูเอล จี แมคฟาร์แลนด์ เป็นผู้ปฏิบัติงาน ปี ค.ศ.1867 ครอบครัวของศาสนาจารย์แมคกิลวารีได้ตั้งมิชชั่นนารีประกาศ คริสตศาสนาที่เชียงใหม่ โดยมีครอบครัวของศาสนาจารย์วิลสันเข้าร่วมงานด้วย ครอบครัวมิชชันนารีทั้งสองได้จัดตั้งคริสตจักร เพรสไบทีเรียนที่หนึ่งเชียงใหม่ ในวันที่ 18 เมษายน ค.ศ.1878 ซึ่งเป็นปีที่มีพระบรมราชโองการ เรื่อง "เสรีภาพทางศาสนา" (มีผลบังคับใช้ในเชียงใหม่ ลำพูน และลำปาง)</p>
                    
                    <p>การประกาศพระกิตติคุณได้ขยายออกไปในภูมิภาคต่างๆมีการจัดตั้งศูนย์มิชชันนารีที่ลำปาง (ค.ศ.1885) ลำพูน (ค.ศ.1891) แพร่ (ค.ศ.1893) น่าน (ค.ศ.1895) เชียงราย (ค.ศ. 1897) และพิษณุโลก (ค.ศ. 1899) ภายหลังได้ขยายงานไปยังเขตเชียงตุงของพม่า (ค.ศ. 1904-1908) และเขตเชียงรุ้งของจีน (ค.ศ.1941-1971)</p>
                    
                    <p>ในปี ค.ศ.1900 ได้จัดตั้งศูนย์มิชชันนารี ที่นครศรีธรรมราช และเมื่อถึงปี ค.ศ.1910 ได้จัดตั้งศูนย์มิชชันนารีที่ตรัง ซึ่งเป็นศูนย์มิชชันนารีที่ขยายการประกาศคริสตศาสนาไปสู่ท้องถิ่นอื่นๆ ในภาคใต้</p>
                    
                    <p>ในเดือนเมษายน ค.ศ. 1932 ได้มีการรวมเพรสไบเทอรี่สยามและลาว เพื่อจัดตั้งองค์กรปกครองคริสตจักรไทยที่เป็นอิสระ มีการรณรงค์และออกวารสาร "ข่าวคริสตจักร" ในปี ค.ศ. 1934 มีการจัดประชุมเพื่อจัดตั้ง "สภาคริสตจักรในประเทศสยาม" ที่ประชุมได้รับธรรมนูญการปกครองคริสตจักรสยามซึ่งกำหนดคริสตจักรประจำชาตินี้ว่า "คริสตจักรในสยาม" ในปี ค.ศ.1939 มีนโยบายหลัก 3 ข้อคือ "ประกาศพระกิตติคุณ" "การเลี้ยงตนเอง" และ "การปกครองตนเอง"</p>           
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
<script type="text/javascript">
$('#history_pic').zoom({ on:'click'}); 
</script>
  
@endsection
