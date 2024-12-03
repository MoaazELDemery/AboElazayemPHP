@extends('layout.frontend.min')
@section('content')
<div class="service-area-2">
    <div class="container">
        <div class="service-wrap ">
            <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
                <div class="filter">
                    <div id="Search-toggle" class="shikh-flex background1" style="height: 100px; background: none;">
                        <i class="fa fa-minus-square" aria-hidden="true"></i>
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">

                            <h1 class="madie-text-h1" style="text-align: center;"> ( سورة :{{$aa->sura_name}} ) </h1>
                        </div>
                    </div>
                   

                </div>
            </div>

            <div  class="row wow animate__backInUp" data-wow-duration="2s">
                @foreach($datas as $data)
                    @if($data->count == '114')
                    <div id="voice" class="col-md-4 bg-about " id="accordion" role="tablist" aria-multiselectable="true">
                
                        <button class="accordion" style="height: 80px;">{{$data->name}}  (رواية : {{$data->rewaya}})</button>
                        <div class="panel">
                            <audio class="single-audio-inner  " controls="">

                                <source src="{{$data->Server}}/{{$value}}.mp3" type="audio/ogg">
                                <source src="{{$data->Server}}/{{$value}}.mp3" type="audio/mpeg">

                            </audio>
                        </div>
                    

                    </div>
                    @endif
                @endforeach


            </div>


        </div>


    </div>
</div>



<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
        });
    }
</script>



@endsection