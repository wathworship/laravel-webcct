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
                <li class="nav-item active">
                <a href="{{url('education')}}" class="nav-link">สถาบันการศึกษา</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('medical')}}">สถาบันการแพทย์</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('other')}}">ติดต่ออื่นๆ</a>
                </li>
            </ul>
    </div><br>

    <div class="container">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-education1-tab" data-toggle="pill" href="#pills-education1" role="tab" aria-controls="pills-education1" aria-selected="true">โรงเรียน</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-education2-tab" data-toggle="pill" href="#pills-education2" role="tab" aria-controls="pills-education2" aria-selected="fales">สถาบันอุดมศึกษา</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-education3-tab" data-toggle="pill" href="#pills-education3" role="tab" aria-controls="pills-education3" aria-selected="false">วิทยาลัยพระคริสตธรรม</a>
            </li>
        </ul><br>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-education1" role="tabpanel" aria-labelledby="pills-education1-tab">
                    
                <div class="row">
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact">มหาวิทยาลัยคริสเตียน</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                            144 ม.7 ต.ดอนยายหอม อ.เมือง จ.นครปฐม 73000</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-3422-9480-97</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: 0-3422-9499</li>
                            <a href=" http://www.christian.ac.th/  "><li class="list-group-item"></i> http://www.christian.ac.th/   </li></a>
                        </ul>
                    </div>
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact">มหาวิทยาลัยคริสเตียน</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                            328/1-2 ถ.พญาไท แขวงถนนเพชรบุรี เขตราชเทวี กรุงเทพฯ 10400</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-2215-0628-9  </li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: 0-2214-4291</li>
                            <a href=" http://www.sccthailand.org/index.php "><li class="list-group-item"></i> http://www.sccthailand.org/index.php  </li></a>
                    </div>
                    <div class="col-md-6">    
                        <ul class="list-group">
                                <li class="list-group-item pink-c display-contact">มหาวิทยาลัยพายัพ</li>
                                <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                                ถ.ซูปเปอร์ไฮเวย์เชียงใหม่ - ลำปาง อ.เมือง จ.เชียงใหม่ 50000</li>
                                <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-5324-1255, 0-5385-1478   </li>
                                <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: 0-5324-1983</li>
                                <a href=" http://www.payap.ac.th/ "><li class="list-group-item"></i> http://www.payap.ac.th/</li></a>
                        </ul>
                    </div>
                </div>
                   
            </div>

            <div class="tab-pane fade show " id="pills-education2" role="tabpanel" aria-labelledby="pills-education2-tab">
                    
                <div class="row">
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact">มหาวิทยาลัยคริสเตียน</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                            144 ม.7 ต.ดอนยายหอม อ.เมือง จ.นครปฐม 73000</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-3422-9480-97</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: 0-3422-9499</li>
                            <a href=" http://www.christian.ac.th/  "><li class="list-group-item"></i> http://www.christian.ac.th/   </li></a>
                        </ul>
                    </div>
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact">มหาวิทยาลัยคริสเตียน</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                            328/1-2 ถ.พญาไท แขวงถนนเพชรบุรี เขตราชเทวี กรุงเทพฯ 10400</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-2215-0628-9  </li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: 0-2214-4291</li>
                            <a href=" http://www.sccthailand.org/index.php "><li class="list-group-item"></i> http://www.sccthailand.org/index.php  </li></a>
                    </div>
                    <div class="col-md-6">    
                        <ul class="list-group">
                                <li class="list-group-item pink-c display-contact">มหาวิทยาลัยพายัพ</li>
                                <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                                ถ.ซูปเปอร์ไฮเวย์เชียงใหม่ - ลำปาง อ.เมือง จ.เชียงใหม่ 50000</li>
                                <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-5324-1255, 0-5385-1478   </li>
                                <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: 0-5324-1983</li>
                                <a href=" http://www.payap.ac.th/ "><li class="list-group-item"></i> http://www.payap.ac.th/</li></a>
                        </ul>
                    </div>
                </div>
                   
            </div>

            <div class="tab-pane fade" id="pills-education3" role="tabpanel" aria-labelledby="pills-education3-tab">
            
                <div class="row">
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact"> วิทยาลัยพระคริสตธรรมแมคกิลวารี</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                            มหาวิทยาลัยพายัพ อ.เมือง จ.เชียงใหม่ 50000</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-5324-2484, 0-5330-6512-3</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: 0-5324-9508</li>
                            <a href="http://mcd.in.th/  "><li class="list-group-item">http://mcd.in.th/</li></a>
                        </ul>
                    </div>
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact"> สถาบันกรุงเทพคริสตศาสนศาสตร์</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                                    71 ซ.วชิรธรรมสาธิต 37 แขวงบางจาก เขตพระโขนง กรุงเทพฯ 10260</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์:0-2393-6223, 0-2396-1564, 0-2746-1103-4 </li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: 0-2398-7787</li>
                            <a href="http://www.theology.ac.th/ "><li class="list-group-item">  http://www.theology.ac.th/</li></a>
                        </div>
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact"> ศูนย์พระคริสตธรรมกระเหรียงแบ๊บติสท์</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                                    157/2 ซ.9 ต.ช้างเผือก อ.เมือง จ.เชียงใหม่ 50000</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-5321-6508</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: -</li>
                            <a href="#"><li class="list-group-item"> ...  </i> </li></a>
                        </ul>
                    </div>
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact"> ศูนย์การศึกษาคริสเตียนไทย - เกาหลี (แม่สรวย)</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                            289/1 ต.แม่พริก อ.แม่สรวย จ.เชียงราย 57180</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-5365-6728-9 </i></li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์:  0-5365-6728</li>
                            <a href=" http://www.sccthailand.org/index.php "><li class="list-group-item"> http://www.sccthailand.org/index.php  </li></a>
                        </ul>
                    </div>
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact"> ศูนย์พระคริสตธรรมเบธเอล</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                            410 ม.1 ซ.7 ต.โป่งผา อ.แม่สาย จ.เชียงราย 57130</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์:0-5373-2052, 0-5364-0451  </li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์:  0-5364-0500</li>
                            <a href="#"><li class="list-group-item">....</i> </li></a>

                        </ul>
                    </div>
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact"> สถาบันพระคริสตธรรมลาหู่ภาคที่ 18</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                            320 ม.6 ต.สันนาเม็ง อ.สันทราย จ.เชียงใหม่ 50210</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์: 0-5339-8365</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: -</li>
                            <a href="#"><li class="list-group-item">... </li></a>
                        </ul>
                    </div>
                    <div class="col-md-6">    
                        <ul class="list-group">
                            <li class="list-group-item pink-c display-contact"> ศูนย์พระคริสตธรรมเกธเซมาเน</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-home" aria-hidden="true"></i>
                                    ม.6 ต.หนองลู อ.สังขละบุรี จ.กาญจนบุรี 71240</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-mobile"></i> โทรศัพท์:08-1288-1261</li>
                            <li class="list-group-item cg-c"><i class="icon fa fa-fax"></i> แฟกซ์: -</li>
                            <a href="#"><li class="list-group-item">....</i> </li></a>
                        </ul>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
   
</section>
@endsection