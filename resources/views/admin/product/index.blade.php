@extends('layouts.admin')
@section('title','admin-index-product')
@section('content')
    <div class="ecommerce-widget">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="mt-3">
                            <a class="text-success" href="{{route('admin-create-product')}}">
                                Create new product
                            </a>
                        </div>
                        <div>
                            @if(session('message'))
                                <p id="showMessage" class="alert alert-success"><em>{{session('message')}}</em></p>
                            @endif
                        </div>
                    </div>
                    <div class="card-header">
                        <form method="get" id="searchFormAdmin" name="searchFormAdmin" onsubmit="return validateForm()">
                            <div>
                                <div class="row">
                                    <div class="form-group col-lg-4 col-sm-6">
                                        <label for="inputDefault" class="col-form-label">Search by name</label>
                                        <input name="input_name" style="height: 38px" id="inputDefault" type="text"
                                               class="form-control" placeholder="Input product name">
                                    </div>
                                    <div class="form-group col-lg-4 col-sm-6">
                                        <label for="inputDefault" class="col-form-label">Search by category</label>
                                        <select name="input_category" class="form-control">
                                            <option value="all" selected="selected">All category</option>
                                            @foreach($get_categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="form-group col-lg-4 col-sm-6">
                                        <label for="inputDefault" class="col-form-label">Search by status</label>
                                        <select name="input_status" class="form-control">
                                            <option value="1" selected="selected">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-4 col-sm-6">
                                        <label for="inputDefault" class="col-form-label">Min price</label>
                                        <input name="input_min_price" style="height: 38px" class="form-control"
                                               placeholder="Input min price">
                                    </div>
                                    <div class="form-group col-lg-4 col-sm-6">
                                        <label for="inputDefault" class="col-form-label">Max price</label>
                                        <input name="input_max_price" style="height: 38px" class="form-control"
                                               placeholder="Input min price">
                                    </div>
                                    <div class="form-group col-lg-4 col-sm-6">
                                        <label for="inputDefault" class="col-form-label">Order By</label>
                                        <select name="input_sort_by" class="form-control">
                                            <option value="1" selected="selected">Default</option>
                                            <option value="2">Latest</option>
                                            <option value="3">Price: Low to high</option>
                                            <option value="4">Price: High to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-success" type="submit">Search</button>
                                    <button class="btn btn-danger" type="submit"><a
                                            href="{{route('admin-product-index')}}"></a>Clear
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">#</th>
                                    <th class="border-0">Image</th>
                                    <th class="border-0">Name</th>
                                    {{--                                    <th class="border-0">Description</th>--}}
                                    <th class="border-0">Category</th>
                                    {{--                                    <th class="border-0">Discount</th>--}}
                                    <th class="border-0">Price</th>
                                    <th class="border-0">Status</th>
                                    <th class="border-0">Create At</th>
                                    <th class="border-0">Update At</th>
                                    <th class="border-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $key => $product)
                                    <tr>
                                        <td>{{ ($currentPage - 1) * $perPage + $key + 1 }}</td>
                                        <td>
                                            <div class="m-r-10"><img
                                                    src="{{asset('assets/img/product/'.$product->thumbnail)}}"
                                                    alt="user"
                                                    class="rounded" width="45"></div>
                                        </td>
                                        <td>{{$product->name}}</td>
                                        {{--                                        <td>{{$product->description}}</td>--}}
                                        <td>{{$product->category_name}}</td>
                                        {{--                                        <td>{{($product->discount_id != null) ? $item->discount : 'None'}}</td>--}}
                                        <td>{{$product->price}}</td>
                                        <td>{{ ($product->status == 1) ? 'Active' : 'Disable'}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td>{{$product->updated_at}}</td>
                                        <td>
                                            <a class="p-1 f-icon fas fa-eye text-success" onclick="getDetailProduct({{$product->id}})" href="" data-toggle="modal"
                                               data-target="#exampleModal">
                                            </a>
                                            <a href="{{route('admin-edit-product', $product->id)}}"
                                               class="p-1 f-icon fas fa-edit text-primary"></a>
                                            <a href="javascript:void(0)" onclick="deleteRecord({{$product->id}})"
                                               class="p-1 f-icon fas fa-trash-alt text-danger"></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="mt-3">
                                {{$products->links('pagination::bootstrap-4')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="product-detail"></div>
            </div>
        </div>
    </div>
@endsection
@section('script-tag')
    <script>
        function deleteRecord(id) {
            if (confirm("Do you really want to delete this record")) {
                console.log(id);
                let obj = {};
                obj.id = id;
                obj._method = "delete";
                obj._token = $("input[name='_token']").val();
                $.ajax({
                    url: '/admin/product/trash/' + id,
                    method: "get",
                    data: obj,
                    success: function (response) {
                        if (response.indexOf('Success')) {
                            alert("Deleted success");
                            location.reload();
                        } else {
                            alert("Deleted not success");
                        }
                    }
                });
            }
        }
    </script>
    <script>
        setTimeout(() => {
            document.getElementById('showMessage').style.display = 'none';
        }, 2000);
    </script>
    <script>
        function validateForm() {
            let x = document.forms["searchFormAdmin"]["input_min_price"].value;
            let y = document.forms['searchFormAdmin']['input_max_price'].value;
            if (isNaN(x)) {
                alert("Min price must be a number");
                return false
            }
            if (isNaN(y)) {
                alert("Max price must be a number");
                return false
            }
        }
    </script>
    <script>
        let productDetailContainer = $('#product-detail');
        let productTitle = $('#exampleModalLabel');
        function getDetailProduct(id) {
            $.ajax({
                url: '/admin/product/detail/' + id,
                method: "get",
                success: (result) => {
                    if (result.length != 0) {
                        console.log(result);
                        let item = `
                        <div class="d-flex">
                            <img style="height: 200px; width: 250px" src="http://localhost:8000/assets/img/product/${result.thumbnail}">
                            <div class="ml-3">
                                <h5>Description</h5>
                                <p>${result.description}</p>
                                <h5>Price: ${result.price}</h5>
                            </div>
                        </div>
                        `
                        let item2 = `
                        ${result.name}
                        `
                        productDetailContainer.html("").append(item);
                        productTitle.html("").append(item2);
                    }
                }
            })
        }
    </script>
@endsection
