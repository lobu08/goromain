Step 1: clone or update latest code 

    ** First time: 

        - copy .env.example .env    

        - change necessary environment variables such as SMTP Mailer, database connection 

    ** n-th times: 

        - update the latest code 

        - update environment variables if any 

* Step 2: run below command lines:     

    - Install libraries 

        composer install 

        yarn install 

    - Build assets 

        php artisan key:generate (for the first time) 

        yarn run dev 

    - Prepare database 

        php artisan migrate 

        php artisan db:seed (for the first time) 

    - Clear cache config 

        php artisan config:cache 

        php artisan config:clear 

        php artisan cache:clear     

    - Start web 

        php artisan serve 
