<?php
    include 'header.php';
?>
<main>
    <table class="table">
    <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">giới tính </th>
                    <th scope="col">tuổi</th>
                    <th scope="col">nhóm máu </th>
                    <th scope="col">ngày hiến </th>
                    <th scope="col">số điện thoại </th>
                </tr>
            </thead>
  <tbody>
     <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
     <?php
                    // Quy trình 4 bước
                    // Bước 01: Đã tạo sẵn, gọi lại thôi
                    include 'config.php';
                    // Bước 02: Thực hiện TRUY VẤN
                    $sql = "SELECT bd_id,bd_name,bd_sex,bd_age,bd_bgroup, bd_reg_date, bd_phno FROM blood_donor
                    
                    $result = mysqli_query($conn,$sql); //Lưu kết quả trả về vào result
                    // Bước 03: Phân tích và xử lý kết quả
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['bd_id'].'</th>';
                            echo '<td>'.$row['bd_name'].'</td>';
                            echo '<td>'.$row['bd_sex'].'</td>';
                            echo '<td>'.$row['bd_age'].'</td>';
                            echo '<td>'.$row['bd_bgroup'].'</td>';
                            echo '<td>'.$row['bd_reg_date'].'</td>';
                            echo '<td>'.$row['bd_phno'].'</td>';
                            echo '</tr>';
                        }
                    }
                ?>
                
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
   
  </tbody>
</table>


</main>











<?php
    include 'footer.php';
?>