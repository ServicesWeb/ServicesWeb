<?php
    include 'header.php';
?>

<main class="main">
    <div class="container" id="profile">

<form id="contact" action="mailto:lyan@scu.edu" enctype="text/plain" method="post">
    <fieldset>
        <legend>Please email us if you have any quetion.</legend>
        <label class="contactusheading" for="name">Subject:</label>
        <input name="Subject" type="text">
        <br/>
        <label class="contactusheading" for="content">Comments:</label>
        <textarea name="content" rows="5" cols="40"></textarea>
        <br>
        <input id="contactus_submit" type="submit" value="Submit"><br/>
    </fieldset>
</form>
<p>1(800)234-5678</p>
<p>customer@coen267group3.com</p>
<p>Follow Us</p>
<img src="img/followus.png" alt="followus" width="55px"/>

</div>
</main>

<?php
    include 'footer.php';
?>
