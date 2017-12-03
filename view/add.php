<?php
include 'view/header.php';
 ?>

    <table class="table-fill">
            <tr>
                <th class="test">New Book</th>
                <tbody class="table-hover">
                    <td class="test">
                        <form class="" action="index.php" method="post">
                            <input class="my-4" type="text" name="title" value="" placeholder="Title" maxlength="15" required>
                            <input class="my-4" type="text" name="author" value="" placeholder="Author" maxlength="15" required>
                            <input class="my-4" type="text" name="resume" value="" placeholder="Resume" required>
                            <input class="my-4" type="date" name="date" value="" placeholder="date" required>

                            <select class="" name="category">
                              <?php
                              // dropdown type const
                              foreach (Book::category as $value) {
                              ?>
                              <option value="<?php echo $value ?>"> <?php echo $value ?></option>
                              <?php
                                }
                               ?>
                            </select>
                            <input type="submit" name="addbook" value="Create Book">
                        </form>
                    </td>
            </tr>
            </tbody>
    </table>
