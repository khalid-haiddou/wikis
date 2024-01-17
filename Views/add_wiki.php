<!-- add_wiki.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Wiki</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="mt-4 mb-4">Add New Wiki</h1>

    <form method="post" action="?action=addWiki">
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" name="title" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content:</label>
            <textarea class="form-control" name="content" required></textarea>
        </div>
        
                <div class="mb-3">
                    <label for="category" class="form-label">Select Category:</label>
                    <select class="form-control" name="category" required>
                        <option value="" selected disabled>-- Select Category --</option>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
        
                <div class="mb-3">
            <label for="tags" class="form-label">Select Tags (Select more than 3):</label>
            <select class="form-control" name="tags[]" multiple required>
                <!-- Display fetched tags  -->
                <?php foreach ($tags as $tag) : ?>
                    <option value="<?php echo $tag['id']; ?>"><?php echo $tag['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        
        <input type="hidden" name="authorID" value="1"> 

        <button type="submit" class="btn btn-primary">Add Wiki</button>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
