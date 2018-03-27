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
                            <a href="{{route('get_edit',['id'=>$f->id, 'alias'=>$f->pageUrl->url])}}"><i class="fa fa-edit fa-2x"></i></a> | 
                            
                        
                            <a class="delete-food">
                                <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i>
                            </a>
                            </td>
                        </tr>
                        @endforeach
                        <!-- {{route('delete',['id'=>$f->id, 'alias'=>$f->pageUrl->url])}} -->
                    </tbody>
                </table>
                {{$foods->links()}}
            </div>
        </div>
    </section>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <p>Bạn có chắc chắn xoá <b class="name-food">...</b> hay không?</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-success btn-Accept" >Ok</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script src="source/js/jquery.js"></script>
<script>
$(document).ready(function(){
    $('.delete-food').click(function(){
        var id = 1;
        var alias = '1234'
        var name = "23edsdf";

        $('#myModal').modal('show')
    })
})
</script>
@endsection