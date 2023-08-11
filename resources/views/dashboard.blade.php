<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/dashboard">Task App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">New Task</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
       <div class="card mt-5">
            <div class="card-header">
                My Tasks

                <a href="/create" class="btn btn-outline-primary float-end d-flex align-items-center justify-content-between"> <ion-icon class="fs-5" name="add-circle"></ion-icon> Create Task</a>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        Title
                        <div class="float-end border p-1 rounded-pill bg-warning">
                            24 second ago
                        </div>
                    </div>
                    <div class="card-body p-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ut nam nostrum ad voluptatibus cum maxime dolores et, ea consequatur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ut nam nostrum ad voluptatibus cum maxime dolores et, ea consequatur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ut nam nostrum ad voluptatibus cum maxime dolores et, ea consequatur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ut nam nostrum ad voluptatibus cum maxime dolores et, ea consequatur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ut nam nostrum ad voluptatibus cum maxime dolores et, ea consequatur.
                        
                        <div class="float-start mt-5 d-flex justify-content-start align-items-center w-50">
                            <a href="#" class="btn btn-outline-primary" style="margin-right: 2%">
                                Done
                            </a> 
                            Last update - 1 second ago
                        </div>
                        
                        <a href="#" class="btn btn-outline-success float-end mt-5 d-flex justify-content-end align-items-center">
                            <ion-icon class="fs-5" style="margin-right: 10%" name="eye"></ion-icon> Ko'rish
                        </a>
                    </div>
                </div>
            </div>
       </div>
    </div>



    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>
