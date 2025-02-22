Ambiente de Desenvolvimento PHP com Docker

Este repositório contém um ambiente de desenvolvimento para estudos em PHP utilizando Docker.

📌 Tecnologias Utilizadas

PHP 7.4 com Apache

MySQL (latest)

Docker Compose

📂 Estrutura do Projeto

📦 meu-projeto-php
├── 📂 php (diretório onde ficarão os arquivos do projeto)
├── 📄 docker-compose.yml
└── 📄 README.md

🚀 Como Usar

1️⃣ Pré-requisitos

Antes de começar, certifique-se de ter instalado:

Docker

Docker Compose

2️⃣ Clonar o repositório

git clone https://github.com/seu-usuario/meu-projeto-php.git
cd meu-projeto-php

3️⃣ Configurar diretório de volume

Crie o diretório que será mapeado para o servidor web:

Ex: mkdir -p /home/php

4️⃣ Subir os containers

Execute o seguinte comando na raiz do projeto:

docker-compose up -d

Isso iniciará os containers em segundo plano.

5️⃣ Acessar o ambiente

Aplicação PHP: http://localhost:8001

Banco de Dados:

Host: localhost

Porta: 3310

Usuário: root

Senha: root

6️⃣ Parar os containers

Para parar os serviços, use:

docker-compose down

🔧 Personalização

Caso precise alterar alguma configuração, edite o arquivo docker-compose.yml conforme necessário.

🛠 Problemas Comuns

❌ Porta 8001 ou 3310 já está em uso

Se as portas já estiverem ocupadas, altere a configuração no docker-compose.yml para outra disponível, por exemplo:

    ports:
      - "8002:80"
      - "3311:3306"

E suba os containers novamente.

❌ Arquivos PHP não são atualizados

Se os arquivos PHP não refletirem mudanças, tente reiniciar o container:

docker restart meu-php

📜 Licença

Este projeto está sob a licença MIT. Sinta-se à vontade para usá-lo e modificá-lo conforme necessário!

Criado por Gabriel Coimbra 🚀
