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

<table class="table-fill">
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
                    <?php
                    if($book->getAvailable() == 1){
                     ?>
                     <form class="" action="index.php" method="post">
                     <select class="" name="category">
                       <?php
                       // dropdown type const
                       foreach ($object as $value) {
                       ?>
                       <option value="<?php echo $value->getIdUser() ?>"> <?php echo $value->getName() ?></option>
                       <?php
                         }
                        ?>
                     </select>
                     <input type="hidden" name="id" value="<?php echo $book->getIdBook()?>">
                     <input type="submit" name="ok" value="ok">

                     </form>
                      <?php
                      }
                      else {
                        ?>
                      <input type="hidden" name="id" value="<?php echo $book->getIdBook()?>">
                      <input type="submit" name="return" value="Return">
                        <?php
                      }
                       ?>
                  </ul>

                    </div>
                    <input class="maaa" type="hidden" name="id" value="<?php echo $book->getIdBook()?>"> <br>
                </form>
            </td>
      </tr>
    </tbody>
</table>
