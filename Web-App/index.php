<?php
$looking = isset($_GET['title']) || isset($_GET['author']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookstore</title>
</head>
<body>
    
    <p>
        <?php
            if (isset($_COOKIE['username'])) {
                echo "You are " . $_COOKIE['username'];
            } else {
                echo "You are not authenticated.";
            }
        ?>
    </p>
    <?php
        if (isset($_GET['title']) && isset($_GET['author'])) {
    ?>

        <p>The book you are looking for is</p>
        <ul>
            <li><b>Title</b>: <?php echo $_GET['title']; ?></li>
            <li><b>Author</b>: <?php echo $_GET['author']; ?></li>
        </ul>
        <?php
        } else {
        ?>
        <p> You are not looking for a book?</p>    
    <?php
    }
    ?>


    <?php 
        $books = [
            [
                'title' => 'To Kill A Mockingbird',
                'author' => 'Harper Lee',
                'available' => true,
                'pages' => 336,
                'isbn' => 9780061120084
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'available' => true,
                'pages' => 267,
                'isbn' => 9780547249643
            ],
            [
                'title' => 'One Hundred Years of Solitude',
                'author' => 'Gabriel Garcia Marquez',
                'available' => false,
                'pages' => 457,
                'isbn' => 9785267006323
            ],
        ];
    ?>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <i><?php echo $book['title']; ?></i>
                - <?php echo $book['author']; ?>
        <?php if (!$book['available']): ?>
            <b> Not Available</b>
    <?php endif; ?>
        </li>
    <?php endforeach; ?>
        </ul>
</body>
</html>