<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Tech Smash Blog About Us</title>
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

.link_output {

    color:#192B3D !important;

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
        <div class="container">

            <div class= "text-background">

                <h1 align="center">Check out our blogs!</h1>

                <br>

                <!-- Search form -->

                <div class="md-form mt-0">

                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                
                </div>

                <br>

                <?php

                $dir = 'docs';

                $b_files = scandir($dir);

                global $b_files;

                $file_paths = array();
                
                foreach ($b_files as $iteration) {

                    $combine = 'docs/' . $iteration;
                    array_push($file_paths,$combine);

                }

                $file_paths = array_diff($file_paths,['docs/.','docs/..']);

                foreach ($file_paths as $value) {

                    $tags = get_meta_tags($value); 
                    $value = str_replace(".php","",$value);
                    $value = str_replace("docs/","",$value);
                    $link = 'http://localhost/Tech_Smash_Blog/docs/';
                    echo "<a class='link_output' href='". $link ."". $value ."'>". $value ."</a> <br>";
                    echo $tags['description'] . '<br> <br>';

                 }

                 /*
                 $file_contents = file_get_contents("http://localhost/Tech_Smash_Blog/docs/blog1.php");
                 file_put_contents("test.txt", $file_contents);
                 */

                //https://www.reddit.com/r/learnphp/comments/6xv1au/how_to_store_html_code_in_a_mysql_database/

                ?>

                <!--
                <p id="output"></p>
                
                <script>

                 //document.getElementById("output").innerHTML = 5 + 6;

                 meta = document.querySelector('meta[name="discription"]').getAttribute('content');

                 document.getElementByID("output").innerHTML = meta;

                </script>
                -->

            </div>


        </div>

        <!-- Footer -->
        <div class="footer">

            <div class="footer"> 

                <p>Thank you for visiting www.techsmashblog.com</p>
                <p>Contact us at techsmashblogemail@gmail.com</p>
                    
            </div>
                
        </div> 

    </div>

</body>
</html>