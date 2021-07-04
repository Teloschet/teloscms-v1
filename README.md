# TelosCMS
**Base de CMS feita em Laravel**
- Powered By Telos.

### Requisitos

- Sistema Operacional Debian >= 10 / Ubuntu
- PostgreSQL >= 11 (preferencialmente) ou MySQL/MariaDB
- PHP >= 7.1.3
- NGNIX ou Apache
- Composer
- Git

### Instalação
```bash
git clone https://github.com/Teloschet/teloscms-v1.git TelosCMS
cd TelosCMS
composer install
cp .env.example .env
php artisan key:generate
```

- Para configurar a conexão com o postgreSQL edite o arquivo .env:
```bash
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=telos
DB_USERNAME=postgres
DB_PASSWORD=*****
```

- Para criar as tabelas no banco de dados
```bash
php artisan migrate
```
- Para inserir a carga inicial de dados
```bash
php artisan db:seed
``` 

- Para criar um link simbólico de storage/app/public para dentro public/storage
```bash
php artisan storage:link
```

##### Testar aplicação localmente.
```bash
php artisan serve
```

##### That's all. Enjoy.

### Change log
##### v 1.0.0
