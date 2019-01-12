<?php
echo "<a href=\"./\">BACK</a>";
/* 12. --- SUPERGLOBALS ---
 *
 * There are built-in variables that are always available in all scopes
 * $GLOBALS
 * $_SERVER
 * $_REQUEST
 * $_POST
 * $_GET
 * $_FILES
 * $_ENV
 * $_COOKIE
 * $_SESSION
 *
 */

echo "<h1>12. SUPERGLOBALS</h1>";

/*
 * EXERCISE 1 : Display your directory to file name and your host.
 *
 */

/*
 * SUGGESTION :
 *
 * echo $_SERVER['SCRIPT_FILENAME'];
 * echo "<br>";
 * echo $_SERVER['HTTP_HOST'];
 *
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
