@extends('front.layouts.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="section-bar">
        <h1>
          <span>ข่าวสารสภาคริสตจักร</span>
        </h1>
      </div>
    </div>
  </div>
  <!-- Page Heading/Breadcrumbs -->
  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><a href="{{url('activity/actlist/list')}}"> << รายการข่าวสาร</a></li>
      </ol>
    </div>
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-md-8">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        
          <!-- Indicators -->
          <ol class="carousel-indicators">
            @for($i=0; $i<$images->count(); $i++)
            <li 
              data-target="#carousel-example-generic" 
              data-slide-to="{{$i}}" 
              {{ $i==0?"class='active'":''}}>
            </li>
            @endfor
          </ol>
        
        <?php $j=0;?>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            @foreach($images as $image)
              <div class="item {{$j == 0?'active':''}}">
                  <center><img class="img-responsive" src="{{url($dir.'/'.$image->filename)}}"></center>
              </div>
              <?php $j++;?>
            @endforeach
          </div>
        
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>

      </div>
    </div>
    <div class="col-md-4">
        <h3 class="primary page-header">
          {{ $detail->title }}
          <p><small>วันที่ {{ date_format($detail->created_at,'d/m/Y') }}</small></p>
          <p><small>{{ $detail->user->department}}</small></p>
        </h3>

        <p>{{ $detail->description}}<p>
    </div>
  </div>
  <!-- /.row -->
</div>

@endsection