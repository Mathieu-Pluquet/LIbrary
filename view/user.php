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
                        <th class="text-center">Name</th>
                        <th class="text-center">Surname</th>
                        <th class="text-center">Member</th>

                    </tr>
                </thead>

                <!-- display board -->

                  <?php
                    foreach ($object as $value) {?>
                    <tbody class="table-hover">
                        <tr>
                            <td class="text-left text-center">
                                <?php  echo $value->getName(); ?>
                            </td>
                            <td class="text-left text-center">
                                <?php echo $value->getSurname(); ?>
                            </td>
                            <td class="text-left text-center">
                                <?php echo $value->getMember(); ?>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                    }?>
            </table>
        </div>




        <!-- responsive mobile  -->



        <div class="table-title tab hidden-lg-up">
            <table class="table-fill">
                <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Member</th>

                    </tr>
                </thead>

                <!-- display board -->

                  <?php
                    foreach ($object as $value) {?>
                    <tbody class="table-hover">
                        <tr>
                            <td class="text-left text-center">
                                <?php  echo $value->getName(); ?>
                            </td>
                            <td class="text-left text-center">
                                <?php echo $value->getMember(); ?>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                    }?>
            </table>
        </div>
