@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel" style=" border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <header class="panel-heading" style=" color: #5a5a5a; text-align: center; font-size: 18px; padding: 10px 0; border-bottom: 2px solid #ddd;">
                THÊM DANH MỤC SẢN PHẨM
            </header>
            <div class="panel-body" style="padding: 20px;">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" style="border-radius: 5px;">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug</label>
                            <input type="text" name="slug_category_product" class="form-control" id="exampleInputEmail1" placeholder="Slug danh mục" style="border-radius: 5px;">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea style="resize: none; border-radius: 5px;" rows="8" class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Từ khóa danh mục</label>
                            <textarea style="resize: none; border-radius: 5px;" rows="8" class="form-control" name="category_product_keywords" id="exampleInputPassword1" placeholder="Từ khóa danh mục"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="category_product_status" class="form-control input-sm m-bot15" style="border-radius: 5px;">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" name="add_category_product" class="btn btn-info" style="background-color: #17a2b8; border: none; padding: 10px 20px; border-radius: 5px;">Thêm danh mục</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
