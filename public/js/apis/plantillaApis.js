function init() {

    
    var ruta = document.querySelector('#route').getAttribute('value')

    var urlCargo = ruta + '/apiCargo';
   

    new Vue({
        http: {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
        },

        el: '#a',

        created: function () {
           
        },

        data: {
            hola: 'hola',
           
        },

        methods: {
            showModal: function () {
                $('#add_cargo').modal('show');
            },

            


        },

        computed:{
            filtroCargo:function(){
                return this.cargos.filter((cargo)=>{
                    return cargo.cargo.toLowerCase().match(this.buscar.toLowerCase().trim())
                });
            }
        }


















    });












} window.onload = init;