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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
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
                    <a href="?action=statistics">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                
                <li>
                    <a href="http://localhost/WIKIS/public/index.php?action=showCategories">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">categories</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Last posts</span>
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
    <h1 class="text-primary">All Categories</h1>
    <a href="../Views/add_category.php" class="btn btn-primary">Add New</a>
    <table class="table table-bordered table-hover table-striped">
        <thead class="bg-primary text-white">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions </th>
            </tr>
        </thead>
        <tbody>
    <?php foreach ($categories as $category) : ?>
        <tr>
            <td><?php echo $category['id']; ?></td>
            <td><?php echo $category['name']; ?></td>
            <td>
                <!-- Edit Action -->
                <a href="http://localhost/WIKIS/public/index.php?action=showUpdateForm&categoryId=<?php echo $category['id']; ?>" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit"></i> Edit
                </a>

                <!-- Delete Action -->
                <a href="http://localhost/WIKIS/public/index.php?action=deleteCategory&categoryId=<?php echo $category['id']; ?>" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash"></i> Delete
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
    </table>
</div>

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            
    
    <!-- Bootstrap Select JS (requires Bootstrap JS) -->
    

   <!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>





    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>