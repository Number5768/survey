<div class="content-header shadow-lg border border-light">
    <div class="container-fluid animate__animated animate__fadeIn animate__delay 2s">
        <div class="row mb-2 ">
            <div class="col-sm-6 ">
                <h1 class="m-0 text-dark">ChartSurvey</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">ข้อมูล</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<!-- ส่วนที่แสดงข้อมูลทั้งหมดในระบบ -->
<div class="container-fluid">
    <div class="row " style="margin-top: 30px;">

        <div class="col-lg-3 col-xs-6 animate__animated animate__fadeIn animate__delay 2s">
            <!-- small box -->
            <div class="small-box bg-red shadow-lg border border-light">
                <div class="inner">
                    <h4 id="data_people"></h4>
                    <p>จำนวนทำแบบสำรวจทั้งหมด</p>
                </div>
                <div class="icon">
                    <i class="far fa-newspaper"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6 animate__animated animate__fadeIn animate__delay 2s">
            <!-- small box -->
            <div class="small-box bg-warning shadow-lg border border-light">
                <div class="inner">
                    <h4 id="Suggestion"></h4>
                    <p>จำนวนข้อเสนอแนะ</p>
                </div>
                <div class="icon">
                    <i class="fas fa-newspaper"></i>
                </div>
            </div>
        </div>

        <!-- สิ้นสุดส่วนที่แสดงข้อมูลทั้งหมดในระบบ -->
        <!-- ส่วนแสดงข้อมูลรูปแบบ โดนัท -->
        <div class="container-fluid animate__animated animate__fadeIn animate__delay 3s">
            <div class="row ">
                <div class="col-12">
                    <!-- jQuery Knob -->
                    <div class="card shadow-lg border border-light" style="margin-top: 30px;">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="far fa-chart-bar"></i>
                                Report
                            </h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="padding: 0px !important;">
                            <div class="row pb-3">
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob " id="p1" disabled="disabled" data-width="150" data-height="150" data-fgColor="#3c8dbc" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนข้อที่ 1</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p1_max" disabled="disabled" data-width="150" data-height="150" data-fgColor="#3c8dbc" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนมาก</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p1_medium" disabled="disabled" data-width="150" data-height="150" data-fgColor="#3c8dbc" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนปานกลาง</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p1_min" disabled="disabled" data-width="150" data-height="150" data-fgColor="#3c8dbc" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนน้อย</div>
                                </div>
                                <!-- ./col -->


                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob " id="p2" disabled="disabled" data-width="150" data-height="150" data-fgColor="#f56954" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนข้อที่ 2</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p2_max" disabled="disabled" data-width="150" data-height="150" data-fgColor="#f56954" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนมาก</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p2_medium" disabled="disabled" data-width="150" data-height="150" data-fgColor="#f56954" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนปานกลาง</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p2_min" disabled="disabled" data-width="150" data-height="150" data-fgColor="#f56954" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนน้อย</div>
                                </div>
                                <!-- ./col -->


                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob " id="p3" disabled="disabled" data-width="150" data-height="150" data-fgColor="#00a65a" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนข้อที่ 3</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p3_max" disabled="disabled" data-width="150" data-height="150" data-fgColor="#00a65a" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนมาก</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p3_medium" disabled="disabled" data-width="150" data-height="150" data-fgColor="#00a65a" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนปานกลาง</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p3_min" disabled="disabled" data-width="150" data-height="150" data-fgColor="#00a65a" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนน้อย</div>
                                </div>
                                <!-- ./col -->


                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob " id="p4" disabled="disabled" data-width="150" data-height="150" data-fgColor="#7FFF00" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนข้อที่ 4</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p4_max" disabled="disabled" data-width="150" data-height="150" data-fgColor="#7FFF00" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนมาก</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p4_medium" disabled="disabled" data-width="150" data-height="150" data-fgColor="#7FFF00" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนปานกลาง</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p4_min" disabled="disabled" data-width="150" data-height="150" data-fgColor="#7FFF00" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนน้อย</div>
                                </div>
                                <!-- ./col -->

                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob " id="p5" disabled="disabled" data-width="150" data-height="150" data-fgColor="#FFFACD" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนข้อที่ 5</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p5_max" disabled="disabled" data-width="150" data-height="150" data-fgColor="#FFFACD" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนมาก</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p5_medium" disabled="disabled" data-width="150" data-height="150" data-fgColor="#FFFACD" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนปานกลาง</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p5_min" disabled="disabled" data-width="150" data-height="150" data-fgColor="#FFFACD" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนน้อย</div>
                                </div>
                                <!-- ./col -->

                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob " id="p6" disabled="disabled" data-width="150" data-height="150" data-fgColor="#DB7093" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนข้อที่ 6</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p6_max" disabled="disabled" data-width="150" data-height="150" data-fgColor="#DB7093" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนมาก</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p6_medium" disabled="disabled" data-width="150" data-height="150" data-fgColor="#DB7093" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนปานกลาง</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p6_min" disabled="disabled" data-width="150" data-height="150" data-fgColor="#DB7093" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนน้อย</div>
                                </div>
                                <!-- ./col -->

                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob " id="p7" disabled="disabled" data-width="150" data-height="150" data-fgColor="#FFDEAD" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนข้อที่ 7</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p7_max" disabled="disabled" data-width="150" data-height="150" data-fgColor="#FFDEAD" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนมาก</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p7_medium" disabled="disabled" data-width="150" data-height="150" data-fgColor="#FFDEAD" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนปานกลาง</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p7_min" disabled="disabled" data-width="150" data-height="150" data-fgColor="#FFDEAD" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนน้อย</div>
                                </div>
                                <!-- ./col -->

                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob " id="p8" disabled="disabled" data-width="150" data-height="150" data-fgColor="#708090" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนข้อที่ 8</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p8_max" disabled="disabled" data-width="150" data-height="150" data-fgColor="#708090" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนมาก</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p8_medium" disabled="disabled" data-width="150" data-height="150" data-fgColor="#708090" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนปานกลาง</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p8_min" disabled="disabled" data-width="150" data-height="150" data-fgColor="#708090" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนน้อย</div>
                                </div>
                                <!-- ./col -->


                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob " id="p9" disabled="disabled" data-width="150" data-height="150" data-fgColor="#7CFC00" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนข้อที่ 9</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p9_max" disabled="disabled" data-width="150" data-height="150" data-fgColor="#7CFC00" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนมาก</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p9_medium" disabled="disabled" data-width="150" data-height="150" data-fgColor="#7CFC00" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนปานกลาง</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-md-3 pt-3 text-center animate__animated animate__fadeIn animate__delay 4s">
                                    <input type="text" class="knob" id="p9_min" disabled="disabled" data-width="150" data-height="150" data-fgColor="#7CFC00" data-readonly="ture" readonly="readonly">

                                    <div class="knob-label">จำนวนน้อย</div>
                                </div>
                                <!-- ./col -->
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- สิ้นสุดส่วนแสดงข้อมูลรูปแบบ โดนัท -->
    <script src="../controller/chart.js"></script>