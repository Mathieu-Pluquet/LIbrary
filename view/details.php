<?php
include 'view/header.php';
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>

<table class="table-fill hidden-md-down">
  <th class="test">Details</th>
    <tbody class="table-hover">
        <tr>
            <td>
                <form class="test" action="index.php" method="post">
                    <div class="test center mar">
                  <ul>
                    <p class="b">Title : <?php echo $book->getTitle()?></p>
                    <p class="">Author : <?php echo $book->getAuthor()?></p>
                    <p class="">Resume : <?php echo $book->getResume()?></p>
                    <p>Date : <?php echo $book->getDate()?></p>
                    <p>Available : <?php echo $book->getAvailable()?></p>
                  </ul>

                    </div>
                    <input class="maaa" type="hidden" name="id" value="<?php echo $book->getIdBook()?>"> <br>
                </form>
            </td>
      </tr>
    </tbody>
</table>
