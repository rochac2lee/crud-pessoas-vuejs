<div class="bg"></div>

<main class="main" id="app">
    <div class="head">
        <h1>Cadastro de Pessoas</h1>

        <div class="content">

            <table class="table">
                <thead class="thead">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                <tr v-for="pessoa in pessoas">
                    <td>{{ pessoa.id }}</td>
                    <td>{{ pessoa.nome }}</td>
                    <td>{{ pessoa.idade }}</td>
                </tr>
                </tbody>
            </table>

        </div>

    </div>
</main>