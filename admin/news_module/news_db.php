<?php
require_once("../../function/config3.inc.php");
//อัพโหลดภาพ==================================================================================
$target_dir = "../../img/upload/news/";
$target_file = $target_dir . $location.time().'_'.basename($_FILES["img_news"]["name"]);
$name_file = $location.time().'_'.basename($_FILES["img_news"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($target_file)) {
    $check = getimagesize($_FILES["img_news"]["tmp_name"]);
    if($check !== false) {
        echo "ไฟล์ภาพ - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "นี่ไม่ใข่ไฟล์ภาพ";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "ขอโทษค่ะ, มีภาพนี้อยู่แล้ว";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["img_news"]["size"] > 10000000) {
    echo "ขอโทษค่ะ, ภาพมีขนาดใหญ่เกินไป ต้องไม่เกิน 10 mb";
    echo $_FILES["img_news"]["size"];
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "ขอโทษค่ะ, ต้องมีนามสกุลเป็น JPG, JPEG, PNG & GIF เท่านั้น";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "ขอโทษค่ะ, ภาพของคุณไม่ได้ถูกอัพโหลด";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["img_news"]["tmp_name"], $target_file)) {
        echo "ภาพของคุณ ". basename( $_FILES["img_news"]["name"]). " อัพโหลดเรียบร้อยแล้ว";
    } else {
        echo "ขอโทษค่ะ, มีข้อผิดพลาดอัปโหลดไฟล์ของคุณ";
    }
}
//อัพโหลดภาพ==================================================================================
?>
<?php
//อัพโหลดไฟล์==================================================================================
$target_dir2 = "../../file/upload/news/";
$target_file2 = $target_dir2 . $location.time().'_'.basename($_FILES["file_news"]["name"]);
$name_file2 = $location.time().'_'.basename($_FILES["file_news"]["name"]);
$uploadOk2 = 1;

// Check if file already exists
if (file_exists($target_file2)) {
    echo "ขอโทษค่ะ, มีไฟล์นี้อยู่แล้ว";
    $uploadOk2 = 0;
}
// Check file size
if ($_FILES["file_news"]["size"] > 100000000) {
    echo "ขอโทษค่ะ, ไฟล์มีขนาดใหญ่เกินไป ต้องไม่เกิน 100 mb";
    echo $_FILES["file_news"]["size"];
    $uploadOk2 = 0;
}
// Check if $uploadOk2 is set to 0 by an error
if ($uploadOk2 == 0) {
    echo "ขอโทษค่ะ, ไฟล์ของคุณไม่ได้ถูกอัพโหลด";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file_news"]["tmp_name"], $target_file2)) {
        echo "ไฟล์ของคุณ ". basename( $_FILES["file_news"]["name"]). " อัพโหลดเรียบร้อยแล้ว";
    } else {
        echo "ขอโทษค่ะ, มีข้อผิดพลาดอัปโหลดไฟล์ของคุณ";
    }
}
//อัพโหลดไฟล์==================================================================================

$head_news = $_POST["head_news"];
$title_news = $_POST["title_news"];
$detail_news = $_POST["detail_news"];

$sql = "INSERT INTO `news` (`pk_news`, `head_news`, `title_news`, `detail_news`, `img_news`, `file_news`)";
$sql .= "VALUES (NULL, '$head_news', '$title_news', '$detail_news', '$name_file', '$name_file2');";
$result = mysqli_query($con,$sql);
// $sql_img = "Select img_news from news";
// $result_img = mysqli_query($con,$sql_img);
// foreach ($result_img as $key => $value):
// ?>
<!-- // <img src="<?php echo $value["img_news"];?>" width="50"> -->
 <?php
// endforeach;
// ?>