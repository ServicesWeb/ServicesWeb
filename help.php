<?php
    include 'header.php';
?>

<form id="contact" action="mailto:lyan@scu.edu" enctype="text/plain" method="post">
    <h4>Please email us if you have any quetion.</h4>
    <p>Please type your question below:</p>
    Subject:<br/>
    <input name="Subject" type="text" size ="40"><br/>
    <textarea name="content" rows="20" cols="60">
    </textarea>
    <br><br>
    <input type="submit" value="Submit"><br/>
</form>

<?php
    require 'foot.php';
?>
