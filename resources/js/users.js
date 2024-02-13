$('.btn_blue').on('click', (e) => {
    e.preventDefault()
    const fields = document.querySelectorAll('.required')
    let requiredFields = ''
    fields.forEach((item) => {
        if (item.value == '') {
            requiredFields += (`<li>${item.getAttribute('data-name')}<li>`)
        };
    })

    if (requiredFields.length > 0) {
        Swal.fire({
            title: "Preencha os campos obrigatórios.",
            html: `<ul> ${requiredFields} </ul>`,
            icon: "error",
            showCancelButton: false,
            cancelButtonText: "Fechar"
        })
    }

})

$('.date').mask('00/00/0000');
$('.cep').mask('00000-000');
$('.phone').mask('(00) 00000-0000');

$('#photoShow').on('click', ()=>{
    $("#photo").trigger('click');
})
