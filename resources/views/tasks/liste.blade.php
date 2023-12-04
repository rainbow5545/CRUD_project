<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD WITH LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
        <div class="row">
          <div class="col s12">
            <h1>CRUD WITH LARAVEL</h1>
            <hr>
            <a href="/ajouter" class="btn btn-primary">Ajouter une tache</a>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>NOMS</th>
                        <th>ROLES</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($taches as $tache)
                    <tr>
                        <th>{{ $tache->id }}</th>
                        <td>{{ $tache->NOMS }}</td>
                        <td>{{ $tache->ROLES }}</td>
                        <td>
                            <a href="/update-tasks/{{{{ $tache->id }}}}" class="btn btn-info">update</a>
                            <a href="#" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
