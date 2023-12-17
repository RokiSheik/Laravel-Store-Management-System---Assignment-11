<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('asset/css/style.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Mystore</title>
</head>
<body>
    <div class="container-fluid header text-center">
        <h2>Store Management System</h2>
    </div>
    <div class="container-fluid">
        <div class="row main-content">
            <div class="col-3 main-menu mt-5">
                <h5 text-center>Menus</h5>
                <ul>
                    <li><a href="/">Home</a></li>
                    
                    <li><a href="/productlist">Products List</a></li>
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/addproduct">Add Product</a></li>
                    <li><a href="/transactionalhistory">Transactional History</a></li>
                </ul>
            </div>
            <div class="col-9">
                <div class="row mt-5">
                    <div class="col-2"></div>
                    <div class="col-8">
                    <h4 class="mt-5">Add Product</h4>
                            <form action="{{ route('store-product') }}" method="POST">
                            @csrf
                            <label for="name">Name</label>
                            <input type="text" class="form-control w-50"  name="name" placeholder="Product Name">
                            <label for="description">Description</label>
                            <input type="text" class="form-control w-100"  name="description" placeholder="Product Description">
                            <label for="price">Unit Price</label>
                            <input type="text" class="form-control w-25"  name="price" placeholder="Product Price">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control w-25"  name="quantity" placeholder="Product quantity">
                            <button type="submit" class="btn btn-primary mt-3">Add</button>
                        </form>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>