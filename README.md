# 🎬 MovieApp - Aplicativo de Filmes com TMDB API

## Descrição

Este é um aplicativo web desenvolvido em **PHP** com o framework **Laravel**, que consome a API do [The Movie Database (TMDB)](https://www.themoviedb.org/). O objetivo principal é permitir que os usuários busquem filmes, filtrem por categorias e criem listas personalizadas. O projeto também inclui funcionalidades de autenticação, criação de conta e manutenção de listas de filmes.

---

## 🚀 Funcionalidades

1. **Consumo da API do TMDB**:  
   O aplicativo realiza chamadas à API do TMDB para buscar informações atualizadas sobre filmes.

2. **Telas Principais**:
    - **Página Inicial** com listagem de filmes populares.
    - **Tela de Busca** com filtros avançados para encontrar filmes por gênero e outros critérios.
    - **Tela de Listas** para visualização e gerenciamento de listas personalizadas.

3. **Telas Auxiliares**:
    - **Login e Cadastro de Usuário**.
    - **Adicionar Filmes às Listas**.
    - **Editar e Excluir Listas**.

4. **Filtros de Busca**:  
   Filtros implementados para facilitar a procura dos filmes por gênero, título e outras categorias relevantes.

5. **Autenticação**:  
   Sistema de login e registro usando o banco de dados para armazenar informações de usuário de forma segura.

6. **Criação e Manutenção de Listas**:  
   Os usuários podem criar listas personalizadas, adicionar ou remover filmes, e gerenciar a visibilidade das listas.

---

## 🛠️ Tecnologias Utilizadas

- **PHP**  
- **Laravel**  
- **API do TMDB**  
- **Banco de Dados MySQL**  
- **Blade Templates**  
- **Tailwind CSS** para estilização

---

## 📈 Roadmap e Processo de Aprendizado

Este projeto foi uma excelente oportunidade de aprendizado! Aqui está um resumo do processo:

- **Aprendizado de PHP**:  
  Em torno de **1 a 2 dias** para aprender os conceitos básicos de PHP.

- **Entendendo Laravel**:  
  Aproximadamente **2 dias** para entender a estrutura do Laravel e como utilizá-lo em um projeto real.

- **Design e Layout**:  
  A criação do design e a implementação com **Tailwind CSS** levaram cerca de **1 dia**.

Apesar de ser meu primeiro contato com PHP e Laravel em muito tempo, foi um processo muito enriquecedor, que me permitiu crescer e adquirir novas habilidades rapidamente.

---

## 📥 Instalação

1. Clone o repositório:

   ```bash
   git clone https://github.com/LeoLarangeira/movie-app
   cd movieapp
   ```

2. Instale as dependências do Laravel:

   ```bash
   composer install
   ```

3. Configure o arquivo `.env` com os detalhes do banco de dados e a chave da API do TMDB.

4. Execute as migrações do banco de dados:

   ```bash
   php artisan migrate
   ```

5. Inicie o servidor local:

   ```bash
   php artisan serve
   ```

6. Acesse o aplicativo em `http://127.0.0.1:8000`.

---

## 📚 Referências

- [Documentação do Laravel](https://laravel.com/docs)
- [API do TMDB](https://developers.themoviedb.org/3/getting-started/introduction)

---

## 🏆 Agradecimentos

Obrigado pela oportunidade de apresentar um pouco do meu conhecimento nessa avaliação!

---

**Espero que gostem do aplicativo! 🚀**
