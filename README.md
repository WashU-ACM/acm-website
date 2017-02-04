#ACM-Website

Powered by [Lumen](https://lumen.laravel.com).

## First things

To get started with a developement server running on your localhost, use:
    php -S localhost:8000 -t public
from the root of your project directory.

## Tools

Make sure that you have Composer, NPM, and, of course, PHP installed. Because I (Peter) like gulp, that's what I'm using to automate some stuff.


## Gulp

Gulp is pretty useful for developement work. Right now, I just have a few layers of Gulp rules set up. The ones that should be run as `gulp <rule>` are below:

     scss - compile app.scss and place it in public
    watch - just watches all .scss files in assets for changes and
            re-runs scss on change
    serve - start a php server for the project on localhost:8080
    bsync - start a php server, and then start a Browser Sync proxy
            that listens on the same port, so that changes to blades
            and .scss files are carried through. JS not yet watched.
