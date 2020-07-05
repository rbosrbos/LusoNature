<p align="center"><img src="http://rbos.pt/images/logo.svg" width="200"></p>

## About Lusonature

Lusonature is a CMS built in laravel for my second course project, backend directioned. Also a good idea for promoting my country green spaces and general nature. There you can find:

- [Portugal district's wheather forecast](http://rbos.pt/forecast).
- [Beautiful green spots](http://rbos.pt/place).
- User commentaries and ratings.
- Your destination by category (beaches, camping, etc...).
- [News regarding our country and portal](http://rbos.pt/news).
- A complete consulting API for developers


## API REST

API [documentation](http://rbos.pt/docs/)

## Install Instructions

- Clone the repository: git clone https://github.com/rbosrbos/LusoNature.git
- Install composer dependencies: composer install
- Install node dependencies: npm install
- Create a .env file. See .env.example for reference.
- Run seeds to create db schema and populate it with examples: php artisan migrate --seed
- Run: php artisan serve

IMPORTANT NOTE:

LusoNature is relying on [Faker](https://github.com/fzaninotto/Faker) to get random pictures and bring them to it's filesystem.
This engine relies by default on [LoremPixel](https://lorempixel.com).
If you are experiencing image errors uppon database seed, please try this fix:
- Go to vendor/fzaninotto/src/Faker/Provider/
- Open file 'Image.php' for edition. Comment the lorem pixel lines and add new ones like the example. You can choose whatever image api you want:

        //$baseUrl = "https://lorempixel.com/";
        //$url = "{$width}/{$height}/";
        $baseUrl = "http://placeimg.com/";
        $url = "{$width}/{$height}/any";

- Re-run migrations/seed by running: php artisan migrate:fresh --seed

ENJOY
