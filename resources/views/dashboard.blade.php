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
    <title>Dashboard</title>
    <link rel="icon" style="border: none; border-radius: 50%" href="data:image/png;base64,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">

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
                             Last Update 
                                <div class="float-end border p-1 mr-2 rounded-pill bg-success text-white">
                                    {{ $task->updated_at->diffForHumans() }}
                                </div>
                            @else
                               Not Updated 
                            @endif
                        </div>
                        @if ($task->user_id == auth()->user()->id || auth()->user()->user_type == 1)
                            <div class="d-flex justify-content-end align-items-end">
                                <a href="{{route('tasks.delete', $task->id)}}" class="btn btn-outline-danger m-2 mt-5 d-flex justify-content-end align-items-center">
                                    <ion-icon class="fs-5" style="margin-right: 10%" name="trash"></ion-icon> Delete
                                </a>
                                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-outline-warning  m-2 mt-5 d-flex justify-content-end align-items-center">
                                    <ion-icon class="fs-5" style="margin-right: 10%" name="open"></ion-icon> Edit
                                </a>
                            </div>
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
