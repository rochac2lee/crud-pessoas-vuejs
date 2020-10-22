<div class="bg"></div>

<main class="main" id="app">
    <div class="head animated fadeInDown">
        <h1 class="title" id="title"><i class="fa fa-users"></i> Cadastro de Pessoas</h1>

        <div class="content animated fadeInRight">

        <button class="btn-new" id="btn-new" v-on:click="view()"><i class="fa fa-plus"></i> Adicionar</button>
            <form v-on:submit="addPessoa" method="post">
                <div class="frm-adicionar" id="adicionar">
                    <img src="https://image.flaticon.com/icons/png/512/283/283516.png" class="img">
                    <div class="frm-control">
                        <label>Nome</label>
                        <input class="text" type="text" v-model="novaPessoa.nome" name="nome" placeholder="Insira um nome" required>
                    </div>

                    <div class="frm-control">
                        <label>Data de Nascimento</label>
                        <input class="text" v-model="novaPessoa.dataNasc" type="date" name="dataNasc" required>
                    </div>

                    <div class="frm-control right">
                        <button type="submit" class="btn-save"><i class=" fa fa-check"></i> Salvar</button>
                    </div>
                </div>
            </form>

            <table class="table" id="table">
                <thead class="thead">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Nascimento</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                <tr v-for="pessoa in pessoas">
                    <td>{{ pessoa.id }}</td>
                    <td>{{ pessoa.nome }}</td>
                    <td>{{ pessoa.dataNasc }}</td>
                    <td>{{ pessoa.idade }} anos</td>
                    <td>
                        <button class="btn-edit" v-on:click="editarPessoa(pessoa)"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn-delete" v-on:click="removerPessoa(pessoa)"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>

    </div>
</main>