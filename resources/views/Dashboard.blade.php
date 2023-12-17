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
    <style>
 
    </style>
</head>
<body>
    <div class="container-fluid text-center header">
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
            <div class="col-9 main-dashboard mt-5">
                <h6>My Dashboards</h6>
                <div class="row">
                    <div class="col-5 card-design">
                        <div class="card shadow">
                            <div class="card-head text-center">Total Sale</div>
                        </div>
                        <div class="card-body text-center">
                           <h3>{{ $totalsale }}</h3> 
                        </div>
                    </div>

                    <div class="col-5 card-design">
                        <div class="card shadow">
                            <div class="card-head text-center">Today's Sale</div>
                        </div>
                        <div class="card-body text-center">
                           <h3>{{ $todaysale }}</h3> 
                        </div>
                    </div>

                    <div class="col-5 card-design">
                        <div class="card shadow">
                            <div class="card-head text-center">Yesterday's Sale</div>
                        </div>
                        <div class="card-body text-center">
                           <h3> {{ $yesterdaysale }}</h3>
                        </div>
                    </div>
                    <div class="col-5 card-design">
                        <div class="card shadow">
                            <div class="card-head text-center">This Month's Sale</div>
                        </div>
                        <div class="card-body text-center">
                            <h3> {{ $thismonthsale }}</h3>
                         </div>
                        
                    </div>
                    <div class="col-5 card-design">
                        <div class="card shadow">
                            <div class="card-head text-center">Last Month's Sale</div>
                        </div>
                        <div class="card-body text-center">
                            <h3>{{ $lastmonthsale }}</h3>
                        </div>
                    </div>

                    <div class="col-5 card-design">
                        <div class="card shadow">
                            <div class="card-head text-center">This Year Sale</div>
                        </div>
                        <div class="card-body text-center">
                           <h3>{{ $thisyearsale }}</h3>
                        </div>
                    </div>
                    <div class="col-5 card-design">
                        <div class="card shadow">
                            <div class="card-head text-center">Last Year Sale</div>
                        </div>
                        <div class="card-body text-center shadow">
                           <h3>{{ $lastyeasale }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>