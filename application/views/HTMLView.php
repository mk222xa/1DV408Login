<?php

namespace application\views;


class HTMLView {

    public function echoHTML($body){

        echo<<<TAG

<!doctype html>
<html lang="sv">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" media="only screen and (min-device-width: 481px)" href="css/style.css">
    <title>Mattias Portfolio</title>
    </head>
    <body>
        $body
    </body>

</html>

TAG;

}
}
