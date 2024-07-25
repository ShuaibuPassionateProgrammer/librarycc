<?php
if(isset($_SESSION['response']))
{
    ?>
    <div class="alert alert-<?php echo $_SESSION['res_type']; ?> alert-dismissible fade show"></div>
    <?php
}