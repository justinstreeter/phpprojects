<?php require 'data.php'; $sql = "SELECT * FROM news"; $posts = $db->query($sql); include 'index.php' ?>

<html>
<head>
    <title>showpost</title>
    </head>
    <body>
    <h1>Posts: </h1>
       <table>
            <?php foreach  ($posts as $post): ?>
        <tr>
            <td><?php echo $post['post'] ?></td>
            <td><?php echo $post['date'] ?></td>
           <td><a href="deleteNews.php?delete=maybe&id=<?php echo $post['id']; ?>" title= "DELETE">Delete</a> </td>
           <tr>
               
           
           
           <?php endforeach; ?>
        </table> 
        <a href="index.php">Index</a>
    </body>
</html>
