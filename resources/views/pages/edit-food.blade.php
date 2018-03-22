@extends('layout2') @section('title', $food->name) @section('content')
<div class="panel panel-body">
    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <b>Cập nhật sản phẩm
                    <i>{{$food->name}}</i>
                </b>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Tên sản phẩm:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nhập tên sp" name="name" value="{{ $food->name}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Tên loại:</label>
                        <div class="col-sm-10">
                            <select name="id_type" class="form-control">
                                <option value="1212">ten</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Giá sản phẩm:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nhập giá sp" name="price" value="{{ $food->price}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Giá khuyến mãi :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nhập giá khuyến mãi" name="promotion_price" value="{{ $food->promotion_price}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Sản phẩm khuyến mãi:</label>
                        <div class="col-sm-10">
                            <select name="promotion" class="form-control">
                                <option value="nước ngọt">Nước ngọt</option>
                                <option value="khăn lạnh">Khăn lạnh</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Mô tả tóm tắt:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="summary" rows="5">{{$food->summary}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Mô tả đầy đủ:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="detail" rows="5">{{$food->detail}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="file" name="image">
                                </label>
                                <img src="source/img/hinh_mon_an/{{$food->image}}" height="100px">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection