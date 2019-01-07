<section class="header4 cid-rbWpmiyScO " id="header4-x">
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(239, 239, 239);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="media-content col-md-10" style="margin-bottom: 40px">
                <h1 class="mbr-section-title align-center mbr-white pb-3 mbr-bold mbr-fonts-style display-2">ปฏิทิน</h1>
                
                <div class="mbr-text align-center mbr-white pb-3">
                    
                </div>
                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-info display-7" href="#">วันหยุดสภาคริสตจักรฯ 2019</a>
                    <a class="btn btn-md btn-secondary-outline display-7" href="#">กำหนดการประชุมประจำปี 2019</a></div>
            </div>
            
            <div class="col-md-7">
                <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=webmaster%40cct.or.th&amp;color=%2342104A&amp;ctz=Asia%2FBangkok" style="border:solid 1px #777" width="100%" height="550" frameborder="0" scrolling="no"></iframe>
            </div>
            
            <div class="col-md-5">
                    <div class="container">
                            <table class="table table-hover display-4">
                            <?php  
                              $_month_name = array("01"=>"มกราคม",  "02"=>"กุมภาพันธ์",  "03"=>"มีนาคม",    
                                  "04"=>"เมษายน",  "05"=>"พฤษภาคม",  "06"=>"มิถุนายน",    
                                  "07"=>"กรกฎาคม",  "08"=>"สิงหาคม",  "09"=>"กันยายน",    
                                  "10"=>"ตุลาคม", "11"=>"พฤศจิกายน",  "12"=>"ธันวาคม"); 
                              
                              $vardate=date('Y-m-d');
                              $yy=date('Y');
                              $mm =date('m');
                              $dd=date('d'); 
                              if ($dd<10){
                                  $dd=substr($dd,1,2);
                              }
                                $date=" ".$_month_name[$mm]."  ค.ศ. ".$yy;
                              //echo $date;
                            ?>
                              <thead>
                                <tr>
                                  <th>วันสำคัญประจำเดือน {{date($date)}}</th>
                                </tr>
                              </thead>
                            </table>
                            <table class="table table-hover display-4">
                              <thead>
                                <tr>
                                  <th>วันที่เริ่มต้น</th>
                                  <th>วันที่สิ้นสุด</th>
                                  <th>รายการ</th>
                                </tr>
                              </thead>
                              
                              <tbody>
                              @foreach ($events as $event)
                              <?php
                                $ds= strtotime($event->date_start);
                                $de= strtotime($event->date_end);
                              ?>
                                <tr>
                                  <td>{{ date('d', $ds)}}</td>                           
                                  <td>{{ date('d', $de)}}</td>
                                  <td>{{$event->event_name}}</td>
                                </tr>
                              @endforeach
                              </tbody>
                            </table>
                          </div>
            </div>
        </div>
    </div>
</section>