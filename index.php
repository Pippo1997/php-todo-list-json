<?php  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div id="app">
        <!-- TITOLO -->
        <div class="container title text-center p-2">
            <h1>To Do List</h1>
        </div>
        <!-- LISTA -->
        <div class="row">
            <div class="col">
                <div class="card m-5 p-4 height-card">
                    <div class="row">
                        <div class="col">
                            <div class="container-item">
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between align-items-center">
                                        <div class="my-3">
                                            
                                        </div>
                                        <button class="btn btn-danger btn-square">x</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- INPUT -->
        <div class="row">
            <div class="col">
                <div class="container-input d-flex gap-3 my-3 m-5">
                    <input type="text" class="form-control w-75" placeholder="Scrivi gli anime da aggiungere alla lista">
                    <button class="btn btn-success w-25">Aggiungi Anime</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>