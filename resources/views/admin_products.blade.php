@include('admin_header')

<section class="add-products">
    <h1 class="title">shop products</h1>
    <form action="{{ url('admin_products/add') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>add product</h3>
        <input type="text" name="name" class="box" placeholder="enter product name" required>
        <input type="number" min="0" name="price" class="box" placeholder="enter product price" required>
        <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required>
        <input type="submit" value="add product" name="add_product" class="btn">
    </form>
</section>

<section class="show-products">
    <div class="box-container">
        @foreach ($products as $product)
            <div class="box">
                <img src="{{ asset('uploaded_img/' . $product->image) }}" alt="">
                <div class="name">{{ $product->name }}</div>
                <div class="price">${{ $product->price }}/-</div>
                <a href="{{ url('admin_products/update', $product->id) }}" class="option-btn">update</a>
                <a href="{{ url('admin_products/delete', $product->id) }}" class="delete-btn" onclick="return confirm('delete this product?');">delete</a>
            </div>
        @endforeach
        @if ($products->isEmpty())
            <p class="empty">no products added yet!</p>
        @endif
    </div>
</section>

<section class="edit-product-form">
    @if (isset($edit_product))
        <form action="{{ url('admin_products/update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="update_p_id" value="{{ $edit_product->id }}">
            <input type="hidden" name="update_old_image" value="{{ $edit_product->image }}">
            <img src="{{ asset('uploaded_img/' . $edit_product->image) }}" alt="">
            <input type="text" name="update_name" value="{{ $edit_product->name }}" class="box" required placeholder="enter product name">
            <input type="number" name="update_price" value="{{ $edit_product->price }}" min="0" class="box" required placeholder="enter product price">
            <input type="file" class="box" name="update_image" accept="image/jpg, image/jpeg, image/png">
            <input type="submit" value="update" name="update_product" class="btn">
            <input type="reset" value="cancel" id="close-update" class="option-btn">
        </form>
    @else
        <script>document.querySelector(".edit-product-form").style.display = "none";</script>
    @endif
</section>

<script src="{{ asset('js/admin_script.js') }}"></script>