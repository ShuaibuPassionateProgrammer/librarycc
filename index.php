<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library CC</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .header {
            background-color: #343a40;
        }
        .rounded {
            border-radius: 20px !important;
        }
    </style>
</head>
<body>
    <div class="container-fluid header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand">
                <img src="images/library_image.png" width="50" height="50" alt="Library Image Logo">
            </a>
            <h2 class="text-light">Library Cat & Class</h2>
        </nav>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="member/">
                    <div class="card rounded">
                        <div class="card-body text-center">
                            <img src="images/img_4044.jpg" alt="" class="logo p-2" style="box-shadow: 0 1px 5px rgba(2,2,2,.2); border-radius: 200px">
                        </div>
                        <div class="card-body text-center">
                            <button class="btn btn-outline-primary rounded librarian w-50">Member</button>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>