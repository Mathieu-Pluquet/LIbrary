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
                      <p><?php echo $book->getTitle()?></p>
                    </div>
                    <input class="maaa" type="hidden" name="id" value="<?php echo $book->getIdBook()?>"> <br>
                </form>
            </td>
      </tr>
    </tbody>
</table>
