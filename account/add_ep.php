<?php

/*----------*/



require_once("../models/config.php");



if (!securePage(__FILE__)){

    // Forward to index page

    addAlert("danger", "Whoops, looks like you don't have permission to view that page.");

    header("Location: index.php");

    exit();

}



setReferralPage(getAbsoluteDocumentPath(__FILE__));

?>

<!DOCTYPE html>

<html lang="en">

  <?php

    echo renderAccountPageHeader(array("#SITE_ROOT#" => SITE_ROOT, "#SITE_TITLE#" => SITE_TITLE, "#PAGE_TITLE#" => "Site Configuration"));

  ?>



<body>



<div id="wrapper">



<!-- Sidebar -->

        <?php

          echo renderMenu("site-settings");

        ?>  



<div id="page-wrapper">

<div class="row">

    <div id='display-alerts' class="col-lg-12">



    </div>

</div>

<h1>ADD EP</h1>


<div class='row'>

<div id='regbox' class='col-lg-6'>

    <div class='panel panel-primary'>

        <div class='panel-heading'>

            <h3 class='panel-title'>EP details</h3>

        </div>

        <div class='panel-body'>

            <form class='form-horizontal' role='form' name='addEP' action='' method='post'>

                <div class="form-group">

                    <label for="inputEpId" class="col-sm-4 control-label"> EP-ID </label>

                    <div class="col-sm-8">

                        <input type='text' id="inputEpId" class="form-control" name='ep_id'/>

                    </div>

                </div>

                <div class="form-group">

                    <label for="inputEpName" class="col-sm-4 control-label">Full name</label>

                    <div class="col-sm-8">

                        <input type='text' id="inputEpName" class="form-control" name='ep_name'/>

                    </div>

                </div>

                <div class="form-group">

                    <label for="inputCountry" class="col-sm-4 control-label">Country </label>

                    <div class="col-sm-8">

                        <input type='text' id="inputCountry" class="form-control" name='ep_Country'/>

                    </div>

                </div>

                <div class="form-group">

                    <label for="inputEmail" class="col-sm-4 control-label"> Email</label>

                    <div class="col-sm-8">

                        <input type='text' id="inputEmail" class="form-control" name='email'/>

                    </div>

                </div>

                <div class="form-group">

                    <label for="inputStartDate" class="col-sm-4 control-label"> Start Date</label>

                    <div class="col-sm-8">

                        <input type="text" class="form-control" value="" id="dpd1">                       

                    </div>

                </div>



                <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">

                    <label for="inputEndDate" class="col-sm-4 control-label"> End Date</label>

                    <div class="col-sm-8">
                        <i class="fa fa-calendar"></i>
                        <input type="text" class="form-control" value="" id="dpd2">                      
                        <input class="span2" size="16" type="text" value="12-02-2012">
                    </div>

                </div>

                
    
  <span class="add-on"><i class="icon-th"></i></span>
</div>
       

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
</script>


<!--
                <div class="form-group">

                    <label for="userRegistration" class="col-sm-4 control-label">User Registration</label>

                    <div class="col-sm-8">

                        <input type="checkbox" id ="userRegistration" name='can_register' value='1'/>

                        <br><small>Specify whether users can create new accounts by themselves.</small>

                    </div>

                </div>

                <div class="form-group">

                    <label for="emailLogin" class="col-sm-4 control-label">Email Login</label>

                    <div class="col-sm-8">

                        <input type="checkbox" id ="checkEmailLogin" name='email_login' value='1'/>

                        <br><small>Specify whether users can login via email address or username instead of just username.</small>

                    </div>

                </div>

                <div class="form-group">

                    <label for="newUserTitle" class="col-sm-4 control-label">Default New User Title</label>

                    <div class="col-sm-8">

                        <input type='text' id="newUserTitle" class="form-control" name='new_user_title'/>

                    </div>

                </div>

                <div class="form-group">

                    <label for="checkEmailActivation" class="col-sm-4 control-label">Email Activation</label>

                    <div class="col-sm-8">

                        <input type="checkbox" id ="checkEmailActivation" name='activation' value='1'/>

                        <br><small>Specify whether email activation is required for newly registered accounts.</small>

                    </div>

                </div>

                <div class="form-group">

                    <label for="inputThreshold" class="col-sm-4 control-label">Account Activation Threshold</label>

                    <div class="col-sm-8">

                        <input type='text' id="inputThreshold" class="form-control" name='resend_activation_threshold'/>

                    </div>

                </div>

                <div class="form-group">

                    <label for="inputTimeoutToken" class="col-sm-4 control-label">Password Reset Token Timeout value (in hours Max: 27 Hours)</label>

                    <div class="col-sm-8">

                        <input type='text' id="inputTimeoutToken" class="form-control" name='token_timeout'/>

                    </div>

                </div>

                <div class="form-group">

                    <label for="selectLanguage" class="col-sm-4 control-label">Site Language</label>

                    <div class="col-sm-8">

                        <select id="selectLanguage" name='language'></select>

                    </div>

                </div>

                <div class="form-group">

                    <div class="col-sm-offset-4 col-sm-8">

                        <button type="submit" class="btn btn-success submit" value='Update'>Update</button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

