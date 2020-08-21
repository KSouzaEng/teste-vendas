# Demeter

![GitHub language count](https://img.shields.io/github/languages/count/kSouzaEng/teste-vendas)
![GitHub top language](https://img.shields.io/github/languages/top/KSouzaEng/teste-vendas)
![GitHub last commit](https://img.shields.io/github/last-commit/KSouzaEng/teste-vendas)


## Sobre

*O **demeter** é uma aplicação desenvolvida usando o Framework Laravel que tem como finalidade manter uma base de produtos para uma frutaria, bem como realizar realizar o processo de venda de um produto e gerar relatorios de venda. Para tanto foi desenvolvida uma interface web que permite ao cliente a interação com "um sistema" que pode ser acessado logo depois do cadastro ser realizado*

## Tecnologias utilizadas

- Laravel 5.8
- HTML 5
- Bootstrap 4.1.0
- MySQL 5.7.24

## Iniciando o desenvolvimento

Para executar o projeto, será necessário instalar os seguintes programas:
- [Laragon: Usado para iniciar o servidor web](https://laragon.org/download/index.html)

- [DBeaver: Usado para fazer o gerenciamento do banco de dados](https://laragon.org/download/index.html)

- [Visual Studio Code: Para desenvolvimento do projeto (ou editor de sua preferência)](https://code.visualstudio.com/download)

### Instalação

1. Clone repositório
```
git clone https://github.com/KSouzaEng/Demeter.git
```

2. Instalar dependências 
```
composer install
```
3. Update do composer
```
composer update
```
4. Renomei o arquivo .env.exemple para .env

```
cp .env.exemple .env
```

5. Gere a chave para a aplicação
```
php artisan key:generate
```
#
6. Crie uma base de dados na ferramenta Dbeaver com o nome de sua preferência.

# 

7. Dentro do arquivo .env procure pelo trecho de código parecido com o descrito abaixo e na linha DB_DATABASE=laravel mude para o nome da base de dados criada anteriormente, neste caso a base se chama demter.


```shell
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=demeter
DB_USERNAME=root
DB_PASSWORD=
```
8. Iniciar servidor
```
php artisan serve
```

### Observação

```O nome da aplicação faz referência a Deusa da agricultura grega e foi escolido pela familiaridade com escopo da aplicação. Deméter é considerada a deusa da agricultura na Mitologia Grega, ela era quem nutria a terra. ```
