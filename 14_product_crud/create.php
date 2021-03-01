<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//echo '<pre>';
//var_dump($_SERVER);
//echo '</pre>';
//echo $_SERVER['REQUEST_METHOD'].'<br>';

//echo '<pre>';
//var_dump($_FILES);
//echo '</pre>';
//exit;

$errors = [];
$title = '';
$description = '';
$price = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

    $title = $_POST['title'];
    $image = '';
    $description = $_POST['description'];
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');

    // echo $title.'<br>';
    // echo $description.'<br>';
    // echo $price.'<br>';
    // echo $date.'<br>';

    if (!$title) {
        $errors[] = "Product Title is required";
    }

    if (!$price) {
        $errors[] = "Product Price is required";
    }

    if (!is_dir('images')) {
        mkdir('images');
    }

    if (empty($errors)) {
        $image = $_FILES['image'] ?? null;
        $imagePath = '';

        if ($image && image['tmp_name']) {
            $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
            //echo '<pre>';
            //var_dump($imagePath);
            //var_dump(dirname($imagePath));
            //echo '</pre>';

            mkdir(dirname($imagePath));
            move_uploaded_file($image['tmp_name'], $imagePath);
        }

        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                   VALUES (:title, :image, :description, :price, :date) ");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', $date);
        $statement->execute();
        header('Location: index.php');
    }
}

function randomString($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $str .= $characters[$index];
    }
    return $str;
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">

    <title>Create New Product</title>
</head>
<body>
<h1>Create New Product</h1>
<?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
            <div>
                <?php echo $error ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form action="create.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Product Image</label>
        <br>
        <input type="file" name="image">
    </div>
    <div class="form-group">
        <label>Product Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $title ?>">
    </div>
    <div class="form-group">
        <label>Product Description</label>
        <textarea class="form-control" name="description" value="<?php echo $description ?>"></textarea>
    </div>
    <div class="form-group">
        <label>Product Price</label>
        <input type="number" step="0.01" class="form-control" name="price" value="<?php echo $price ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>