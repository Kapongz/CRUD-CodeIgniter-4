$(document).ready(function() {
    $('#std-list').DataTable(

        {
            "language": {
                "decimal": "",
                "emptyTable": "ບໍ່ມີຂໍ້ມູນຢູ່ໃນຕາຕະລາງ",
                "info": "ກຳລັງສະແດງ _START_ ເຖິງ _END_ ຂອງ _TOTAL_ ລາຍການ",
                "infoEmpty": "ກຳລັງສະແດງ 0 ເຖິງ 0 ຂອງ 0 ລາຍການ",
                "infoFiltered": "(ກັ່ນຕອງ ມາຈາກ _MAX_ ລາຍການ ທັງໝົດ)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "ສະແດງ _MENU_ ລາຍການ",
                "loadingRecords": "ກຳລັງໂຫຼດ...",
                "processing": "ກຳລັງປະມວນຜົນ...",
                "search": "ຄົ້ນຫາ:",
                "zeroRecords": "ບໍ່ພົບບັນທຶກທີ່ກົງກັນ",
                "paginate": {
                    "first": "ທໍາອິດ",
                    "last": "ສຸດທ້າຍ",
                    "next": "ຖັດໄປ",
                    "previous": "ກັບຫຼັງ"
                },
                "aria": {
                    "sortAscending": ": ເປີດໃຊ້ເພື່ອຈັດຮຽງຖັນແຕ່ໃຫຍ່ຫານ້ອຍ",
                    "sortDescending": ": ເປີດໃຊ້ເພື່ອຈັດຮຽງຖັນຈາກນ້ອຍຫານ້ອຍ"
                }
            }
        }
    );
})