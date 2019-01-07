@extends('frontend.layouts.main')

@section('content')

    
        <div class="w3-content w3-display-container">
            <img class="mySlides" src="img:url(assets/images/01.jpg">
            <img class="mySlides" src="img:url(assets/images/01.jpg">
            <img class="mySlides" src="img:url(assets/images/01.jpg">
        <div class="w3-center w3-display-bottommiddle" style="width:100%">
            <div class="w3-left" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right" onclick="plusDivs(1)">&#10095;</div>
                    <span class="w3-badge demo w3-border" onclick="currentDiv(1)"></span>
                    <span class="w3-badge demo w3-border" onclick="currentDiv(2)"></span>
                    <span class="w3-badge demo w3-border" onclick="currentDiv(3)"></span>
                </div>
        </div>
        
        
 

<section class="mbr-section content4 features11 cid-rc5Trh2eua" id="features11-s">
    <div class="card p-3 pr-3">
        <div class="media">
            <div class="align-self-center card-img pb-3">
                <span class="mbr-iconfont mbri-user"></span>
            </div>     
            <div class="media-body">
                <h4 class="card-title mbr-fonts-style display-5">
                    การปกครอง
                </h4>
            </div>
        </div>                

        <div class="card-box">
            <p class="block-text mbr-fonts-style display-7">
                สภาคริสตจักรในประเทศไทยมีการแบ่งการปกครองออกเป็นคริสตจักรภาพคริสตจักรท้องถิ่น หมวดและศาลาธรรม อีกทั้งมีหน่วยงานและสถาบันการศึกษา สถาบันการแพทย์ร่วมทำพันธกิจของพระเจ้าอย่างครบวงจร 
            </p>
        </div>
    </div>
</section>
@endsection