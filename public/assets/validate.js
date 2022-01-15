if ($('#add-form').length > 0) {
    $('#add-form').validate({
        rules: {
            stdid: {
                required: true
            },
            name: {
                required: true
            },
            lastname: {
                required: true,
                maxlength: 60,
                
            },
            tell: {
                required: true,
                maxlength: 11,
                
            }
        },
        messages: {
            name: {
                required: 'ກະລຸນາໃສ່ຊື່.',

            },
            lastname: {
                required: 'ກະລຸນາໃສ່ນາມສະກຸນ.',
                maxlength: 'The email should be or equal to 60 chars.'
            },
            tell: {
                required: 'ກະລຸນາໃສ່ເບີໂທ.',
                maxlength: 'ເບີໂທຕ້ອງນ້ອຍກ່ວາ ຫຼື ເທົ່າກັບ 11.'
            },
            stdid: {
                required: 'ກະລຸນາໃສ່ໄອດີນັກສຶກສາ.'
            }
        
        }
    })
}