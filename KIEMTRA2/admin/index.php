<?php
    include '../header.php';
?>

    <main>
        <!-- Hiển thị BẢNG DỮ LIỆU DANH BẠ CÁ NHÂN -->
        <!-- Kết nối tới Server, truy vấn dữ liệu (SELECT) từ Bảng db_employees -->
        <!-- Quy trình 4 bước -->
        <a href=" addEmployee.php" class="btn btn-success"><i class="fas fa-user-plus"></i> thêm nhân vân  </a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                    <th scope="col">tên</th>
                    <th scope="col">Họ đệm bệnh nhân </th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Giới tính </th>
                    <th scope="col">Nhóm máu </th>
                    <th scope="col">Số điện thoại </th>
                    <th scope="col">Email </th>
                    <th scope="col">Chiều cao </th>
                    <th scope="col">Cân nặng </th>
                    <th scope="col">Ngày lập sổ </th>
                    <th scope="col">Ngày cập nhật </th>
                    <th scope="col">sửa </th>
                    <th scope="col">xóa </th>
                </tr>
            </thead>
            <tbody>
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
                <?php
                    // Quy trình 4 bước
                    // Bước 01: Đã tạo sẵn, gọi lại thôi
                    include '../config.php';
                    // Bước 02: Thực hiện TRUY VẤN
                    $sql = "SELECT patientid, firstname, lastname, dateofbirth, gender, mobile, email, height, weight,
                    blood_type, created_on, modified_on FROM PATIENT ";
                    $result = mysqli_query($conn,$sql); //Lưu kết quả trả về vào result
                    // Bước 03: Phân tích và xử lý kết quả
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['patientid'].'</th>';
                            echo '<td>'.$row['firstname'].'</td>';
                            echo '<td>'.$row['lastname'].'</td>';
                            echo '<td>'.$row['dateofbirth'].'</td>';
                            echo '<td>'.$row['gender'].'</td>';
                            echo '<td>'.$row['mobile'].'</td>';
                            echo '<td>'.$row['email'].'</td>';
                            echo '<td>'.$row['height'].'</td>';
                            echo '<td>'.$row['weight'].'</td>';
                            echo '<td>'.$row['blood_type'].'</td>';
                            echo '<td>'.$row['created_on'].'</td>';
                            echo '<td>'.$row['modified_on'].'</td>';
                            echo '<td><a href="them.php?id='.$row['patientid'].'"><i class="fas fa-user-edit"></i></a></td>';
                            echo '<td><a href="xoa.php?id='.$row['patientid'].'"><i class="fas fa-user-times"></i></a></td>';
                            echo '</tr>';
                        }
                    }
                ?>
                
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
            </tbody>
            </table>
    </main>
    <a href="logout.php">Thoát</a>
    
    

    
<?php
    include '../footer.php';
?>
