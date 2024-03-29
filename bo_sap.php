<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bơ</title>
    <link rel="stylesheet" href="styles.css">
</head>
<br>
<header>BƠ SÁP</header>
<div class="navMenu">
    <a href="mainpage.html">Trang chủ</a>
    <div class="dropdown">
        <button class="Mandropbtn" onclick="Man()">Mận<i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="ManDropDown">
            <a href="man_hau.html">Mận hậu</a>
            <a href="man_anh_em.html">Mận anh em</a>
            <a href="man_tam_hoa.html">Mận tam hoa</a>
        </div>
    </div>

    <div class="dropdown">
        <button class="Bodropbtn" onclick="Bo()">Bơ<i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="BoDropDown">
            <a href="bo_sap.html">Bơ sáp</a>
            <a href="bo_tu_quy.html">Bơ tứ quý</a>
            <a href="bo_hass.html">Bơ Hass</a>
            <a href="bo_kim_cuong.html">Bơ kim cương</a>
        </div>
    </div>

    <div class="dropdown">
        <button class="Suadropbtn" onclick="Sua()">Sữa<i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="SuaDropDown">
            <a href="sua.html">Sữa có đường</a>
            <a href="sua_khong_duong.html">Sữa không đường</a>
            <a href="sua_chua.html">Sữa chua</a>
        </div>
    </div>

    <a href="login.html">Đăng nhập</a>
    <a href="register.html">Đăng ký</a>
</div>

<script src="test.js">

</script>


<div class="rows">
    <div class="col1">
        <img src="bo.jpg" alt="Italian Trulli" style="width: 100%">
        <br><label type="man_type">Bơ loại 1</label>
        <br><label type="price">Giá: 50.000 vnđ</label><br>

        <img src="bo.jpg" alt="Italian Trulli" style="width: 100%">
        <br><label type="man_type">Bơ loại 2</label>
        <br><label type="price">Giá: 40.000 vnđ</label><br>

        <img src="bo.jpg" alt="Italian Trulli" style="width: 100%">
        <br><label type="man_type">Bơ loại 3</label>
        <br><label type="price">Giá: 41.000 vnđ</label><br>
    </div>

    <div class="col2">
        <img src="bo.jpg" alt="Italian Trulli" style="width: 100%">
        <br><label type="man_type">Bơ loại 1</label>
        <br><label type="price">Giá: 50.000 vnđ</label><br>

        <img src="bo.jpg" alt="Italian Trulli" style="width: 100%">
        <br><label type="man_type">Bơ loại 2</label>
        <br><label type="price">Giá: 40.000 vnđ</label><br>

        <img src="bo.jpg" alt="Italian Trulli" style="width: 100%">
        <br><label type="man_type">Bơ loại 3</label>
        <br><label type="price">Giá: 41.000 vnđ</label><br>
    </div>

    <div class="col3">
        <img src="bo.jpg" alt="Italian Trulli" style="width: 100%">
        <br><label type="man_type">Bơ loại 1</label>
        <br><label type="price">Giá: 50.000 vnđ</label><br>

        <img src="bo.jpg" alt="Italian Trulli" style="width: 100%">
        <br><label type="man_type">Bơ loại 2</label>
        <br><label type="price">Giá: 40.000 vnđ</label><br>

        <img src="bo.jpg" alt="Italian Trulli" style="width: 100%">
        <br><label type="man_type">Bơ loại 3</label>
        <br><label type="price">Giá: 41.000 vnđ</label><br>
    </div>
</div>

</body>
</html>