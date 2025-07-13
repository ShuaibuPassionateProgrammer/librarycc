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

<div class="container py-5">
    <div class="row justify-content-center mb-4">
        <div class="col-lg-8 col-12">
            <div class="text-center mb-4">
                <h2 class="fw-bold mb-2">Cataloguing Worksheet</h2>
                <p class="lead text-secondary">Add new books to the library collection. Please fill in all required fields.</p>
            </div>
            <div class="card shadow border-0">
                <div class="card-body">
                    <?php include("message.php"); ?>
                    <form action="add_bookscode.php" method="post" enctype="multipart/form-data" class="row g-3">
                        <div class="col-md-6">
                            <label for="main_author" class="form-label">Name of Main Author</label>
                            <input type="text" name="main_author" id="main_author" class="form-control" placeholder="Main Author" required>
                        </div>
                        <div class="col-md-6">
                            <label for="editors" class="form-label">Editor(s) if any</label>
                            <input type="text" name="editors" id="editors" class="form-control" placeholder="Editors">
                        </div>
                        <div class="col-md-6">
                            <label for="edition" class="form-label">Edition</label>
                            <input type="text" name="edition" id="edition" class="form-control" placeholder="Edition">
                        </div>
                        <div class="col-md-6">
                            <label for="publication" class="form-label">Place of Publication</label>
                            <input type="text" name="publication" id="publication" class="form-control" placeholder="Place of Publication">
                        </div>
                        <div class="col-md-6">
                            <label for="pages" class="form-label">No. of Preliminary Pages</label>
                            <input type="text" name="pages" id="pages" class="form-control" placeholder="No. of Preliminary Pages">
                        </div>
                        <div class="col-md-6">
                            <label for="illustration" class="form-label">Illustration</label>
                            <input type="text" name="illustration" id="illustration" class="form-control" placeholder="Illustration">
                        </div>
                        <div class="col-md-6">
                            <label for="note" class="form-label">Note</label>
                            <input type="text" name="note" id="note" class="form-control" placeholder="Note">
                        </div>
                        <div class="col-md-6">
                            <label for="isbn" class="form-label">ISBN/ISSN</label>
                            <input type="text" name="isbn" id="isbn" class="form-control" placeholder="ISBN/ISSN">
                        </div>
                        <div class="col-md-6">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" id="price" class="form-control" placeholder="Price">
                        </div>
                        <div class="col-md-6">
                            <label for="accessno" class="form-label">Access No.</label>
                            <input type="text" name="accessno" id="accessno" class="form-control" placeholder="Access No.">
                        </div>
                        <div class="col-md-6">
                            <label for="cataloger" class="form-label">Catalogued by</label>
                            <input type="text" name="cataloger" id="cataloger" class="form-control" placeholder="Catalogued by">
                        </div>
                        <div class="col-md-6">
                            <label for="book_name" class="form-label">Book Name</label>
                            <input type="file" name="pdf_file" id="book_name" accept=".pdf" class="form-control" placeholder="Book Name">
                        </div>
                        <div class="col-md-6">
                            <label for="other_author" class="form-label">Other Authors</label>
                            <input type="text" name="other_author" id="other_author" class="form-control" placeholder="Other Authors">
                        </div>
                        <div class="col-md-6">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                        </div>
                        <div class="col-md-6">
                            <label for="tmaterial" class="form-label">Type of Material</label>
                            <input type="text" name="tmaterial" id="tmaterial" class="form-control" placeholder="Type of Material">
                        </div>
                        <div class="col-md-6">
                            <label for="publisher" class="form-label">Publisher</label>
                            <input type="text" name="publisher" id="publisher" class="form-control" placeholder="Publisher">
                        </div>
                        <div class="col-md-6">
                            <label for="mainpages" class="form-label">No. of Main Pages:</label>
                            <input type="text" name="mainpages" id="mainpages" class="form-control" placeholder="No. of Main Pages:">
                        </div>
                        <div class="col-md-6">
                            <label for="length" class="form-label">Length</label>
                            <input type="text" name="length" id="length" class="form-control" placeholder="Length">
                        </div>
                        <div class="col-md-6">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" name="series" id="series" class="form-control" placeholder="Series">
                        </div>
                        <div class="col-md-6">
                            <label for="hbk" class="form-label">Hbk/Pbk</label>
                            <input type="text" name="hbk" id="hbk" class="form-control" placeholder="Hbk/Pbk">
                        </div>
                        <div class="col-md-6">
                            <label for="callno" class="form-label">Call No</label>
                            <input type="text" name="callno" id="callno" class="form-control" placeholder="Call No">
                        </div>
                        <div class="col-md-6">
                            <label for="subject_entry" class="form-label">Subject Added Entries</label>
                            <input type="text" name="subject_entry" id="subject_entry" class="form-control" placeholder="Subject Added Entries">
                        </div>
                        <div class="col-md-6">
                            <label for="class_cat" class="form-label">Class Category</label>
                            <input type="text" name="class_cat" id="class_cat" class="form-control" placeholder="Class Category">
                        </div>
                        <div class="col-12 text-center">
                            <a href="librarian_dashboard.php" class="btn btn-outline-secondary">Back</a>
                            <input type="submit" name="add_book" value="Save Book" class="btn btn-outline-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
                                        <td><input type="text" name="mainpages" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Length</td>
                                        <td><input type="text" name="length" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Series</td>
                                        <td><input type="text" name="series" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Hbk/Pbk</td>
                                        <td><input type="text" name="hbk" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Call No</td>
                                        <td><input type="text" name="callno" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Subject Added Entries</td>
                                        <td><input type="text" name="subject_entry" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Class Category</td>
                                        <td><input type="text" name="class_cat" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-right">
                                            <a href="librarian_dashboard.php" class="btn btn-outline-secondary">Back</a>
                                            <input type="submit" name="add_book" value="Save Book" class="btn btn-outline-primary">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>

<?php include("includes/footer.php"); ?>