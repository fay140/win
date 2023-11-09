<?php  
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>
<?php include_once './parts/hesder.php';?>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
<div class="col-md-5 p-lg-5 mx-auto my-5">
  <img scr="images/h.png"alt="">
      <h1 class="display-4 fw-normal">اربح معي</h1>
      <p class="lead fw-normal">  باقي فتح التسجيل</p>
      <h3 id="demo"></h3>
      <p class="lead fw-normal">للسحب على رحلة مجانية </p>
      </div>
    
    
<div class="container">
  <h3>للدخول للسحب اتبع التالي</h3>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور أعلاه</li>
  <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</li>
  <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وإيميلك </li>
  <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
  <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا </li>
</ul>
</div>
</div>

<div class="container">
<div class="position-relative text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form action="<?php $_SERVER['PHP_SELF']?>" method="$_POST" >
    <h3> الرجاء ادخال معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text"  name="firstName" class="form-control" id="firstName" value= "<?php echo $firstName ?>">
    <div class="form-text error"><?php echo $erroors['firstNameError']?></div>
  </div>
  <div class="mb-3">
    <label for="lastName" class="form-label"> الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName"value= "<?php echo $lastName?>">
    <div class="form-text error"><?php echo $erroors['lastNameError']?></div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email"value= "<?php echo $email?>">
    <div class="form-text error"><?php echo $erroors['emailError']?></div>
  </div>
  <button type="submit"  name="send" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>
  </div>

  <div class="loader-con"></div>
  <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
<!-- Button trigger modal -->
<div class ="d-grid gap-2 col-6 mx-auto my-5"> 
<button type="button" id="winner"class="btn btn-primary">
اختيار الرابح 
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal " tabindex="-1" aria-labelledby="modal Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal Label"> الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<?php foreach($users as $users): ?> 
  <h1 class=" disply-3 text-center modal-title" id="modal Label"><?php htmlspecialchars($users;['firstName']).'<br>'.htmlspecialchars($users;['lastname']) .'<br>'.htmlspecialchars($users;['email'])?></h1>
  <?php  endforeach;?>
      </div>
    </div>
  </div>
</div>





  <div id="cards" class= "row mb-5 pb-5">


  <div class= "col-sm6">
  <div class= "card my-2 light">
    <div class="card-body">
  <h1><?php htmlspecialchars($users;['firstName']).'<br>'.htmlspecialchars($users;['lastname']) .'<br>'.htmlspecialchars($users;['email']) ;?></h1>
  </dive>
  </dive>
  </dive>
</dive>


<?php include_once './parts/footer.php';?>