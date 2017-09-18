# CalendarAPP
Sistema de Agendamento de Reunião

Instruções para instalação.

Requisitos:
- PHP >= 7
- Composer
- Laravel 5.5
- Banco de dados MYSQL

1ºPasso
- Crie um banco de dados com o nome de sua preferência

2ºPasso
- Baixe e .zip file e descompacte. Ex: "C:\calendarapp"

3ºPasso
- Acesse com o terminal/cmd o local onde foi realizado a descompactação. Ex: "C:\calendarapp"

4ºPasso
- Dentro do diretorio do projeto, execute o comando: <br />
`composer install`

5ºPasso
- Se seu SO for Windows, digite o comando:  <br />
`copy .env.example .env`
- Se seu SO for Linux, digite o comando:  <br />
`cp .env.example .env`

6ºPasso
- Insira as informações de conexão com o seu banco de dados criado no arquivo: `.env`

7ºPasso
- Gere o APP_KEY com o comando: <br />
`php artisan key:generate`

8ºPasso
- Insira as informações de conexão com o seu banco de dados novamente no arquivo `database.php` dentro da pasta `config`: <br />
`config\database.php`

9ºPasso
- Criar as tabelas do banco usando o comando: <br />
`php artisan migrate`

10ºPasso e último passo
- Execute o comando `php artisan serve` para rodar o servidor local e abra o navegador e digite o endereço: `http:\\localhost:8000`, faça seu cadastro e está pronto para uso!!


## Foram ultilizados as seguintes ferramentas:
- Template AdminLTE for Laravel: https://github.com/jeroennoten/Laravel-AdminLTE
- Plugin FullCalendar: https://fullcalendar.io/
- Laravel Collective: http://laravelcollective.com
- ColorPicker e DatePicker do repositório: https://github.com/seguce92/fullcalendar-laravel/tree/master/public/vendor/seguce92

## Dúvidas ou problemas:
Email: eduardoroseo@gmail.com </br>
Skype: eduardo.roseo
