<?php
session_start();
include "../config/db_con.php";
include "includes/header.php";
?>

<?php
if(!isset($_SESSION['auth']))
{
    $_SESSION['response'] = "Access denied! Login to access the dashboard.";
    $_SESSION['res_type'] = "warning";
    header("location: ../librarian");
    exit(0);
}
else {
    if(isset($_SESSION['auth']['auth_librarian']))
    {
        echo "Hey! ".$_SESSION['auth_librarian']['librarian_username']." You are welcome to Librarian Dashboard";
        unset($_SESSION['auth_librarian']['librarian_username']);
    }
}
?>

<div class="container p-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php include("message.php"); ?>
        </div>
    </div>
</div>

<div class="container-fluid p-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Book Classifications</h3>
                </div>
                <div class="card-body text-right">
                    <form method="post">
                        <table>
                            <tbody>
                                <td><input type="text" name="class_cat" class="form-control w-100" placeholder="Enter the Book Class Category to Locate a it"></td>
                                <td><input type="submit" name="btn_search" value="Search" class="btn btn-outline-success "></td>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <?php
            if(isset($_POST['btn_search']))
            {
                $class_cat = mysqli_real_escape_string($conn, $_POST['class_cat']);
                $search_query = "SELECT class_cat FROM book WHERE class_cat LIKE '%$class_cat%'";
                $search_query_run = mysqli_query($conn, $search_query);

                if(mysqli_num_rows($search_query_run) > 0)
                {
                    ?>
                    <div class="container-fluid p-2">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <table class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th colspan="22" class="text-center"><h3>List of Available Books</h3></th>
                                        </tr>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name of Main Author</th>
                                            <th>Other Authors</th>
                                            <th>Editor(s)</th>
                                            <th>Title</th>
                                            <th>Edition</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>