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
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>All Tasks</h2>
                    <a href="{{ route('task.create') }}" class="btn btn-primary">Add new Task</a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

</body>
</html>
