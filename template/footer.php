<div class="row" style="background: #4b4b4b; padding-top: 20px; padding-bottom: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-2-10">
                <h4><a href="./topica-native.php">VỀ TOPICA NATIVE</a></h4>
                <a href="topica-native.php?id=1">Tổ hợp công nghệ giáo  dục TOPICA</a><br/>
                <a href="./topica-native.php?id=2">TOPICA NATIVE</a><br/>
                <a href="./tin-tuc-hoat-dong.php">Tin tức - hoạt động</a><br/>
                <a href="./truyen-thong.php">Truyền thông</a>
            </div>
            <div class="col-xs-2-10">
                <h4><a href="./tuyen-dung.php">TUYỂN DỤNG</a></h4>
            </div>
            <div class="col-xs-2-10">
                <h4><a href="./cac-khoa-hoc.php?id-child=2">GIÁO VIÊN</a></h4>
            </div>
            <div class="col-xs-2-10">
                <h4><a href="#">MẠNG XÃ HỘI</a></h4>
                <p><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;<a href="#">Facebook</a></p>
                <p><i class="fa fa-google-plus"></i>&nbsp;&nbsp;&nbsp;<a href="#">Google+</a></p>
                <p><i class="fa fa-youtube"></i>&nbsp;&nbsp;&nbsp;<a href="#">Youtube</a></p>
                <p><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;<a href="#">Zalo</a></p>
            </div>
            <div class="col-xs-2-10">
                <h4><a href="./lien-he.php">LIÊN HỆ</a></h4>
                <p><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;0917 721 626</p>
                <p><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;&nbsp;native@topica.edu.vn</p>
            </div>
        </div>
    </div>
</div>
<?php
$id_child = isset($_GET['id-child']) ? $_GET['id-child'] : FALSE;
if ($id_child) {
    ?>
    <input type="hidden" name="get-id" value="<?php echo $id_child; ?>" />
    <script type="text/javascript">
        $(document).ready(function () {
            var id = $('input[name=get-id]').val();
            $("#content .title-content[nav-content=" + id + "] a").click();
        });
    </script>
<?php } ?>
