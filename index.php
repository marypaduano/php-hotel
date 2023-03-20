<?php

$hotels = [

  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],

];
?>;

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotels</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Tabella Hotel</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Descrizione</th>
                                    <th scope="col">Parking</th>
                                    <th scope="col">Voto</th>
                                    <th scope="col">Distanza dal centro</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($hotels as $key => $value) { ?>
                                <tr>
                                    <th scope="row"><?= $key +1 ?></th>
                                    <td><?= $value["name"] ?></td>
                                    <td><?= $value["description"] ?></td>
                                    <td><?= $value["parking"] ? "Disponibile" : "Non disponibile" ?></td>
                                    <td><?= $value["vote"] ?></td>
                                    <td><?= $value["distance_to_center"] . " km" ?></td>
                                </tr>
                                <?php
                                  };
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- BONUS -->
        
        <div class="container mt-3 d-flex justify-content-center">
          <form action="" method="GET">
          <!-- parcheggio -->
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="parking">
              <label class="form-check-label" for="flexSwitchCheckDefault">Parcheggio</label>
            </div>
          <!-- vote -->
            <select class="form-select" name="star" for="star">
              <option selected>Stelle</option>
              <option value="1">1 o più</option>
              <option value="2">2 o più</option>
              <option value="3">3 o più</option>
              <option value="4">4 o più</option>
              <option value="5">5</option>
          </select>
        <button class="btn btn-danger ">Filtra</button>
        
        </form>
      </div>
      <?php 
       
        
        
          
      ?>
        
</body>

</html>