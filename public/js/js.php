<script>

/** Cria um novo objeto Vue */
var app = new Vue ({
    el: "#app",
    data: {
        pessoas: <?= json_encode($data['pessoas']) ?>,
        novaPessoa: {
          nome: '',
          dataNasc: '',
        }
    },
    methods: {
        /** Método viewForm oculta a tabela e mostra o formulário para novo cadastro */
        viewForm: function() {
            document.getElementById('table').classList.add('animated');
            document.getElementById('table').classList.add('fadeOutLeft');
            document.getElementById('btn-new').classList.add('animated');
            document.getElementById('btn-new').classList.add('fadeOutLeft');

            document.getElementById('adicionar').classList.add('animated');
            document.getElementById('adicionar').classList.add('fadeInDown');

            document.getElementById('title').innerHTML = "<i class='fa fa-plus'></i> Adicionar";

            setTimeout(() => {
                document.getElementById('table').classList.add('hidden');
                document.getElementById('btn-new').classList.add('hidden');
                document.getElementById('adicionar').classList.add('add');
            }, 1000);
        },
        /** Médoto addPessoa recebe os dados por método post e envia ao banco */
        addPessoa: function(e) {
            e.preventDefault();
            this.pessoas.push(this.novaPessoa);

            $.post("index.php?acao=add", {
                
                nome: this.novaPessoa.nome,
                dataNasc: this.novaPessoa.dataNasc
                
            },
            function(data) {
                $("#return").html(data);
            } , "html");
            location.reload();

        },
        /** Método removerPessoa permite o usuário excluir registro após confirmação */
        removerPessoa: function(pessoa) {
          
            swal({
                title: "Excluir de Registro",
                text: "Deseja realmente excluir esse Registro?",
                icon: "warning",
                buttons: true,
                dangerMode: true
                })
                .then((willDelete) => {
                if (willDelete) {
                    swal("Pronto! Registro excluído com sucesso!", {
                    icon: "success",
                    });
                    
                    $.post("index.php?acao=delete", {
                        id: pessoa.id
                    },
                    function(data) {
                        $("#return").html(data);
                    } , "html");

                    this.pessoas.splice(this.pessoas.indexOf(pessoa), 1)

                }
            });        

        }     

    }
})

</script>