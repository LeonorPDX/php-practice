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

    <div>
        <?php
        
        /*
            Declare a constant with define, parentheses, name in quotes, then value.
            Constants are case sensitive, and immutable.
            They cannot be reassigned with equals (e.g., NAME = "LeeLee"), and cannot be defined a second time (e.g., define('NAME', 'LeeLee'))
        */

        define('NAME', 'Leonor');

        // Strings inside single quotes are not processed by PHP before output, making them slightly more efficient. Concat onto these strings using .

        echo 'My name is ' . NAME . '!';
        ?>
    </div>
    <div>
        <?php
            // Use 2 forward-slash for a single line comment.

            /* 
                Use slash and asterix for multiple lines comment.
                End with the asterix then slash.
            */

            // Variables in php always start with $ 

            $age = 32;

            // Use double quotes to when you need to escape a character or interpolate variable in a string; PHP processes content of stirng before output

            echo "My age is $age.";        
        ?>
    </div>
    <div>
        <?php
            // Use backslash to escape characters; single quotes can only escape another single quote, double quotes recognize other escapes

            echo 'This site\'s made with PHP.';
        ?>
    </div>
    <div>
        <?php
            // Define and print an indexable array

            $famous_cats = array('Maru', 'Grumpy Cat', 'Kitten');

            print_r($famous_cats);

            $famous_cats[] = 'Lil BUB';

            print_r($famous_cats);

            echo '<p>' . $famous_cats[2] . '</p>';
        ?>
    </div>
    <div>
        <?php
            // Define and print an associative array

            $cat_owners = array(
                'Leonor' => 'Kitten', 
                'Dude' => 'Lil BUB',
                'Matt' => 'Maru',
                'Tabatha' => 'Grumpy Cat',
            );

            // pre HTML tag for displaying preformatted text

            echo '<pre>';
            print_r($cat_owners);
            echo '</pre>';
        ?>
    </div>
    <div>
        <?php
            // Define and print an multidimensional array

            $cat_data = array(
                'Kitten' => array(
                    'age' => 8,
                    'owner' => 'Leonor',
                    'favorite thing' => 'Sleeping on pillows',
                ),
                'Maru' => array(
                    'age' => 4,
                    'owner' => 'Matt',
                    'favorite thing' => 'Boxes',
                ),
                'Grumpy Cat' => array(
                    'age' => 11,
                    'owner' => 'Tabatha',
                    'favorite thing' => 'Throwin\' shade',
                ),
                'Lil BUB' => array(
                    'age' => 3,
                    'owner' => 'Dude',
                    'favorite thing' => 'Just being adorable',
                ),

            );

            // Use chained keys to access data in multidimensional arrays

            echo '<pre>';
            print_r($cat_data);
            echo '</pre>';

            echo '<p>';
            echo $famous_cats[0] . '\'s most <i>favorite</i> thing is ' . $cat_data['Maru']['favorite thing'] . '.';
            echo '</p>';
        ?>
    </div>
</body>
</html>


