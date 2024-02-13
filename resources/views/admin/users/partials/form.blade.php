<div class="sm:w-full sm:flex sm:items-start sm:flex-col">
    <img class="w-24 h-24 border border-violet-500" id="photo_preview">
    foto aqui
</div>
<button type="button" id="photoShow" class="mt-2">Adicionar foto</button>
<input class="hidden" type="file" accept="image/*" id="photo" name="photo">
</div>
<div class="md:flex gap-9 mt-9 md:justify-start flex-wrap justify-center">
    <div class="flex flex-col w-full gap-2">

        <div class="flex flex-col w-full gap-4 md:flex-row">
            <div class="flex flex-col w-full">
                <label for="">Nome completo</label>
                <input data-name="Nome completo" class="flex required"type="text" name="name">
            </div>
            <div class="flex flex-col w-full flex-1 ">
                <label for="">Data de nascimento</label>
                <input data-name="Data de nascimento" class="flex required date"type="text" name="birthday">
            </div>
            <div class="flex flex-col w-full">
                <label for="">E-mail</label>
                <input data-name="E-mail" class="flex required"type="mail" name="email">
            </div>
            <div class="flex flex-col">
                <label for="">Sexo</label>
                <select class="bg-white p-2" data-name="Sexo" name="sex">
                    <option class="p-2" value="m">Masculino</option>
                    <option class="p-2" value="f">Feminino</option>
                </select>
            </div>
        </div>

        <div class="flex flex-col w-full gap-4 md:flex-row">
            <div class="flex flex-col w-full">
                <label for="">Cep</label>
                <input data-name="Cep" class="flex required cep"type="text" name="code">
            </div>
            <div class="flex flex-col w-full">
                <label for="">Rua</label>
                <input data-name="Rua" class="flex required"type="text" name="street">
            </div>
            <div class="flex flex-col w-full">
                <label for="">Bairro</label>
                <input data-name="Bairro" class="flex required"type="text" name="neighborhood">
            </div>
            <div class="flex flex-col w-full">
                <label for="">Cidade</label>
                <input data-name="Cidade" class="flex required"type="text" name="city">
            </div>
        </div>

        <div class="flex flex-col w-full gap-4 md:flex-row">
            <div class="flex flex-col w-full">
                <label for="">Celular</label>
                <input data-name="Celular" class="flex required phone"type="text" name="phone">
            </div>
            <div class="flex flex-col w-full">
                <label for="">Plano do Aluno</label>
                <input data-name="Plano do Aluno" class="flex required"type="text" name="plan">
            </div>
            <div class="flex flex-col">
                <label for="">Status</label>
                <select class="bg-white p-2" data-name="Status" name="status">
                    <option class="p-2" selected value="1">Ativo</option>
                    <option class="p-2" value="0">Desativado</option>
                </select>
            </div>
            <div class="flex flex-col w-full">
                <label for="">Senha</label>
                <input data-name="Senha" class="flex required"type="password" name="password">
            </div>
        </div>
        <div class="mt-6 flex w-full flex-1 justify-center md:justify-end gap-8 py-6">
            @include('components.btn_save')
            @include('components.btn_cancel')
        </div>
    </div>
</div>

<script>
    const photo = document.querySelector('#photo')
    const photo_preview = document.querySelector('#photo_preview')
    photo.onchange = evt => {
        const [file] = photo.files
        if (file) {
            photo_preview.src = URL.createObjectURL(file)
        }
    }
</script>
