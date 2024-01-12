<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wiki-s</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Select CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css" rel="stylesheet">
</head>

<body>
    <!-- =============== Navigation ================ -->
   
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                        <img src="../assets/imgs/wikipedia.png" style="width: 48px; height: 48px;" alt="">
                        </span>
                        <span class="title">WIKI-S</span>
                    </a>
                </li>

                <li>
                    <a href="author.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Add Posts</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">View Posts</span>
                    </a>
                </li>
                <li>
                    <a href="../public/index.php?action=logout">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        
        <div class="container mr-2">
        <h1>Create New Wiki</h1>

    <form action="process_form.php" method="post" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>

        
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
        </div>

        
        <div class="form-group">
            <label for="category">Category:</label>
            <select class="form-control" id="category" name="category" required>
              
                <option value="1">Category 1</option>
                <option value="2">Category 2</option>
               
            </select>
        </div>

        
        <div class="form-group">
            <label>Tags:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag1" name="tags[]" value="1">
                <label class="form-check-label" for="tag1">Tag 1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag2" name="tags[]" value="2">
                <label class="form-check-label" for="tag2">Tag 2</label>
            </div>
           
        </div>

        <!-- Image Upload -->
        <div class="form-group">
            <label for="image">Upload Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create Wiki</button>
    </form>
</div>
    <!-- Bootstrap Select JS (requires Bootstrap JS) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>