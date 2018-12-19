<?php
if($_GET['city'])
{
    $forecastPage = file_get_contents('https://www.completewebdevelopercourse.com/locations/london');
    // echo $forecastPage;
    $pageArray = explode(' 3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content">',$forecastPage);
    $secondArray = explode('</span></span></span>',$pageArray[1]);
    $weather = $secondArray[0];
    
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Weather Scraper</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <style type="text/css">

            html { 
                background: url(unsplash.jpg) no-repeat center center fixed; 
                background-size: cover;
                color:beige;
            }

            body {

                background: none;

            }

            .container {

                text-align: center;
                margin-top: 100px;
                width: 450px;

            }

            input {

                margin: 20px 0;

            }

            #weather {

                margin-top:15px;

            }

        </style>

    </head>
    <body>

        <div class="container">

            <h1>What's The Weather?</h1>



            <form>
                <fieldset class="form-group">
                    <label for="city">Enter the name of a city.</label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Tokyo" value = "">
                </fieldset>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <div id="weather">
                <?php 
                if($weather){
                echo '<div class="alert alert-secondary" role="alert">'.
                $weather.'
                </div>';

                }
                ?></div>
        </div>

        <!-- jQuery first, then Bootstrap JS. -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    </body>
</html>