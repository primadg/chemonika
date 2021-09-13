       <h1>Posts na urkaislom</h1>


<form method="post" enctype="multipart/form-data" action="{{route('products.store')}}">
    @csrf
    <label> name
        <input name="name" type="text">
    </label>
    <br>
    <label> group
        <input name="group" type="text">
    </label>
    <br>
    <label> description
        <input name="description" type="text">
    </label>
    <br>
    <label> field_of_usage
        <input name="field_of_usage" type="text">
    </label>
    <br>
    <label> product_usage
        <input name="product_usage" type="text">
    </label>
    <br>
    <label> standart
        <input name="standart" type="text">
    </label>
    <br>
    <label> package
        <input name="package" type="text">
    </label>
    <br>
    <label> stogare
        <input name="stogare" type="text">
    </label>
    <br>
    <label> img
        <input name="img" type="file">
    </label>
    <br>
    <input type="submit">
</form>
@if (session('success'))

    {{session('success')}}

@endif

