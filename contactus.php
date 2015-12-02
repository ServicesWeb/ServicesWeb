<?php
    include 'header.php';
?>
<form id="contact" action="mailto:lyan@scu.edu" enctype="text/plain" method="post">
    <fieldset>
        <legend>Please email us if you have any quetion.</legend>
        <label class="contactusheading" for="name">Subject:</label>
        <input name="Subject" type="text" size ="40">
        <br/>
        <label class="contactusheading" for="content">Comments:</label>
        <textarea name="content" rows="5" cols="40"></textarea>
        <br>
        <input id="contactus_submit"type="submit" value="Submit"><br/>
    </fieldset>
</form>
<?php
    require 'foot.php';
?>
