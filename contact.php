<?php
session_start();
$_SESSION["items"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Legya</title>
</head>

<body>
    <div class="wrapper">
        <?php include("menu.html");
       ?>
       <div class="content">
        <div class="about_content">
            <h1> Contact</h1>
            <p> To contact LEGYA please see information below. </p>

            <h2>Telephone times: </h2>

            <table>
                <tr>
                    <th>Day</th>
                    <th>Time</th>

                </tr>
                <tr>
                    <td>Mon-fri: </td>
                    <td>08:00-17:00</td>
                </tr>
                <tr>
                    <td>Sat: </td>
                    <td>09:00-15:00</td>
                </tr>
                <tr>
                    <td>Sun: </td>
                    <td>Not availabe</td>
                </tr>

            </table>


            <h2> Contact information </h2>
            <table>

                <tr>
                    <td>Email:</td>
                    <td>lolaaaa12@yahoo.com</td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td>07012345678</td>
                </tr>
            </table>

        </div>
        </div>
    </div>


</body>

</html>