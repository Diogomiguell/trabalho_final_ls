Desenvolvimento de um CRUD com Laravel, Autenticação, Upload
de Imagem e Template AdminLTE
Neste projeto, será desenvolvido um CRUD (Create, Read, Update, Delete) utilizando o
framework Laravel, com o objetivo de aplicar os principais conceitos de desenvolvimento
web com PHP. O sistema também conta com funcionalidades de autenticação de usuários
(login e registro), upload de imagens e integração com o template AdminLTE, que oferece
uma interface administrativa moderna e responsiva.
Estrutura do Projeto
A aplicação foi estruturada utilizando o Laravel 11, aproveitando o poder das rotas,
controllers, migrations, e do sistema de autenticação oferecido pelo framework. A escolha
do Laravel se deu por sua robustez, segurança e arquitetura MVC bem definida.
Funcionalidades Desenvolvidas
1. Autenticação de Usuários
Deve ser implementado um sistema de autenticação usando o Laravel Breeze, que oferece
rotas e views simples para login e cadastro de usuários. Com isso, os usuários podem criar
contas e acessar o sistema com segurança.
2. Integração com o Template AdminLTE
O template AdminLTE deverá ser integrado ao projeto para fornecer uma interface
administrativa estilizada. O layout principal é adaptado para utilizar os componentes do
AdminLTE, como menu lateral, cabeçalho e painéis. As views do Laravel devem ser
modificadas para herdar esse layout base.
3. CRUD de Registros
Implemente as operações de CRUD para uma entidade de exemplo (por exemplo,
"Produtos" ou "Eventos"). O sistema permite:
● Criar novos registros, preenchendo um formulário com dados e imagem.
● Visualizar a lista de registros com paginação e opções de ação.
● Editar registros existentes com atualização de dados e imagem.
● Excluir registros com confirmação.
Campos para produtos: id, nome, descrição, quantidade, preço, nota de avaliação,
imagem do produto.
Campos para eventos: id, nome do evento, descrição, quantidade máxima de
pessoas, preço do ingresso, nome da empresa organizadora, imagem do local.
Obs: Os usuários do sistema não podem ver, atualizar ou excluir registros que não
pertençam a eles mesmos.
4. Upload de Imagens
O sistema permite o envio de imagens junto aos dados dos registros. Ao fazer upload, o
arquivo deverá ser armazenado na pasta storage/app/public, e o caminho é salvo no
banco de dados. As imagens são exibidas nas views de listagem e de edição dos registros.
Para essa tarefa deverá ser utilizada a facade Storage do Laravel para manipulação
segura dos arquivos.
Considerações Finais
Este projeto demonstra a integração de recursos essenciais em aplicações web modernas
com Laravel. O uso do AdminLTE traz um visual profissional e intuitivo, enquanto a
funcionalidade de autenticação garante a segurança no acesso ao sistema. A possibilidade
de upload de imagem complementa a funcionalidade do CRUD, permitindo trabalhar com
conteúdos multimídia. O desenvolvimento segue boas práticas de organização de código,
rotas nomeadas, e uso de recursos nativos do framework.
