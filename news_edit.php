<?php
session_start();
if (!isset($_SESSION["user"])) {
    header('location:admin_login.php');
    exit;
}

include('include/header.php');
include('php/database.php');

$id = $_GET['edit'];
$query = mysqli_query($conn, "SELECT * FROM news WHERE id ='$id'");
while ($row = mysqli_fetch_array($query)) {
    $id = $row['id'];
    $title = $row['title'];
    $description = $row['description'];
    $content = $row['content'];
    $date = $row['date'];
    $thumbnail = $row['thumbnail'];
    $category = $row['category'];
}
?>

<div style="margin-left:17%;  width: 80%;">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active"><a href="home.php">Home</a></li>
        <li class="breadcrumb-item active"><a href="news_control.php">News</a></li>
        <li class="breadcrumb-item active">Edit News</li>
    </ul>
</div>

<div style="width: 70%; margin-left: 25%;">
    <form action="news_edit.php" method="post" enctype="multipart/form-data" name="categoryform" onsubmit="return validateform()">
        <h1>Edit News</h1>
        <hr>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" value="<?php echo $title; ?>" placeholder="Title..." name="title" class="form-control" id="title">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" placeholder="Description..." rows="5" name="description" id="description"><?php echo $description; ?></textarea>
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea class="form-control" placeholder="Content..." rows="10" name="content" id="content"><?php echo $content; ?></textarea>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" value="<?php echo $date; ?>" class="form-control" id="date">
        </div>

        <div class="form-group">
            <label for="thumbnail">Thumbnail:</label>
            <input type="file" name="thumbnail" class="form-control img-thumbnail" id="thumbnail">
            <img class="img img-thumbnail" src="images/<?php echo $thumbnail; ?>" alt="" width="300">
        </div>

        <div class="form-group">
            <label for="additional_images">Additional Images:</label>
            <input type="file" name="additional_images[]" class="form-control img-thumbnail" id="additional_images" multiple>
        </div>

        <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">

        <div class="form-group">
            <label for="category">Category:</label>
            <select class="form-control" name="category">
                <?php
                $query = mysqli_query($conn, "SELECT * FROM category");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <option value="<?php echo $row['category_name']; ?>" <?php if ($category == $row['category_name']) echo "selected"; ?>><?php echo $row['category_name']; ?></option>
                <?php } ?>
            </select>
        </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Update">
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

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $date = $_POST['date'];
    $category = $_POST['category'];

    if (!empty($_FILES['thumbnail']['name'])) {
        $thumbnail = $_FILES['thumbnail']['name'];
        $tmp_thumbnail = $_FILES['thumbnail']['tmp_name'];
        move_uploaded_file($tmp_thumbnail, "images/$thumbnail");

        $update_thumbnail_query = mysqli_prepare($conn, "UPDATE news SET thumbnail=? WHERE id=?");
        mysqli_stmt_bind_param($update_thumbnail_query, "si", $thumbnail, $id);
        if (!mysqli_stmt_execute($update_thumbnail_query)) {
            echo "<script>alert('Failed to update thumbnail.')</script>";
            exit;
        }
    }

    $update_news_query = mysqli_prepare($conn, "UPDATE news SET title=?, description=?, content=?, date=?, category=? WHERE id=?");
    mysqli_stmt_bind_param($update_news_query, "sssssi", $title, $description, $content, $date, $category, $id);
    if (mysqli_stmt_execute($update_news_query)) {
        if (!empty($_FILES['additional_images']['name'][0])) {
            $total_images = count($_FILES['additional_images']['name']);
            for ($i = 0; $i < $total_images; $i++) {
                $image_name = $_FILES['additional_images']['name'][$i];
                $tmp_image_name = $_FILES['additional_images']['tmp_name'][$i];
                move_uploaded_file($tmp_image_name, "image/$image_name");

                $insert_image_query = mysqli_prepare($conn, "INSERT INTO news_images (news_id, image) VALUES (?, ?) ON DUPLICATE KEY UPDATE image = VALUES(image)");
                mysqli_stmt_bind_param($insert_image_query, "is", $id, $image_name);
                if (!mysqli_stmt_execute($insert_image_query)) {
                    echo "<script>alert('Failed to insert or update additional image.')</script>";
                    exit;
                }
            }
        }

        echo "<script>window.location='news_control.php';</script>";
    } else {
        echo "<script>alert('Failed to update news. Please try again.')</script>";
    }
}
?>
