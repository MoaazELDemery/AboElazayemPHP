@extends('layout.dashboard.app')
@section('content')



    <div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase">الصفحه الرئيسية / المحتوي الاول</span>
        </div>
             <!-- <div class="btn-group" style="margin-right:10px ;">
                        <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.card.create') }}"> <i class="fa fa-plus"></i> اضافة</a>

                    </div> -->
        <div class="tools"> </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">

            <thead>
                <tr>
                    <th> رقم </th>
                    <th> الصور</th>
                    <th> اسم المحتوي </th>
                    <th> تعديل </th>
                    <!-- <th > حذف </th> -->
                </tr>
            </thead>
            <tbody>
             

          
                @foreach ($cards as $index=>$card)
                <tr>

                    <td> {{ $index+1 }} </td>
                   
                    <td>
                        <img class="img-responsive" style="width: 10%" src=" {{asset('storage/card/'.$card->photo)}}" alt="img"> 
                    </td>
                    <td>
                        {{ $card->description_ar }}
                    </td>
                    <td>
                        <a href="{{ route('dashboard.card.edit', $card->id) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> تعديل </a>
                    </td>
<!-- 
                    <td>
                        <a onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.card.destroy', $card->id) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-times"></i> حذف </a>
                    </td> -->

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection
