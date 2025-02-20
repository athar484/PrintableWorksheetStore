<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Upload Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .form-control:focus {
            box-shadow: none;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    
    <a href="auth.php">Log in with Google</a>
    
    <div class="container">
        <h2 class="text-center">Upload Your Video</h2>
        <form>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter video title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="4" placeholder="Enter video description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="keywords" class="form-label">Keywords</label>
                <input type="text" class="form-control" id="keywords" placeholder="Enter keywords, separated by commas" required>
            </div>
            <div class="mb-3">
                <label for="video" class="form-label">Upload Video</label>
                <input class="form-control" type="file" id="video" accept="video/*" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Upload Video</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
