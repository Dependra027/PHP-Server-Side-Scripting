<!-- The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.
The include and require statements are identical, except upon failure:
1.require will produce a fatal error (E_COMPILE_ERROR) and stop the script
2.include will only produce a warning (E_WARNING) and the script will continue 

Syntax
include 'filename';

or

require 'filename';


-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'includeExample.php';

    echo "I want ".$car." with color ".$color;  
    
    ?>
</body>
</html>