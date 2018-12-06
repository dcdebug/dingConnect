<body>

<aside class="right-side" style="margin-left: 20%;margin-right: 20%;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3>
            Top Up
            <small>Beta 1.0版本</small>
        </h3>
       <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
        </ol>-->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-20">

                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Input Your Telephone Number.</h3>
                    </div>
                    <div class="box-body">
                        <!-- Date dd/mm/yyyy -->
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon" onclick="Location()" style="cursor: pointer;">
                                    <i class="glyphicon glyphicon-globe"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Country Code | Phone Number" aria-describedby="sizing-addon1">
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                        <div class="form-group">
                            <button class="btn btn-success right">Next Step</button>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

                <!-- /.box -->

            </div><!-- /.col (left) -->
            <!-- /.col (right) -->
        </div><!-- /.row -->

    </section><!-- /.content -->
</aside>

<script type="text/javascript">
    function Location(){
        window.alert("test");
    }
</script>
</body>