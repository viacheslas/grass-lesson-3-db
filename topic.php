<?php
require_once 'templates/header.php';

$topicID = $_GET['id'];

$topic = \App\Topic::findOne("`id` = $topicID");

$messages = \App\Message::find("`topic_id` = $topicID");

?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Topic : <?= $topic['name'] ?>
                </div>
                <div class="panel-body">

                    <?php
                    foreach ($messages as $key => $message){

                        ?>

                        <div class="<?= $key % 2 == 0 ? "row_easy" : "row_hard" ?>">
                            <?= $message['text'] ?>

                        </div>

                        <?php
                    }

                    ?>

                    <div class="row_form">
                        <form method="post" class="form-group" action="/">
                            <div class="form-group">
                                <label for="text">Text</label>
                                <input class="form-control" name="text" title="">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success">
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php

require_once 'templates/footer.php';
