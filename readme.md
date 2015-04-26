# Laravel 5 and Foundation 5 starter kit

 No need to rip out all the bootstrap and less code, this has it all setup for you.
 
 ## Setup a new project
 
    # Clone this repository & remove origin
    git clone git@github.com:nickdenardis/laravel5-foundation.git project-name
    cd project-name
    git remote rm origin
    
    # Setup the environment
    cp .env.example .env
    
    # Setup the base infrastructure
    composer install
    bower install
    npm install
    gulp
    
    # Setup the local database
    php artisan key:generate
    touch storage/database.sqlite
    php artisan migrate --seed
    
    # Add your specific GIT repo origin
    git remote set-url origin git@yourorigin.domain.com.git
    git push -u origin master
    
