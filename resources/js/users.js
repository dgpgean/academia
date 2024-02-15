$('form').on('submit', (e) => {
    e.preventDefault();
    const teste = document.querySelector('#teste');
    Swal.fire({
        title: "Submit your Github username",
        input: "text",
        inputAttributes: {
          autocapitalize: "off"
        },
        showCancelButton: true,
        confirmButtonText: "Look up",
        showLoaderOnConfirm: true,
        preConfirm: async (login) => {
          try {
            const githubUrl = teste.value;
            const data = {
              name: $('input[name="name"]').val() ,
              birthday: $('input[name="birthday"]').val() ,
              email: $('input[name="email"]').val() ,
              sex: $('select[name=sex] option').filter(':selected').val(),
              code: $('input[name="code"]').val() ,
              street: $('input[name="street"]').val() ,
              neighborhood: $('input[name="neighborhood"]').val() ,
              city: $('input[name="city"]').val() ,
              phone: $('input[name="phone"]').val() ,
              password: $('input[name="password"]').val() ,
              plan: $('input[name="plan"]').val() ,
              status: $('select[name=status] option').filter(':selected').val(),

            }
            const response = await fetch(githubUrl,{
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json',
                  'Accept': 'application/json',
                  'url': '/payment',
                  "X-CSRF-Token": document.querySelector('input[name=_token]')
                      .value
              },
              body: JSON.stringify(data),
             });


            if (!response.ok) {

                let errors = JSON.stringify(await response.json())
                errors = JSON.parse(errors)
                let msgs = ''
                Object.keys(errors.errors).forEach((item) => {
                    msgs += errors.errors[item] + "\n";
                  });
                return Swal.showValidationMessage(`
                     ${msgs}
                `);
            }
            else{
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: `Usuário cadastrado com sucesso`,
                    showConfirmButton: false,
                    timer: 1500
                  });
            }
          } catch (error) {
          }
        },
        allowOutsideClick: () => !Swal.isLoading()
      }).then((result) => {

      });

    const fields = document.querySelectorAll('.required')
    let requiredFields = ''
    fields.forEach((item) => {
        if (item.value == '') {
            requiredFields += (`<li>${item.getAttribute('data-name')}<li>`)
        };
    })
    if (false) {
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


const photo = document.querySelector('#photo')
    const photo_preview = document.querySelector('#photo_preview')
    photo.onchange = evt => {
        const [file] = photo.files
        if (file) {

            photo_preview.style.backgroundImage = `url('${URL.createObjectURL(file)}')`;
            photo_preview.src = URL.createObjectURL(file)
        }

    }
