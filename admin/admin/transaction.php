<!DOCTYPE html>
<?php
require_once 'session.php';
?>

<body>
    <!--------------------HEAD---------------------->
    <?php include 'head.php' ?>
    <!--------------------HEAD---------------------->
    <!-------------------SIDEBAR------------------>
    <?php include 'sidebar.php' ?>
    <!-------------------SIDEBAR------------------>

    <div id="sidecontent" class="well pull-right">
        <div class="alert alert-info">Transaction</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="form-inline">
                    <label>Enter Student ID:</label>
                    <input type="number" style="width:200px;" class="form-control" min="0" max="999999" id="search" />
                    <button class="btn btn-primary" id="btn_search"><span
                            class="glyphicon glyphicon-search"></span></button>
                </div>
                <hr style="border-top:1px dotted #000;" />
                <div id="result">

                </div>
                <br style="clear:both;" />
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>

    </html>