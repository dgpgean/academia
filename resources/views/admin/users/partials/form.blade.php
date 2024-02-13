<div class="md:flex gap-9 mt-9 md:justify-start flex-wrap justify-center sm:px-5">
    <div>
        <div class="w-40 h-40 border border-violet-500">
            foto aqui
        </div>
        <input type="file" name="photo">
    </div>
    <div class="flex flex-col w-full gap-2">

       <div class="flex flex-col w-full gap-4 md:flex-row">
            <div class="flex flex-col w-full">
                <label for="">Nome completo</label>
                <input class="flex wl"type="text" name="name">
            </div>
            <div class="flex flex-col w-full flex-1 ">
                <label for="">Data de nascimento</label>
                <input class="flex wl date"type="text" name="birthday">
            </div>
            <div class="flex flex-col w-full">
                <label for="">E-mail</label>
                <input class="flex wl"type="mail" name="email">
            </div>
            <div class="flex flex-col ">
                <label for="">Sexo</label>
                <input class="flex wl"type="text" name="sex">
            </div>
       </div>

       <div class="flex flex-col w-full gap-4 md:flex-row">
            <div class="flex flex-col w-full">
                <label for="">Cep</label>
                <input class="flex wl cep"type="text" name="code">
            </div>
            <div class="flex flex-col w-full">
                <label for="">Rua</label>
                <input class="flex wl"type="text" name="street">
            </div>
            <div class="flex flex-col w-full">
                <label for="">Bairro</label>
                <input class="flex wl"type="text" name="neighborhood">
            </div>
            <div class="flex flex-col w-full">
                <label for="">Cidade</label>
                <input class="flex wl"type="text" name="city">
            </div>
        </div>

        <div class="flex flex-col w-full gap-4 md:flex-row">
            <div class="flex flex-col w-full">
                <label for="">Celular</label>
                <input class="flex wl phone"type="text" name="phone">
            </div>
            <div class="flex flex-col w-full">
                <label for="">Plano do Aluno</label>
                <input class="flex wl"type="text" name="plan">
            </div>
            <div class="flex flex-col w-full">
                <label for="">Status do Aluno</label>
                <input class="flex wl"type="text" name="status">
            </div>
            <div class="flex flex-col w-full">
                <label for="">Senha</label>
                <input class="flex wl"type="password" name="password">
            </div>
        </div>
        <div class="mt-6 flex w-full flex-1 justify-center md:justify-end gap-8 py-6">
            @include('components.btn_save')
            @include('components.btn_cancel')
        </div>
    </div>
</div>
