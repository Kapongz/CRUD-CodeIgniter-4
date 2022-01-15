<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css" />
    <link href="<?php base_url() ?>assets/error.css" rel="stylesheet"></link>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/46/46955.png" type="image/x-icon">
    <title>Smart Students</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="fw-bold">
                            ເພີ່ມນັກສຶກສາ
                            <a href="<?= base_url('students'); ?>" class="btn btn-danger float-end">ຍ້ອນກັບ</a>
                        </້>
                    </div>
                    <div class="card-body">
                        <form id="add-form" action="<?= base_url('student-store') ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 my-2">
                                    <label for="stdid">ລະຫັດນັກສຶກສາ:</label>
                                    <input type="text" name="stdid" class="form-control">
                                </div>
                                <div class="col-md-6 my-2">
                                <label for="branches">ສາຂາ:</label>
                                    <select class="form-select" name="branches" aria-label="Default select example">
                                        <option selected disabled>---ກະລຸນາເລືອກສາຂາ---</option>
                                        <option value="ພັດທະນາເວບໄຊ">ພັດທະນາເວບໄຊ</option>
                                        <option value="ວິທະຍາສາດຄອມພິວເຕີ">ວິທະຍາສາດຄອມພິວເຕີ</option>
                                        <option value="ພັດທະນາໂປແກຣມ">ພັດທະນາໂປແກຣມ</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-3 my-2">
                                    <label for="name">ຊື່:</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="col-md-3 my-2">
                                    <label for="name">ນາມສະກຸນ:</label>
                                    <input type="text" name="lastname" class="form-control">
                                </div>
                                <div class="col-md-6 my-2">
                                    <label for="Tell">ເບີໂທ:</label>
                                    <input type="tel" name="tell" class="form-control" placeholder="020-xxxx-xxxx" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}">
                                </div>
                                <div class="col-md-6 my-2">
                                    <label for="gender">ເພດ:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="male">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            ຊາຍ
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="female">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            ຍິງ
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="other">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            ອື່ນໆ
                                        </label>
                                    </div>
                                </div>
                               
                                <div class="col-md-6 my-2">
                                    <label for="img">ຮູບພາບ:</label>
                                    <input type="file" name="image" class="form-control" >
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr>
                                <button type="submit" class="btn btn-primary float-end px-4 fs-5">ບັນທຶກ</button>
                            </div>
                    </div>
                    </form>
                </div>


            </div>

        </div>
    </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
</body>
<script src="<?php base_url() ?>assets/validate.js"></script>
</html>