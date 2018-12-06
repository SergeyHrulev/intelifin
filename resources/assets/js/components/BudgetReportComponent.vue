<template>
    <div>
        <div class="form-group row">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" v-model="bdrFact" id="bdrFact" >
                <label class="form-check-label" for="bdrFact">
                    БДР Факт
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" v-model="bdrPlan" id="bdrPlan" >
                <label class="form-check-label" for="bdrPlan">
                    БДР план
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" v-model="bddsPlan" id="bddsPlan" >
                <label class="form-check-label" for="bddsPlan">
                    БДДС план
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" v-model="bddsFact" id="bddsFact" >
                <label class="form-check-label" for="bddsFact">
                    БДДС факт
                </label>
            </div>
        </div>
    <table class="table">
        <thead>
        <tr>
            <th>№</th>
            <th>Раздел</th>
            <th>Отдел</th>
            <th>Номер статьи</th>
            <th>Статья</th>
            <th>Наименование платежа</th>
            <th>Сумма</th>
            <th v-if="bdrPlan">Дата отгрузки план</th>
            <th v-if="bdrFact">Дата отгрузки факт</th>
            <th v-if="bddsPlan">Дата оплаты план</th>
            <th v-if="bddsFact">Дата оплаты факт</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="item, key in data">
            <td>{{ ++key }}</td>
            <td>{{ item.barticles.section.section_name }}</td>
            <td>{{ item.department.department_name }}</td>
            <td>{{ item.barticles.article_code }}</td>
            <td>{{ item.barticles.article_name }}</td>
            <td>{{ item.payment_name }}</td>
            <td>{{ item.summ }}</td>
            <td v-if="bdrPlan">{{ item.bdr_plan !== null ? item.bdr_plan : ' - ' }}</td>
            <td v-if="bdrFact">{{ item.bdr_fact !== null ? item.bdr_fact : ' - ' }}</td>
            <td v-if="bddsPlan">{{ item.bdds_plan !== null ? item.bdds_plan : ' - ' }}</td>
            <td v-if="bddsFact">{{ item.bdds_fact !== null ? item.bdds_fact : ' - ' }}</td>
        </tr>
        </tbody>
    </table>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "BudgetReportComponent",
        data(){
            return{
                bdrPlan: false,
                bdrFact: false,
                bddsPlan: false,
                bddsFact: false,
                data: {}
            }
        },
        created(){
            axios.get('/budget/department/reports/budget').then(response => {
                console.log(response.data);
                this.data = response.data;
            });
        }
    }
</script>

<style scoped>

</style>
