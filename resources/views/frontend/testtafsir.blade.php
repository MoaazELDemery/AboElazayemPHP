@extends('layout.frontend.min')
@section('content')

    <style>
    	@font-face { font-family:'QCF2001' ; src: url({{asset('frontend/assets/font-2/QCF2001.ttf')}}) ;}
    	
    	@font-face { font-family:'QCF2004' ; src: url({{asset('frontend/assets/font-2/QCF2004.ttf')}}) ;}
    	
		@font-face { font-family:'QCF2BSML' ; src: url({{asset('frontend/assets/font-2/QCF2BSML.ttf')}}) ;}
		
		@font-face { font-family:'QCF2002' ; src: url({{asset('frontend/assets/font-2/QCF2002.ttf')}}) ;}
		
		@font-face { font-family:'QCF2003' ; src: url({{asset('frontend/assets/font-2/QCF2003.ttf')}}) ;}
		
		@font-face { font-family:'QCF2005' ; src: url({{asset('frontend/assets/font-2/QCF2005.ttf')}}) ;}
		
		@font-face { font-family:'Times New Roman' ; src: url({{asset('frontend/assets/font-2/translit.ttf')}}) ;}
		
		
		@font-face { font-family:'QCF2278' ; src: url({{asset('frontend/assets/font-2/QCF2278.ttf')}}) ;}
		
		@font-face { font-family:'Mudir MT' ; src: url({{asset('frontend/assets/font-2/Mudir MT.ttf')}}) ;}
		
		@font-face { font-family:'QCF2355' ; src: url({{asset('frontend/assets/font-2/QCF2355.ttf')}}) ;}
		
		@font-face { font-family:'AGA Cordoba Regular' ; src: url({{asset('frontend/assets/font-2/AGA CORDOBA REGULAR_0.ttf')}}) ;}
		
		@font-face { font-family:'QCF2142' ; src: url({{asset('frontend/assets/font-2/QCF2142.ttf')}}) ;}
		
		@font-face { font-family:'REGULAR_0' ; src: url({{asset('frontend/assets/font-2/AGA-GRANADAREGULAR_0.ttf')}}) ;}
		
		@font-face { font-family:'SKR HEAD1' ; src: url({{asset('frontend/assets/font-2/SKR-HEAD1.ttf')}}) ;}
			
		@font-face { font-family:'CTraditional Arabic' ; src: url({{asset('frontend/assets/font-2/C_saud5.ttf')}}) ;}
		
		@font-face { font-family:'QCF2483' ; src: url({{asset('frontend/assets/font-2/QCF2483.ttf')}}) ;}
		
		@font-face { font-family:'QCF2440' ; src: url({{asset('frontend/assets/font-2/QCF2440.ttf')}}) ;}
		
		@font-face { font-family:'QCF2588' ; src: url({{asset('frontend/assets/font-2/QCF2588.ttf')}}) ;}
		
		@font-face { font-family:'QCF2469' ; src: url({{asset('frontend/assets/font-2/QCF2469.ttf')}}) ;}
		
		@font-face { font-family:'KFGQPC Uthman Taha Naskh' ; src: url({{asset('frontend/assets/font-2/UthmanTN1BVer10.otf')}}) ;}
		
		@font-face { font-family:'QCF2522' ; src: url({{asset('frontend/assets/font-2/QCF2522.ttf')}}) ;}
		
		@font-face { font-family:'QCF2587' ; src: url({{asset('frontend/assets/font-2/QCF2587.ttf')}}) ;}
		
		@font-face { font-family:'Mudir MT' ; src: url({{asset('frontend/assets/font-2/Mudir_MT.ttf')}}) ;}
		
		@font-face { font-family:'QCF2468' ; src: url({{asset('frontend/assets/font-2/QCF2468.ttf')}}) ;}
		
		@font-face { font-family:'QCF2006' ; src: url({{asset('frontend/assets/font-2/QCF2006.ttf')}}) ;}
		
		@font-face { font-family:'QCF2077' ; src: url({{asset('frontend/assets/font-2/QCF2077.ttf')}}) ;}
		
		@font-face { font-family:'QCF2047' ; src: url({{asset('frontend/assets/font-2/QCF2047.ttf')}}) ;}
		
		@font-face { font-family:'QCF2179' ; src: url({{asset('frontend/assets/font-2/QCF2179.ttf')}}) ;}
		
		@font-face { font-family:'QCF2155' ; src: url({{asset('frontend/assets/font-2/QCF2155.ttf')}}) ;}
		
		@font-face { font-family:'QCF2063' ; src: url({{asset('frontend/assets/font-2/QCF2063.ttf')}}) ;}
		
		
		@font-face { font-family:'QCF2424' ; src: url({{asset('frontend/assets/font-2/QCF2424.ttf')}}) ;}
		
		
		@font-face { font-family:'louts shamy' ; src: url({{asset('frontend/assets/font-2/louts-shamy.ttf')}}) ;}
		
		
		
		
	
		
		
		
		
			
			
		
		
				
				
			
			
			
		
		
		
		
		

		
		
			
			
			
    	
    
	
		
	
		
	
		
	
		
		
		
	
		
	
    	
    	
    	
	</style>

      
  <div     class ="sauraoverlay " >


            <div class="testDiv print-area print-Algalalyn print-Alsaady print-AbnKatheer print-Tantawy print-Albagfwy print-Alkortaby print-Altabary print-tafser 1 21 22 23 3">
                <ul style="padding-right: 0;     text-align: center; ">
                    @foreach($ayas as $aya)
                        <li > <a href="#" >{{$aya->AyahText}}</a> </li>
                    @endforeach
                </ul>
            </div>

        </div>



