<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote-django/layouts/dashboard-saas.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Apr 2021 19:47:45 GMT -->
<head>
        
        <meta charset="utf-8" />
        <?php include("inc/seo.php"); ?>
        <!-- Responsive Table css -->
        <link href="assets/libs/admin-resources/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />
        <?php include("inc/css.php"); ?>


    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <?php include("inc/header.php"); ?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php include("inc/nav_left.php"); ?>
            <!-- Left Sidebar End -->
            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18"><?php echo $page_name?> </h4>


                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        
        
                                       
                                        <div class="table-rep-plugin">
                                                <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                    <table id="tech-companies-1" class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Payment ID</th>
                                                            <th data-priority="1">Amount</th>
                                                            <th data-priority="3">Date</th>
                                                            <th data-priority="1">Payment Method</th>
                                                            <th data-priority="3">Customer ID</th>
                                                            <th data-priority="3">Invoice ID</th>
                                                            <th data-priority="6">Transaction State</th>
                                                            
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php if (!empty($payment)){
                                                            foreach ($payment as $payment) {
                                                                
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $payment['payment_id'];?></td>
                                                            <td><?php echo $payment['amount'];?></td>
                                                            <td><?php echo $payment['date'];?></td>
                                                            <td><?php echo $payment['payment_method'];?></td>
                                                            <td><?php echo $payment['customer_id'];?></td>
                                                            <td><?php echo $payment['invoice_id'];?></td>
                                                            <td><?php echo $payment['transaction_state'];?></td>
                                                        </tr>
                                                        <?php } } else {
                                                            ?>
                                                            <tr>
                                                                <td>Records not found</td>
                                                            </tr>
                                                            <?php
                                                        }?>

                                                        </tbody>
                                                    </table>
                                                </div>
            
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
       
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>


        <?php include("inc/js.php"); ?>

        <!-- Responsive Table js -->
        <script src="assets/libs/admin-resources/rwd-table/rwd-table.min.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/table-responsive.init.js"></script>

        

    </body>

<!-- Mirrored from themesbrand.com/skote-django/layouts/dashboard-saas.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Apr 2021 19:47:45 GMT -->
</html>