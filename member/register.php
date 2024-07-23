<?php
session_start();
include "includes/header.php";
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
                <div class="card-header text-center">
                    <h3>Member Registration - Form</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container p-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="member-register-code.php" method="post">
                <fieldset class="border p-2">
                    <legend class="float-none w-auto">Registering a member</legend>

                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>First Name</td>
                                        <td><input type="text" name="firstname" class="form-control">
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
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