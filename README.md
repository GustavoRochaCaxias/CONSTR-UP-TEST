# CONSTR-UP-TEST

Projeto desenvolvido com o objetivo de criar uma aplicação **Full Stack** para gerenciamento de produtos, utilizando uma API REST em **PHP com Laravel**, banco de dados **MySQL** e uma interface web desenvolvida em **Vue.js**.

## 📋 Sobre o projeto

O projeto consiste no desenvolvimento de um sistema de cadastro e gerenciamento de produtos.

O **back-end** será responsável pela criação de uma API REST utilizando o framework **Laravel**, realizando a comunicação com o banco de dados MySQL.

O **front-end**, desenvolvido em **Vue.js**, consumirá a API criada no Laravel, permitindo que o usuário realize as principais operações de gerenciamento dos produtos.

## 🚀 Funcionalidades

A aplicação deverá permitir:

* Listar produtos cadastrados;
* Cadastrar novos produtos;
* Visualizar informações dos produtos;
* Editar produtos existentes;
* Excluir produtos.

## 🛠️ Tecnologias utilizadas

### Back-end

* PHP
* Laravel
* MySQL
* API REST

### Front-end

* Vue.js


## 🗄️ Banco de dados

Será utilizado o **MySQL** para armazenamento dos dados da aplicação.

A tabela principal do projeto será a tabela `produtos`, responsável por armazenar as informações dos produtos cadastrados.

## 🔌 API

A API desenvolvida em Laravel será responsável por disponibilizar os endpoints necessários para que o front-end possa realizar as operações de CRUD.

As principais operações serão:

| Método    | Operação | Descrição                       |
| --------- | -------- | ------------------------------- |
| GET       | Listar   | Retorna os produtos cadastrados |
| POST      | Criar    | Cadastra um novo produto        |
| PUT/PATCH | Editar   | Atualiza um produto existente   |
| DELETE    | Excluir  | Remove um produto               |

## 💻 Front-end

O front-end será desenvolvido utilizando **Vue.js** e terá como responsabilidade consumir a API do Laravel.

Por meio da interface, o usuário poderá:

1. Consultar os produtos cadastrados;
2. Cadastrar um novo produto;
3. Editar as informações de um produto;
4. Excluir um produto.



