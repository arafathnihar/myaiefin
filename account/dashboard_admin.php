<?php

/*----------*/



// UserCake authentication

require_once("../models/config.php");





if (!securePage(__FILE__)){

  // TODO: account section has its own 404 page

  header("Location: index.php");

  exit();

}





setReferralPage(getAbsoluteDocumentPath(__FILE__));



// Admin page

?>

<!DOCTYPE html>

<html lang="en">

  <?php

  	echo renderAccountPageHeader(array("#SITE_ROOT#" => SITE_ROOT, "#SITE_TITLE#" => SITE_TITLE, "#PAGE_TITLE#" => "Admin Dashboard"));

  ?>



  <body>    

    <div id="wrapper">



      <!-- Sidebar -->

        <?php

            echo renderMenu("dashboard-admin");

        ?>



      <div id="page-wrapper">

        <div class="row">

          <div id='display-alerts' class="col-lg-12">



          </div>

        </div>

        

        <div class="row">

          <div class="col-lg-12">

            <h1>Dashboard <small>Statistics Overview</small></h1>

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

          <div class="col-lg-3">

            <div class="panel panel-info">

              <div class="panel-heading">

                <div class="row">

                  <div class="col-xs-6">

                    <i class="fa fa-comments fa-5x"></i>

                  </div>

                  <div class="col-xs-6 text-right">

                    <p class="announcement-heading">6</p>

                    <p class="announcement-text">Event Alerts !</p>

                  </div>

                </div>

              </div>

              <a href="#">

                <div class="panel-footer announcement-bottom">

                  <div class="row">

                    <div class="col-xs-6">

                      View Events

                    </div>

                    <div class="col-xs-6 text-right">

                      <i class="fa fa-arrow-circle-right"></i>

                    </div>

                  </div>

                </div>

              </a>

            </div>

          </div>

          <div class="col-lg-3">

            <div class="panel panel-warning">

              <div class="panel-heading">

                <div class="row">

                  <div class="col-xs-6">

                    <i class="fa fa-check fa-5x"></i>

                  </div>

                  <div class="col-xs-6 text-right">

                    <p class="announcement-heading">12</p>

                    <p class="announcement-text">To-Do Items</p>

                  </div>

                </div>

              </div>

              <a href="#">

                <div class="panel-footer announcement-bottom">

                  <div class="row">

                    <div class="col-xs-6">

                      Complete

                    </div>

                    <div class="col-xs-6 text-right">

                      <i class="fa fa-arrow-circle-right"></i>

                    </div>

                  </div>

                </div>

              </a>

            </div>

          </div>

          <div class="col-lg-3">

            <div class="panel panel-danger">

              <div class="panel-heading">

                <div class="row">

                  <div class="col-xs-6">

                    <i class="fa fa-tasks fa-5x"></i>

                  </div>

                  <div class="col-xs-6 text-right">

                    <p class="announcement-heading">3</p>

                    <p class="announcement-text">Petty cash  </p>

                  </div>

                </div>

              </div>

              <a href="#">

                <div class="panel-footer announcement-bottom">

                  <div class="row">

                    <div class="col-xs-6">

                       notifications


                    </div>

                    <div class="col-xs-6 text-right">

                      <i class="fa fa-arrow-circle-right"></i>

                    </div>

                  </div>

                </div>

              </a>

            </div>

          </div>

          <div class="col-lg-3">

            <div class="panel panel-success">

              <div class="panel-heading">

                <div class="row">

                  <div class="col-xs-6">

                    <i class="fa fa-comments fa-5x"></i>

                  </div>

                  <div class="col-xs-6 text-right">

                    <p class="announcement-heading">12</p>

                    <p class="announcement-text">Feedback!</p>

                  </div>

                </div>

              </div>

              <a href="#">

                <div class="panel-footer announcement-bottom">

                  <div class="row">

                    <div class="col-xs-6">

                      Messages

                    </div>

                    <div class="col-xs-6 text-right">

                      <i class="fa fa-arrow-circle-right"></i>

                    </div>

                  </div>

                </div>

              </a>

            </div>

          </div>

        </div><!-- /.row -->



        <div class="row">

          <div class="col-lg-12">

            <div class="panel panel-primary">

              <div class="panel-heading">

                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Profit Statistics: October 14, 2014 - October 14, 2015</h3>

              </div>

              <div class="panel-body">

                <div id="morris-chart-area"></div>

              </div>

            </div>

          </div>

        </div><!-- /.row -->



        <div class="row">

          <div class="col-lg-4">

            <div class="panel panel-primary">

              <div class="panel-heading">

                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Profit Statistics: October 14, 2014 - October 14, 2015/h3>

              </div>

              <div class="panel-body">

                <div id="morris-chart-donut"></div>

                <div class="text-right">

                  <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>

                </div>

              </div>

            </div>

          </div>

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

          <div class="col-lg-4">

            <div class="panel panel-primary">

              <div class="panel-heading">

                <h3 class="panel-title"><i class="fa fa-money"></i> Recent Transactions</h3>

              </div>

              <div class="panel-body">

                <div id="transactions" class="table-responsive">

                  <table class="table table-bordered table-hover table-striped tablesorter">

                    <thead>

                      <tr>

                        <th>invoice # <i class="fa fa-sort"></i></th>

                        <th>invoice Date <i class="fa fa-sort"></i></th>

                        <th>invoice Time <i class="fa fa-sort"></i></th>

                        <th>Amount (LKR) <i class="fa fa-sort"></i></th>

                      </tr>

                    </thead>

                    <tbody>

                      <tr>

                        <td>3326</td>

                        <td>10/21/2013</td>

                        <td>3:29 PM</td>

                        <td>Rs321.33</td>

                      </tr>

                      <tr>

                        <td>3325</td>

                        <td>10/21/2013</td>

                        <td>3:20 PM</td>

                        <td>Rs234.34</td>

                      </tr>

                      <tr>

                        <td>3324</td>

                        <td>10/21/2013</td>

                        <td>3:03 PM</td>

                        <td>Rs724.17</td>

                      </tr>

                      <tr>

                        <td>3323</td>

                        <td>10/21/2013</td>

                        <td>3:00 PM</td>

                        <td>Rs23.71</td>

                      </tr>

                      <tr>

                        <td>3322</td>

                        <td>10/21/2013</td>

                        <td>2:49 PM</td>

                        <td>Rs8345.23</td>

                      </tr>

                      <tr>

                        <td>3321</td>

                        <td>10/21/2013</td>

                        <td>2:23 PM</td>

                        <td>Rs245.12</td>

                      </tr>

                      <tr>

                        <td>3320</td>

                        <td>10/21/2013</td>

                        <td>2:15 PM</td>

                        <td>Rs5663.54</td>

                      </tr>

                      <tr>

                        <td>3319</td>

                        <td>10/21/2013</td>

                        <td>2:13 PM</td>

                        <td>Rs943.45</td>

                      </tr>

                    </tbody>

                  </table>

                </div>

                <div class="text-right">

                  <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>

                </div>

              </div>

            </div>

          </div>

        </div><!-- /.row -->





      </div><!-- /#page-wrapper -->



    </div><!-- /#wrapper -->

    

    <script src="../js/raphael/2.1.0/raphael-min.js"></script>

    <script src="../js/morris/morris-0.4.3.js"></script>

    <script src="../js/morris/chart-data-morris.js"></script>

    <script>

        $(document).ready(function() {          

          alertWidget('display-alerts');

          

          // Initialize the transactions tablesorter

          $('#transactions .table').tablesorter({

              debug: false

          });

          

        });      

    </script>

  </body>

</html>

