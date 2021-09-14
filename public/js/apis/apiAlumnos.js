function init() {

    
    var ruta = document.querySelector('#route').getAttribute('value')

    var urlAlumnos = ruta + '/apiAlumno';
   

    new Vue({
        http: {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
        },

        el: '#appAlumnos',

        created: function () {
           this.getAlumnos();
        },

        data: {
            msg: 'hola',
            alumnos:[],
           
        },

        methods: {
            showModal: function () {
                $('#registro_alumnos').modal('show');
            },

            getAlumnos:function(){
                this.$http.get(urlAlumnos).then(function(json){
                    this.alumnos=json.data;
                });
            }

            


        },

        computed:{
            // filtroCargo:function(){
            //     return this.cargos.filter((cargo)=>{
            //         return cargo.cargo.toLowerCase().match(this.buscar.toLowerCase().trim())
            //     });
            // }
        }


    });

} window.onload = init;