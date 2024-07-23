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
                                        <td><input type="text" name="lastname" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="username" class="form-control"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <table class="table-borderless">
                                <tr>
                                    <td>Email Address</td>
                                    <td><input type="text" name="email" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td><input type="password" name="password" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Confirm Password</td>
                                    <td><input type="password" name="cpassword" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        <a href="../member" class="btn btn-outline-secondary">Back</a>
                                        <input type="submit" name="register" value="Register" class="btn btn-outline-primary">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>