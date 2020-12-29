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

            // foreach loop with key value variables

            foreach( $cat_owners as $owner => $cat ) {
                echo "<p>$cat belongs to $owner.";
            };
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

    <div>
        <?php
        // Booleans, if/else, ternary operator, and logic operators are basically the same as JS and Ruby

        /* 
            Note on == syntax in if statements: Use Yoda syntax (variable on right of ==) to avoid accidental assignment
            if ( 10 == $v ) { do a thing } --- Good, no chance of accidental assignment, sounds like somthing Yoda would say
            if ( $v == 10 ) { do a thing } --- Bad, mistype == as = and it will always evaluate as true and reassign $v to 10
        */

        $is_logged_in = true;

        if ( $is_logged_in && NAME !== null ) {
            echo 'Welcome, ' . NAME . '!';
        } else if ( $is_logged_in ) {
            echo 'Welcome, user!';
        } else {
            echo 'Please log in.';
        }
        ?>
    </div>

    <div>
        <?php if ( $is_logged_in ) : // Alternative if/else syntax with colon, can be useful for large block of HTML inside an if statement ?>
            <h1>Here's a Header</h1>
            <h2>Plus a sub header</h2>
            <p>Wow this is a lot of content that is only displayed if logged in.</p>
            <p>It would be hard to read this wrapped in curly braces!</p>
            <p>The alternative syntax makes it cleaner and easier to read.</p>
            <h5>Nice!</h5>
        <?php endif; ?>
    </div>

    <div>
        <?php
        $min = 0;
        $max = 50;
        $guess = 12;
        $num = 10;

        if ( $guess >= $min && $guess <= $max ) {
            if ( $guess == $num ) {
                echo 'Wow, you got it right!';
            } else if ( $guess > $num ) {
                echo 'Nope, try lower.';
            } else {
                echo 'Nope, try higher.';
            }
        } else {
            echo 'Your guess it outside the range.';
        }
        ?>
    </div>

    <div>
        <?php

        $a = (14 + 82 - (32 / 2) )**2;
        $b = 18 * ((3 / 6) - 9) * 10;
        $c = 5 * ((12 / 2) - (8 * 4) + (12 * 6));
        $array = array( $a, $b, $c );
        print_r( $array );

        ?>
    </div>

    <div>
        <?php
        
        $current = 1;
        $next = null;
        $previous = 0;

        while ( $current <= 200 ) {
            echo '<p>' . $current . '</p>';
            $next = $current + $previous;
            $previous = $current;
            $current = $next;
        }

        ?>
    </div>
</body>
</html>


