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
<<<<<<< HEAD
php artisan serve
=======
php artisan serve
>>>>>>> aab23d10228e3b4171b700fedcb57ebede071bc9
