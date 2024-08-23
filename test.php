<?php if (!$isLoggedIn): ?>
    <div class="header__top__right__auth">
        <a href="./auth/login.php"><i class="fa fa-user"></i> Đăng Nhập</a>
    </div>
<?php endif; ?>
<?php if (!$isLoggedIn): ?>
    <div class="header__top__right__auth">
        <a href="./auth/register.php"><i class="fa fa-user"></i> Đăng Kí</a>
    </div>
<?php endif; ?>
<?php if (!$isLoggedIn): ?>
    <div class="dropdown">
        <button class="dropbtn" for="btnControl">Nhiệm vụ</button>
        <div class="dropdown-content">
            <a href="./nhiemvu.php">Các nhiệm vụ hàng ngày</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </div>
<?php endif; ?>