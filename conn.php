
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pec_conference');

// define('DB_NAME', 'technoholicasweb');


// Free Hosting 



// define('DB_SERVER', 'matzgroup17.ipagemysql.com');
// define('DB_USERNAME', 'technoholicas');
// define('DB_PASSWORD', 'technoholicas');
// define('DB_NAME', 'technoholicas');

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'technoholicas');
// define('DB_PASSWORD', 'technoholicas');
// define('DB_NAME', 'technoholicas');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>