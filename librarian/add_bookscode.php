<?php
session_start();
include "../config/db_con.php";

if(isset($_POST['add_book']))
{
    $main_author = mysqli_real_escape_string($conn, $_POST['main_author']);
    $other_author = mysqli_real_escape_string($conn, $_POST['other_author']);
    $editors = mysqli_real_escape_string($conn, $_POST['editors']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $edition = mysqli_real_escape_string($conn, $_POST['edition']);
    $tmaterial = mysqli_real_escape_string($conn, $_POST['tmaterial']);
    $publication = mysqli_real_escape_string($conn, $_POST['publication']);
    $publisher = mysqli_real_escape_string($conn, $_POST['publisher']);
    $pages = mysqli_real_escape_string($conn, $_POST['pages']);
    $mainpages = mysqli_real_escape_string($conn, $_POST['mainpages']);
    $illustration = mysqli_real_escape_string($conn, $_POST['illustration']);
    $length = mysqli_real_escape_string($conn, $_POST['length']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    $series = mysqli_real_escape_string($conn, $_POST['series']);
    $isbn = mysqli_real_escape_string($conn, $_POST['isbn']);
    $hbk = mysqli_real_escape_string($conn, $_POST['hbk']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $callno = mysqli_real_escape_string($conn, $_POST['callno']);
    $accessno = mysqli_real_escape_string($conn, $_POST['accessno']);
    $subject_entry = mysqli_real_escape_string($conn, $_POST['subject_entry']);
    $cataloger = mysqli_real_escape_string($conn, $_POST['cataloger']);
    $class_cat = mysqli_real_escape_string($conn, $_POST['class_cat']);

    if(isset($_FILES['pdf_file']['name']))
    {
        $pdf_file = $_FILES['pdf_file']['name'];
        $pdf_temp = $_FILES['pdf_file']['tmp_name'];

        $upload = move_uploaded_file($pdf_temp, "pdf/".$pdf_file);
        if($upload)
        {
            $query = "INSERT INTO book SET main_author='$main_author', other_author='$other_author', editors='$editors',
                        title='$title', edition='$edition', tmaterial='$tmaterial', publication='$publication', publisher='$publisher',
                        pages='$pages', mainpages='$mainpages', illustration='$illustration', length='$length', note='$note', series='$series',
                        isbn='$isbn', hbk='$hbk', price='$price', callno='$callno', accessno='$accessno', subject_entry='$subject_entry',
                        cataloger='$cataloger', class_cat='$class_cat', bookname='$pdf_file'
                ";
            $query_run = mysqli_query($conn, $query);

            if($query_run)
            {
                $_SESSION['response'] = "Book Saved Successfully";
                $_SESSION['res_type'] = "success";
                header("location: view_books.php");
            }
            else {
                $_SESSION['response'] = "Failed to Save Book";
                $_SESSION['res_type'] = "danger";
            }
        }
    }
}
?>