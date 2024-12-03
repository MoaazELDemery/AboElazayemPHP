@extends('layout.dashboard.app')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div>
            <!-- BEGIN GENERAL PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                <p style="font-size: 40px; color:#444; text-align: center;" > اسم القصيدة : {{$poemss->pname_ar}} </p>

                    <div class="actions left" >
                        <div class="actions">
                            <a href="{{ route('dashboard.poems.edit_abyat', $id) }}" class="btn btn-circle btn-default">
                                <i class="fa fa-pencil"></i> تعديل </a>

                        </div>
                    </div>
                   
                </div>
                <div class="portlet-body">

                    <div class="row">
                        @foreach($poem_rawys as $poem_rawy)
                        <div class="col-md-6">
                            <h3>{!!$poem_rawy->right_ar!!}</h3>
                        </div>
                        <div class="col-md-6">
                            <h3>{!!$poem_rawy->left_ar!!}</h3>

                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
        <!-- END GENERAL PORTLET-->

    </div>
    <div class="col-md-4">





        <!-- BEGIN DESCRIPTION LISTS PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>بيانات القصيدة
                </div>
               
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                </div>
            </div>
            <div class="portlet-body">
              
                <p style="font-size: 20px; color:#444;" > اسم القصيدة : {{$poemss->pname_ar}} </p>
                <p style="font-size: 20px; color:#444;" > رقم القصيدة : {{$poemss->num_peom}} </p>
                <p style="font-size: 20px; color:#444;" >  عدد ابيات القصيدة : {{$poemss->num_verses}} </p>


                <p style="font-size: 20px; color:#444;" > مناسبة القصيدة : {{$poemss->occasion_ar}} </p>
                <p style="font-size: 20px; color:#444;" > مكان  القصيدة : {{$poemss->Place_ar}} </p>
                <p style="font-size: 20px; color:#444;" >   التاريخ الهجري القصيدة : {{$poemss->date_hijri}} </p>
                <p style="font-size: 20px; color:#444;" >   التاريخ الميلادي القصيدة : {{$poemss->date_birth}} </p>
                
                <p style="font-size: 20px; color:#444;" >    راوي القصيدة : {{$poemss->rawy_ar}} </p>
                <p style="font-size: 20px; color:#444;" >    بحر القصيدة : {{$poemss->sea->sea_ar}} </p>
                <p style="font-size: 20px; color:#444;" >     تابع الي : {{$poemss->rawy->rawy_ar}} </p>
           
            </div>
        </div>
        <!-- END DESCRIPTION LISTS PORTLET-->
    </div>
</div>


@endsection