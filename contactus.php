<?php
    include 'header.php';
?>

<main class="main" id="main">
    <div class="container" id="contact-us">
        <div class="row">
            <form class="col-md-6 col-md-offset-3" role="form" id="contact-us-form" action="mailto:lyan@scu.edu" enctype="text/plain" method="post">
                <legend><b>Contact Us</b></legend>
                <div class="form-group">
                    <label for="email">Subject:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="comment">Comments:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div class="row" id="contact-us-info">
            <div class="col-md-4 col-md-offset-1">
                <p>Phone: 1(800)234-5678</p>
                <p>Email: customer@webservice.com</p>
                <p>Address: 500 El Camino Real, Santa Clara, CA 95053</p>
                <!--<p>Follow Us</p>
                <img src="img/followus.png" alt="followus" width="55px"/>-->
            </div>

        </div>
    </div>
</main>

<?php
    include 'footer.php';
?>
