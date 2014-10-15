 <?php
/*----------*/
require_once ("../models/config.php");
 
if (!securePage(__FILE__))
    {

    // Forward to index page

    addAlert("danger", "Whoops, looks like you don't have permission to view that page.");
    header("Location: 404.php");
    exit();
    }

setReferralPage(getAbsoluteDocumentPath(__FILE__));
?>


<!DOCTYPE html>

<html lang="en">

<?php
echo renderAccountPageHeader(array(
    "#SITE_ROOT#" => SITE_ROOT,
    "#SITE_TITLE#" => SITE_TITLE,
    "#PAGE_TITLE#" => "forms"
)); ?>

<body>


    <div id="wrapper">
        <!-- Sidebar -->

        <?php echo renderMenu( "Forms"); 

        ?>


<div id="page-wrapper">

    <div class="row">

        <div class="col-xs-6">

            <div class="panel panel-default">

                <div class="panel-heading">

                    <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                       Petty cash Request
                                </a>
                            </h4>
                </div>


                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="panel-body">

                            <form class='form-horizontal' role='form' name='addEP' action='' method='post'>
                                <div class="form-group">

                                    <label for="ID" class="col-sm-4 control-label">Petty cash ID</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="ID">
                                    </div>
                                </div>
                                <!--Include the calender validation here for the date-->
                                <div class="form-group">

                                    <label for="inputStartDate" class="col-sm-4 control-label"> Date Issued</label>

                                    <div class="col-sm-8">

                                        <input type="text" class="form-control" value="" id="dpd1">

                                    </div>

                                </div>
                                <div class="form-group">
                                    <hr>
                                    <label for="pID" class="col-sm-4 control-label">Project ID</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="pID">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="eID" class="col-sm-4 control-label">Event ID</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="eID">
                                    </div>
                                    <hr>
                                </div>

                                <div class="form-group">

                                    <label for="desc" class="col-sm-4 control-label">Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="desc">
                                    </div>
                                </div>
                                <div class="form-group">

                                                <label for="inputStartDate" class="col-sm-4 control-label">Committee</label>

                                                <div class="col-sm-8">

                                                    <select class="form-control" id="sel1">
                                                        <option>CCLC</option>
                                                        <option>CNLC</option>
                                                        <option>JLC</option>
                                                        <option>CSLC</option>
                                                    </select>

                                                </div>

                                </div>

                                <!--If there is some sort of a validation for currency, put it here, for the amount field -->
                                <div class="form-group">
                                    <hr>
                                    <label for="amt" class="col-sm-4 control-label">Amount(LKR)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="amt">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        

    </div>

</div>
<!-- /#page-wrapper -->



</div>
<!-- /#wrapper -->



    <script>
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
            onRender: function(date) {
                return date.valueOf() < now.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
            }
            checkin.hide();
            $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
            onRender: function(date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
            checkout.hide();
        }).data('datepicker');



        $(document).ready(function() {

            alertWidget('display-alerts');

        });
    </script>

</body>

</html>