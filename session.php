<!-- What is a PHP Session?
When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.

Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.

So; Session variables hold information about one single user, and are available to all pages in one application.

Tip: If you need a permanent storage, you may want to store the data in a database. -->

<!-- Start a PHP Session
A session is started with the session_start() function.

Session variables are set with the PHP global variable: $_SESSION.

Now, let's create a new page called "demo_session1.php". In this page, we start a new PHP session and set some session variables:

ExampleGet your own PHP Server
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html> 

-->


<!-- 
Get PHP Session Variable Values
Next, we create another page called "demo_session2.php". From this page, we will access the session information we set on the first page ("demo_session1.php").

Notice that session variables are not passed individually to each new page, instead they are retrieved from the session we open at the beginning of each page (session_start()).

Also notice that all session variable values are stored in the global $_SESSION variable:

Example
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>

Another way to show all the session variable values for a user session is to run the following code:

Example
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
print_r($_SESSION);
?>

</body>
</html> -->



<!-- Modify a PHP Session Variable
To change a session variable, just overwrite it:

Example
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

</body>
</html> -->



<!-- Destroy a PHP Session
To remove all global session variables and destroy the session, use session_unset() and session_destroy():

Example
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo "All session variables are now removed, and the session is destroyed."
?>

</body>
</html>

</body>
</html> -->



<?php

session_start();

// Step 2: Set some session variables
$_SESSION["username"] = "JohnDoe";
$_SESSION["role"] = "admin";

// Display session variables
echo "Session started. Username is: " . $_SESSION["username"] . ", Role is: " . $_SESSION["role"] . "<br>";

// Step 3: Unset all session variables (clear them)
session_unset();

// Step 4: Destroy the session
session_destroy();

// Step 5: Try to access the session variables after destroying the session
if (empty($_SESSION)) {
echo "Session variables are now cleared and the session is destroyed.";
} else {
echo "Session is still active.";
}
?>

