<!-- This page is created by Bishnu Adhikari -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="stylesheet" type="text/css" href="css_test2.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/sandstone/bootstrap.min.css">

    <br>
    <br>
    <br>
    <br>
    <title>Horror Movies</title>
    <style>
        .navbar {
            background-color: #333; /* Black background color */
            position: fixed; /* Make it stick/fixed */
            top: 0px; /* Hide the navbar 50 px outside of the top view */
            width: 100%; /* Full width */
            transition: top 0.3s; /* Transition effect when sliding down (and up) */
        }
        /* Style the navbar links */
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 15px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>

<body>
<?php include '../resources/navigation.php'; ?>
 
<section>
    <header>
        <h1>Horror Movies</h1>
    </header>
    <br><br>

    <h2>Space Ghosts</h2>
    <br>
    <img src="img/space_ghosts.png" alt="Space Ghosts" />
        <br><br>
    <div class="boxed">
    <article class="article">
        <div class="row">
            <div class="mycolor col-12 col-sm-6">
    <h3><b>Description</b></h3>

    <p>Space Ghosts, a death-defying horror film, 
    is the story of two astronauts who end up stranded in outer space. 
    They must not only face the galaxy's unknown mysteries, 
    but also haunting spirits that roam the planet. 
    Will they make it back to Earth alive?</p>
</div>
<div class="mycolor col-12 col-sm-6">


<h2><b>More Information</b></h2>
<p>Rating&colon; R-rated

Duration&colon; 1&colon;23.

Director&colon; Steven Ghoul.
Cast&colon; Trevor Simmons, Alexa Haven, Morris Elida</p>
</div>
</div>
<div class="mycolor col-12 col-sm-6">
</article>

</section>
<button type="button" class="btn btn-danger">Some scenes that are shown in this movie may make you uncomfortable. Viewer discretion is advised</button>
<br><br>
<div class="boxed">
<h2>Showtimes</h2>


<table class="table table-striped">
    <thead>
        <tr>
        
            <th scope="col">Monday</th>

            <th scope="col">Tuesday</th>

            <th scope="col">Wednesday</th>

            <th scope="col">Thursday</th>

            <th scope="col">Friday</th>

            <th scope="col">Saturday</th>

            <th scope="col">Sunday</th>
         </tr>
        </thead>

     <tbody>
        <tr>
            <td>3&colon;40</td>

            <td>3&colon;40</td>

            <td>6&colon;30</td>

            <td>6&colon;30</td>

            <td>9&colon;20</td>

            <td>9&colon;20</td>

            <td>9&colon;20</td>
        </tr>
        </tbody>

     <tfoot>
      <tr>
        <td>5&colon;25</td>

        <td>5&colon;25</td>

        <td>7&colon;00</td>

        <td>7&colon;00</td>

        <td>10&colon;00</td>

        <td>10&colon;00</td>

        <td>10&colon;00</td>
      </tr>
     </tfoot>
    </table>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </div>
<?php include '../resources/footer.php'; ?>
</body>

</html>
        
        
           
     