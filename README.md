# Projeto Bibliotecas

## Miro com a documentação do projeto
https://miro.com/app/board/o9J_lB8WV5c=/

https://miro.com/app/board/o9J_lBMwmEE=/

## Descrição
Aplicativo web para consulta de livros e controle de agendamento de retiradas das bibliotecas de Santa Bárbara d'Oeste. O sistema terá os módulos de:

- Página inicial
- Quem Somos
- Acervo
    - Opção de pesquisar o livro por qualquer parte do título
-Login
    - Login Funcionário
        - Livros
            - Inclusão 
            - Alteração 
            - Exclusão 
            - Opção de listagem de livro por qualquer parte do título
        - Usuário
            - Inclusão
            - Exclusão da reserva / empréstimo 
            - Opção de pesquisar o usuário por qualquer parte do nome
            - Acesso as informações dos usuários 
        - Agenda
            - Listagem de todos os livros reservados ou emprestados
            - Realização do empréstimo de algum livro
            - Exclusão de algum livro reservado / emprestado 
    - Login Usuário 
        - Acesso às informações pessoais
        - Acesso aos livros que reservados / emprestados em seu nome
        - Realização da reserva de algum livro
        - Exclusão da reserva

## Tecnologias (Stack)
- Apache (XAMPP)
- PHP
- MariaDB
- HTML
- CSS
- Javascript
- jQuery
- Bootstrap

## SQL - Bnco de dados
### Criação do banco de dados
```` sql
CREATE DATABASE bd_biblioteca CHARACTER SET utf8 COLLATE utf8_general_ci;
````

### Criação da tabela agendar
````sql
CREATE TABLE `tb_agendar` (
  `id` int(11) NOT NULL,
  `id_livro` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_retirada` date NOT NULL,
  `data_devolucao` date NOT NULL,
  `status` varchar(25) NOT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabela `tb_agendar`
--
ALTER TABLE `tb_agendar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_agenda_livro` (`id_livro`),
  ADD KEY `fk_agenda_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de tabela `tb_agendar`
--
ALTER TABLE `tb_agendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limitadores para a tabela `tb_agendar`
--
ALTER TABLE `tb_agendar`
  ADD CONSTRAINT `fk_agenda_livro` FOREIGN KEY (`id_livro`) REFERENCES `tb_livros` (`id`),
  ADD CONSTRAINT `fk_agenda_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id`);
COMMIT;
````

### Criação da tabela funcionário
````sql
CREATE TABLE `tb_funcionario` (
  `id` int(4) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` int(8) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `endereco` varchar(50) NOT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabela `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabela `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

````

### Criação da tabela livros
````sql
CREATE TABLE `tb_livros` (
  `id` int(11) NOT NULL,
  `isbn` varchar(14) NOT NULL,
  `nome_livro` varchar(100) NOT NULL,
  `genero` varchar(60) NOT NULL,
  `serie` varchar(50) NOT NULL,
  `classificacao` varchar(3) NOT NULL,
  `editora` varchar(15) NOT NULL,
  `edicao` varchar(3) NOT NULL,
  `nome_autor` varchar(60) NOT NULL,
  `endereco_biblioteca` varchar(30) NOT NULL,
  `disponibilidade` varchar(15) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `sinopse` text NOT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabela `tb_livros`
--
ALTER TABLE `tb_livros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabela `tb_livros`
--
ALTER TABLE `tb_livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

````

### Criação da tabela usuários
````sql
CREATE TABLE `tb_usuarios` (
  `id` int(6) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `rg` varchar(13) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `foto_usuario` varchar(200) NOT NULL,
  `comprovante_residencia` varchar(200) NOT NULL,
  `anexo_rg` varchar(200) NOT NULL,
  `anexo_cpf` varchar(200) NOT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--

ALTER TABLE `tb_usuarios`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
````