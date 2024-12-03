@extends('layout.dashboard.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1> المشرفين</h1>
            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> لوحة التحكم</a></li>
                <li class="active"> المشرفين</li>
            </ol>

        </section>
        <section class="content">
            <div class="box box-primary">
                <a href="{{route('dashboard.users.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> أضافة مشرف</a>


                {{-- end of box-header --}}
                <div class="box-body">


                    @if ($users->count() > 0)

                        <table class="table table-hover">
                            <thead></thead>
                            <tr>
                                <th>#</th>
                                <th>الأسم</th>

                                <th>البريد الألكترونى</th>

                                <th>الأجرائات</th>
                            </tr>
                            <tbody>
                                @foreach ($users as $index=>$user)
                                    <tr>
                                        <td>{{ $index + 1}}</td>
                                        <td>{{$user->name}}</td>

                                        <td>{{$user->email}}</td>
                                        <td>
                                            <a href="{{route('dashboard.users.edit', $user->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> تعديل</a>

                                            <form action="{{route('dashboard.users.destroy', $user->id)}}" method="POST" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button onclick=" return confirm('هل أنت متأكد?')" type="submit" class="btn btn-danger delete btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                   حذف
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    @else
                        لايوجد بيانات

                    @endif

                    {{-- end of table --}}
                </div>
                {{-- end of box-body --}}
            </div>
        </section>
    </div>
@endsection
