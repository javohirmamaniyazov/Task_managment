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
    <style>
        .dropdown-menu[data-bs-popper]{
            right: 0;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/dashboard">Task App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('tasks/create')}}">New Task</a>
                    </li>
                </ul>
            </div>
    
            <div class="d-none d-sm-flex items-center ml-3">
                <div class="dropdown">
                    <a class="btn btn-light btn-sm dropdown-toggle" href="#" role="button" id="settingsDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    
                    </a>
            
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="settingsDropdown">
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                            {{ __('Profile') }}
                        </a>
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            
                            <button class="dropdown-item" type="submit">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    

    <div class="container">
        @include('_messages')
       <div class="card mt-3">
            <div class="card-header">
                My Tasks
                <a href="{{ url('tasks/create')}}" class="btn btn-outline-primary float-end d-flex align-items-center justify-content-between"> <ion-icon class="fs-5" name="add-circle"></ion-icon> Create Task</a>
            </div>
            <div class="card-body">
                @foreach ($tasks as $task)
                <div class="card m-2">
                        <div class="card-header">
                        {{$task->name}} - Created By: {{ $task->user->name}}
                        <div class="float-end border p-1 rounded-pill bg-warning">
                             {{ $task->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <div class="card-body p-3">
                        {{$task->description}}
                        <div class="float-start mt-5 d-flex justify-content-start align-items-center w-50">
                            @if ($task->status == 0)
                                <span class="btn btn-outline-success" style="margin-right: 2%">
                                    ToDo
                                </span> 
                            @else 
                                <span class="btn btn-outline-primary" style="margin-right: 2%">
                                    Done
                                </span> 
                            @endif
                            @if (!empty($task->updated_at))
                             Last Update {{ $task->updated_at->diffForHumans() }}
                            @else
                               Not Updated 
                            @endif
                        </div>
                        @if ($task->user_id == auth()->user()->id || auth()->user()->user_type == 1)
                            <a href="{{route('tasks.delete', $task->id)}}" class="btn btn-outline-danger float-end m-2 mt-5 d-flex justify-content-end align-items-center">
                                <ion-icon class="fs-5" style="margin-right: 10%" name="trash"></ion-icon> Delete
                            </a>
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-outline-warning float-end mr-3 mt-5 d-flex justify-content-end align-items-center">
                                <ion-icon class="fs-5" style="margin-right: 10%" name="open"></ion-icon> Edit
                            </a>
                        @endif

                    </div>
                </div>
                @endforeach
            </div>
       </div>
    </div>



    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>
