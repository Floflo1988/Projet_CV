<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style media="text/css">
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css"/>
  </style>
    <title>Formations</title>
  </head>
  <body>


    <div class="container">
  <h2>Formations</h2>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Année </th>
        <th>Intitulé de la formation</th>
        <th>Description</th>
        <th>Université</th>
        <th>Mention</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{$anneeform1}</td>
        <td>{$intituleform1}</td>
        <td>{$description1}</td>
        <td>{$univ1}</td>
        <td>{$mention1}</td>
      </tr>
     <tr>
        <td>{$anneeform2}</td>
        <td>{$intituleform2}</td>
        <td>{$description2}</td>
        <td>{$univ2}</td>
        <td>{$mention2}</td>
      </tr>
      <tr>
        <td>{$anneeform3}</td>
        <td>{$intituleform3}</td>
        <td>{$description3}</td>
        <td>{$univ3}</td>
        <td>{$mention3}</td>
      </tr>
    </tbody>
  </table>
</div>

  </body>
</html>
