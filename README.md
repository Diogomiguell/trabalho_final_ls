# 🚀 Trabalho Final – Laboratório de Software

## 🛠️ CRUD com Laravel 11, Autenticação, Upload de Imagem e Template AdminLTE

Este projeto é um sistema web completo construído com o framework **Laravel**, incorporando:

- Autenticação de usuários com Laravel Breeze 🧑‍💻
- Interface administrativa moderna com **AdminLTE** 🎨
- Operações **CRUD** completas 📁
- Upload e exibição de imagens 🖼️

---

## 📂 Estrutura do Projeto

O sistema foi desenvolvido utilizando o **Laravel 11**, com aproveitamento dos seguintes recursos:

- Sistema de rotas
- Controllers e Migrations
- Autenticação de usuários com Breeze
- Arquitetura MVC
- Integração com o AdminLTE para layout e UI

> O Laravel foi escolhido por sua robustez, segurança e excelente organização de código.

---

## ✨ Funcionalidades

### 1. 🔐 Autenticação de Usuários
Implementada com **Laravel Breeze**, fornecendo:

- Cadastro e login de usuários
- Proteção de rotas e sessões seguras
- Acesso restrito aos próprios registros

---

### 2. 🧩 Integração com o Template AdminLTE
Interface administrativa estilizada com:

- Menu lateral, cabeçalho e painéis
- Layout responsivo e profissional
- Views personalizadas herdando layout base

---

### 3. 📦 CRUD de Registros
Implementado para uma entidade à sua escolha, como:

#### Produtos:
- `id`, `nome`, `descrição`, `quantidade`, `preço`, `nota de avaliação`, `imagem do produto`

#### Eventos:
- `id`, `nome do evento`, `descrição`, `quantidade máxima`, `preço do ingresso`, `empresa organizadora`, `imagem do local`

#### Funcionalidades:
- ➕ Criar registros com formulário e imagem
- 📄 Listar registros com paginação
- ✏️ Editar registros com atualização de imagem
- ❌ Excluir com confirmação
- 🔐 Restrição: usuários só podem acessar seus próprios registros

---

### 4. 🖼️ Upload de Imagens
- Upload e armazenamento em `storage/app/public`
- Caminho salvo no banco de dados
- Imagens exibidas nas views
- Manipulação feita com a **Facade Storage** do Laravel

---

## ✅ Considerações Finais

Este projeto demonstra:

- Integração de funcionalidades essenciais em aplicações web modernas
- Utilização do Laravel com boas práticas
- Visual agradável e funcional com o AdminLTE
- Segurança com autenticação de usuários
- Suporte a conteúdo multimídia com upload de imagens

> Um ótimo exemplo de aplicação Laravel completa para ambientes acadêmicos ou profissionais.



## 📌 Requisitos

- PHP >= 8.2
- Composer
- MySQL ou outro banco compatível
- Node.js (para assets via Vite, se necessário)

---

## ⚙️ Como rodar o projeto

```bash
# Clone o repositório
git clone https://github.com/seu-usuario/seu-projeto.git

# Acesse o diretório
cd seu-projeto

# Instale as dependências PHP
composer install

# Instale as dependências JavaScript (se usar Vite)
npm install && npm run dev

# Configure o .env
cp .env.example .env
php artisan key:generate

# Configure o banco de dados no .env e depois:
php artisan migrate

# Rode o servidor
php artisan serve
