<style>
    .chk_pointer {
        cursor: pointer ! important;
    }
</style>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">แบบสำรวจวัดระดับความพึงพอใจ</h3>
            <h3 class="text-center">ผู้มารับบริการ แผนกรถเข็นอุปกรณ์เสริม</h3>
            <div class="card-body ">
                <div class="form-row">
                    <div class="col">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div style="margin-bottom: 6px">
                                    <div class="input-group-prepend mt-3">
                                        <!--  <input type="hidden" id="" /> -->
                                        <span class="input-group-text" style="background: #ffffff; color: #000000">ชื่อ-สกุล</span>
                                        <input class="form-control" type="text" id="Full_name" style="background: rgb(255, 255, 255)">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <div style="margin-bottom: 6px">
                                    <div class="input-group-prepend mt-3">
                                        <span class="input-group-text" style="background: #ffF; color: #000000">ความสัมพันธ์กับผู้ป่วย</span>
                                        <input class="form-control" type="text" id="Relationship" style="background: rgb(255, 255, 255)">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div style="margin-bottom: 6px">
                                    <div class="input-group-prepend mt-3">
                                        <!--  <input type="hidden" id="" /> -->
                                        <span class="input-group-text" style="background: #ffffff; color: #000000">เบอร์โทรศัพท์</span>
                                        <input class="form-control" maxlength="12" onkeyup="autoTab2(this,2),chk_Number_Tel()" type="text" id="Tel" style="background: rgb(255, 255, 255)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div style="margin-bottom: 6px">
                                    <div class="input-group-prepend mt-3">
                                        <span class="input-group-text" style="background: #ffffff; color: #000000">วันที่มารับบริการ</span>
                                        <input class="form-control" type="date" id="data_start" style="background: rgb(255, 255, 255)">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div style="margin-bottom: 6px">
                                    <div class="input-group-prepend mt-3">
                                        <!--  <input type="hidden" id="" /> -->
                                        <label>
                                            <h3>ส่วนที่ 1
                                                แบบวัดระดับความพึงพอใจ</h3>
                                            <br>
                                            <label>
                                                ให้ท่านทำเครื่องหมาย ✔ ลงในช่องว่างที่ตรงตามความพึงพอใจของท่าน<br>
                                                3 หมายถึง ท่านมีความพึงพอใจมาก<br>
                                                2 หมายถึง ท่านมีความพึงพอใจปานกลาง<br>
                                                1 หมายถึง ท่านมีความพึงพอใจน้อย
                                            </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table table-bordered table-responsive">
                    <tr class="bg-light text-center">
                        <td style="width: 10%;">ข้อที่</td>
                        <td>ความพึงพอใจในแต่ละด้าน</td>
                        <td>มาก</td>
                        <td>ปานกลาง</td>
                        <td>น้อย</td>
                    </tr>

                    <tr>
                        <td class="text-center">
                            <h5>1.</h5>
                        </td>
                        <td>
                            <b>ยิ้มแย้ม แจ่มใส กระตือรือร้นพร้อมให้บริการ</b>
                        </td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p1" value="1"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p1" value="2"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p1" value="3"></td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <h5>2.</h5>
                        </td>
                        <td>
                            <b>ความเสมอภาคในการให้บริการ</b>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p2" value="1"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p2" value="2"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p2" value="3"></td>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-center">
                            <h5>3.</h5>
                        </td>
                        <td>
                            <b>มีความรู้ ความสามารถในการให้บริการ เช่น การวัดตัว
                                การปรับอุปกรณ์การแพทย์ให้เหมาะสมเป็นรายบุคคล</b>
                        </td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p3" value="1"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p3" value="2"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p3" value="3"></td>
                    </tr>

                    <tr>
                        <td class="text-center">
                            <h5>4.</h5>
                        </td>
                        <td>
                            <b>การประชาสัมพันธ์ ช่องทางการขอรับอุปกรณ์การแพทย์</b>
                        </td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p4" value="1"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p4" value="2"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p4" value="3"></td>
                    </tr>

                    <tr>
                        <td class="text-center">
                            <h5>5.</h5>
                        </td>
                        <td>
                            <b>การวัดตัว การปรับอุปกรณ์การแพทย์ให้เหมาะสมเป็นรายบุคคล</b>
                        </td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p5" value="1"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p5" value="2"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p5" value="3"></td>
                    </tr>

                    <tr>
                        <td class="text-center">
                            <h5>6.</h5>
                        </td>
                        <td>
                            <b>การให้ความรู้เกี่ยวกับวิธีการใช้อุปกณ์การแพทย์ที่ได้รับอย่างเหมาะสมและปลอดภัย</b>
                        </td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p6" value="1"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p6" value="2"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p6" value="3"></td>
                    </tr>

                    <tr>
                        <td class="text-center">
                            <h5>7.</h5>
                        </td>
                        <td>
                            <b>อุปกรณ์การแพทย์ที่ได้รับเป็นประโยชน์ต่อการทำกิจวัตรประจำวัน</b>
                        </td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p7" value="1"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p7" value="2"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p7" value="3"></td>
                    </tr>


                    <tr>
                        <td class="text-center">
                            <h5>8.</h5>
                        </td>
                        <td>
                            <b>อุปกรณ์การแพทย์ที่ได้รับทำให้คุณภาพชีวิตดีขึ้น</b>
                        </td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p8" value="1"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p8" value="2"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p8" value="3"></td>
                    </tr>

                    <tr>
                        <td class="text-center">
                            <h5>9.</h5>
                        </td>
                        <td>
                            <b>อุปกรณ์การแพทย์ที่ได้รับช่วยลดภาระการดูแลของครอบครัว</b>
                        </td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p9" value="1"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p9" value="2"></td>
                        <td class="text-center"><input type="radio" class="chk_pointer" name="p9" value="3"></td>
                    </tr>


                </table>
                <label>ส่วนที่ 2 ข้อเสนอแนะ/แนะนำ/ข้อปรับปรุง</label>
                <input class="form-control" type="text" id="Suggestion" style="background: rgb(255, 255, 255)">
                <hr width="100%"><br>
                <div>
                    <button class="btn btn-outline-success" id="send_survey" style="width: auto;">
                        ส่งแบบสำรวจ</button>
                    <div>
                    </div>
                </div>
            </div>
</section>
<script src="../survey/controller/insert_survey.js"></script>