<!-- views/wikis.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wikis</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa; /* Light blue background color */
        }

        .container {
            background-color: #ffffff; /* White container background color */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        h1 {
            color: #007bff; /* Blue heading color */
        }

        th, td {
            text-align: center;
        }

        table {
            background-color: #ffffff; /* White table background color */
        }

        .btn-warning {
            background-color: #ffc107; /* Yellow button color for Edit */
            border-color: #ffc107;
        }

        .btn-danger {
            background-color: #dc3545; /* Red button color for Delete */
            border-color: #dc3545;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="mt-4 mb-4">Wikis</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Content</th>
                <th>Author</th>
                <th>CreationDate</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wikis as $wiki) : ?>
                <tr>
                    <td><?php echo $wiki['title']; ?></td>
                    <td><?php echo $wiki['description']; ?></td>
                    <td><?php echo $wiki['content']; ?></td>
                    <td><?php echo $wiki['author']; ?></td>
                    <td><?php echo $wiki['creationDate']; ?></td>
                    <td><?php echo $wiki['category']; ?></td>
                    <td>
                        <a href="index.php?action=editwiki&id=<?php echo $wiki['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="index.php?action=deletewiki&id=<?php echo $wiki['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
