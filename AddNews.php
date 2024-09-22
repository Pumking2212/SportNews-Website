<?php
session_start();
if (!isset($_SESSION["user"])) {
    header('location:admin_login.php');
    exit;
}

$page = 'product';
include('include/header.php');
?>

<div style="margin-left:17%; width: 80%;">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item active"><a href="news_control.php">News</a></li>
        <li class="breadcrumb-item active">Add News</li>
    </ul>
</div>

<div style="width: 70%; margin-left: 25%;">
    <form action="AddNews.php" method="post" enctype="multipart/form-data" name="categoryform" onsubmit="return validateform()">
        <h1>Add News</h1>
        <hr>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" placeholder="Title..." name="title" class="form-control" id="title">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" placeholder="Description..." rows="5" name="description" id="description"></textarea>
        </div>

        <div class="form-group">
            <label for="content">Content:</label>
            <textarea class="form-control" placeholder="Content..." rows="10" name="content" id="content"></textarea>
        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" class="form-control" id="date">
        </div>

        <div class="form-group">
            <label for="thumbnail">Thumbnail:</label>
            <input type="file" name="thumbnail" class="form-control img-thumbnail" id="thumbnail">
        </div>

        <div class="form-group">
            <label for="images">Additional Images:</label>
            <input type="file" name="images[]" class="form-control img-thumbnail" id="images" multiple>
        </div>

        <div class="form-group">
            <label for="category">Category:</label>
            <select class="form-control" name="category">
                <?php
                include('php/database.php');
                $query = mysqli_query($conn, "select * from category");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <option value="<?php echo $row['category_name']; ?>"><?php echo $row['category_name']; ?></option>
                <?php } ?>
            </select>
        </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
    </form>
    <script>
        function validateform() {
            var x = document.forms['categoryform']['title'].value;
            var y = document.forms['categoryform']['description'].value;
            var z = document.forms['categoryform']['date'].value;
            var w = document.forms['categoryform']['category'].value;
            if (x == "") {
                alert('Title Must Be Filled Out !');
                return false;
            }
            if (y == "") {
                alert('Description Must Be Filled Out !');
                return false;
            }
            if (y.length < 10) {
                alert('Description Atleast 10 character !');
                return false;
            }
        }
    </script>
</div>

<?php
include('include/footer.php');
?>

<?php
include('php/database.php');
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content']; 
    $date = $_POST['date'];
    $category = $_POST['category'];
    

    $thumbnail = $_FILES['thumbnail']['name'];
    $tmp_thumbnail = $_FILES['thumbnail']['tmp_name'];
    move_uploaded_file($tmp_thumbnail, "image/$thumbnail");

        $query1 = mysqli_prepare($conn, "INSERT INTO news (title, description, content, date, category, thumbnail) VALUES (?, ?, ?, ?, ?, ?)");

        mysqli_stmt_bind_param($query1, "ssssss", $title, $description, $content, $date, $category, $thumbnail);

        if (mysqli_stmt_execute($query1)) {
            $news_id = mysqli_insert_id($conn);

            if (!empty($_FILES['images']['name'][0])) {
                $total_images = count($_FILES['images']['name']);
                for ($i = 0; $i < $total_images; $i++) {
                    $image_name = $_FILES['images']['name'][$i];
                    $tmp_image_name = $_FILES['images']['tmp_name'][$i];
                    move_uploaded_file($tmp_image_name, "image/$image_name");

                    mysqli_query($conn, "INSERT INTO news_images(news_id, image) VALUES ('$news_id','$image_name')");
                }
            }

            echo "<script>alert('News uploaded Successfully !!')</script>  ";
        } else {
            echo "<script>alert('Please Try Again!!')</script>  ";
        }

}
?>
