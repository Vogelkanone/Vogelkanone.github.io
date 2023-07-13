<!-- PHP code to establish connection with the localserver -->
<?php
 
// Username is root
$user = 'root';
$password = '';
$database = 'monitoring';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM Laporan ORDER BY nama desc";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Skyland Sekarpuro</title>
    <link rel="stylesheet" type="text/css" href="styleDash.css">
</head>
 
<body>
    <section>
    <div id="wrapper">
        <h1>Data Markerter Skyland Sekarpuro</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Marketers</th>
                <th>Jumlah Unit</th>
                <th>Total Nilai Didapat</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['ID'];?></td>
                <td><?php echo $rows['Nama'];?></td>
                <td><?php echo $rows['Unit'];?></td>
                <td><?php echo $rows['Nilai'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
    </section>
</body>
 
</html>