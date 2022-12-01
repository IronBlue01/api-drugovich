# Teste API-Rest DrugoVich

É necessário ter o `docker` e o `docker-compose` instalados. Lembre-se de parar seu servidor web caso exista.

#### Clonando e Instalando o Projeto
1. Faça um clone deste projeto
2. Dentro da raiz do projeto crie uma copia de .env.example para .env.
3. Suba os containers da aplicação
4. Entre dentro do container app
6. Instale as dependencias do projeto através do composer
7. Gere a Key para o arquivo .env
8. Execute as migrations
9. Gere a documentação
10. Executar Seeder para realizar testes manuais no postman

```bash
git clone https://github.com/IronBlue01/api-drugovich.git
cd api-drugovich
cp .env.example .env
sudo docker-compose up -d
docker-compose exec app bash
composer install
php artisan key:generate
php artisan migrate
php artisan scribe:generate
php artisan db:seed --class=UserTestSeeder
```

#### Gerar documentação
```php
php artisan scribe:generate
```

#### Acessar documentação
`<host>/docs`

# Gerando as collections para utilizar no postman
Dentro da documentação do projeto é possivel importar as collections com os endpoints para uso em ferramentas como postman clicando no link que se encontra no menu lateral esquerdo na parte inferior [View Postman Collection]

# Acessar o banco mysql
É posssível acessar o banco através de ferramentas como workbench ou dbeaver os dados para conexão estão abaixo:

HOST: localhost
PORT: 3388
USERNAME: root
PASSWORD: root

# Executar os testes automatizados
php artisan test


### Cabeçalho para executar requisições
Este cabeçalho garante que a resposta seja devolvida em JSON. Não informá-lo na requisição pode causar comportamentos
inesperados na API.
```
Content-type: application/json
Accept: application/json
```


