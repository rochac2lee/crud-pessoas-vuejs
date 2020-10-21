<script>

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
        view: function() {
            document.getElementById('table').classList.add('animated');
            document.getElementById('table').classList.add('fadeOutLeft');
            document.getElementById('btn-new').classList.add('animated');
            document.getElementById('btn-new').classList.add('fadeOutLeft');

            document.getElementById('adicionar').classList.add('animated');
            document.getElementById('adicionar').classList.add('fadeInDown');

            document.getElementById('title').innerHTML = "<i class='fa fa-plus'></i> Adicionar";

            setTimeout(() => {
                document.getElementById('btn-new').classList.add('hidden');
                document.getElementById('adicionar').classList.add('add');
            }, 1000);
        },
        addPessoa: function(e) {
          e.preventDefault();
          this.pessoas.push(this.novaPessoa);
        },
        removerPessoa: function(pessoa) {
          this.pessoas.splice(this.pessoas.indexOf(pessoa), 1)
        }        
    }
})
</script>