<?php
include 'partials/header.php';

//fetch current user's posts from databse
$current_user_id = $_SESSION['user-id'];
$query = "SELECT id, title, category_id FROM posts WHERE author_id=$current_user_id ORDER BY id DESC";
$posts = mysqli_query($connection, $query);


?>
 
<section class="dashboard">

    <?php if(isset($_SESSION['add-category-success'])) : // show if add post was successful
    ?>
        <div class="alter__message container">
            <p>
                <?= $_SESSION['add-post-success'];
                unset($_SESSION['add-category-success']);
                ?>
            </p>
        </div>
    <?php endif ?>
    <div class="container dashboard__container">
        <button id ="show__sidebar-btn" class="slidebar__toggle"><i class="fa fa-angle-right"></i></button>
        <button id ="hide__sidebar-btn" class="slidebar__toggle"><i class="fa fa-angle-left"></i></button>


        <aside>
            <ul>
                <li>
                    <a href="add-post.php"><i class="icon-pencil"></i>
                        <h5>Add Post</h5>
                    </a>
                </li>

                <li>
                    <a href="index.php" class="active"><i class="fa fa-envelope"></i>
                        <h5>Manage Posts</h5>
                    </a>
                </li>
                <?php if(isset($_SESSION['user_is_admin'])): ?>
                <li>
                    <a href="add-user.php"><i class="fa fa-user-plus"></i>
                        <h5>Add Users</h5>
                    </a>
                </li>

                <!-- manage-users.php -->
                <li>
                    <a href="manage-users.php"><i class="fa fa-users"></i>
                        <h5>Manage Users</h5>
                    </a>
                </li>

                <li>
                    <a href="add-category.php"><i class="fa fa-edit"></i>
                        <h5>Add category</h5>
                    </a>
                </li>

                <li>
                    <a href="manage-categories.php"><i class="fa fa-list"></i>
                        <h5>Manage Categories</h5>
                    </a>
                </li>
                <?php endif ?>
            </ul>

        </aside>
        <main>

            <h2>Manage Posts</h2>
            <?php if(mysqli_num_rows($posts) > 0) : ?>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
            
                <tbody>

                <?php while($post = mysqli_fetch_assoc($posts)) : ?>
                    <!-- get category title of each posts from categories table -->

                    <?php 
                        $category_id = $post['category_id'];
                        $category_query = "SELECT title FROM categories WHERE id=$category_id";
                        $category_result = mysqli_query($connection, $category_query);
                        $category = mysqli_fetch_assoc(($category_result));
                    ?>
                    <tr>
                        <td><?= $post['title'] ?></td>
                        <td><?= $category['title'] ?></td>
                        <td><a href="<? ROOT_URL ?>admin/edit-post.php?id=<?= $post['id'] ?>" class="btn sm">Edit</a></td>
                        <td><a href="<? ROOT_URL ?>admin/delete-post.php?id=<?= $post['id'] ?>" class="btn sm danger">Delete</a></td>
                    </tr>
                <?php endwhile ?>
                </tbody>
            </table>

            <?php else : ?>
                <div class="alert__message error"><?= "NO posts found" ?></div>
            <?php endif ?>
        </main>

    </div>
</section>


<?php
include '../partials/footer.php'
?>
   