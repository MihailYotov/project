<?php
define('DB_NAME', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'Localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
    die('Error: Could not connect');
}
$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
    die('Error');
}
//echo('conected<br/>');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

$data = mysql_query("SELECT * FROM albums") or die(mysql_error());
$info = mysql_fetch_array( $data );

?>

<?php require_once("php/testHeader.php");?>
<link rel="stylesheet" href="styles/table.css"/>

<table>
    <thead>
    <th>Album name</th>
    <th>Album artist</th>
    <th>Genre</th>
    </thead>
    <?php
    while($info = mysql_fetch_array( $data )) {
    Print "<tr><td>".$info['name'] . "</td>"; //. "<td>".$info['artist'] . "</td>" . "<td>".$info['gener'] . "</td></tr>";
    }
    ?>
</table>


<?php require_once("php/footer.php");?>
