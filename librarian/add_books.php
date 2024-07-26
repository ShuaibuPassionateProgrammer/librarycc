<?php include("includes/header.php"); ?>

<?php
session_start();

if(!isset($_SESSION['auth']))
{
    $_SESSION['response'] = "Access denied! Login to access the dashboard.";
    $_SESSION['res_type'] = "warning";
    header("location: ../librarian");
    exit(0);
}
else 
{
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

<div class="container p-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body text-center">
                    <h3>Cataloguing Work Sheet</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container p-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="add_bookscode.php" method="post" enctype="multipart/form-data">
                <fieldset class="border p-2">
                    <legend class="float-none w-auto">Book Cataloguing</legend>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>Name of Main Author</td>
                                        <td><input type="text" name="main_author" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Editor(s) if any</td>
                                        <td><input type="text" name="editors" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Edition</td>
                                        <td><input type="text" name="edition" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Place of Publication</td>
                                        <td><input type="text" name="publication" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>No. of Preliminary Pages</td>
                                        <td><input type="text" name="pages" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Illustration</td>
                                        <td><input type="text" name="illustration" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Note</td>
                                        <td><input type="text" name="note"  class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>ISBN/ISSN</td>
                                        <td><input type="text" name="isbn" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td><input type="text" name="price" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Access No.</td>
                                        <td><input type="text" name="accessno" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Catalogued by</td>
                                        <td><input type="text" name="cataloger" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Book Name</td>
                                        <td><input type="file" name="pdf_file" accept=".pdf" class="form-control"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>Other Authors</td>
                                        <td><input type="text" name="other_author" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Title</td>
                                        <td><input type="text" name="title" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Type of Material</td>
                                        <td><input type="text" name="tmaterial" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Publisher</td>
                                        <td><input type="text" name="publisher" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>No. of Main Pages:</td>
                                    </tr>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>