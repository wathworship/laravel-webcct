@extends('frontend.layouts.main')

@section('content')
<section class="mbr-section content4 cid-rc5Ys9vWI1" id="content4-t">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('mission')}}">พันธกิจ</a>
                    </li>
                    <li class="nav-item ">
                    <a  class="nav-link active" href="{{url('structure')}}">โครงสร้างองค์กร</a>
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
        <br>

        <div>
            <h2 class="align-center pb-3 mbr-fonts-style display-2 text-center">
                <strong>โครงสร้างองค์กร</strong>
            </h2>
        </div>
    </div>



<!--picture-->
<center>
    <figure class="mbr-figure container">
        <div class="image-block" style="width: 80%;">
            <img src="assets/images/cct-organization-800x577.png" width="1400" alt="Mobirise" title="">                
        </div>
    </figure>
<!-- detill pantakit -->
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card p-3 col-12 col-md-6">
                    <div class="media-container-row">
                        <div class="container card-box1">
                            <h5>พันธกิจเผยแพร่และพัฒนาคริสตจักร</h5> 
                            <div id="accordion-one"> 
                                <div class="card text-left">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#shear" aria-expanded="true" aria-controls="shear">
                                            <i class="fas fa-angle-down fa-2x"></i> &nbsp;&nbsp;  พันธกิจเผยแพร่พระกิตติคุณ
                                        </button>
                                        </h5>         
                                    </div>
                                    <div id="shear" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-one">
                                        <div class="card-body">
                                                1.	สนับสนุนและส่งเสริมให้คริสเตียนทุกคนรู้จักการเผยแพร่พระกิตติคุณ <br>
                                                2.	สนับสนุนและส่งเสริมด้านการศึกษาทั้งในคริสตจักรและสถาบัน<br>
                                                3.	สนับสนุนและส่งเสริมให้คริสตเตียนและบุคคลทั่วไป ศึกษาพระคริสตธรรมคัมภีร์ทางไปรษณีย์และสื่อต่างๆ
                                        </div>
                                    </div>
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#servic" aria-expanded="false" aria-controls="servic">
                                            <i class="fas fa-angle-down fa-2x"></i> &nbsp;&nbsp; หน่วยงานพัฒนาและบริการสังคม
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="servic" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-one">
                                        <div class="card-body">
                                            1.	สนับสนุนและส่งเสริมให้คริสเตียนเข้าใจคุณค่าชีวิตที่สมบูรณ์ในพระเยซูคริสต์ เรียนรู้ที่จะพึ่งตนเอง และใช้สิ่งที่ตนมีให้เป็นประโยชน์ต่อคริสตจักรและชุมชน<br>
                                            2.	สนับสนุนและส่งเสริมคริสตจักรให้มีศักยภาพ สามารถพัฒนาตนเองและชุมชน<br>
                                            3.	สนับสนุนและส่งเสริมคริสตจักรให้มีส่วนร่วมในการพัฒนาสังคมเพื่อแสดงความรักของพระเยซูคริสต์
                                        </div>
                                    </div>
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#lamp" aria-expanded="false" aria-controls="lamp">
                                            <i class="fas fa-angle-down fa-2x"></i> &nbsp;&nbsp;  หน่วยงานประทีปไทย
                                        </button>
                                        </h5>
                                    </div>
                                    <div id="lamp" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-one">
                                        <div class="card-body">
                                            1.	สนับสนุนและส่งเสริมให้คริสเตียนทุกคนรู้จักการเผยแพร่พระกิตติคุณ <br>
                                            2.	สนับสนุนและส่งเสริมด้านการศึกษาทั้งในคริสตจักรและสถาบัน<br>
                                            3.	สนับสนุนและส่งเสริมให้คริสตเตียนและบุคคลทั่วไป ศึกษาพระคริสตธรรมคัมภีร์ทางไปรษณีและสื่อต่างๆ
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>
                    </div>
                </div>
                <div class="card p-3 col-12 col-md-6">
                    <div class="container card-box1">
                        <h5>พันธกิจอภิบาลชีวิตคริสเตียน</h5>
                        <div id="accordion-two"> 
                            <div class="card text-left">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#crits" aria-expanded="false" aria-controls="crits">
                                            <i class="fas fa-angle-down fa-2x"></i> &nbsp;&nbsp; หน่วยงานศิษยาภิบาล
                                        </button>
                                    </h5>
                                </div>
                                <div id="crits" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-two">
                                    <div class="card-body">
                                        1.	สนับสนุนและส่งเสริมให้คริสตจักรจัดหาและเตรียมบุคลากรทุกระดับ เพื่อพัฒนาเป็นศิษยาภิบาล<br>
                                        2.	สนับสนุนและส่งเสริมให้ศิษยาบาลทุกระดับ มีความรู้ ความเข้าใจด้านศาสนศาสตร์อย่างถูกต้อง<br>
                                        3.	สนับสนุนและส่งเสริมให้มีการพัฒนาผู้อภิบาลทุกระดับให้มีประสิทธิภาพและคุณภาพ
                                    </div>
                                </div> 
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                    <button class="btn  btn-link collapsed" data-toggle="collapse" data-target="#women" aria-expanded="false" aria-controls="women">
                                        <i class="fas fa-angle-down fa-2x"></i> &nbsp;&nbsp;  หน่วยงานสตรี
                                    </button>
                                    </h5>
                                </div>
                                <div id="women" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-two">
                                    <div class="card-body">
                                    สนับสนุนและส่งเสริมให้สตรีคริสเตียนมีบทบาทความรับผิดชอบในการเป็นพยานขององค์พระเยซูคริสต์ 
                                    ทั้งในคริสตจักรและชุมชน โดยมีเป้าหมายให้สตรีคริสเตียนสภาคริสตจักรในประเทศไทยมีความเชื่อที่
                                    เข้มแข็งและมีส่วนร่วมในการรับใช้พระเจ้าในระดับคริสตจักรภาค สภาคริสตจักรในประเทศไทย
                                </div>
                                </div>       
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                    <button class="btn  btn-link collapsed" data-toggle="collapse" data-target="#genaration" aria-expanded="false" aria-controls="genaration">
                                        <i class="fas fa-angle-down fa-2x"></i> &nbsp;&nbsp;  หน่วยงานอนุชน
                                    </button>
                                    </h5>
                                </div>
                                <div id="genaration" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-two">
                                    <div class="card-body">
                                        สนับสนุนและส่งเสริมให้เยาวชนคริสเตียนมีบทบาทหน้าที่รับผิดชอบในการเป็นพยานของพระเยซูคริสต์ ทั้งในคริสตจักรและชุมชน
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card p-3 col-12 col-md-6">  
                    <div class="container card-box1">
                        <h5>พันธกิจการคลังและทรัพย์สิน</h5> 
                        <div id="accordion-three"> 
                            <div class="card text-left">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#accounting" aria-expanded="true" aria-controls="accounting">
                                        <i class="fas fa-angle-down fa-2x"></i> &nbsp;&nbsp;  หน่วยงานการบัญชี การเงิน
                                    </button>
                                    </h5>         
                                </div>
                                <div id="accounting" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-three">
                                    <div class="card-body"><U>ด้านการบัญชี</u> <br>
                                        1.	รับผิดชอบตรวจสอบการรับเงินประจำวัน การจ่ายเงินค่าใช้จ่ายต่างๆ ตลอดจนตรวจทานใบสำคัญสั่งจ่าย
                                        2.	รับผิดชอบการจัดทำงบการเงิน ได้แก่ งบทอลอง งบดุล งบรายได้ ค่าใช้จ่ายของหน่วนงาน สถาบัน การจัดทำงบประมาณ การติดตามการใช้จ่าย และงบกระแสเงินสด การวางระบบบัญชีให้เป็นไปตามมาตรฐานการบัญชี ตลอดจนสามารถทำแผนการเงินของหน่วยงานและสถาบัน <br>
                                        3.	รับผิดชอบสอบทานการรับเงินจากรายได้ของหน่วยงาน สถาบัน และการจ่ายเงินให้ถูกต้องตามระเบียบการบริหารการบริการหน่วยงานและสถาบัน การจ่ายเงินตามมติที่ได้รับอนุมัติ ตลอดจนการบันทึกบัญชีให้ตรงกับการรับเงินและการจ่ายเงิน หรือตามเช็คธนาคาร จัดทำงบกระทบยอดบัญชีเงินฝากธนาคารทุกบัญชี<br>        
                                        <U>ด้านการเงิน</U> <br>
                                        1.	รับผิดชอบด้านการเงิน ทั้งด้านการรับเงินและการจ่ายเงิน ตรวจทานการรับเงิน รายได้ของหน่วยงาน สถาบัน จัดทำให้มีใบสำคัญรับเงินประจำ สรุปรายได้ประจำเดือน และตรวจทานด้สนการจ่ายเงินตามใบสำคัญสั่งจ่ายเงินที่ได้รับการอนุมัติให้จ่ายเงินทุกรายการ<br>
                                        2.	รับผิดชอบด้านการรับเงินจากรายได้ รับผิดชอบด้านการจ่ายเงิน โดยจัดทำใบสำคัญสั่งจ่าย การเขียนเช็ดสั่งจ่ายเงิน ตรวจทานการอนุมัติการจ่ายตามใบสำคัญสั่งจ่ายให้ตรงกับผู้มีอำนาจที่สั่งจ่ายบนเช็คธนาคาร<br>
                                        3.	รับผิดชอบเงินสดย่อยของหน่วยงาน สถาบัน ตลอดจนรับผิดชอบในการเก็บรักษาเงินสดที่รับจากรายได้ของหน่วยงาน สถาบัน เพื่อนำเข้าธนาคารประจำวัน และรักษาเงินสดไว้ในตู้เซฟ เพื่อนำเข้าธนาคาร<br>
                                        4.	เงินรายรับประจำวันของหน่วยงานและสถาบัน ให้นำฝากธนาคารทั้งจำนวน ภายในวันที่รับเงิน หากหมดเวลาทำการของธนาคารให้เก็บรักษาเงินไว้ในตู้เซฟ พร้อมสอบทานจำนวนเงินเข้าตู้เซฟให้ตรงกับยอดสรุปรายงานการรับเงินประจำวัน และลงลายมือชื่อเป็นหลักฐาน <br>                                        
                                    </div>
                                </div>
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#asset" aria-expanded="false" aria-controls="asset">
                                        <i class="fas fa-angle-down fa-2x"></i> &nbsp;&nbsp; หน่วยงานทรัพย์สิน
                                    </button>
                                    </h5>
                                </div>
                                <div id="asset" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-three">
                                    <div class="card-body">                                
                                        1.	ควบคุมดูแลและดำเนินการเกี่ยวกับทรัพย์สินของคริสตจักร สถาบัน และหน่วยงานในสังกัดสภาคริสตจักรในประเทศไทย<br>
                                        2.	สนับสนุนและส่งเสริมให้มีการพัฒนาที่ดินและทรัพย์สินของทุกคริสตจักร หน่วยงาน และสถาบันในสังกัดสภาคริสตจักรในประเทศไทย<br>
                                        3.	กลั่นกรองโครงการก่อสร้าง และซื้ออุปกรณ์ต่าง ๆ ของสถาบันและหน่วยงาน เพื่อเสนอต่อคณะกรรมการมูลนิธิแห่งสภาคริสตจักรในประเทศไทย                                
                                    </div>
                                </div>
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#welfare" aria-expanded="false" aria-controls="welfare">
                                        <i class="fas fa-angle-down fa-2x"></i> &nbsp;&nbsp; หน่วยงานสวัสดิการ
                                    </button>
                                    </h5>
                                </div>
                                <div id="welfare" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-three">
                                    <div class="card-body">                               
                                            1.	รับผิดชอบ ดูแล รวบรวมเงินสะสมต่างๆ ของบุคลากรเพื่อบริหารการเงินให้เป็นประโยชน์แก่บุคลากรที่เป็นสมาชิก<br>
                                            2.	จัดให้มีสวัสดิการต่างๆ ตามความเหมาะสมแก่สมาชิก เช่น บำเหน็จ บำนาญ การบริการสุขภาพ และที่อยู่อาศัย ทั้งในขณะทำงานและหลังเกษียณอายุ<br>
                                            3.	จัดให้มีเงินชดเชยแก่บุคลากรที่เป็นสมาชิกเมื่อออกจากงานเนื่องจากเกษียณอายุ<br>
                                            4.	สนับสนุน และส่งเสริมคริสตจักร หน่วยงานและสถาบัน จัดสวัสดิการที่เหมาะสมให้บุคลากร 
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>                     
                </div>

                <div class="card p-3 col-12 col-md-6">                    
                    <div class="container card-box1">
                        <h5>พันธกิจการศึกษา</h5> 
                        <div id="accordion-four"> 
                            <div class="card text-left">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#education" aria-expanded="true" aria-controls="education">
                                        <i class="fas fa-angle-down fa-2x"></i> &nbsp;&nbsp; พันธกิจการศึกษา
                                    </button>
                                    </h5>         
                                </div>
                                <div id="education" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-four">
                                    <div class="card-body">
                                        1.	เพื่อเป็นพยานแห่งความรักของพระเยซูคริสต์<br>
                                        2.	เพื่อให้ปรัชญาชีวิตสอคคล้องกับปรัชญาการศึกษาของสภาคริสตจักรในประเทศไทย<br>
                                        3.	เพื่อพัฒนาเยาวชนให้เจริญขึ้นตามศักยภาพของตน ทั้งมีคุณภาพและประสิทธิภาพเป็นพลเมืองดีรับใช้สังคมและประเทศไทยชาติ<br>
                                        4.	เพื่อเป็นการแบ่งเบาภาระรัฐบาลในการจัดการศึกษา 
                                    </div>
                                </div>         
                            </div>
                        </div>                
                    </div> 
                    <div class="container card-box1">
                        <h5>พันธกิจการแพทย์</h5> 
                        <div id="accordion-five"> 
                            <div class="card text-left">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#medical" aria-expanded="true" aria-controls="medical">
                                        <i class="fas fa-angle-down fa-2x"></i> &nbsp;&nbsp;  พันธกิจการแพทย์
                                    </button>
                                    </h5>         
                                </div>
                                <div id="medical" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-five">
                                    <div class="card-body">
                                        1.	ให้การบำบัดรักษาพยาบาลฟื้นฟูสุขภาพ การส่งเสริมสุขภาพ และการป้องกันการเจ็บป่วยทั้งร่างกาย จิตใจ สังคม และจิตวิญญาณแก่บุคคลทั่วไป<br>
                                        2.	พัฒนาสถาบันให้มีมาตรฐานและคุณภาพเป็นที่ยอมรับของสังคม และเป็นแบบอย่างที่ดีในการบริการรักษาพยาบาล<br>
                                        3.	ส่งเสริมให้ผู้ใช้บริการมีสุขภาพสมบูรณ์ และพบสันติสุขในพระเยซูคริสต์<br>
                                        4.	ประสานงาน และร่วมมือกับคริสตจักรภาค หน่วยงาน และสถาบันของมูลนิธิฯ ในการให้บริการรักษาพยาบาลแก่บุคลากรอย่างเป็นระบบและทั่วถึง<br>
                                        5.	จัดหน่วยเคลื่อนที่บริการด้านสุขภาพแก่ชุมชนในท้องที่ที่มีความต้องการ
                                    </div>
                                </div>         
                            </div>
                        </div>                
                    </div>                         
                </div>

            </div>
        </div>
    </div
</center>
</section>
@endsection