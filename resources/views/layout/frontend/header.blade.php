<header id="header" class="wpo-site-header wpo-header-style-3">
    <nav class="navigation navbar navbar-default navbar-fixed-top">
        <div class="container nav-reverse">
            <div class="navbar-header">
                <button type="button" class="open-btn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand brond media-img" href="{{ route('index') }}"><img src="{{ asset('frontend/assets/images/service/LOGO 2.png') }}" alt="LOGO 2"></a>
            </div>

            <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">


                <button class="close-navbar"><i class="ti-close"></i></button>
                <ul class="nav navbar-nav flex-pol">
                    <li class="active-nav-page"><a href="{{ route('index') }}">{{__('messages.home')}}</a></li>
                    <!-- <li><a href="{{ route('about') }}">{{__('messages.about')}}</a></li> -->

                    <li><a href="{{route('pupliimam')}}">{{__('messages.imam')}}</a></li>
                    <!-- <li><a href="{{ route('line') }}">{{__('messages.prose')}} </a></li> -->
                    <!-- <li class="li-hr2"><a class="menu-flex" href="{{ route('eltasof') }}"><i class="fas fa-bookmark"></i>{{__('messages.mysticism')}}</a></li> -->


                    <!-- <li><a href="{{ route('poem1') }}">{{__('messages.systemic')}} </a></li> -->
                    <li><a href="{{ route('swra_name') }}"> {{__('messages.koran')}}</a></li>
                    <li><a href="{{ route('maraky') }}">{{__('messages.hypochondriac')}}</a></li>
                    <li><a href="{{route('eltasofbox')}}">{{__('messages.mysticism')}} </a></li>

                    <li><a href="{{route('max')}}">{{__('messages.audios')}} </a></li>
                    <li><a href="{{route('conversations')}}"> أحاديث </a></li>
                    <li><a href="{{route('magazine')}}"> مجلة المدينه المنورة  </a></li>
                    <!-- <li><a href="{{route('Total')}}">جديد </a></li> -->
                    <!-- <li><a href="{{ route('imam') }}">{{__('messages.disciples')}}</a></li> -->

                    <!-- <li class="menu-item-has-children">
                        <a href="#">{{__('messages.more')}}</a>
                        <ul class="sub-menu menu-media">
                            <li class="li-hr"><a class="menu-flex" href="{{ route('audios') }}"><i class="fas fa-microphone"></i>{{__('messages.audios')}} </a></li>
                            <li class="li-hr1"><a class="menu-flex" href="{{ route('visuals') }}"><i class="fas fa-tv"></i>{{__('messages.visual')}} </a></li>
                            <li class="li-hr2"><a class="menu-flex" href="{{ route('eltasof') }}"><i class="fas fa-bookmark"></i>{{__('messages.mysticism')}}</a></li>
                            <li class="li-hr3"><a class="menu-flex" href="{{route('contact')}}"><i class="fab fa-ethereum"></i>{{__('messages.Connect')}} </a></li>
                            <li class="li-texe"><a class="menu-flex" href="#">{{__('messages.spare')}}</a></li>
                            <li class="li-texe"><a class="menu-flex" href="#">{{__('messages.spare')}}</a></li>

                        </ul>
                    </li> -->
                    <!-- <li><a href="{{ route('magazine') }}">{{__('messages.magazine')}} </a></li> -->


                    {{-- <li class="menu-item-has-children">
                        <a href="#">{{__('messages.language')}}</a>
                        <ul class="sub-menu menu-media">
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li> --}}



                </ul>
            </div>
            <div class="cart-search-contact">
                <div style="width : 100% " class="header-search-form-wrapper  mb-0">
                    <select class="form-control" name="" dir="rtl" onchange="if(this.value != '0' ){location = this.value;}">
                        <option value="0">خريطة الموقع</option>
                        <option value="{{route('Search')}}">{{__('messages.prose')}}</option>
                        <option value="{{route('poem1')}}">{{__('messages.Poems')}}</option>
                        <option value="{{route('Nazmybox')}}">{{__('messages.Systematic-Heritage')}}</option>
                        <option value="{{route('pupliimam')}}">{{__('messages.imam')}}</option>
                        <option value="{{ route('swra_name') }}">{{__('messages.koran')}}</option>
                        <option value="{{route('Total')}}">{{__('messages.Interpretation')}}</option>
                        <option value="{{route('eltasofbox')}}">{{__('messages.mysticism')}}</option>
                        <option value="{{ route('maraky') }}">{{__('messages.hypochondriac')}}</option>
                        <option value="{{route('max')}}">{{__('messages.audios')}}</option>
                        <option value="{{route('imamus')}}">{{__('messages.abu-Al-Azaim')}}</option>
                        <option value="{{route('Abouts')}}">{{__('messages.about-the-University')}}</option>
                          <li><a href="{{ route('magazine') }}">{{__('messages.magazine')}} </a></li>
                    </select>
                </div>

            </div>

        </div>
        <!-- end of container -->
    </nav>
</header>
