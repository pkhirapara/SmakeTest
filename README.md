## About SmakeTest
- Requirements : 
  - composer in your local system
  - npm in your local system

Clone this repository from : git clone https://github.com/pkhirapara/SmakeTest.git

-   Enter project directory
-   composer install
-   npm install
-   npm run dev
-   copy .env.example
-   make .env
-   paste env.example code
-   replace database credential with your local credential
-   php artisan migrate
-   php artisan key:generate
-   php artisan serve

For example my .env

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:subYyBd0nLKDXJPx/miXGd6jJg6AuO67MN3XNjt3XCQ=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo
DB_USERNAME=root
DB_PASSWORD=root

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```
