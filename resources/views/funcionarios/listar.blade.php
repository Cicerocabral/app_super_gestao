<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar um novo Funcionário</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        Bem vindo a listagem de Funcionários
    <table id="listagem" class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Chapa Funcionário</th>
        <th>Nome Funcionário</th>
        <th>Setor Funcionário</th>
        <th>Email Funcionário</th>
      </tr>
    </thead>
    <tbody>
      @foreach($Produto as $p)
        <tr>
          <td>{{ $p->chapa }}</td>
          <td>{{ $p->nome }}</td>
          <td>{{ $p->setor }}</td>
          <td>{{ $p->email }}</td>
          <td><a href="/funcionarios/listar"><span class="glyphicon glyphicon-pencil"></span></a></td>
          {{-- <td><a href="/ListarCategoria/remove/{{ $c->id_categoria }}"><span class="glyphicon glyphicon-trash"></span></a></td> --}}
        </tr>     
      @endforeach
    </tbody>
  </table>
    </body>
</html>
