# simple-smiirl-counter
Simple and fast integration of the perso / custom [Smiirl](http://www.smiirl.com/fr/) counter.

## Pré-requis
- [Nginx](https://nginx.org/en/) ou [Apache](https://httpd.apache.org/)
- PHP 7+

## Smiirl Documentation
Please, you maybe need to read the [official documentation of Smiirl](http://static.smiirl.com/wp-content/uploads/2017/05/guide-custom-sup.pdf).

## Configuration
Edit the [config/client.php](config/client.php) file as you want
``` php
$_NAME_JSON_FILE // the name of your .json file containing your number
$_PATH_JSON_FILE // the relative or absolute path to the .json file
$_KEY_NAME // the name of the key relative to the number in your .json file
$_ACTIVE_EASTER_EGGS // Active easter eggs after submitting new number value
```

If you decide to change KEY_NAME and NAME_JSON_FILE please create a .json file with your content.

## Installation
- Just upload files where you want. Exemple like here : 'http://your-domaine-name.com/Smiirl/' (at the root domaine name, in a 'Smiirl' folder)
> config/
> edit/
> template/
> .htaccess
> index.php
> number.json (or the file name you choose)

- Go to your Smiirl Account and specify your configuration to smiirl (If you follow the exemple bellow, specify http://your-domaine-name.com/Smiirl/ as URL)

- Protect the editing action with php or with .htpasswd (Ask Google)

- Enjoy !

## Editing the number value of your Smiirl Counter
- Go to 'http://your-domaine-name.com/Smiirl/edit' if you follow the exemple bellow.
