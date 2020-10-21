<script>
var app = new Vue ({
    el: "#app",
    data: {
        pessoas: <?= json_encode([$data['pessoas']]) ?>,
    },
    methods: {
        getPessoas: function() {

            var self = this; // Armazena a instância do Vue em self
      
            axios.get("")
              .then(function(response) {
                console.log(response);
                if (response.data.error) {
                  self.errorMessage = response.date.message;
                } else {
                  // Faz referência a data.users
                  self.pessoas = response.data.pessoas;
                }
              });
          }
    }
})
</script>