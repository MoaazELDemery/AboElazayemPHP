@extends('layout.dashboard.app')
@section('content')




<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase">مراقي السالكين الصفحه الاولي</span>
        </div>
            <div class="btn-group" style="margin-right:10px ;">
                        <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.categorie.create') }}"> <i class="fa fa-plus"></i> اضافة</a>

                    </div> 
        <div class="tools"> </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">

            <thead>
                <tr>
                    <th> رقم </th>
                    <th> الصور</th>
                    <th> اسم المحتوي </th>
                    <th>  تابع الي </th>
                    <th>  اضافة نبذة عن القسم </th>
                    <th> تعديل </th>
                     <th > حذف </th> 
                  

                    
                 
                </tr>
            </thead>
            <tbody>
             
               

                @foreach ($categories as $index=>$category)
                <tr>

                    <td> {{ $index+1 }} </td>
                   
                    <td>
                        <img class="img-responsive" style="width: 10%" src=" {{ asset('storage/categorie/' . $category->photo) }}" alt="img"> 
                    </td>
                    <td>
                        {{ $category->name_ar }}
                    </td>
                    @if($category->parent == null)
                    <td> لا يوجد</td>

                    @else
                    <td> {{ $category->parent->name_ar}}</td>

                    @endif
                    <td>
                        <a class="btn grey-mint btn-outline sbold uppercase"    href="{{ route('dashboard.post.index',$category->id) }}"> <i class="fa fa-plus"></i> اضافة</a>

                    </td>
                    <td>
                        <a href="{{ route('dashboard.categorie.edit', $category->id) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> تعديل </a>
                    </td>

                    <td>
                        <a onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.categorie.destroy', $category->id) }}" class="btn btn-default btn-sm">
                            <i class="fa fa-times"></i> حذف </a>
                    </td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection