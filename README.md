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

# Exemplo, requisitando usuário por ID

  1. Clone este repositório, adicione em sua pasta htdocs, caso esteja utilizando o Apache.
  2. Importe as tabelas do arquivo `DBPadaua.sql` para uma base de dados, recomendados que esteja utilizando o MySQL.
  3. Para fazer a requisição use: `localhost:8080/padawan-ideas-api/usuario/1`

```json 
  {
    "id": "1",
    "nome": "Maria Rita da Rocha",
    "email": "mariarita@gmail.com",
    "link_linkedin": "Não possui",
    "celular": "(97) 991751481",
    "nick": "rita_maravilhosa",
    "senha": "anaclara"
  }```


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
