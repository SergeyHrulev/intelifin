<template>
    <div class="container">
        <div class="row">
            <!--Актив баланса-->
            <div class="col-6">
                <h5 class="table-header">Актив</h5>

                <table class="table table-hover table-responsive">
                    <thead>
                    <tr>
                        <th>Статья</th>
                        <th>Показатель</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Нематериальные активы</td>
                        <td>
                            <input type="number" v-model="bsAsset.na">
                        </td>
                    </tr>
                    <tr>
                        <td>Незавершенное строительство</td>
                        <td>
                            <input type="number" v-model="bsAsset.ns">
                        </td>
                    </tr>
                    <tr>
                        <td>Долгосрочные финансовые вложения</td>
                        <td>
                            <input type="number" v-model="bsAsset.dfv">
                        </td>
                    </tr>
                    <tr>
                        <td>Основные фонды</td>
                        <td>
                            <input type="number" v-model="bsAsset.of">
                        </td>
                    </tr>
                    <tr>
                        <td>Запасы сырья</td>
                        <td>
                            <input type="number" v-model="bsAsset.sz">
                        </td>
                    </tr>
                    <tr>
                        <td>Незавершенное производство</td>
                        <td>
                            <input type="number" v-model="bsAsset.np">
                        </td>
                    </tr>
                    <tr>
                        <td>Запасы готовой продукции</td>
                        <td>
                            <input type="number" v-model="bsAsset.zgp">
                        </td>
                    </tr>
                    <tr>
                        <td>Товары</td>
                        <td>
                            <input type="number" v-model="bsAsset.t">
                        </td>
                    </tr>
                    <tr>
                        <td>Текущие финансовые инвестиции</td>
                        <td>
                            <input type="number" v-model="bsAsset.tfi">
                        </td>
                    </tr>
                    <tr>
                        <td>Дебиторская задолженность</td>
                        <td>
                            <input type="number" v-model="bsAsset.dz">
                        </td>
                    </tr>
                    <tr>
                        <td>Денежные средства</td>
                        <td>
                            <input type="number" v-model="bsAsset.ds">
                        </td>
                    </tr>
                    <tr>
                        <td>Другие текущие активы</td>
                        <td>
                            <input type="number" v-model="bsAsset.dta">
                        </td>
                    </tr>
                    <tr>
                        <td>БАЛАНС</td>
                        <td :class="{ table_alert: assetSum < liabilitySum }">
                            <span v-if="assetSum - liabilitySum !== 0">{{ assetSum - liabilitySum }}</span>
                            <span v-else>{{ assetSum }}</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        <!--Пассив баланса-->
            <div class="col-6">
                <h5 class="table-header">Пассив</h5>
                <table class="table table-hover table-responsive">
                    <thead>
                    <tr>
                        <th>Статья</th>
                        <th>Показатель</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Уставный Фонд</td>
                        <td>
                            <input type="number" v-model="bsLiability.uf">
                        </td>
                    </tr>
                    <tr>
                        <td>Резервный капитал</td>
                        <td>
                            <input type="number" v-model="bsLiability.rk">
                        </td>
                    </tr>
                    <tr>
                        <td>Нераспределенная прибыль</td>
                        <td>
                            <input type="number" v-model="bsLiability.nerp">
                        </td>
                    </tr>
                    <tr>
                        <td>Долгосрочная задолженность</td>
                        <td>
                            <input type="number" v-model="bsLiability.dolz">
                        </td>
                    </tr>
                    <tr>
                        <td>Краткосрочная задолженность</td>
                        <td>
                            <input type="number" v-model="bsLiability.krz">
                        </td>
                    </tr>
                    <tr>
                        <td>Текущие обязательства по расчетам</td>
                        <td>
                            <input type="number" v-model="bsLiability.topr">
                        </td>
                    </tr>
                    <tr>
                        <td>Векселя выданные</td>
                        <td>
                            <input type="number" v-model="bsLiability.vv">
                        </td>
                    </tr>
                    <tr>
                        <td>Кредиторская задолженность за товары, работы, услуги</td>
                        <td>
                            <input type="number" v-model="bsLiability.kztur">
                        </td>
                    </tr>
                    <tr>
                        <td>Прочие текущие обязательства</td>
                        <td>
                            <input type="number" v-model="bsLiability.pto">
                        </td>
                    </tr>
                    <tr>
                        <td>БАЛАНС</td>
                        <td :class="{ table_alert: liabilitySum < assetSum }">
                            <span v-if="liabilitySum - assetSum !== 0">{{ liabilitySum - assetSum }}</span>
                            <span v-else>{{ liabilitySum }}</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row my-2">
                <div class="col-4">Собственный капитал</div>
                <div class="col-2">{{ equity }}</div>
        </div>
        <div class="row my-2">
                <div class="col-4">Долгосрочная задолженность</div>
                <div class="col-2">{{ ltDebt }}</div>
        </div>
        <div class="row my-2">
                <div class="col-4">Внеоборотные активы</div>
                <div class="col-2">{{ fixedAssets }}</div>
        </div>
        <div class="row my-2">
                <div class="col-4">Собственный (рабочий) капитал</div>
                <div class="col-2">{{ nwc }}</div>
        </div>
        <div class="row my-2">
                <div class="col-4">Рабочие активы</div>
                <div class="col-2">{{ workingAssets }}</div>
        </div>
        <div class="row my-2">
                <div class="col-4">Рабочие пассивы</div>
                <div class="col-2">{{ workingLiabilities }}</div>
        </div>
        <div class="row my-2">
                <div class="col-4">Потребности в финансировании</div>
                <div class="col-2">{{ financialNeeds }}</div>
        </div>
        <div class="row my-2">
                <div class="col-4">Дефицит/излишек краткосрочного финансирования </div>
                <div class="col-2">{{ deficitSurplus }}</div>
        </div>
        <div class="row my-2">
                <div class="col-4">Коэффициент долговой нагрузки</div>
                <div class="col-2">{{ debtRatio }}</div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "BalanceSheetComponent",
        data(){
            return{
                bsAsset: {
                    na: 0, //нематериальные активы
                    ns: 0, //Незавершенное строительство
                    dfv: 0, //Долгосрочные финансовые вложения
                    of: 0, //Основные фонды
                    sz: 0, //Запасы сырья
                    np: 0, //Незавершенное производство
                    zgp: 0, //Запасы готовой продукции
                    t: 0, //Товары
                    tfi: 0, //Текущие финансовые вложения
                    dz: 0, //Дебиторская задолженность
                    ds: 0, //Денежные средства
                    dta: 0, //Другие текущие активы
                },
                bsLiability: {
                    uf: 0, //Уставный капитал
                    rk: 0, //Резервный капитал
                    nerp: 0, //Нераспределенная прибыль
                    dolz: 0, //Долгосрочная задолженность
                    krz: 0, //Краткосрочная задолженность
                    topr: 0, //Текущие обязательства
                    vv: 0, //Векселя выданные
                    kztur: 0, //Кредиторская задолженность за товары и услуги
                    pto: 0, //Прочие текущие обязательства
                },

            }
        },
        computed: {
            assetSum(){
                let sum = 0;
                 for (let name in this.bsAsset){
                     sum += Number(this.bsAsset[name]);
                 }
                return sum;
            },
            liabilitySum(){
                let sum = 0;
                for (let name in this.bsLiability){
                    sum += Number(this.bsLiability[name]);
                }
                return sum;
            },
            equity(){
                let sum = 0;
                return sum = Number(this.bsLiability.uf) + Number(this.bsLiability.rk) + Number(this.bsLiability.nerp);
            },
            ltDebt(){
                return Number(this.bsLiability.dolz);
            },
            fixedAssets(){
                let sum = 0;
                return sum = Number(this.bsAsset.na) + Number(this.bsAsset.ns) + Number(this.bsAsset.dfv) + Number(this.bsAsset.of);
            },
            nwc(){
                let sum = 0;
                return sum = Number(this.bsAsset.sz) + Number(this.bsAsset.np) + Number(this.bsAsset.zgp) + Number(this.bsAsset.t) + Number(this.bsAsset.tfi) + Number(this.bsAsset.dz)
                + Number(this.bsAsset.ds) + Number(this.bsAsset.dta) - Number(this.bsLiability.krz) - Number(this.bsLiability.topr) - Number(this.bsLiability.vv)
                - Number(this.bsLiability.kztur) - Number(this.bsLiability.pto);
            },
            workingAssets(){
                let sum = 0;
                return sum = Number(this.bsAsset.sz) + Number(this.bsAsset.np) + Number(this.bsAsset.zgp) + Number(this.bsAsset.t) + Number(this.bsAsset.tfi) + Number(this.bsAsset.dz)
                    + Number(this.bsAsset.ds) + Number(this.bsAsset.dta);
            },
            workingLiabilities(){ //исправить, формула не верна в корне
                let sum = 0;
                return sum = Number(this.bsLiability.krz) + Number(this.bsLiability.topr) + Number(this.bsLiability.vv)
                    + Number(this.bsLiability.kztur) + Number(this.bsLiability.dolz) - Number(this.bsLiability.krz);
            },
            financialNeeds(){
                let sum = 0;
                return sum = Number(this.bsAsset.sz) + Number(this.bsAsset.np) + Number(this.bsAsset.zgp) + Number(this.bsAsset.t) + Number(this.bsAsset.tfi) + Number(this.bsAsset.dz)
                    + Number(this.bsAsset.ds) + Number(this.bsAsset.dta) + Number(this.bsLiability.pto);
            },
            deficitSurplus(){
                let sum = 0;
                return sum = (Number(this.bsAsset.sz) + Number(this.bsAsset.np) + Number(this.bsAsset.zgp) + Number(this.bsAsset.t) + Number(this.bsAsset.tfi) + Number(this.bsAsset.dz)
                    + Number(this.bsAsset.ds) + Number(this.bsAsset.dta) - Number(this.bsLiability.krz) - Number(this.bsLiability.topr) - Number(this.bsLiability.vv)
                    - Number(this.bsLiability.kztur) - Number(this.bsLiability.pto)) - (Number(this.bsAsset.sz) + Number(this.bsAsset.np) + Number(this.bsAsset.zgp) + Number(this.bsAsset.t) + Number(this.bsAsset.tfi) + Number(this.bsAsset.dz)
                    + Number(this.bsAsset.ds) + Number(this.bsAsset.dta) + Number(this.bsLiability.pto));
            },
            debtRatio(){
                let sum = 0;
                return sum = (Number(this.bsLiability.dolz) !== 0 ? Number(this.bsLiability.dolz) : 1) /
                    ((Number(this.bsLiability.uf) + Number(this.bsLiability.rk) + Number(this.bsLiability.nerp)) !== 0 ? (Number(this.bsLiability.uf) + Number(this.bsLiability.rk) + Number(this.bsLiability.nerp))
                    : 1);
            }
        }
    }
</script>

<style scoped>
.table_alert{
    color: red;
}
</style>
