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
                    <div class="test center">
                      <input class="maaa" type="text" name="title" value="<?php echo $book->getTitle()?>"> <br>

                    </div>
                    <input class="maaa" type="hidden" name="id" value="<?php echo $book->getId()?>"> <br>
                </form>
            </td>
      </tr>
    </tbody>
</table>
