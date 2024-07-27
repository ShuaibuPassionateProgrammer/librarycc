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
                                            <th>Type of Material</th>
                                            <th>Place of Publication</th>
                                            <th>Publisher</th>
                                            <th>No. of Preliminary Pages</th>
                                            <th>No. of Main Pages</th>
                                            <th>Illustrations</th>
                                            <th>Length</th>
                                            <th>Note</th>
                                            <th>Series</th>
                                            <th>ISBN/ISSN</th>
                                            <th>Hbk/Pbk</th>
                                            <th>Price</th>
                                            <th>Call No</th>
                                            <th>Accession No</th>
                                            <th>Subject Added Entries</th>
                                            <th>Catalogued by</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $query = "SELECT * FROM book";
                                            $query_run = mysqli_query($conn, $query);
                                            
                                            $sn = 1;
                                            if(mysqli_num_rows($query_run) > 0)
                                            {
                                                while($row = mysqli_fetch_assoc($query_run))
                                                {
                                                    $main_author = $row['main_author'];
                                                    $other_author = $row['other_author'];
                                                    $editors = $row['editors'];
                                                    $title = $row['title'];
                                                    $edition = $row['edition'];
                                                    $tmaterial = $row['tmaterial'];
                                                    $publication = $row['publication'];
                                                    $publisher = $row['publisher'];
                                                    $pages = $row['pages'];
                                                    $mainpages = $row['mainpages'];
                                                    $illustration = $row['illustration'];
                                                    $length = $row['length'];
                                                    $note = $row['note'];
                                                    $series = $row['series'];
                                                    $isbn = $row['isbn'];
                                                    $hbk = $row['hbk'];
                                                    $price = $row['price'];
                                                    $callno = $row['callno'];
                                                    $accessno = $row['accessno'];
                                                    $subject_entry = $row['subject_entry'];
                                                    $cataloger = $row['cataloger'];
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $sn++; ?></td>
                                                        <td><?php echo $main_author; ?></td>
                                                        <td><?php echo $other_author; ?></td>
                                                        <td><?php echo $editors; ?></td>
                                                        <td><?php echo $title; ?></td>
                                                        <td><?php echo $edition; ?></td>
                                                        <td><?php echo $tmaterial; ?></td>
                                                        <td><?php echo $publication; ?></td>
                                                        <td><?php echo $publisher; ?></td>
                                                        <td><?php echo $pages; ?></td>
                                                        <td><?php echo $mainpages; ?></td>
                                                        <td><?php echo $illustration; ?></td>
                                                        <td><?php echo $length; ?></td>
                                                        <td><?php echo $note; ?></td>
                                                        <td><?php echo $series; ?></td>
                                                        <td><?php echo $isbn; ?></td>
                                                        <td><?php echo $hbk; ?></td>
                                                        <td><?php echo $price; ?></td>
                                                        <td><?php echo $callno; ?></td>
                                                        <td><?php echo $accessno; ?></td>
                                                        <td><?php echo $subject_entry; ?></td>
                                                        <td><?php echo $cataloger; ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            else
                                            {
                                                ?>
                                                <tr>
                                                    <td colspan="22"><span class="text-danger">Books not yet Added</span></td>
                                                </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                else
                {
                    echo "Record not found";
                }
            }
            ?>
        </div>
    </div>
</div>

<div class="container p-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th colspan="22" class="text-center"><h3>Available Books</h3></th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Name of Main Author</th>
                        <th>Other Authors</th>
                        <th>Editor(s)</th>
                        <th>Title</th>
                        <th>Edition</th>
                        <th>Type of Material</th>
                        <th>Place of Publication</th>
                        <th>Publisher</th>
                        <th>No. of Preliminary Pages</th>
                        <th>No. of Main Pages</th>
                        <th>Illustrations</th>
                        <th>Length</th>
                        <th>Note</th>
                        <th>Series</th>
                        <th>ISBN/ISSN</th>
                        <th>Hbk/Pbk</th>
                        <th>Price</th>
                        <th>Call No</th>
                        <th>Accession No</th>
                        <th>Subject Added Entries</th>
                        <th>Catalogued by</th>
                        <th>Book Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM book";
                    $query_run = mysqli_query($conn, $query);

                    $sn = 1;
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            $main_author = $row['main_author'];
                            $other_author = $row['other_author'];
                            $editors = $row['editors'];
                            $title = $row['title'];
                            $edition = $row['edition'];
                            $tmaterial = $row['tmaterial'];
                            $publication = $row['publication'];
                            $publisher = $row['publisher'];
                            $pages = $row['pages'];
                            $mainpages = $row['mainpages'];
                            $illustration = $row['illustration'];
                            $length = $row['length'];
                            $note = $row['note'];
                            $series = $row['series'];
                            $isbn = $row['isbn'];
                            $hbk = $row['hbk'];
                            $price = $row['price'];
                            $callno = $row['callno'];
                            $accessno = $row['accessno'];
                            $subject_entry = $row['subject_entry'];
                            $cataloger = $row['cataloger'];
                            $bookname = $row['bookname'];
                            ?>
                            <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo $main_author; ?></td>
                                <td><?php echo $other_author; ?></td>
                                <td><?php echo $editors; ?></td>
                                <td><?php echo $title; ?></td>
                                <td><?php echo $edition; ?></td>
                                <td><?php echo $tmaterial; ?></td>
                                <td><?php echo $publication; ?></td>
                                <td><?php echo $publisher; ?></td>
                                <td><?php echo $pages; ?></td>
                                <td><?php echo $mainpages; ?></td>
                                <td><?php echo $illustration; ?></td>
                                <td><?php echo $length; ?></td>
                                <td><?php echo $note; ?></td>
                                <td><?php echo $series; ?></td>
                                <td><?php echo $isbn; ?></td>
                                <td><?php echo $hbk; ?></td>
                                <td><?php echo $price; ?></td>
                                <td><?php echo $callno; ?></td>
                                <td><?php echo $accessno; ?></td>
                                <td><?php echo $subject_entry; ?></td>
                                <td><?php echo $cataloger; ?></td>
                                <td><?php echo $bookname; ?></td>
                            </tr>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                        <tr>
                            <td colspan="22"><span class="text-danger">Books not yet Added</span></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <table align="right">
                <tr>
                    <td colspan="2" class="text-right">
                        <a href="librarian_dashboard.php" class="btn btn-outline-secondary">Back</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>