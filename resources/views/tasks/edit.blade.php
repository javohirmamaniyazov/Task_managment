<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 1200px;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
        }
        .form-label {
            font-weight: bold;
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
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Edit Task - {{$task->name}}

                <p class="d-flex justify-content-end">Created by:  {{ $creatorName }}</p>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Task Name</label>
                        <input type="text" class="form-control" id="name" name="name" required value="{{$task->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $task->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option {{ old('status', $task->status) == 0 ? 'selected' : '' }} value="0">Todo</option>
                            <option {{ old('status', $task->status) == 1 ? 'selected' : '' }} value="1">Done</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Task</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
