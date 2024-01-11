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
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src=".././/assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            
            <div class="container mt-5">
        <h1>Create a New Wiki</h1>

        <!-- Your HTML form for creating a wiki -->
        <form method="post" action="?action=createWiki" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="creation_date">Creation Date:</label>
                <input type="date" class="form-control" name="creation_date" required>
            </div>

            <div class="form-group">
                <label for="thumbnail">Thumbnail (Image):</label>
                <input type="file" class="form-control" name="thumbnail" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="category">Select a Category:</label>
                <select class="form-control" name="category" required>
                    <option value="1">Technology</option>
                    <option value="2">Science</option>
                    <option value="3">Art</option>
                    <!-- Add more categories as needed -->
                </select>
            </div>

            <!-- Display selected tags dynamically -->
            <div class="form-group">
                <label for="selectedTags">Selected Tags:</label>
                <div id="selectedTags"></div>
            </div>

            <!-- Dropdown for selecting tags -->
            <div class="form-group">
                <label for="tags">Select Tags (up to 5):</label>
                <select class="form-control selectpicker" name="tags[]" data-live-search="true" multiple required>
                    <option value="1">Programming</option>
                    <option value="2">Web Development</option>
                    <option value="3">Space</option>
                    <option value="4">Painting</option>
                    <option value="5">Travel</option>
                    <option value="6">Health</option>
                    <option value="7">Music</option>
                    <option value="8">Food</option>
                    <option value="9">Sports</option>
                    <option value="10">Fashion</option>
                    <!-- Add more tags as needed -->
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create Wiki</button>
        </form>
        <div style="margin-top: 40px;"></div>
    
    <!-- Bootstrap Select JS (requires Bootstrap JS) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

   





    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>