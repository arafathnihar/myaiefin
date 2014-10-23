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

        <?php echo renderMenu( "adep-c"); 

        ?>


        <div id="page-wrapper">

            <div class="row">
            
                <div class="col-xs-6">

                    <div class="panel panel-default">

                        <div class="panel-heading">

                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        ADD EP
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="panel-body">

                                    <form class='form-horizontal' role='form' name='addEP' action='' method='post'>

                                        <fieldset>
                                            <legend><b>Personal Information</b>
                                            </legend>

                                            <div class="form-group">

                                                <label for="inputEpId" class="col-sm-4 control-label"> EP-ID </label>

                                                <div class="col-sm-8">

                                                    <input type='text' id="inputEpId" class="form-control" name='ep_id' />

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label for="inputEpName" class="col-sm-4 control-label">Full name</label>

                                                <div class="col-sm-8">

                                                    <input type='text' id="inputEpName" class="form-control" name='ep_name' />

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label for="inputCountry" class="col-sm-4 control-label">Country </label>

                                                <div class="col-sm-8">

                                                    <input type='text' id="inputCountry" class="form-control" name='ep_Country' />

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label for="inputEmail" class="col-sm-4 control-label"> Email</label>

                                                <div class="col-sm-8">

                                                    <input type='text' id="inputEmail" class="form-control" name='email' />

                                                </div>

                                            </div>

                                        </fieldset>

                                        <fieldset>
                                            <legend><b>Project Information</b> </legend>

                                            <div class="form-group">

                                                <label for="inputEpId" class="col-sm-4 control-label"> Project-ID </label>

                                                <div class="col-sm-8">

                                                    <input type='text' id="inputEpId" class="form-control" name='ep_id' />

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label for="inputStartDate" class="col-sm-4 control-label"> Start Date</label>

                                                <div class="col-sm-8">

                                                    <input type="text" class="form-control" value="" id="dpd1">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label for="inputStartDate" class="col-sm-4 control-label">End Date</label>

                                                <div class="col-sm-8">

                                                    <input type="text" class="form-control" value="" id="dpd2">

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

                                            <div class="form-group">

                                                <label for="inputStartDate" class="col-sm-4 control-label">Status</label>

                                                <div class="col-sm-8" pading="5px">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio">Raised
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio">Matched
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio">Realized
                                                    </label>

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label for="inputStartDate" class="col-sm-4 control-label">Function</label>

                                                <div class="col-sm-8">

                                                    <select class="form-control" id="sel1">
                                                        <option>GCDP</option>
                                                        <option>GIP</option>
                                                        <option>OGX</option>
                                                        <option>ICX</option>
                                                    </select>

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label for="inputCountry" class="col-sm-4 control-label">EP Fee </label>

                                                <div class="col-sm-8">

                                                    <input type='text' id="inputCountry" class="form-control" name='ep_Country' />

                                                </div>

                                            </div>



                                            <a href="#" class="btn btn-info btn-lg">submit</a>

                                        </fieldset>

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