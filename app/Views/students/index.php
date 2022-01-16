<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css" />
    <link href="<?php base_url() ?>assets/error.css" rel="stylesheet">
    </link>
    <link href="<?php base_url() ?>assets/zoomimg.css" rel="stylesheet">
    </link>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/46/46955.png" type="image/x-icon">
    <title>Smart Students</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
            <a class="navbar-brand me-2" href="https://web.facebook.com/ppong.sml">
                <img src="https://cdn-icons-png.flaticon.com/512/46/46955.png" height="45" alt="Logo" loading="lazy" style="margin-top: -1px;cursor: pointer;" />
            </a>
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <!-- Left links -->
                <div class="d-flex align-items-center">
                    <a class="btn btn-dark px-3" href="https://github.com/Pong-kst/CRUD-CodeIgniter-4.git" role="button"><i class="fab fa-github"></i></a>
                </div>
            </div>
    </nav>
    <!-- Navbar -->


    <div class="container mt-4" id="gg">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="fw-bold">
                            ຂໍ້ມູນນັກສຶກສາ
                            <a href="<?= base_url('student-add'); ?>" class="btn btn-primary float-end">ເພີ່ມລາຍການ</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered " id="std-list">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ລະຫັດ</th>
                                    <th class="text-center align-middle">ຮູບພາບ</th>
                                    <th>ຊື່</th>
                                    <th>ນາມສະກຸນ</th>
                                    <th>ເພດ</th>
                                    <th>ສາຂາ</th>
                                    <th>ເບີໂທ</th>
                                    <th class="text-center align-middle">ແກ້ໄຂແລະລົບ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Student as $item) : ?>
                                    <tr>
                                        <td><?php echo $item['id']; ?></td>
                                        <td class="align-middle"><?= $item['stdid']; ?></td>
                                        <td class="text-center align-middle">
                                            <input type="radio" name="zooms" id="zoomCheck2">
                                            <label for="zoomCheck2">
                                                <img src="<?= "uploads/" . $item['image']; ?>" height="100px" width="100px" alt="image">
                                            </label>
                                        </td>
                                        <td class="align-middle"><?= $item['name']; ?></td>
                                        <td class="align-middle"><?= $item['lastname']; ?></td>
                                        <td class="align-middle">
                                            <?php
                                            if ($item["gender"] == "male") { ?>
                                                ຊາຍ
                                            <?php } else if ($item["gender"] == "female") { ?>
                                                ຍິງ
                                            <?php } else { ?>
                                                ອື່ນໆ
                                            <?php } ?></td>
                                        <td class="align-middle"><?= $item['branches']; ?></td>
                                        <td class="align-middle"><?= $item['tell']; ?></td>

                                        <td class="align-middle text-center">
                                            <a href="<?= base_url('student/edit/' . $item['id']); ?>" class="btn btn-success btn-sm">ແກ້ໄຂ</a>
                                            <a href="<?= base_url('student/delete/' . $item['id']); ?>" onclick="return confirm('ຕ້ອງການລົບແທ້ ຫຼື ບໍ່?');" class=" btn btn-danger btn-sm">ລົບ</a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>

</body>
<script src="<?php base_url() ?>assets/datatable.js"></script>
<script src="<?php base_url() ?>assets/zoomimg.js"></script>

</html>