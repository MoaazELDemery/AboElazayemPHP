@extends('layout.dashboard.app')
@section('content')



<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
           
            @foreach ($Types as $index => $Type)
                @if ($index == 0)
                    <span class="caption-subject bold uppercase">({{ $Type->ImamDisciples->name_ar }}) ---- مكتبةالامام </span>
                @endif
            @endforeach
        </div>

        <div class="btn-group" style="margin-right:10px ;">
            <a class="btn btn-default mt-ladda-btn ladda-button btn-outline"
                href="{{ route('dashboard.ButtonType.create', $id) }}"> <i class="fa fa-plus"></i> اضافة</a>

        </div>

        <div class="btn-group" style="margin-right:10px ;">
            <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.ImamDisciples.index') }}"> <i class="icon-login"></i> الرجوع الي صفحةاسماء الائمة و التلاميذ </a>

        </div>
      
        <div class="tools"> </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">

            <thead>
                <tr>
                    <th> رقم </th>
                    <th> اسم المحتوي </th>
                    <th> تابع الي </th>
                    <th > نوع المكتبة  </th>
                    <th> اضافة نص </th>
                    <th> اضافة كتاب </th>
                    <th> تعديل </th>
                    <th> حذف </th>

                </tr>
            </thead>
            <tbody>
              
                @foreach ($Types as $index => $Type)
                    <tr>

                        <td> {{ $index + 1 }} </td>

                        <td>
                            {{ $Type->name_ar }}
                        </td>
                        <td>
                            {{ $Type->ImamDisciples->name_ar }}

                        </td>

                        <td>

                            @if($Type->type == 'pdf')
                                مكتبة نصية
                            @endif

                            @if($Type->type == 'audio')
                                مكتبة صوتية
                            @endif
                            
                            @if($Type->type == 'video')
                                مكتبة مرئية
                            @endif
                          
                        </td>
                        <td>
                        @if($Type->type == 'pdf')
                        
                        <a class="btn yellow btn-outline"
                        href="{{ route('dashboard.TextButton.index', $Type->id) }}"> <i
                            class="fa fa-plus"></i> اضافة نبذه</a>
                              
                            @endif
                        </td>
                        
                        <td>
                            @if($Type->type == 'pdf')
                                <a class="btn red btn-outline"
                                href="{{ route('dashboard.PdfButton.index', $Type->id) }}"> <i
                                    class="fa fa-plus"></i> اضافة كتاب</a>
                            @endif

                            @if($Type->type == 'audio')
                            <a class="btn  grey-mint btn-outline"
                            href="{{ route('dashboard.AudioButton.index', $Type->id) }}"> <i
                                class="fa fa-plus"></i>  اضافة صوت</a>
                              
                            @endif

                            @if($Type->type == 'video')
                            <a class="btn blue btn-outline"
                            href="{{ route('dashboard.VideoButton.index', $Type->id) }}"> <i
                                class="fa fa-plus"></i>  اضافة فيديو</a>
                                
                            @endif
                        </td>
                       



                        


                        <td>
                            <a href="{{ route('dashboard.ButtonType.edit', [$Type->id, $id]) }}"
                                class="btn btn-default btn-sm">
                                <i class="fa fa-pencil"></i> تعديل </a>
                        </td>

                        <td>
                            <a onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.ButtonType.destroy', [$Type->id, $id]) }}"
                                class="btn btn-default btn-sm">
                                <i class="fa fa-times"></i> حذف </a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>









@endsection