# padawan-ideas-api

É uma RESTFul API, desenvolvida por ![David Camurça](https://github.com/davidscamurca), ![Jerlilson Silva](https://github.com/Jerlilson), ![Renata Nunes](https://github.com/Renata-SN), ![Thiago Vinhote](https://github.com/thiagovinhote), implementada com PHP, utilizda como projeto final para a disciplina de Arquitetura de Software, ministrada pelo Professor ![Eder Franco](https://github.com/ederfranco23), no curso de Engenharia de Software 2017/2 da Faculdade FUCAPI.

# Documentação
| Verbo | Caminho/Recurso | Ação |
| ----- | --------------- |------- |
| GET   | /ideia<br>/metodologia<br>/roteiro<br>/time<br>/usuario | Mostra todos |  
| GET   | /ideia/{id}<br>/metodologia/{id}<br>/roteiro/{id}<br>/time/{id}<br>/usuario/{id} | Mostra por ID |
| POST  | /ideia<br>/metodologia<br>/roteiro<br>/time<br>/usuario | Cria um novo registro  |
| PUT   | /ideia/{id}<br>/metodologia/{id}<br>/roteiro/{id}<br>/time/{id}<br>/usuario/{id} | Atualiza todos os campos por ID |
| PATCH | /ideia/{id}<br>/metodologia/{id}<br>/roteiro/{id}<br>/time/{id}<br>/usuario/{id} | Atualiza alguns campos por ID   |
| OPTIONS | /ideia<br>/metodologia<br>/roteiro<br>/time<br>/usuario | Mostra as operações que o recursos pode realizar |


# Testando a API

  1. Clone este repositório, adicione em sua pasta `htdocs`, caso esteja utilizando o Apache.
  2. Importe as tabelas do arquivo `DBPadaua.sql` para uma base de dados, recomendados que esteja utilizando o MySQL.
  3. URL inicial: `http://localhost:8080/padawan-ideas-api`

# Exemplo - GET

  Para fazer a requisição use: `http://localhost:8080/padawan-ideas-api/usuario/1`, utilizando o verbo `GET`.

```json
  {
    "id": "1",
    "nome": "Maria Rita da Rocha",
    "email": "mariarita@gmail.com",
    "link_linkedin": "Não possui",
    "celular": "(97) 991751481",
    "nick": "rita_maravilhosa",
    "senha": "anaclara"
  }
```

# Exemplo - POST

  Para fazer a requisição use: `http://localhost:8080/padawan-ideas-api/usuario`, utilizando o verbo `POST`.

```json
  {
    "nome": "Maria Rita da Rocha",
    "email": "mariarita@gmail.com",
    "link_linkedin": "Não possui",
    "celular": "(97) 991751481",
    "nick": "rita_maravilhosa",
    "senha": "anaclara"
  }
```

# Exemplo - PUT

  Para fazer a requisição use: `localhost:8080/padawan-ideas-api/ideia/1`, utilizando o verbo `PUT`.

```json
  {
    "nome": "Econimize água",
    "descricao": "Equipamento residencial que auxilia na econmia de água.",
    "data_criacao": "0000-00-00",
    "usuario_id": "1"
  }
```

# Exemplo - PATCH
  
  Para fazer a requisição use: `localhost:8080/padawan-ideas-api/ideia/1`, utilizando o verbo `PATCH`.

```json
  {
    "nome": "Econimize água"
  }
```

# Exemplo - OPTIONS

  Para fazer a requisição use: `http://localhost:8080/padawan-ideas-api/usuario`, utilizando o verbo `OPTIONS`.

```json
  {
    "nome": "Usuario",
    "endpoint": "http://localhost:8080/padawan-ideas-api/usuario",
    "recursos": [
        {
            "action": "POST",
            "fields": [
                {
                    "field": "nome",
                    "type": "string",
                    "required": "true",
                    "max_length": 100
                },
                {
                    "field": "email",
                    "type": "string",
                    "required": "true",
                    "max_length": 100
                },
                {
                    "field": "link_linkedin",
                    "type": "string",
                    "required": "false",
                    "max_length": 200
                },
                {
                    "field": "celular",
                    "type": "string",
                    "required": "true",
                    "max_length": 13
                },
                {
                    "field": "senha",
                    "type": "string",
                    "required": "true",
                    "max_length": 20
                }
            ]
        },
        {
            "action": "GET",
            "fields": [
                {
                    "field": "id",
                    "type": "int",
                    "required": "false"
                }
            ]
        },
        {
            "action": "PUT",
            "fields": [
                {
                    "field": "nome",
                    "type": "string",
                    "required": "false",
                    "max_length": 100
                },
                {
                    "field": "email",
                    "type": "string",
                    "required": "false",
                    "max_length": 100
                },
                {
                    "field": "link_linkedin",
                    "type": "string",
                    "required": "false",
                    "max_length": 200
                },
                {
                    "field": "celular",
                    "type": "string",
                    "required": "false",
                    "max_length": 13
                },
                {
                    "field": "senha",
                    "type": "string",
                    "required": "false",
                    "max_length": 20
                }
            ]
        }
    ]
}
```


# License

MIT License

Copyright (c) 2017 David Camurça

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
