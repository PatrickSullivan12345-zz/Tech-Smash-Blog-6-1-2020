<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Tech Smash Blog About Us</title>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	
		<script type="text/javascript">
        $(document).ready(function () {

            $("#contact").click(function () {

                fname = $("#fname").val();
                email = $("#email").val();
                message = $("#message").val();

                $.ajax({
                    type: "POST",
                    url: "sendmsg.php",
                    data: "fname=" + fname + "&email=" + email + "&message=" + message,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Message Sent!</strong> \ \
                                                 </div>');

                        } else if (html == 'fname_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'fname_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must exceed 2 characters. \ \
                                                 </div>');
												 
						} else if (html == 'email_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'email_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must exceed 2 characters. \ \
                                                 </div>');
												 
						} else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> format incorrect. \ \
                                                 </div>');
												 
						} else if (html == 'message_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'message_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must exceed 2 characters. \ \
                                                 </div>');


                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
                        }
                    },
                    beforeSend: function () {
                        $("#add_err2").html("Loading...");
                    }
                });
                return false;
            });
        });

    </script>


</head>

<style>

.header {

text-align: center;
font-family: verdana, sans-serif;
font-size: large;
background-color:#192B3D;
color:#FDEAA0;
z-index: 2;

}

.background {

background-color:#192B3D;
z-index: 1;

}

.text-background {

    text-align: left;
    font-family: verdana, sans-serif;
    background-color:#FFFFFF;
    color: black;
    padding: 10px 10px 10px 10px;
    margin: 20px 20px 20px 20px;
    opacity: 0.99;
    z-index: 2;

}

.footer {

text-align: center;
font-family: verdana, sans-serif;
background-color:#FDEAA0;
color:#192B3D;
padding: 10px 10px 10px 10px;
z-index: 2;

}

a {

font-family: verdana, sans-serif !important;
color: #FDEAA0 !important;

}

</style>

<body>
    
    <div class="background">

        <!--Header and Navbar-->
        <div class="container-fluid">

            <div class="jumbotron header" height="300" width="100%"> 

                <h1><img src="Computer.png" height="100" width="125"><a style="text-decoration:none;" 
                    href="main_page.php">TECH SMASH BLOG</a></h1>

                <div class="container">

                    <ul class="list-inline header">

                        <li><a href="b_finder.php">Blog Posts</a></li>
                        <li><a href="contact.php">Join Us</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="free_services.php">Freelance Services</a></li>

                    </ul>
                    
                </div>
        
            </div>
        
        </div>  

        <!--Page Info-->
        <div class="row text-background">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Sign Up Today</h2>
                    <hr>
                    <div id="add_err2"></div>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" id="message" name="message" maxlength="100" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">                           
                                <button type="submit"  id="contact" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>

            <div class="container-fluid footer">

                <div class="footer"> 

                    <p>Thank you for visiting www.techsmashblog.com</p>
                    <p>Contact us at techsmashblogemail@gmail.com</p>
                        
                </div>
                    
            </div> 

        </footer>

    </div>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>