<div class="language-tap">
    <a rel="alternate" class="btn-9 " href="#">   مشاركة التفسير   </a>
    <div class="share" id="shareIcons" style="display: none;"></div> 
</div>



<div class="service-area-2">
    <div class="container">
        <div class="service-wrap ">
            <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
                <div class="filter">
                  
                    <div id="Search-toggle" class="shikh-flex background1 " style="height: 100px; background: none; justify-content: center !important;">
                       
                        <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                        <a href="{{route('testquran',$SuraID)}}" style="color: #444;">
                        <p class="sura-aa print-area print-Algalalyn  h1 print-Alsaady print-AbnKatheer print-Tantawy print-Albagfwy print-Alkortaby print-Altabary print-tafser  1 21 22 23 3" style="text-align: center;">
                    
                        ( سورة : {{$aa->sura_name}} )
                    
                        </p>
                        
                        
                        </a> 

                        </div>
                    </div>
                    <div id="search" class="background"  style="padding: 64px 45px !important; ">
                    <img class="img-quren" src="{{asset('frontend/assets/images/top_right_corner.png')}}"  alt="">
                        <img class="img-quren1" src="{{asset('frontend/assets/images/top_left_corner.png')}}"  alt="">
                        <img class="img-quren2" src="{{asset('frontend/assets/images/bottom_left_corner.png')}}"  alt="">
                        <img class="img-quren3" src="{{asset('frontend/assets/images/bottom_right_corner.png')}}"  alt="">
                        <div class="img-quren4"></div>
                        <div class="img-quren5"></div>
                        <div class="img-quren6"></div>
                        <div class="img-quren7"></div>

                        <div class="ReadAya print-area print-Algalalyn print-Alsaady print-AbnKatheer print-Tantawy print-Albagfwy print-Alkortaby print-Altabary print-tafser 1 21 22 23 3">
                            <ul style="padding-right: 0;      font-size: 30px;   text-align: center; ">
                                @foreach($ayas as $aya)
                                    <li class="LineAya"> <a href="#" style="color:#444;">{{$aya->AyahText}}</a> <label class="labelstyle">﴿{{$aya->VerseID}}﴾</label> </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>


                </div>
                
            </div>

            <div class="row wow animate__backInUp" data-wow-duration="2s">

            </div>

        </div>
        @if($VerseID == 1)
        <div lass="wpo-section-title"  style=" margin-left: 10px;">

            <a class="nt_button smile-font but-madi11 " style="margin-left: 20px !important;" href="{{ route('next_tafseer',[$SuraID,$VerseID+1]) }}">الاية التالية</a>
           

        </div>

        @else
        <div lass="wpo-section-title" style=" margin-left: 10px;">

            <a class="nt_button smile-font but-madi11 "  href="{{ route('next_tafseer',[$SuraID,$VerseID+1]) }}">الاية التالية</a>
            <a class="nt_button smile-font but-madi12 "  href="{{ route('previo_tafseer',[$SuraID,$VerseID-1]) }}">الاية السابقة</a>
            
        </div>
        @endif
        

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
           
       
            <button class="accordion print-area bg-about">{{ $ALmoyasar->tafseer_name }} </button>
            <div class="panel ">
                <p class="print-area">  {{ $ALmoyasar->text }} </p>
                <button id="print-btn" class="nt_button smile-font but-madi" style="width: 10%;"> طباعة التفسير </button>

            </div>
          
            <button class="accordion print-Algalalyn bg-about">{{ $Algalalyn->tafseer_name }}</button>
            <div class="panel">
                <p class="print-Algalalyn">  {{ $Algalalyn->text }} </p>
                <button id="print-btn-Algalalyn" class="nt_button smile-font but-madi" style="width: 10%;"> طباعة التفسير </button>

            </div>

            <button class="accordion print-Alsaady bg-about"> {{ $Alsaady->tafseer_name }}</button>
            <div class="panel">
                <p class="print-Alsaady">  {{ $Alsaady->text }} </p>
                <button id="print-btn-Alsaady" class="nt_button smile-font but-madi" style="width: 10%;"> طباعة التفسير </button>

            </div>

            <button class="accordion print-AbnKatheer bg-about" >{{ $AbnKatheer->tafseer_name }}</button>
            <div class="panel">
                <p class="print-AbnKatheer bg-about">  {{ $AbnKatheer->text }} </p>
                <button id="print-btn-AbnKatheer" class="nt_button smile-font but-madi" style="width: 10%;"> طباعة التفسير </button>
            </div>
            
            <button class="accordion print-Tantawy bg-about">{{ $Tantawy->tafseer_name }}</button>
            <div class="panel">
                <p class="print-Tantawy">  {{ $Tantawy->text }}   </p>
                <button id="print-btn-Tantawy " class="nt_button smile-font but-madi" style="width: 10%;"> طباعة التفسير </button>
            </div>

            <button class="accordion print-Albagfwy bg-about">{{ $Albagfwy->tafseer_name }}</button>
            <div class="panel">
                <p class="print-Albagfwy"> {{ $Albagfwy->text }}   </p>
                <button id="print-btn-Albagfwy" class="nt_button smile-font but-madi" style="width: 10%;"> طباعة التفسير </button>
            </div>
           
            <button class="accordion print-Alkortaby bg-about">{{ $Alkortaby->tafseer_name }}</button>
            <div class="panel">
                <p class="print-Alkortaby">{{ $Alkortaby->text }}   </p>
                <button id="print-btn-Alkortaby" class="nt_button smile-font but-madi" style="width: 10%;"> طباعة التفسير </button>

            </div>
           
            <button class="accordion print-Altabary bg-about">{{ $Altabary->tafseer_name }}</button>
            <div class="panel">
                <p class="print-Altabary">{{ $Altabary->text }}  </p>
                <button id="print-btn-Altabary" class="nt_button smile-font but-madi" style="width: 10%;"> طباعة التفسير </button>
            </div>

            @if(count($tafsers) > 0)
                @foreach ($tafsers as $line=>$tafser)
                        
                    @foreach ($name as $indexs => $nx)
                
                

                        @foreach ( $tafser->tafsers as  $index => $tafser_ar )
                            @if ( $nx->id = $tafser_ar->imam_id && $indexs == $index+1)
                        
                                <button class="accordion print-tafser bg-about">{{$nx->name_ar}}</button >

                                <div class="panel">
                                <p  class="print-tafser" style="font-family:QCF-2002  !important;" > {!! $tafser_ar->tafser_ar !!} </p>
                                
                                <button id="print-btn-tafser" class="nt_button smile-font but-madi" style="width: 10%;"> طباعة التفسير </button>

                                </div>
                            

                            @endif
                        
                            
                        @endforeach
                    {{-- @break --}}
                
                    @endforeach
                
                @endforeach
            @endif

            @if(count($StudentName) > 0)
                @foreach ($StudentName as $line=>$tafser)
                @if( $tafser->student_id != 4)
                <button class="accordion {{ $tafser->student->id }} bg-about"> تفسير {{ $tafser->student->name_ar }} (تلميذ الامام محمد ماضي أبو العزائم )</button>

                @else

                @endif
                            
                    @if($tafser->type_id == null)

                        <div class="panel">
                            <p class="{{ $tafser->student->id }}" style="font-family:QCF-2002  !important;"> {!! $tafser->description_ar !!}</p>
                            <button id="{{ $tafser->student->id }}" class="nt_button smile-font but-madi" style="width: 10%;"> طباعة التفسير </button>
                        </div>

                    @endif

                       
                @endforeach

            @endif

   <button class="accordion bg-about">  تفسير الشيخ عبد الباسط القاضي / (تلميذ الامام محمد ماضي أبو العزائم )</button>
            <div class="panel">
                @if(count($StudentName) > 0)

                    @foreach ($StudentName as $line=>$tafser)

                        @if($tafser->student_id == 4)
<button class="accordion {{ $tafser->student->id }}{{ $tafser->type['id'] }} bg-about">{{ $tafser->type['name_ar'] }} </button>                        @endif

                        <div class="panel">
                            

                            @if($tafser->student_id == 4)

                                <p class="{{ $tafser->student->id }}{{ $tafser->type['id'] }} " style=" color:#444;">{{ $tafser->type['name_ar'] }} : {!! $tafser->description_ar !!} </p> 
                                <button id="{{ $tafser->student->id }}{{ $tafser->type['id'] }}" class="nt_button smile-font but-madi" style="width: 10%;"> طباعة التفسير </button>
                            @endif

                        </div>


                    @endforeach

                @endif
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