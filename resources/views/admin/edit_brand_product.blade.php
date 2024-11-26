@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật thương hiệu sản phẩm
            </header>

            @if(Session::has('message'))
            <div id="successMessage" class="alert alert-success" role="alert">
                {{ Session::pull('message') }}
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('successMessage').style.display = 'none';
                }, 2000);
            </script>
            @endif

            <div class="panel-body">
                @foreach($edit_brand_product as $edit_value)
                <div class="position-center">
                    <form role="form" action="{{ URL::to('/update-brand-product/'.$edit_value->brand_id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="brand_product_name">Tên danh mục</label>
                            <input
                                type="text"
                                value="{{ $edit_value->brand_name }}"
                                name="brand_product_name"
                                class="form-control"
                                id="brand_product_name">
                        </div>
                        <div class="form-group">
                            <label for="brand_product_slug">Slug</label>
                            <input
                                type="text"
                                value="{{ $edit_value->brand_slug }}"
                                name="brand_product_slug"
                                class="form-control"
                                id="brand_product_slug">
                        </div>
                        <div class="form-group">
                            <label for="brand_product_desc">Mô tả danh mục</label>
                            <textarea
                                style="resize: none"
                                rows="8"
                                class="form-control"
                                name="brand_product_desc"
                                id="brand_product_desc">{{ $edit_value->brand_desc }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="brand_product_status">Hiển thị</label>
                            <select name="brand_product_status" class="form-control input-sm m-bot15" id="brand_product_status">
                                <option value="1" {{ $edit_value->brand_status == 1 ? 'selected' : '' }}>Hiển thị</option>
                                <option value="0" {{ $edit_value->brand_status == 0 ? 'selected' : '' }}>Ẩn</option>
                            </select>
                        </div>
                        <button
                            type="submit"
                            name="update_brand_product"
                            class="btn btn-info">
                            Cập nhật thương hiệu
                        </button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection