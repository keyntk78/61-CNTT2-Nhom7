@extends('pages.layouts.index')
@section('tittle')
    Bài tập 4
@endsection
@section('content')
    <!-- News With Sidebar Start -->
<style>
    table {
        margin-left: auto;
        margin-right: auto;
        border-collapse: collapse;
        width: 50%;
    }

    th,
    td {
        border: solid 0.5px;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #16703681;
    }

    .center {
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }
    </style>
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                 <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Bài tập sql - Bài tập 4</h3>
                            </div>
                        </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex mk align-items-center justify-content-between bg-light">
                    <h1 style="text-align: center;color:#2A7FAA">THÔNG TIN KHÁCH HÀNG</h1>
                    <table border="1" align="center">
                        <tr>
                            <th>Mã KH</th>
                            <th>Tên khách hàng</th>
                            <th>Giới tính</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                        </tr>
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "quan_ly_ban_sua";
                            $duongdan =  asset('uploads/images/');
                            $conn=mysqli_connect($servername, $username, $password, $dbname);
                            if(!$conn) echo "Kết nối thất bại";
                            mysqli_set_charset($conn, 'utf8');
                            $query = "SELECT * FROM khach_hang";
                            $result = mysqli_query($conn,$query);
                            if(mysqli_num_rows($result)!= 0){
                                while($rows=mysqli_fetch_array($result))
                                {
                                    if($rows["Phai"] == 1) {
                                        $avatar = "<img width=\"60px\" height=\"60px\" src='$duongdan/female.jpeg' alt=\"hinh ảnh\">";
                                    } else{
                                        $avatar = "<img width=\"60px\" height=\"60px\" src='$duongdan/male.jpeg' alt=\"hinh ảnh\">";
                                    }
                                    echo '<tr>
                                        <td>'.$rows["Ma_khach_hang"].'</td>
                                        <td>'.$rows["Ten_khach_hang"].'</td>
                                        <td style="text-align: center;">'.$avatar.'</td>
                                        <td>'.$rows["Dia_chi"].'</td>
                                        <td>'.$rows["Dien_thoai"].'</td>
                                    </tr>';
                                }
                            }
                        ?>
                    </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->
@endsection
