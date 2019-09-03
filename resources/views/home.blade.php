@extends('master')

@section('article')
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1 class="hidden-xs">Vệ Sinh Công Nghiệp<br>
              Uy Tín nhiều năm</h1>
            <p>Với đội ngũ quản lí, giám sát và nhân viên vệ sinh chuyên nghiệp & uy tín nhiều năm, CÔNG TY DỊCH VỤ VỆ SINH SẠCH & ĐẸP hoàn toàn đáp ứng được tất cả yêu cầu của khách hàng.</p>
            <a href="#services" class="btn btn-custom btn-lg page-scroll">Xem dịch vụ</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Services Section -->
<div id="services">
  <div class="container">
    <div class="section-title">
      <h2>Dịch Vụ</h2>
    </div>
    <div class="row">

      @foreach($dvs as $dv)
      <div class="col-md-4">
        <div class="service-media"><a href="{{url('')}}/{{$dv->alias}}"> <img src="{{url('')}}/{{$dv->img}}" alt=" "> </a></div>
        <div class="service-desc">
          <h3><a href="{{url('')}}/{{$dv->alias}}"> <b>{{$dv->title}}</b>  </a></h3>
          <p>{{ \Illuminate\Support\Str::words($dv->intro, 30, '...') }}</p>
        </div>
      </div>
      @endforeach
      
    </div>
  </div>
</div>

@stop