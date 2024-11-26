@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel" style="background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); margin-top: 20px;">
            <header class="panel-heading" style="background-color: #f7f7f7; color: #5a5a5a; text-align: center; font-size: 20px; font-weight: bold; padding: 15px; border-bottom: 2px solid #ddd;">
                Thêm Thương Hiệu Sản Phẩm
            </header>
            <div class="panel-body" style="padding: 30px;">
                <div class="position-center">
                    <form role="form" action="{{ URL::to('/save-brand-product') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="brandName">Tên thương hiệu</label>
                            <input type="text" name="brand_product_name" class="form-control" id="brandName" placeholder="Nhập tên thương hiệu" style="border-radius: 5px;">
                        </div>
                        <div class="form-group">
                            <label for="brandSlug">Slug</label>
                            <input type="text" name="brand_slug" class="form-control" id="brandSlug" placeholder="Nhập slug" style="border-radius: 5px;">
                        </div>
                        <div class="form-group">
                            <label for="brandDesc">Mô tả thương hiệu</label>
                            <textarea style="resize: none; border-radius: 5px;" rows="8" class="form-control" name="brand_product_desc" id="brandDesc" placeholder="Nhập mô tả thương hiệu"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="brandStatus">Hiển thị</label>
                            <select name="brand_product_status" class="form-control" id="brandStatus" style="border-radius: 5px;">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" name="add_category_product" class="btn btn-info" style="background-color: #17a2b8; border: none; padding: 10px 20px; font-weight: bold; border-radius: 5px;">Thêm Thương Hiệu</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
