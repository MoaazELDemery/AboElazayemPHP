@extends('layout.frontend.min')
@section('content')

<div class="wpo-breadcumb-area" style="margin: 150px 0px 60px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2> {{__('messages.soon')}}</h2>
                    <!-- <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><span>Blog</span></li>
                            </ul> -->
                            <ul style="padding: 0px; ">
                               
                               <li style="margin-top: 30px"><a style="border: 1px solid; padding: 4px 10px; border-radius: 30px; font-size:20px;" href="{{ url()->previous() }}">الرجوع الي الصفحه</a></li>
                             

                           </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection