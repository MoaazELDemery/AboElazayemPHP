@extends('layout.dashboard.app')
@section('content')
<!-- BEGIN SAMPLE TABLE PORTLET-->

<section class="service-single-section section-padding">
    <div class="container">
      <div class="actions">
                    <div class="actions">
                        <a href="{{ route('dashboard.listen.index') }}" class="btn btn-circle btn-default">
                        <i class="fa fa-mail-reply"></i> الغاء </a>

                    </div>
                </div>
                <div class="actions">
                    <div class="actions">
                        <a href="{{ route('dashboard.listen.edit', $Listens->id) }}" class="btn btn-circle btn-default">
                            <i class="fa fa-pencil"></i> تعديل </a>

                    </div>
                </div>
        <div class="row">
            <div class="col-12">
                <div class="wpo-section-title wow animate__backInUp" data-wow-duration="2s">
                    <h2><h3>اسم القصيدة:{{$Listens->poems->pname_ar}}</h3></h2>
                </div>
            </div>
        </div>
        <div class="container">
           
            <div class="col-md-6 aut_no">
                <h1><i class="fas fa-bookmark"></i>{{ $Listens->name_ar }}</h1>
                <h1><i class="fas fa-bookmark"></i>{{ $Listens->description_ar }}</h1>
                <audio class="single-audio-inner " controls="">
                    <source src="{{asset('storage/listen/'.$Listens->audio)}}" type="audio/ogg"> 
                </audio>
            </div>
        </div>
    </div> 
</section>
<!-- END SAMPLE TABLE PORTLET-->
@endsection