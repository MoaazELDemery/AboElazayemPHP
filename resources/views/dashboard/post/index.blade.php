@extends('layout.dashboard.app')
@section('content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption font-dark">
                <i class="icon-settings font-dark"></i>
                @foreach ($posts as $index => $post)
                @if($index == 0)
                <span class="caption-subject bold uppercase"> ({{ $post->categorie->name_ar }})------مراقي السالكين الصفحه الثانية </span>
                @endif
                @endforeach
            </div>
            @if( count($posts) == 0)
            <div class="btn-group" style="margin-right:10px ;">
                <a class="btn btn-default mt-ladda-btn ladda-button btn-outline"
                    href="{{ route('dashboard.post.create',$id) }}"> <i class="fa fa-plus"></i> اضافة</a>

            </div>
            @endif
            <div class="btn-group" style="margin-right:10px ;">
                <a class="btn btn-default mt-ladda-btn ladda-button btn-outline" href="{{ route('dashboard.categorie.index') }}"> <i class="icon-login"></i> الرجوع الي صفحة مراقي السالكين الصفحه الاولي </a>
    
            </div>
            <div class="tools"> </div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover" id="sample_1">

                <thead>
                    <tr>
                        <th> رقم </th>
                        <th> الصوره </th>
                        <th> اسم المحتوي </th>
                        <th> عنوان المحتوي </th>
                        <th>  تابع الي </th>
                        <th> مشاهدة </th>
                        <th> تعديل </th>
                        <th> حذف </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($posts as $index => $post)
                        <tr>

                            <td> {{ $index + 1 }} </td>
                            <td>
                                <a href="" class="fancybox-button" data-rel="fancybox-button">
                                    <img class="img-responsive" style="width: 10%"
                                        src="{{ asset('storage/post/' . $post->photo) }}" alt="{{ $post->title }}"> </a>
                            </td>
                            <td>
                                {{ $post->name_ar }}
                            </td>
                            <td>
                                {{ $post->title_ar }}
                            </td>

                            <td>
                                {{ $post->categorie->name_ar }}
                            </td>
                            <td>
                                <a href="{{ route('dashboard.post.show', [$post->id,$id]) }}" class="btn btn-default btn-sm">
                                    <i class="fa fa-file"></i> الملف </a>
                            </td>
                            <td>
                                <a href="{{ route('dashboard.post.edit', [$post->id,$id] ) }}" class="btn btn-default btn-sm">
                                    <i class="fa fa-pencil"></i> تعديل </a>
                            </td>
                            <td>

                            <a onclick=" return confirm('هل أنت متأكد?')" href="{{ route('dashboard.post.destroy', [$post->id,$id] ) }}" class="btn btn-default btn-sm">
                                <i class="fa fa-times"></i> حذف </a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>





@endsection
