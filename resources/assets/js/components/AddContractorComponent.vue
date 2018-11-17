<template>
    <div>
        <div class="form-row">
            <div class="col">
                <label for="company_name">Название компании</label>
                <input class="form-control" type="text" v-model="company_name" name="company_name">
            </div>
            <div class="col">
                <label for="prop_types">Огранизационная форма</label>
                <select class="custom-select" v-model="data_types">
                    <option :value="type.id" v-for="type in types">{{ type.property_type }}</option>
                </select>
            </div>
            <div class="col">
                <label for="inn">ИНН</label>
                <input class="form-control" type="text" v-model="inn" name="inn">
            </div>
            <div class="col">
                <label for="kpp">КПП</label>
                <input class="form-control" type="text" v-model="kpp" name="kpp">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="legal_address">Юридический адрес</label>
                <input type="text" class="form-control" v-model="legal_address">
            </div>
            <div class="col">
                <label for="real_address">Фактический адрес</label>
                <input type="text" class="form-control" v-model="real_address">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="phone">Телефон</label>
                <input type="text" class="form-control" v-model="phone">
            </div>
            <div class="col">
                <label for="email">Email</label>
                <input type="text" class="form-control" v-model="email">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <button type="button" @click="storeContractor()" class="btn btn-info float-right">Сохранить</button>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "AddContractorComponent",
        props: ['prop_types'],
        data(){
            return{
                company_name: '',
                inn: '',
                kpp: '',
                data_types: '',
                legal_address: '',
                real_address: '',
                phone: '',
                email: '',
                types: this.prop_types,
            }
        },

        methods: {
            storeContractor(){
                axios.post('/budget/contractors', {
                    company_name: this.company_name,
                    inn: this.inn,
                    kpp: this.kpp,
                    prop_type_id: this.data_types,
                    legal_address: this.legal_address,
                    real_address: this.real_address,
                    phone: this.phone,
                    email: this.email,
                })
                    .then(response => {
                        console.log(response.data);
                    });
                this.$root.$emit('addContractor');

                    this.company_name = '';
                    this.inn = '';
                    this.kpp = '';
                    this.prop_type_id = '';
                    this.legal_address = '';
                    this.real_address = '';
                    this.phone = '';
                    this.email = '';
            }
        }
    }
</script>

<style scoped>

</style>
