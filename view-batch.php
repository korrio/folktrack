<?php include 'templates/_header.php';?>
<?php
    if (! isset($_GET['batchNo']) || (isset($_GET['batchNo']) && $_GET['batchNo'] == '') &&
        ! isset($_GET['txn']) || (isset($_GET['txn']) && $_GET['txn'] == '')) {
        echo "<script>window.location = 'index.php';</script>";
    }
?>
<style type="text/css">
    .verified_info{
        color: green;
    }
</style>
<style type="text/css">
    .verified_info{
        color: green;
    }
    .white-box{
        padding: 0;
        background: #edf1f5;
    }
    .no-gutters {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
    .timeline>li>.timeline-panel{
        background-color: #fff;
        color: #2b2b2b;
    }
    .timeline:before {
        background-color: rgba(0, 0, 0, 0.1);
    }
    .activityQrCode{
        margin: 20px 0;
    }
    .table>tbody>tr:first-child>td{
        border-top: none;
    }
    .activityDateTime{
        font-size: 12px;
    }
    .activityDateTime .text-info{
        overflow: hidden;
    }
</style>
<div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                <h3 class="page-title">Batch Progress <a href="javascript:void(0);" onclick="javascript:window.print();" class="text-info" title="Print Page Report"><i class="fa fa-print"></i> Print</a></h3>
                <h4><b>Batch No: </b><?php echo $_GET['batchNo']; ?></h4>
            </div>
            <div class="col-lg-6 col-sm-8 col-md-8 col-xs-12">

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge danger">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="timeline-panel" id="cultivationSection">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Cultivation</h4>
                                    <div class="text-muted text-success activityDateTime"></div>
                                </div>
                                <div>
                                    <div class="activityQrCode text-center"></div>
                                </div>
                                <div class="timeline-body">
                                    <table class="table activityData table-responsive" >
                                        <tr>
                                            <td colspan="2"><p>Information Not Available</p></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="verify-information text-right"></div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge danger">
                                <i class="fa fa-times"></i>
                            </div>
                            <div class="timeline-panel" id="farmInspectionSection">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Farm inspection</h4>
                                    <div class="text-muted text-success activityDateTime"></div>
                                </div>
                                <div>
                                    <div class="activityQrCode text-center"></div>
                                </div>
                                <div class="timeline-body">
                                    <table class="table activityData table-responsive">
                                        <tr>
                                            <td colspan="2"><p>Information Not Available</p></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="verify-information text-right"></div>
                            </div>
                        </li>
                        <li>
                           <div class="timeline-badge danger">
                                <i class="fa fa-times"></i>
                            </div>
                            <div class="timeline-panel" id="harvesterSection">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">การเก็บเกี่ยว</h4>
                                    <div class="text-muted text-success activityDateTime"></div>
                                </div>
                                <div>
                                    <div class="activityQrCode text-center"></div>
                                </div>
                                <div class="timeline-body">
                                    <table class="table activityData table-responsive" >
                                        <tr>
                                            <td colspan="2"><p>Information Not Available</p></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="verify-information text-right"></div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge danger">
                                <i class="fa fa-times"></i>
                            </div>
                            <div class="timeline-panel" id="exporterSection">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Export</h4>
                                    <div class="text-muted text-success activityDateTime"></div>
                                </div>
                                <div>
                                    <div class="activityQrCode text-center"></div>
                                </div>
                                <div class="timeline-body">
                                    <table class="table activityData table-responsive">
                                        <tr>
                                            <td colspan="2"><p>Information Not Available</p></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="verify-information text-right"></div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge danger">
                                <i class="fa fa-times"></i>
                            </div>
                            <div class="timeline-panel" id="importerSection">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Import</h4>
                                    <div class="text-muted text-success activityDateTime"></div>
                                </div>
                                <div>
                                    <div class="activityQrCode text-center"></div>
                                </div>
                                <div class="timeline-body">
                                   <table class="table activityData table-responsive" >
                                        <tr>
                                            <td colspan="2"><p>Information Not Available</p></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="verify-information text-right"></div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge danger">
                                <i class="fa fa-times"></i>
                            </div>
                            <div class="timeline-panel" id="processorSection">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Processor</h4>
                                    <div class="text-muted text-success activityDateTime"></div>
                                </div>
                                <div>
                                    <div class="activityQrCode text-center"></div>
                                </div>
                                <div class="timeline-body">
                                    <table class="table activityData table-responsive" >
                                        <tr>
                                            <td colspan="2"><p>Information Not Available</p></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="verify-information text-right"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.row -->
</div>
<input type="hidden" id="batchNo" value="<?php $batchNo = isset($_GET['batchNo']) ? $_GET['batchNo'] : '';
                                         echo $batchNo;?>">

<?php include 'templates/_footer.php';?>