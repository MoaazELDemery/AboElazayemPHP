<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">


<!-- Mirrored from wpocean.com/html/tf/ummah-live/ummah/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Feb 2021 09:17:28 GMT -->
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">

    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/service/LOGO 2.png')}}" type="images/png" />
    <title>جامعة الامام محمد ماضي أبو العزائم</title>


    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" /> -->

    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=hanimation" />

    <link href="{{ asset('frontend/assets/css/themify-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="{{ asset('frontend/assets/css/all.css') }}" rel="stylesheet">


  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />
            <link href="{{ asset('frontend/assets/css/semantic.min.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/assets/css/flaticon.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/assets/css/alln.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/assets/css/owl.carousel.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/assets/css/owl.theme.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/assets/css/slick.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/assets/css/slick-theme.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/assets/css/swiper.min.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/assets/css/owl.transitions.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/assets/css/jquery.fancybox.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/assets/css/odometer-theme-default.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/assets/css/nice-select.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/assets/css/style-ar.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/css/style-q.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/assets/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/assets/css/jssocials.css') }}" rel="stylesheet">
            <link href="{{ asset('frontend/assets/css/jssocials-theme-flat.css') }}" rel="stylesheet">
    
            
   
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" /> --}}
    <!-- {{-- <link href="{{ asset('frontend/assets/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" /> --}} -->



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   

</head>

<body>
{{--
    <div class="language-tap">
      
        
      
        @if (app()->getLocale() == 'ar')

        <a rel="alternate" href="{{ LaravelLocalization::getLocalizedURL('en') }}">
            English
            <img src="{{asset('frontend//assets/images/united-states.png')}}" alt="united-states" style="margin:5px">
        </a>
       
            
        @else
        <a rel="alternate" href="{{ LaravelLocalization::getLocalizedURL('ar') }}">
            العربية
            <img src="{{asset('frontend//assets/images/egypt.png')}}" alt="egypt" style="margin:5px">
        </a>
            
        @endif

        
       
    </div>
    --}} 

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>

        @include('layout.frontend.header')

        @yield('content')

        @include('layout.frontend.footer')


    </div>
    <!-- end of page-wrapper -->
    <!-- All JavaScript files
    ================================================== -->





    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/circle-progress.min.js') }}"></script>
    <!-- Plugins for this template -->
    <script src="{{ asset('frontend/assets/js/jquery-plugin-collection.js') }}"></script>
    <!-- Custom script for this template -->
    <script src="{{ asset('frontend/assets/js/moment.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/semantic.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-hijri-datetimepicker.min.js') }}"></script>



    <script src="{{ asset('frontend/assets/js/fontawesome.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.hotkey.js') }}"></script>
    <script src="{{ asset('frontend/js/quran.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/printThis.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jssocials.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/ngkcast72b9vklwqb82jtt5jhoigqpyox2762eyhlqwthi8y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>


 

  
    <script>
        // $(function() {
        //     $('.selectpicker').selectpicker();
        // });

        function create_custom_dropdowns() {
            $('select').each(function(i, select) {
                if (!$(this).next().hasClass('dropdown-select')) {
                    $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
                    var dropdown = $(this).next();
                    var options = $(select).find('option');
                    var selected = $(this).find('option:selected');
                    dropdown.find('.current').html(selected.data('display-text') || selected.text());
                    options.each(function(j, o) {
                        var display = $(o).data('display-text') || '';
                        dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
                    });
                }
            });

            $('.dropdown-select ul').before('<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>');
        }


        // Open/close
        $(document).on('click', '.dropdown-select', function(event) {
            if ($(event.target).hasClass('dd-searchbox')) {
                return;
            }
            $('.dropdown-select').not($(this)).removeClass('open');
            $(this).toggleClass('open');
            if ($(this).hasClass('open')) {
                $(this).find('.option').attr('tabindex', 0);
                $(this).find('.selected').focus();
            } else {
                $(this).find('.option').removeAttr('tabindex');
                $(this).focus();
            }
        });

        // Close when clicking outside
        $(document).on('click', function(event) {
            if ($(event.target).closest('.dropdown-select').length === 0) {
                $('.dropdown-select').removeClass('open');
                $('.dropdown-select .option').removeAttr('tabindex');
            }
            event.stopPropagation();
        });

        function filter() {
            var valThis = $('#txtSearchValue').val();
            $('.dropdown-select ul > li').each(function() {
                var text = $(this).text();
                (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show(): $(this).hide();
            });
        };
        // Search

        // Option click
        $(document).on('click', '.dropdown-select .option', function(event) {
            $(this).closest('.list').find('.selected').removeClass('selected');
            $(this).addClass('selected');
            var text = $(this).data('display-text') || $(this).text();
            $(this).closest('.dropdown-select').find('.current').text(text);
            $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
        });

        // Keyboard events
        $(document).on('keydown', '.dropdown-select', function(event) {
            var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
            // Space or Enter
            //if (event.keyCode == 32 || event.keyCode == 13) {
            if (event.keyCode == 13) {
                if ($(this).hasClass('open')) {
                    focused_option.trigger('click');
                } else {
                    $(this).trigger('click');
                }
                return false;
                // Down
            } else if (event.keyCode == 40) {
                if (!$(this).hasClass('open')) {
                    $(this).trigger('click');
                } else {
                    focused_option.next().focus();
                }
                return false;
                // Up
            } else if (event.keyCode == 38) {
                if (!$(this).hasClass('open')) {
                    $(this).trigger('click');
                } else {
                    var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
                    focused_option.prev().focus();
                }
                return false;
                // Esc
            } else if (event.keyCode == 27) {
                if ($(this).hasClass('open')) {
                    $(this).trigger('click');
                }
                return false;
            }
        });

        $(document).ready(function() {
            create_custom_dropdowns();
        });
    </script>




</body>


<!-- Mirrored from wpocean.com/html/tf/ummah-live/ummah/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Feb 2021 09:17:51 GMT -->

</html>