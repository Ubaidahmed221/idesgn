

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <?php  include('css.php') ?>
    <title>Document</title>
</head>
<body>

 <div class="container-fluid">
    <div class="row">
        <div class="col-md-3 p-0">
            <?php include('sidebar.php'); ?>
        </div>
        <div class="col-md-7">
            <h4>Welcome Admin</h4>
            <h1>Dashboard </h1>
            <div class="conrainer-fluid mt-5">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="card bg-primary text-white p-2">

                            <h3>Total Products</h3>
                          
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card bg-primary text-white p-2">

                            <h4>Out Of Products</h4>
                       
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card bg-primary text-white p-2">

                            <h3>Total Category</h3>
                        
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card bg-primary text-white p-2">

                            <h3>Total Color</h3>
                          
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

 </div>






 <?php include('js.php') ?>
    
</body>
</html>