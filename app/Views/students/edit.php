<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/46/46955.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php base_url() ?>/assets/style.css" >
    <title>Smart Students</title>
  
</head>

<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h3 class="fw-bold">
                            ແກ້ໄຂ & ອັບເດດ ນັກສຶກສາ
                            <a href="<?= base_url('students'); ?>" class="btn btn-danger float-end">ຍ້ອນກັບ</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('student/update/'.$Student['id']); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 my-2">
                                    <label for="stdid">ລະຫັດນັກສຶກສາ:</label>
                                    <input type="text" name="stdid" value="<?= $Student['stdid'] ?>" class="form-control">
                                </div>
                                <div class="col-md-6 my-2">
                                <label for="branches">ສາຂາ:</label>
                                    <select class="form-select" name="branches" aria-label="Default select example">
                                        <option selected disabled>---ກະລຸນາເລືອກສາຂາ---</option>
                                        <option value="ພັດທະນາເວບໄຊ" <?php if($Student["branches"] == 'ພັດທະນາເວບໄຊ' ){echo "selected";} ?>>ພັດທະນາເວບໄຊ</option>
                                        <option <?php if($Student["branches"] == 'ວິທະຍາສາດຄອມພິວເຕີ' ){echo "selected";} ?>>ວິທະຍາສາດຄອມພິວເຕີ</option>
                                        <option <?php if($Student["branches"] == 'ພັດທະນາໂປແກຣມ' ){echo "selected";} ?>>ພັດທະນາໂປແກຣມ</option>
                                    </select>
                                </div>
                                <div class="col-md-3 my-2">
                                    <label for="name">ຊື່:</label>
                                    <input type="text" name="name" class="form-control" value="<?= $Student['name'] ?>">
                                </div>
                                <div class="col-md-3 my-2">
                                    <label for="name">ນາມສະກຸນ:</label>
                                    <input type="text" name="lastname" class="form-control" value="<?= $Student['lastname'] ?>">
                                </div>
                                <div class="col-md-6 my-2">
                                    <label for="Tell">ເບີໂທ:</label>
                                    <input type="tel" name="tell" class="form-control" value="<?= $Student['tell'] ?>" placeholder="020-xxxx-xxxx">
                                </div>
                                <div class="col-md-6 my-2">
                                    <label for="gender">ເພດ:</label><br>
                                    <?php 
                                        if($Student["gender"] == "male"){
                                        echo "<input type='radio' name='gender' value='male' checked>ຊາຍ";
                                        echo "<input type='radio' name='gender' value='female' >ຍິງ";
                                        echo "<input type='radio' name='gender' value='other' >ອື່ນໆ ";
                                        }else if($Student["gender"] == "female" ){
                                        echo "<input type='radio' name='gender' value='male' >ຊາຍ";
                                        echo "<input type='radio' name='gender' value='female' checked>ຍິງ";
                                        echo "<input type='radio' name='gender' value='other' >ອື່ນໆ";
                                        }else{
                                            echo "<input type='radio' name='gender' value='male' >ຊາຍ";
                                        echo "<input type='radio' name='gender' value='female' >ຍິງ";
                                        echo "<input type='radio' name='gender' value='other' checked>ອື່ນໆ";
                                        }
                                        
                                        ?>
                                </div>
                               
                                <div class="col-md-6 my-2">
                                    <label for="img">ຮູບພາບ:</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <button type="submit" class="btn btn-primary float-end px-4">ອັບເດດ</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    
                </div>

            </div>
            <div class="col-md-5">
                <img src="<?= base_url('uploads/'.$Student['image']); ?>" class="img-student w-100" alt="student img"  >
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>