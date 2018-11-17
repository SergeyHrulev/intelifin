<template>
    <table class="table">
        <thead>
        <tr>
            <th>№</th>
            <th>Название компании</th>
            <th>Организационная форма</th>
            <th>ИНН/КПП</th>
            <th>Юридический адрес</th>
            <th>Телефон</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="contractor in contractors">
            <td></td>
            <td>{{ contractor.company_name }}</td>
            <td>{{ contractor.prop_type.property_type }}</td>
            <td>{{ contractor.inn + ' / ' + contractor.kpp }}</td>
            <td>{{ contractor.legal_address }}</td>
            <td>{{ contractor.phone }}</td>
            <td>{{ contractor.email }}</td>
        </tr>
        </tbody>
    </table>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "GetContractorsComponent",

        data(){
            return{
                contractors: {}
            }
        },
        methods: {
            getContractor(){
                axios.get('/budget/contractors/create').then(
                    response => {
                        console.log(response.data);
                        this.contractors = response.data;
                    }
                );
            }
        },
        created(){
            axios.get('/budget/contractors/create').then(
            response => {
                console.log(response.data);
                this.contractors = response.data;
            }
        );
            this.$parent.$on('addContractor', function () {
                axios.get('/budget/contractors/create').then(
                    response => {
                        console.log(response.data);
                        this.contractors = response.data;
                    })
            })
        }
    }
</script>

<style scoped>

</style>
