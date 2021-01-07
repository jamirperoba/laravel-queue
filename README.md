## Instalação

    - docker-compose up -d --build
    - docker exec -it laravel-queue bash
    - composer install
    - cp .env.example .env
    - php artisan migrate

## Utilização
### Adicione usuários para poder testar

    - docker-compose up -d
    - docker exec -it laravel-queue bash
    - php artisan queue:work --queue=emails,default
    - php artisan horizon
    - php artisan schedule:work
    - php artisan email:send 10
    - php artisan videos:add-watermark 2

Acesse o Horizon pelo http://localhost:8091/horizon
Acesse os emails pelo http://localhost:8025
