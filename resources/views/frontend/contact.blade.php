@extends('layout.frontend.min')
@section('content')



<!-- start wpo-contact-form-map -->
<section class="wpo-contact-form-map section-padding">
    <div class="container">
        <div class="row  ">
            <div class="col-12">
                <div class="row  cont-flex" style="margin-top: 50px">
                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 wow animate__backInLeft" data-wow-duration="2s">
                        <div class="contact-map">
                            @foreach ($maps as $map)
                            <iframe src="{{ $map->map }}" allowfullscreen></iframe>
                            @endforeach
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 wow animate__backInRight" data-wow-duration="2s">
                        <div class="contact-form bg-about">
                            <h2>{{__('messages.Connect')}} </h2>
                            <form method="POST" action="{{ route('dashboard.contact.store')}}" class="contact-validation-active">
                                {{ csrf_field() }}
                                {{ method_field('post')}}
                                <div>
                                    <input type="text" class="form-control" name="first" id="first" placeholder="{{__('messages.first')}}">
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="second" id="second" placeholder="{{__('messages.second')}}">
                                </div>
                                <div class="clearfix">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="{{__('messages.email')}}">
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="messages" id="messages" placeholder="{{__('messages.themes')}}">
                                </div>
                                <div>
                                    <textarea class="form-control" name="description" id="description" placeholder=" {{__('messages.description')}}..."></textarea>
                                </div>
                                <div class="submit-area">
                                    <button type="submit" class="theme-btn submit-btn"> {{__('messages.message')}}</button>
                                    <div id="loader">
                                        <i class="ti-reload"></i>
                                    </div>
                                </div>
                                <div class="clearfix error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later. </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="wpo-contact-info wow animate__backInUp" data-wow-duration="2s">
                    @foreach ($maps as $map)
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 pull-right pull-flex">
                            <div class="info-item  bg-about">
                                @if (app()->getLocale() == 'ar')
                                <h2>{{ $map->address_ar }}</h2>
                                @else
                                <h2>{{ $map->address_en }}</h2>
                                @endif
                                <div class="info-wrap ">
                                    <div class="info-icon">
                                        <i class="ti-world"></i>
                                    </div>
                                    <div class=" info-text">
                                        <span>{{__('messages.office')}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 pull-right pull-flex">
                            <div class="info-item bg-about">
                                <h2> {{ $map->email  }}</h2>
                                <div class="info-wrap ">
                                    <div class="info-icon-2">
                                    <i class="fas fa-at"></i>
                                      
                                    </div>
                                    <div class="info-text">
                                        <span>{{__('messages.official')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6  pull-right pull-flex">
                            <div class="info-item   bg-about">
                                <h2>{{ $map->mobile }}</h2>
                                <div class="info-wrap">
                                    <div class="info-icon-3">
                                        <i class="ti-headphone-alt"></i>
                                    </div>
                                    <div class="info-text">
                                        <span>{{__('messages.phone')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div> <!-- end container -->
</section>

@endsection