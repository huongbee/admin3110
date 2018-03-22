@extends('layout2') @section('title', 'Home - Danh sách sản phẩm') @section('content')
<div class="panel panel-body">
    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <b>Danh sách sản phẩm</b>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sp</th>
                            <th>Tên loại </th>
                            <th>Đơn giá</th>
                            <th>Hình</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $stt = 1;?>
                        @foreach($foods as $f)
                        <tr>
                            <td>{{$stt++}}</td>
                            <td>{{$f->name}}</td>
                            <td>{{$f->foodType->name}}</td>
                            <td>{{number_format($f->price)}}</td>
                            <td>
                            <img src="source/img/hinh_mon_an/{{$f->image}}" height="100px">
                            </td>
                            <td>
                            <a href="{{route('edit',['id'=>$f->id, 'alias'=>$f->pageUrl->url])}}"><i class="fa fa-edit fa-2x"></i></a> | 
                            
                            <a href="{{route('delete',['id'=>$f->id, 'alias'=>$f->pageUrl->url])}}">
                                <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i>
                            </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$foods->links()}}
            </div>
        </div>
    </section>
</div>
@endsection