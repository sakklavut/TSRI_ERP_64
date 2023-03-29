<?php include('comtop.php'); ?>
<?php include('header.php'); ?>

<div class="bg_form">
     <div class="container">
          <div class="row">
               <div class="col-12 p-5">
                    <h2>ใบสมัครงาน</h2>
               </div>
          </div>
     </div>
</div>
<div class="container">
     <div class="row">
          <div class="col-12">
               <nav aria-label="navigation">
                         <ol class="navigation">
                              <li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
                              <li class="breadcrumb-item active" aria-current="page">ตรวจสอบสถานะการสมัครสอบ</li>
                         </ol>
               </nav>
               <hr>
          </div>
     </div>
     <div class="row">
          <div class="col-12">
              <h3>ตรวจสอบสถานะการสมัครสอบ</h3>
              <small>กรอกเลขประจำตัวประชาชน</small>
          </div>
     </div>
     <div class="row box_form"> 
               <div class="col-12 col-md-8">
                    <form action="">    
                          <input type="text" class="form-control  mb-2" id="PER_IDCARD" maxlength="13" placeholder="xxx-xx-xx-xxx-xxxx" aria-describedby="PER_IDCARD">
                    </form> 
               </div>
               <div class="col-12 col-md-4">
                    <button class="btn detail_button text-center col-12 mb-2" type="button" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="search">ค้นหา </button>
               </div>
     </div>
     <div class="row">
          <div class="col-12">           
               <div class="collapse" id="search">
                    <table class="table table-hover">
                         <thead>
                              <tr>
                                   <th scope="col">เลขประจำตัวผู้สมัคร</th>
                                   <th scope="col">ตำแหน่งที่สมัคร</th>
                                   <th scope="col">เลขบัตรประจำตัวประชาชน</th>
                                   <th scope="col">ชื่อ - สกุล</th>
                                   <th scope="col">สถานะการสมัคร</th>
                                   <th scope="col">พิมพ์ใบสมัคร</th>
                              </tr>
                         </thead>
                         <tbody>
                              <tr>
                                   <th scope="row">1</th>
                                   <td>Mark</td>
                                   <td>Otto</td>
                                   <td>@mdo</td>
                                   <td>@mdo</td>
                                   <td>@mdo</td>
                              </tr>
                              <tr>
                                   <th scope="row">2</th>
                                   <td>Mark</td>
                                   <td>Otto</td>
                                   <td>@mdo</td>
                                   <td>@mdo</td>
                                   <td>@mdo</td>
                              </tr>
                              <tr>
                                   <th scope="row">3</th>
                                   <td>Mark</td>
                                   <td>Otto</td>
                                   <td>@mdo</td>
                                   <td>@mdo</td>
                                   <td>@mdo</td>
                              </tr>
                         </tbody>
                    </table>
               </div>
          </div>
     </div>
</div>




<?php include('footer.php'); ?>
<?php include('combottom.php'); ?>