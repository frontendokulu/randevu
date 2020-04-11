<template>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="text" class="form-control" v-model="name_surname" placeholder="Ad Soyad"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="text" class="form-control" v-model="email" placeholder="Email"/>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <input type="text" class="form-control" v-model="phone" placeholder="Telefon"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="date" class="form-control" v-model="date"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul class="select-time-ul">
                    <li class="select-time"> <input type="radio"/> <span> 10:00 - 11:00 </span> </li>
                    <li class="select-time"> <input type="radio"/> <span> 11:00 - 12:00 </span> </li>
                    <li class="select-time"> <input type="radio"/> <span> 13:00 - 14:00 </span> </li>
                    <li class="select-time"> <input type="radio"/> <span> 14:00 - 15:00 </span> </li>
                    <li class="select-time"> <input type="radio"/> <span> 15:00 - 16:00 </span> </li>
                    <li class="select-time"> <input type="radio"/> <span> 16:00 - 17:00 </span> </li>
                </ul>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="form-group">
                    <textarea v-model="text" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button v-on:click="store" class="btn btn-success"> Randevu Al </button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name:'randevuform-component',
        data(){
          return {
              name_surname : '',
              email:'',
              phone:'',
              text:'',
              date:new Date().toISOString().slice(0,10)
          }
        },
        mounted(){
            console.log('Randevu Componenti Çalıştı')
        },
        methods:{
            store:function () {
                console.log('Tıklandı');
            }
        }
    }
</script>

<style scoped>

</style>