-->
<!--

<div id='plugins' name='plugins' class='col-lg-6'>



</div>

<script>

    function updateCheckbox(cb){

        var name = cb.name;

        var value = cb.value;

        var url = '../api/update_plugin_settings.php';



        $.ajax({

            type: "POST",

            url: url,

            data: {

                name: name,

                value: value,

                ajaxMode: "true"

            }

        }).done(function(result) {

            var resultJSON = processJSONResult(result);

            alertWidget('display-alerts');

        });

    }

    function updateTextbox(tb){

        var name = tb.name;

        var value = tb.value;

        var url = '../api/update_plugin_settings.php';



        $.ajax({

            type: "POST",

            url: url,

            data: {

                name: name,

                value: value,

                ajaxMode: "true"

            }

        }).done(function(result) {

            var resultJSON = processJSONResult(result);

            alertWidget('display-alerts');

        });

    }

</script>
-->
<!--
<script>

    $(document).ready(function() {

        // Get id of the logged in user to determine how to render this page.

        var user = loadCurrentUser();

        var user_id = user['user_id'];

        /*

         * start site settings form submit

         */

        $("form[name='adminConfiguration']").submit(function(e){

            var form = $(this);

            var url = '../api/update_site_settings.php';

            $.ajax({

                type: "POST",

                url: url,

                data: {

                    website_name:					form.find('input[name="website_name"]').val(),

                    website_url:					form.find('input[name="website_url"]').val(),

                    email:							form.find('input[name="email"]').val(),

                    resend_activation_threshold:	form.find('input[name="resend_activation_threshold"]').val(),

                    new_user_title:					form.find('input[name="new_user_title"]').val(),

                    can_register: 					form.find('input[name="can_register"]:checked').val(),

                    email_login: 					form.find('input[name="email_login"]:checked').val(),

                    activation: 					form.find('input[name="activation"]:checked').val(),

                    token_timeout:                  form.find('input[name="token_timeout"]').val(),

                    language:						form.find('select[name="language"] option:selected').val(),

                    ajaxMode:						"true"

                }

            }).done(function(result) {

                var resultJSON = processJSONResult(result);

                alertWidget('display-alerts');

            });

            return false;

        });

        /*

         * end site settings form submit

         */



        /*

         * start site settings config load

         */

        $('#regbox input[type="checkbox"]').bootstrapSwitch();

        var url = "../api/load_site_settings.php";

        $.getJSON( url, {})

            .fail(function(result) {

                addAlert("danger", "Oops, looks like our server might have goofed.  If you're an admin, please check the PHP error logs.");

                alertWidget('display-alerts');

            })

            .done(function( result ) {

                var data = processJSONResult(result);



                alertWidget('display-alerts');

                if (Object.keys(data).length > 0) { // Don't bother unless there are some records found

                    $('#regbox input[name="website_name"]').val(data['website_name']);

                    $('#regbox input[name="website_url"]').val(data['website_url']);

                    $('#regbox input[name="email"]').val(data['email']);

                    $('#regbox input[name="new_user_title"]').val(data['new_user_title']);

                    $('#regbox input[name="resend_activation_threshold"]').val(data['resend_activation_threshold']);

                    if (data['can_register'] == "1")  {

                        $('#regbox input[name="can_register"]').bootstrapSwitch('setState', true);

                    } else {

                        $('#regbox input[name="can_register"]').bootstrapSwitch('setState', false);

                    }

                    if (data['email_login'] == "1")  {

                        $('#regbox input[name="email_login"]').bootstrapSwitch('setState', true);

                    } else {

                        $('#regbox input[name="email_login"]').bootstrapSwitch('setState', false);

                    }

                    if (data['activation'] == "1")  {

                        $('#regbox input[name="activation"]').bootstrapSwitch('setState', true);

                    } else {

                        $('#regbox input[name="activation"]').bootstrapSwitch('setState', false);

                    }

                    $('#regbox input[name="token_timeout"]').val(data['token_timeout']/60/60);

                    // Load the language and template options

                    var language_options = data['language_options'];

                    if (Object.keys(language_options).length > 0) { // Don't bother unless there are some options found

                        jQuery.each(language_options, function(idx, record) {

                            if (record == data['language']) {

                                $('<option></option>').val(record).html(record).prop('selected', true).appendTo('#regbox select[name="language"]');

                            } else {

                                $('<option></option>').val(record).html(record).prop('selected', false).appendTo('#regbox select[name="language"]');

                            }

                        });

                    }

                }

            });

        /*

         * end site settings config load

         */



        /*

         * Load plugin config settings

         */

        var url = "../api/load_plugin_settings.php";

        $.getJSON( url, {})

            .fail(function(data) {

                addAlert("danger", "Oops, looks like our server might have goofed.  If you're an admin, please check the PHP error logs.");

                alertWidget('display-alerts');

            })

            .done(function( data ) {

                if (Object.keys(data).length > 0) {



                    var html = "<div class='panel panel-primary'>" +

                        "<div class='panel-heading'>" +

                        "<h3 class='panel-title'>Plugin Configurations</h3>" +

                        "</div>" +

                        "<div class='panel-body'>" +

                        "<form class='form-horizontal' role='form' name='pluginConfiguration' id='pluginConfiguration' action='../api/update_plugin_settings.php' method='post'>";





                    if (Object.keys(data).length > 0) { // Don't bother unless there are some records found

                        jQuery.each(data, function(name, setting) {



                            if (setting['binary'] >= 1) {

                                // Assume this should be a bootstrap switch

                                html += "<div class='form-group'><label for='"+setting['name']+"' class='col-sm-4 control-label'>"+setting['name']+"</label>" +

                                    "<div class='col-sm-8'>";

                                if(setting['value'] > 0 ){

                                    html += "<input type='checkbox' id ='"+setting['name']+"' name='"+setting['name']+"' value='"+setting['value']+"' onchange='updateCheckbox(this)' checked />"

                                }else{

                                    html += "<input type='checkbox' id ='"+setting['name']+"' name='"+setting['name']+"' value='"+setting['value']+"' onchange='updateCheckbox(this)' />"

                                }

                                html += "<br><small><em>Variable: " +setting['variable'] +"</em></small>" +

                                    "</div>" +

                                    "</div>";

                            }else{

                                // Assume this should be a text box

                                html += "<div class='form-group'><label for='"+setting['name']+"' class='col-sm-4 control-label'>"+setting['name']+"</label>" +

                                    "<div class='col-sm-8'>" +

                                    "<input type='text' id='"+setting['name']+"' class='form-control' name='"+setting['name']+"' value='"+setting['value']+"' onchange='updateTextbox(this)'/>" +

                                    "<br><small><em>Variable: " +setting['variable'] +"</em></small>" +

                                    "</div>" +

                                    "</div>";

                            }

                        })

                    }

                    html += "<div class='form-group'>" +

                        "<div class='col-sm-offset-4 col-sm-8'>" +

                        "<small><strong>Values automatically updated in database.</strong></small>" +

                        "</div>" +

                        "</div>" +

                        "</form>" +

                        "</div>" +

                        "</div>";



                    $('#plugins').html(html);

                    /*$('#plugins input[type="checkbox"]').bootstrapSwitch();*/

                } else {

                    console.log("No settings found.");

                    html += "<div class='alert alert-info'>No plugins found.</div>";

                }

            });



        /*$("form").change(function() {

         console.log('something changed')

         });*/



        /*

         * end plugin settings form submit

         */



        alertWidget('display-alerts');



    });

</script>
-->

</body>

</html>



