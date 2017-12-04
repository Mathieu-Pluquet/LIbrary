<?php
include 'view/header.php';
 ?>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Table Style</title>
        <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>

    <body>

        <div class="table-title tab hidden-md-down">
            <table class="table-fill">
                <thead>
                  <tr>
                    <form class="" action="index.php" method="post">
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
                    <input type="submit" name="sortbook" value="Sort Book">

                    </form>

                  </tr>

                    <tr>

                        <th class="text-center">Title</th>
                        <th class="text-center">Author</th>
                        <th class="text-center">Resume</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Delete</th>
                        <th class="text-center">details</th>


                    </tr>
                </thead>

                <!-- display board -->

                  <?php
                    foreach ($object as $value) {?>
                    <tbody class="table-hover">
                        <tr>
                            <td class="text-left text-center">
                                <?php  echo $value->getTitle(); ?>
                            </td>
                            <td class="text-left text-center">
                                <?php echo $value->getAuthor(); ?>
                            </td>
                            <td class="text-left text-center">
                                <?php echo $value->getResume(); ?>
                            </td>
                            <td class="text-left text-center">
                                <?php echo $value->getDate(); ?>
                            </td>
                            <td class="text-left text-center">
                  <a class="maa" href="?delete=<?php echo $value->getIdBook();?>">  <i class="fa fa-trash" aria-hidden="true">  </i>   </a>
                            </td>
                            <td class="text-left text-center">
                              <a class="maa" id="no" href="index.php?id=<?php echo $value->getIdBook();?>">Details</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                    }?>
            </table>
        </div>
