<template>
    <div>
        <div class="col-8">
            <div class="col align-self-end">
                <div class="form-group">
                    <select name="department_id" id="" class="custom-select" v-model="key" @change='selectDepartment(key)'>
                        <option v-for="department in this.departments" :value="department.id">{{ department.department_name }}</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Подразделение</th>
                        <th>Наименование операции</th>
                        <th>План</th>
                        <th>Факт</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="item in data">
                        <th>{{ item.department_name }}</th>
                        <th>{{ item.payment_name }}</th>
                        <th>{{ item.bdr_plan !== null ? item.summ : ' - '}}</th>
                        <th>{{ item.bdr_fact !== null ? item.summ : ' - '}}</th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "DepartmentReportComponent",
        props: ['departments'],
        data(){
            return{
                key: '',
                data: {}
            }
        },
        created(){
            axios.get('/budget/department/reports/all').then(response => {
                console.log(response.data);
                this.data = response.data;
            });
        },
        methods:{
            selectDepartment(key){
                axios.post('/budget/department/reports/select', {key}).then(response => {
                    //console.log(this.key);
                    console.log(response.data);
                    this.data = response.data;
                });
            }
        }
    }
</script>

<style scoped>

</style>
