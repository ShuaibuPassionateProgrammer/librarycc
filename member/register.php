<?php
session_start();
include "includes/header.php";
?>

<div class="container py-5">
    <div class="row justify-content-center mb-4">
        <div class="col-lg-6 col-12 text-center">
            <h2 class="fw-bold mb-2">Member Registration</h2>
            <p class="lead text-secondary">Create your account to access the library and borrow books online.</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            <div class="card shadow border-0">
                <div class="card-body p-4">
                    <?php include("message.php"); ?>
                    <form action="member-register-code.php" method="post" autocomplete="off">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name" required>
                                    <label for="firstname">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name" required>
                                    <label for="lastname">Last Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                                    <label for="username">Username</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required>
                                    <label for="email">Email Address</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirm Password" required>
                                    <label for="cpassword">Confirm Password</label>
                                </div>
                            </div>
                            <div class="col-12 d-grid">
                                <button type="submit" name="register" class="btn btn-success btn-lg rounded">Register</button>
                            </div>
                            <div class="col-12 text-center mt-2">
                                <p>Already have an account? <a href="index.php">Login</a></p>
                                <p><a href="/librarycc">Back to Homepage</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                                        <td colspan="2" class="text-right">
                                            <a href="../member" class="btn btn-outline-secondary">Back</a>
                                            <input type="submit" name="register" value="Register" class="btn btn-outline-primary">
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

<?php include("includes/footer.php"); ?>