# Drupal Rate module debugging

## Setup with Lando https://lando.dev/

To get the site up, execute these commands.

    lando start
    lando composer install
    lando db-import dump.sql
    lando drush uli (need to replace http://default with http://rate-module-bug.lndo.site/)
    