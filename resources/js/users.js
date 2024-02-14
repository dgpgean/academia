$('form').on('submit', (e) => {
    e.preventDefault();

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
    else{
        e.currentTarget.submit();
    }

})

$('.date').mask('00/00/0000');
$('.cep').mask('00000-000');
$('.phone').mask('(00) 00000-0000');

$('#photoShow').on('click', ()=>{
    $("#photo").trigger('click');
})


const photo = document.querySelector('#photo')
    const photo_preview = document.querySelector('#photo_preview')
    photo.onchange = evt => {
        const [file] = photo.files
        if (file) {

            photo_preview.style.backgroundImage = `url('${URL.createObjectURL(file)}')`;
            photo_preview.src = URL.createObjectURL(file)
        }

    }
