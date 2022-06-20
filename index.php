<?php
/*
 * Flicker Leap PHP Engineer Test
 *
 * This is where the magic happens. Run all code in here to show your end result.
 */

require __DIR__ . '/vendor/autoload.php';

use FlickerLeap\Diamond;
use FlickerLeap\Rectangle;
use FlickerLeap\Square;

echo 'Hello World';

$sqaure = new Square($length = 6);

$diamond = new Diamond($length = 6);

$rectangle = new Rectangle($length = 6);

//$client = new Httpful\Httpful();
//$client->get('http://pokeapi.co/api/v2/pokemon/mewtwo/');
$response = json_decode(file_get_contents('http://pokeapi.co/api/v2/pokemon/mewtwo/'));

//var_dump($response->abilities);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Flicker Leap - PHP Engineer Test</title>
</head>
<style type="text/css">
    body {
        line-height: 1em;
    }
</style>

<body>

    <h1>PHP Engineer Test</h1>

    <h2>Hello World</h2>

    <p>At the end of this test, you should have all the answers on this page.</p>

    <h2>Output a square</h2>

    <?php
    $sqaure->draw();
    ?>

    <h2>Output a diamond</h2>

    <?php
    $diamond->draw();
    ?>

    <h2>Output your rectangle</h2>

    <?php
    $rectangle->draw();
    ?>

    <h2>Output the result of the API</h2>

    <?php
    // Use the Httpful client to output the API results here.
    ?>

    <h2>Recommendations</h2>

    <p>
        <!-- Let us know how we can improve this test here -->
    </p>

</body>

</html>