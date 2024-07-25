<?php
if(isset($_SESSION['response']))
{
    ?>
    <div class="alert alert-<?php echo $_SESSION['res_type']; ?>
        <?php echo $_SESSION['response']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
}