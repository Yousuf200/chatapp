<?php

$mysqli = new mysqli("localhost", "root", "", "aabbcc");
$sql = "select * from mesdsg_info";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>All Chat</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        body {
            background-color: #111;
        }

        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            border-color: white;
        }

        h1 {
            text-align: center;
            color: whitesmoke;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            background-color: #bcbcbc;
            border: 1px solid black;
        }

        th {
            background-color:#5b5b5b;
        }

        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="displayconv.php">Contact</a></li>
            <li><a href="#about">About</a></li>
        </ul>
    </nav>
    <section>
        <h1>All Chats</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>UserHandle</th>
                <th>Message</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
            // LOOP TILL END OF DATA
            while ($rows = $result->fetch_assoc()) {
            ?>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                    <td><?php echo $rows['user']; ?></td>
                    <td><?php echo $rows['message']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </section>
</body>

</html>