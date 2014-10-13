<?php

/*----------*/



require_once("../models/config.php");



if (!securePage(__FILE__)){

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

  	echo renderAccountPageHeader(array("#SITE_ROOT#" => SITE_ROOT, "#SITE_TITLE#" => SITE_TITLE, "#PAGE_TITLE#" => "Dashboard"));

  ?>



  <body>



    <div id="wrapper">



      <!-- Sidebar -->

        <?php

          echo renderMenu("dashboard");

        ?>  



      <div id="page-wrapper">

	  	<div class="row">

          <div id='display-alerts' class="col-lg-12">

          

          </div>

        </div>

        <div class="row">

          <div class="col-lg-12">

            <h1>Dashboard <small>User Overview</small></h1>

            <ol class="breadcrumb">

              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>

            </ol>
<!--
            <div class="alert alert-success alert-dismissable">

              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

              Welcome to AIEFIN!  The back end account management system is derived from <a class="alert-link" href="http://usercake.com">UserCake 2.0.2</a>, while the dashboard and admin account features are based on the SB Admin Template by <a class="alert-link" href="http://startbootstrap.com">Start Bootstrap</a>. Other key frameworks and plugins used in this system are:

              <br><a class="alert-link" href='http://http://jquery.com/'>jQuery 1.10.2</a>

              <br><a class="alert-link" href='http://getbootstrap.com/'>Twitter Bootstrap 3.0</a>

              <br><a class="alert-link" href='http://fontawesome.io/'>Font Awesome</a>

              <br><a class="alert-link" href='http://tablesorter.com/docs/'>Tablesorter 2.0</a>

              <br>The <a class="alert-link" href='http://www.bootstrap-switch.org/'>Bootstrap Switch</a> component by Mattia Larentis,Peter Stein, and Emanuele Marchi

              <br>All components are copyright of their respective creators.

            </div>
-->
          </div>

        </div><!-- /.row -->





        <div class="row">

          <div class="col-lg-4">

            <div class="panel panel-primary">

              <div class="panel-heading">

                <h3 class="panel-title"><i class="fa fa-clock-o"></i> Recent Activity</h3>

              </div>

              <div class="panel-body">
                <div class="list-group">

                  <a href="#" class="list-group-item">

                    <span class="badge">just now</span>

                    <i class="fa fa-calendar"></i> Calendar updated

                  </a>

                  <a href="#" class="list-group-item">

                    <span class="badge">4 minutes ago</span>

                    <i class="fa fa-comment"></i> Replied for the messages

                  </a>

                  <a href="#" class="list-group-item">

                    <span class="badge">23 minutes ago</span>

                    <i class="fa fa-truck"></i> ep arrived

                  </a>

                  <a href="#" class="list-group-item">

                    <span class="badge">46 minutes ago</span>

                    <i class="fa fa-money"></i> Invoice 653 has been paid

                  </a>

                  <a href="#" class="list-group-item">

                    <span class="badge">1 hour ago</span>

                    <i class="fa fa-user"></i> A new user has been added

                  </a>

                  <a href="#" class="list-group-item">

                    <span class="badge">2 hours ago</span>

                    <i class="fa fa-check"></i> Completed task: "Petty cash sent"

                  </a>

                  <a href="#" class="list-group-item">

                    <span class="badge">yesterday</span>

                    <i class="fa fa-globe"></i> GCDP project done

                  </a>

                  <a href="#" class="list-group-item">

                    <span class="badge">two days ago</span>

                    <i class="fa fa-check"></i> Completed task: "new LC added"

                  </a>

                </div>

                <div class="text-right">

                  <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>

                </div>

              </div>

            </div>

          </div>

        </div><!-- /.row -->



      </div><!-- /#page-wrapper -->



    </div><!-- /#wrapper -->



	<script>

        $(document).ready(function() {       

          alertWidget('display-alerts');

		});

	</script>

  </body>

</html>





