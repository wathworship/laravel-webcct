@extends('frontend.layouts.main')

@section('content')

<div class="content-section-a"> <br><center><h2>คำพยานชีวิต</h2></center><br><br>
    <div class="container">
        <div class="row text-center">
        @foreach ($articles as $article)
        <div class="col-md-4"> 
                <div class="card-box2">
                    <iframe width="100%" height="250" src="{{$article->embed_iframe}}" frameborder="0" 
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                      
                        <div class="caption"><br>
                                <h3 class="card-title mbr-fonts-style display-5"><?php echo $article->article_name?></h3>
                            <div class="mbr-section-btn text-center"><a href="{{$article->article_file}}" 
                                class="btn btn-secondary btn-sm"><span class="text-white display-4">อ่านคำพยาน</span></a>
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