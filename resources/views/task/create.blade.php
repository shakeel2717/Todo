<!DOCTYPE html>
<html lang="en">

<head>
    <title>Todo Task Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Todo Task Project</h1>
        <p>Add your Daily Life Tasks</p>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>Add new Task</h2>
                            <a href="{{ route('task.index') }}" class="btn btn-primary">Go Back</a>
                        </div>
                        <form action="{{ route('task.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="task">Add Task</label>
                                <input type="text" name="task" id="task" class="form-control">
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-outline-primary">Add Task</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
