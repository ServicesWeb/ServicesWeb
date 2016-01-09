<?php
    include 'header.php';
?>

<main class="main">
    <div class="career-bg"></div>
    <div class="jumbotron">
        <div class="container" id="career">
            <h1>Explore your possibilities</h1>
            <h2>Join us today</h2>
        </div>
    </div>
    <div class="container" id="contact-us">
        <div class="row">
            <form class="col-md-6 col-md-offset-3" role="form" id="contact-us-form" action="mailto:lyan@scu.edu" enctype="text/plain" method="post">
                <legend><b>About You</b></legend>
                <div class="form-group">
                    <label for="email">Job title:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="comment">Introduce yourself to us: (500 words)</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-default center-block">Submit</button>
                
                <!-- <fieldset>
                    <legend>Please email us if you have any quetion.</legend>
                    <label class="contactusheading" for="name">Subject:</label>
                    <input name="Subject" type="text">
                    <br/>
                    <label class="contactusheading" for="content">Comments:</label>
                    <textarea name="content" rows="5" cols="40"></textarea>
                    <br>
                    <input id="contactus_submit" type="submit" value="Submit"><br/>
                </fieldset> -->
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