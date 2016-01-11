<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<h1><?php echo $message; ?></h1>

<h3>Processed <?php echo $boxes; ?> boxes.</h3>

<br />
<form method="post" action="/">
    <input type="submit" value="Continue">
</form>
