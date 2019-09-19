## About

Code Challenge for InteracPedia, Follow instructions to setup development enviroment.

## Requirements

- Composer
- NPM - Node
- PHP > 7.X
- Laravel Requirements https://laravel.com/docs/6.x#server-requirements

## Instructions to install

- Clone repository `git clone https://github.com/jramirezgranada/ipcompanies.git`
- Change directory to cloned folder.
- Run `composer install`
- Run `cp .env.example .env`
- In `.env` file fill out DB and Mailtrap Credentials.
- Run `php artisan key:generate`
- Run `npm install` to install frontend dependecies like jQuery, Bootstrap and AdminLTE template.
- Run `npm run dev`
- `boostrap/cache` and `storage` folder needs to have writable permissions (775).
- or `sudo chown -R www-data:www-data /path/to/your/laravel/root/directory`
- Run `php artisan storage:link`
- Run `php artisan serve` to starts up the php server.
- Go to your localhost environment to test.
- Admin credentials will be sent by email ;)

### Thanks for your time to take a look on this

## License

Is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

#### http://jramirezgranada.com
