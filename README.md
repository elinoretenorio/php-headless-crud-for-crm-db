### Requires

* PHP >= 7.4
* MySQL or MariaDB
* Webserver - Apache or nginx
* [Composer](https://getcomposer.org/) 
* [Bash](https://www.gnu.org/software/bash/)
* [Xdebug](https://xdebug.org/) (optional, for Code Coverage) 

### Install

* Login to application"s root dir
* Edit `deploy.sh` and update paths to your `php`, `composer.phar` and `phpunit` as needed
* Run `sh deploy.sh` for dev and `sh deploy.sh prod` for prod
* Point your document root to `/public`
* Update `.env` with your database credentials
* Open `curl.sh` for API samples

### Libraries

* [Route](https://route.thephpleague.com/)
* [Container](https://container.thephpleague.com/)
* [Laminas](https://docs.laminas.dev/)
* [PHP dotenv](https://github.com/vlucas/phpdotenv)
