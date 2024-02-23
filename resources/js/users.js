$('#newUser').on('submit', async (e) => {
    e.preventDefault();
    const teste = document.querySelector('#teste');

    try {
        const githubUrl = teste.value;
        const data = {
          name: $('input[name="name"]').val() ,
          id: $('input[name="id"]').val(),
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
        const method = $('#newUser').attr('method')
        const response = await fetch(githubUrl,{
          method: method,
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
                msgs += `<li>${errors.errors[item]}</li>`;
              });

            return Swal.fire({
                title: "<strong>Preencha os campos obrigatórios!</strong>",
                icon: "info",
                html: `<ul> ${msgs}</ul>`,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                confirmButtonText: `
                  <i class="fa fa-thumbs-up"></i> Corrigir!
                `,
                confirmButtonAriaLabel: "Thumbs up, Corrigir",
                cancelButtonText: `
                  <i class="fa fa-thumbs-down"></i>
                `,
                cancelButtonAriaLabel: "Thumbs down"
              });
        }
        else{
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: `Usuário ${method == "PUT" ? 'Atualizado' : 'Cadastrado'} com sucesso`,
                showConfirmButton: false,
                timer: 1500
              });

              setTimeout(() => {
                window.location.href ='/admin/users'
              }, 2000);
        }
      } catch (error) {
      }


})

$('.date').mask('00/00/0000');
$('.cep').mask('00000-000');
$('.phone').mask('(00) 00000-0000');

$('#photoShow').on('click', ()=>{
    $("#photo").trigger('click');
})


const photo = document.querySelector('#photo')
if(photo){
    const photo_preview = document.querySelector('#photo_preview')
    photo.onchange = evt => {
        const [file] = photo.files
        if (file) {

            photo_preview.style.backgroundImage = `url('${URL.createObjectURL(file)}')`;
            photo_preview.src = URL.createObjectURL(file)
        }

    }
}



