CREATE DATABASE Vagas
USE Vagas

--ja criada
CREATE TABLE idiomas
(
    IDidioma INT PRIMARY KEY, --PK
    idioma NVARCHAR(45),
    aluno_id INT --FK
);

-- Adicionando chave estrangeira na teble (idioma)
ALTER TABLE 
    idioma
ADD 
    CONSTRAINT FK_aluno_id FOREIGN KEY (aluno_id) REFERENCES aluno (IDaluno);

--ja criada
CREATE TABLE links
(
    IDlink INT PRIMARY KEY, --PK
    link NVARCHAR(2048),
    id_aluno INT -- FK
);

--Adicionando chave estrangeira na tabela (link)
ALTER TABLE 
    link
ADD
    CONSTRAINT FK_id_aluno FOREIGN KEY (id_aluno) REFERENCES alunos (IDaluno);

--ja criada
CREATE TABLE alunos
(
    IDaluno INT PRIMARY KEY IDENTITY, --PK
    nome NVARCHAR(45) NOT NULL,
    sobrenome NVARCHAR(45) NOT NULL,
    resumo_experiencia NVARCHAR(800),
    --foto_perfil FILESTREAM
    email_inst NVARCHAR(150) UNIQUE NOT NULL,
    regiao_interesse NVARCHAR(80),
    data_nacimento DATE NOT NULL,
    genero varchar(30) NOT NULL,
    modalidade_preferencia NVARCHAR(45),
    id_curso INT, --FK
    biografia NVARCHAR(300),
    competencias NVARCHAR(100),
    RA INT UNIQUE NOT NULL
);

--Adicionando chave estrangeira no id_curso
ALTER TABLE 
    aluno
ADD
    CONSTRAINT FK_idcurso FOREIGN KEY (id_curso) REFERENCES curso (IDcurso);

--ja criada
CREATE TABLE cursos
(
    IDcurso INT PRIMARY KEY IDENTITY, -- PK
    nome_curso NVARCHAR(80),
    periodo NVARCHAR(45)
);

--ja criada
CREATE TABLE cidades
(
    IDcidade INT PRIMARY KEY IDENTITY, --PK
    nome NVARCHAR(120) NOT NULL
);

--ja criada
CREATE TABLE bairros
(
    IDbairro INT PRIMARY KEY IDENTITY, --PK
    nome_bairro NVARCHAR(60),
    cidade_id INT
);

--ja criada
CREATE TABLE enderecos
(
    IDendereco INT PRIMARY KEY IDENTITY, --PK
    nome NVARCHAR(80) NOT NULL,
    numero INT NOT NULL,
    cep_rua NVARCHAR(9),
    bairro_id INT --FK
);

--Adicionando chave estrangeira no bairro_id
ALTER TABLE 
    endereco
ADD
    CONSTRAINT FK_bairro_id FOREIGN KEY (bairro_id) REFERENCES bairro (IDbairro);

--ja criada    
CREATE TABLE endereco_alunos
(
    Aluno_id INT, --FK
    endereco_id INT --FK
);

--Adicionando chave estrangeira no Aluno_id
ALTER TABLE 
    endereco_aluno
ADD
    CONSTRAINT FK_Alunoid FOREIGN KEY (Aluno_id) REFERENCES aluno (IDaluno);

--Adicionando chave estangeira no endereco_id
ALTER TABLE 
    endereco_aluno
ADD
    CONSTRAINT FK_endereco_id FOREIGN KEY (endereco_id) REFERENCES endereco (IDendereco);

--ja criada
CREATE TABLE telefones
(
    IDtelefone INT PRIMARY KEY IDENTITY, --PK
    telefone NVARCHAR(20) NOT NULL
);

--ja criada
CREATE TABLE telefone_alunos
(
    id_telefone INT, --FK
    idAluno INT --FK
);

--Adicionando chave estrangeira no id_telefone
ALTER TABLE 
    telefone_aluno
ADD
    CONSTRAINT FK_id_telefone FOREIGN KEY (id_telefone) REFERENCES telefones (IDtelefone);

--Adicionando chave estrangeira no idAluno
ALTER TABLE 
    telefone_aluno
ADD
    CONSTRAINT FK_id_Aluno FOREIGN KEY (idAluno) REFERENCES aluno (IDaluno);




/*Parte do banco empresa*/



--ja criada
CREATE TABLE empresa
(
    IDempresa INT PRIMARY KEY, --PK
    nome_empresa NVARCHAR(60) NOT NULL,
    razao_social NVARCHAR(60) NOT NULL,
    cnpj NVARCHAR(18) NOT NULL UNIQUE,
    id_endereco INT NOT NULL,
    email_corporativo NVARCHAR(100) NOT NULL,
    --foto_perfil FILESTREAM
    web NVARCHAR(2048)
);

--ja criada
CREATE TABLE vaga
(
    IDvaga INT PRIMARY KEY IDENTITY, --PK
    nome_vaga NVARCHAR(100) NOT NULL,
    salario FLOAT NOT NULL,
    nivel_vaga NVARCHAR(45) NOT NULL,
    data_abertura DATE NOT NULL,
    data_fechamento DATE NOT NULL,
    modelo_contrataco NVARCHAR(10),
    modalidade_de_trabalho NVARCHAR(45) NOT NULL,
    cidade_vaga NVARCHAR(60) NOT NULL,
    empresa_id INT, -- FK
    descricao NVARCHAR(300) NOT NULL
);

--Adicionando FOREIGN KEY na empresa_id da TABLE vagas
ALTER TABLE 
    vagas
ADD
    CONSTRAINT FK_empresa_id FOREIGN KEY(empresa_id) REFERENCES empresas (IDempresa)

--ja criada
CREATE TABLE endereco_empresa
(
    id_empresa INT,
    id_endereco INT
);

--Adicionando FOREIGN KEY nas colunas (id_empresa & idendereco) na TABLE endereco_empresas
ALTER TABLE 
    endereco_empresas
ADD
    CONSTRAINT FK_id_empresa FOREIGN KEY(id_empresa) REFERENCES empresas (IDempresa)

ALTER TABLE
    endereco_empresas
ADD
    CONSTRAINT FK_enderecoID FOREIGN KEY(idendereco) REFERENCES enderecos (IDendereco)

--ja criada
CREATE TABLE telefone_empresa
(
    ID_telefone INT,
    ID_empresa INT
);

--Adicionando 
ALTER TABLE
    telefone_empresa
ADD
    CONSTRAINT fk_IDtelefone FOREIGN KEY(ID_telefone) REFERENCES telefones (IDtelefone)

ALTER TABLE
    telefone_empresas
ADD
    CONSTRAINT FK_IDempresa FOREIGN KEY (ID_empresa) REFERENCES empresas (IDempresa)