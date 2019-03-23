// have to make a file in app folder. Its best to make in app root

// like app/helpers.php

// now have to go to composer.json file and add this file as helper in autoload


"autoload": {
        "files": [
            "app/helpers.php"
        ],
        "psr-4": {
            "App\\": "app/"
        },
        "classmap": [
            "database/seeds",
            "database/factories"
        ]
    },


// command this

composer dump-autoload
