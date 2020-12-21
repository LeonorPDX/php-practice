<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <h1>
        <?= "Hello World" ?>
    </h1>

    <p>
        <?php
        
        /*
            Declare a constant with define, parentheses, name in quotes, then value.
            Constants are case sensitive, and immutable.
            They cannot be reassigned with equals (e.g., NAME = "LeeLee"), and cannot be defined a second time (e.g., define('NAME', 'LeeLee'))
        */

        define('NAME', 'Leonor');

        echo "My name is ";
        echo NAME;
        ?>
    </p>

    <p>
        <?php
            // Use 2 forward-slash for a single line comment.

            /* 
                Use slash and asterix for multiple lines comment.
                End with the asterix then slash.
            */

            // Variables in php always start with $ 

            $age = 32;

            // Use double quotes to interpolate variable in a string

            echo "My age is $age";        
        ?>
    </p>
</body>
</html>


