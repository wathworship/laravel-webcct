@extends('frontend.layouts.main')

@section('content')

<div class="content-section-a"> <br><center><h2>บทความ</h2></center><br>

    <div class="container"><br>
        <div class="row text-center"><br>
        @foreach ($articles as $article)
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-box1">
                        <h5 class="card-title">{{$article->article_name}}</h5>
                        <!-- ส่วนนี้คือ การย่อรายละเอียดให้สั้นลง แล้วตามด้วย ... คลิ๊กอ่านต่อ -->
                        <?php 
                            $detail1 = mb_substr($article->article_detail, 0, 200,"UTF-8");
                        ?> 
                            
                        <p class="card-text"><?php echo $detail1.'...'?></p>
                        <div class="mbr-section-btn text-center">
                            <a href="#" class="btn btn-primary btn-sm "><span class="text-white display-4">รายละเอียด</span></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div><br><br>

        <div class="media-container-row align-center">
            {!! $articles->links() !!}
        </div>
    </div>
</div>


@endsection