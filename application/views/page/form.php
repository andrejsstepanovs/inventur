<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<form id="form" method="post" action="/" onsubmit="return appendItem();">
    <input name="item" value="" type="text" id="item" autocomplete="off">
    <input type="submit" value="Add">
</form>

<br />
<form method="post" action="/save">
    <div id="storage"></div><br/>
    <input id="submit" type="submit" value="Submit" style="display:none;">
</form>

<script>
    document.getElementById("item").focus();
</script>