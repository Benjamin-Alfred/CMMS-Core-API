# CMMS - CORE API
Computerized maintenance management system (CMMS) maintains a computer database of information about maintenance operations.

## Installation

### Step 1: Clone the repo

    `git clone ...`

### Step 2: Prerequisites

````
    cp .env.example .env
    composer install
    touch database/database.sqlite
    php artisan migrate
    php artisan db:seed
    php artisan key:generate
    php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\JWTAuthServiceProvider"
    php artisan jwt:generate
````

If you use Apache to serve this, you will need to add the following 2 lines to your .htaccess 

````
    RewriteCond %{HTTP:Authorization} ^(.*)
    RewriteRule .* - [e=HTTP_AUTHORIZATION:%1]
````
