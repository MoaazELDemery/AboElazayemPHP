<div class="wpo-ne-footer">
    <!-- start wpo-site-footer -->

    <footer class="wpo-site-footer">
        <div class="wpo-upper-footer">
            <div class="container">
                <div class="row  row-left flex-footer flex-footer-new-1">
                    <div class="col col-lg-3 col-lg-offset-1 col-md-3 col-sm-6">
                        <div class="widget market-widget wpo-service-link-widget">
                            <div class="widget-title">
                                <h3> {{__('messages.Connect')}}</h3>
                            </div>
                            <p>{{__('messages.Islamic')}}
                            </p>
                            <div class="contact-ft">
                                <ul class="ul-footer-ul">
                                    <li class="flex-icon"><i class="fas fa-map-marker-alt icon-fot"></i>{{__('messages.City')}}</li>
                                    <li><i class="fas fa-phone-volume icon-fot" ></i><a  target="_blank" style="color: #444" href="https://api.whatsapp.com/send?phone=01030569953&amp;text=">01030569953</a></li>
                                    <li><i class="far fa-envelope icon-fot" ></i> <a  target="_blank" style="color: #444" href="mailto:hamdyiq2021@gmail.com" target="_blank">ummah@gmail.com</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6">
                        <div class="widget link-widget">
                            <div class="widget-title">
                                <h3>{{__('messages.link')}}</h3>
                            </div>
                            <ul style="padding: 0px">



                                <li><a href="{{ route('pupliimam') }}"> {{ __('messages.imam') }}</a></li>
                                <li><a href="{{ route('swra_name') }}">{{ __('messages.koran') }}</a></li>
                                <li><a href="{{ route('maraky') }}">{{ __('messages.hypochondriac') }}</a>
                                </li>
                                <li><a href="{{ route('eltasofbox') }}">{{ __('messages.mysticism') }}</a>
                                </li>
                                <li><a href="{{ route('max') }}">{{ __('messages.audios') }}</a></li>
                                <li><a href="{{ route('magazine') }}">{{ __('messages.magazine') }} </a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-6">
                        <div class="widget link-widget">
                            <div class="widget-title">
                                <h3>{{__('messages.link')}}</h3>
                            </div>
                            <ul style="padding: 0px">

                                <li><a href="{{ route('imamus') }}">عن الامام / محمد ماضي ابو العزائم</a></li>
                                <li><a href="{{ route('Abouts') }}">عن الجامعة / للامام محمد ماضي أبو
                                        العزائم</a></li>
                                <li><a href="{{ route('Total') }}">تفسير القرآن الامام/ محمد ماضي أبو
                                        العزائم</a></li>
                                <li><a href="{{ route('prosebox') }}">التراث النثري للامام/ محمد ماضي أبو
                                        العزائم</a></li>
                                <li><a href="{{ route('Nazmybox') }}">التراث النظمي للامام/ محمد ماضي أبو
                                        العزائم</a></li>




                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-6">
                        <div class="widget about-widget">
                            <div class="logo widget-title">
                                <a  href="{{ route('index') }}"> <img src="{{ asset('frontend/assets/images/service/LOGO 2.png')}}" alt="LOGO 2"></a>

                            </div>
                            <p style="text-align: center;">{{__('messages.madi')}} </p>
                            <ul class="ul-footer flex-icon">
                                <li ><a target="_blank" href="#"><i class="fab fa-facebook-f "></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-twitter "></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-instagram "></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-google-plus-g "></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div>
        <div class="wpo-lower-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <p class="copyright">&copy; 2021 <a target="_blank" href="http://innovations-eg.com/">innovations</a>
                            {{__('messages.reserved')}} </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end wpo-site-footer -->
</div>
