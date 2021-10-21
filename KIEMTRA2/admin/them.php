<?php
    include '../header.php';
    include '../config.php';
?>

    <main class="container">
        <h2>Thêm thông tin bệnh nhân </h2>
        <form action="process-add-employee.php" method="post">
            <div class="form-group row">
                <label for="firtName" class="col-sm-2 col-form-label">Tên bệnh nhân:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="firtName" name="firtName" >
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="lastname" class="col-sm-2 col-form-label">họ đệm</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="dateofbirth" class="col-sm-2 col-form-label">ngày sinh</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="dateofbirth" name="dateofbirthl">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label">giới tính </label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="gender" name="gender">
                </div>
            </div>
            <br>

            <div class="form-group row">
                <label for="mobile" class="col-sm-2 col-form-label">số điện thoại</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="gender" name="gender">
               
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="emai" class="col-sm-2 col-form-label">mail</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="emai" name="emai">
               
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="height" class="col-sm-2 col-form-label">chieu cao</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="height" name="height">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="blood_type" class="col-sm-2 col-form-label">nhóm máu</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="blood_type" name="blood_type">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="blood_type" class="col-sm-2 col-form-label">ngày lập sổ  </label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="blood_type" name="blood_type">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="modified_on" class="col-sm-2 col-form-label">ngày cập nhật  </label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="modified_on" name="modified_on">
                </div>
            </div>
            <br>








            <div class="form-group row">
                <label for="emai" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Lưu lại</button>
                </div>
            </div>
        </form>
    </main>
    
<?php
    include '../footer.php';
?>