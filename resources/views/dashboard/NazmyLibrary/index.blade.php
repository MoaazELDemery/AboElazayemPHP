@extends('layout.dashboard.app')
@section('content')



<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase">>اسم المكتبة / التراث النظمي</span>
        </div>
         <div class="btn-group" style="margin-right:10px ;">
                    <a class="btn btn-default mt-ladda-btn ladda-button btn-outline"    href="{{ route('dashboard.NazmyLibrary.create') }}"> <i class="fa fa-plus"></i> اضافة</a>

                </div> 
        <div class="tools"> </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">

            <thead>
                <tr>
                    <th> رقم </th>

                    <th> اسم المحتوي </th>
                    <th>   نوع </th>
                    <th>    اضافة نص القسم</th>
                    <th> اضافة نص او اقسام </th>


                    
                    <th> تعديل </th>
                    <th>  حذف </th>
                    <!-- <th > حذف </th> -->
                </tr>
            </thead>
            <tbody>

                @foreach ($Librarys as $index=>$Library)
                <tr>

                    <td> {{ $index+1 }} </td>
                    <td>
                        {{ $Library->name_ar }}
                    </td>

                    <td>
                        @if($Library->type == 'pdf')
                        pdf مكتبة
                        @endif

                        @if($Library->type == 'text')
                        مكتبة نصية
                        @endif

                    </td>
                    
                    <td>
                        @if($Library->type == 'pdf')
                        <a class="btn grey-mint btn-outline sbold blue"    href="{{ route('dashboard.NazmyText.index',$Library->id) }}"> <i class="fa fa-plus"></i>  اضافة نص للقسم</a>
                        @endif
                    </td>
                    <td>
                        @if($Library->type == 'pdf')
                        <a class="btn red btn-outline"   href="{{ route('dashboard.NazmyCategorie.index',$Library->id) }}"> <i class="fa fa-plus"></i> اضافة اقسام</a>

                       
                        @endif

                        @if($Library->type == 'text')
                        <a class="btn grey-mint btn-outline sbold blue"    href="{{ route('dashboard.NazmyText.index',$Library->id) }}"> <i class="fa fa-plus"></i>  اضافة نص</a>

                      
                        @endif
                    </td>

                    
                   
                   
                
                    <td>
                        <a href="{{ route('dashboard.NazmyLibrary.edit', $Library->id) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> تعديل </a>
                    </td>

                    <td>
                        <a onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.NazmyLibrary.destroy', $Library->id) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-times"></i> حذف </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>






@endsection