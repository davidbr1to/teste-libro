# teste-libro

Este repositório contém um mini projeto em Laravel feito para um teste prático de Back-end para um estágio, seguindo na medida do possível os requisitos presentes na documentação do teste.

Curiosamente, esta foi a minha primeira vez criando uma aplicação com Rest, e portanto eu acabei com algumas dificuldades que não estava esperando.

O projeto foi feito inteiramente utilizando php e Laravel, e segue todas os padrões de instalação para o uso do mesmo, bastando alterar as opções do arquivo .env.example para o banco de dados de sua preferência, e renomear o arquivo para apenas .env .

Nesta aplicação, é possível fazer todo o CRUD de Alunos e Cursos, e caso alunos e cursos existam no banco de dados, também é possível fazer todo o CRUD de Matrícula.

Utilizando o comando php artisan db:seed, é possível povoar o banco de dados com alunos e cursos gerados automaticamente, e é possível ver uma lista completa com todos eles ao abrir a página http://127.0.0.1:8000/api/alunos (ou /cursos) após utilizar o comando php artisan serve no terminal.

Também é possível ver os detalhes de um aluno específico ao digitar o email do mesmo no navegador (http://127.0.0.1:8000/api/alunos/exemplo@exemplo.com).

Para adicionar, atualizar e deletar alunos, cursos e matrículas, é necessário o uso de um software que lida com requisições, como o Postman, por exemplo.

Todas as rotas utilizadas no projeto podem ser encontradas no caminho routes/api.php.

Por fim, este teste prático de back-end foi uma experiência muito interessante para mim, e apesar do resultado não ter ficado da forma que eu esperava, ele foi muito proveitoso para não só me mostrar como testes práticos funcionam no mercado de trabalho, como para também me mostrar algumas áreas de conhecimento que eu preciso e devo estudar para futuras oportunidades.

Muito obrigado pela oportunidade de realizar este teste, independente de ele me render uma aprovação ou não.