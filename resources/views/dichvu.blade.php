@extends('master')

@section('article')

<div id="services">
  <div class="container">
     <div class="row">
        <div class="col-lg-8">

           <article class="post" itemscope=""  style="margin-top:36px">
              
                 <div class="section-title" style="margin-bottom: 20px;">
                    <h2>{{$content[0]->title}}</h2>
                  </div>
              
              <div itemprop="articleBody">
                 <p><img src="{{$content[0]->img}}" class="img-responsive"></p>
                 
                 <?php 
                  echo($content[0]->content);
                 ?>
                 
              </div>
              <hr>
              
           </article>
           
        </div>
        <div class="col-lg-4">
           <div class="jumbotron" style="padding: 5px; padding-left: 15px; margin-top: 36px;">
              <div class="card-body">
                <h3 class="mb-3">Các dịch vụ khác:</h3>
                <div class="about-text">
                  <ul style="list-style-type: circle; margin-left: 25px">
                    @foreach($dvs as $dv)
                    <li><a href="{{url('')}}/{{$dv->alias}}">{{$dv->title}}</a></li>
                    @endforeach
                  </ul>
                </div>
                <hr>
                <div>

                  <h4 class="text-center" style="color: #ce2a36"><b>Công ty TNHH vệ sinh Sạch Đẹp </b><br> Uy tín nhiều năm</h4>

                   <h4>Trụ sở</h4>
                      <p style="font-size: 16px">02 Vũ Tông Phan,<br>
                        Phường An Phú, Quận 2, TP. HCM</p>
                    <h4>Phòng kinh doanh</h4>
                      <p style="font-size: 16px">0918 648 286 <br> 0932 065 482</p>
                    <h4>Email</h4>
                      <p style="font-size: 16px"> cty.vscnsachdep@gmail.com</p>
                    <hr>
                  
                </div>
              </div>
            </div>
           
        </div>
     </div>
  </div>
</div>

@stop