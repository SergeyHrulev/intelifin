<?php

namespace App\Http\Controllers\Calcs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Staff;

class FinCalcController extends Controller
{
    //

    public function testFotSave(FotCalculator $fotcalc){
        $wage = request('wage');
        $fot = $fotcalc->fotCalculator($wage);
        $fot['name'] = request('name');
        $ins_staff = new Staff;
        $ins_staff->name = $fot['name'];
        $ins_staff->gross = $wage;
        $ins_staff->nett = $fot['fot'];
        $ins_staff->tax = $fot['tax'];
        $ins_staff->pension = $fot['pension'];
        $ins_staff->oms = $fot['oms'];
        $ins_staff->ossvn = $fot['ossvn'];
        $ins_staff->ossnspz = $fot['ossnspz'];
        $ins_staff->sum = $fot['sum'];
        $ins_staff->save();
        $data = Staff::find($ins_staff->id);
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $data;
    }

    public function calcFinIndicator(Request $request){
        $data = $this->toFloat($request);

        //Актив баланса
        $estimation['balancea'] = $data['na'] + $data['ns'] + $data['dfv'] + $data['of'] +
            $data['sz'] + $data['np'] + $data['zgp'] + $data['t'] + $data['tfi'] +
            $data['dz'] + $data['ds'] + $data['dta'];

        //Пассив баланса
        $estimation['balancep'] = $data['uf'] + $data['rk'] + $data['dolz'] + $data['nerp'] +
            $data['kbz'] + $data['topr'] + $data['vv'] + $data['kztur'] + $data['pto'];

        //Собственный капитал
        $estimation['ownkap'] = $data['uf'] + $data['rk'] + $data['nerp'];
        //Долгосрочная задолженность
        $estimation['dolgdebp'] = $data['dolz'];
        //Внеоборотные активы
        $estimation['noa'] = $data['na'] + $data['ns'] + $data['dfv'] + $data['of'];
        //Собственный / рабочий капитал
        $estimation['sk-rk'] = $estimation['ownkap'] + $estimation['dolgdebp'] - $estimation['noa'];
        //Текущие активы
        $estimation['curactives'] = $data['sz'] + $data['np'] + $data['zgp'] + $data['t'] + $data['tfi'] +
            $data['dz'] + $data['ds'] + $data['dta'];
        //Текущие пассивы
        $estimation['currpassives'] = $data['kbz'] + $data['topr'] + $data['vv'] + $data['kztur'] + $data['pto'];
        //ТФП
        $estimation['tfp'] = $estimation['curactives'] - $data['ds'] - $estimation['currpassives'];
        //Дефицит / излишек
        $estimation['dsplusminus'] = $estimation['sk-rk'] - $estimation['tfp'];
        //Коэффициент текущей ликвидности
        $estimation['liqinindex'] = $estimation['curactives'] / $estimation['currpassives'];
        //Коэффициент финансовой устойчивости
        $estimation['fixfinindex'] = ($estimation['ownkap'] + $data['dolz']) / $estimation['balancep'];
        // Оборотные активы - товарно-материальные запасы
        $estimation['oa-tmz'] = $estimation['curactives'] - $data['sz'] - $data['np'] - $data['zgp'] - $data['t'];
        //Расчет коэффициента мгновенной ликвидности
        $estimation['acid-testratio'] = $estimation['oa-tmz'] / $estimation['currpassives'];
        //Расчет коэффициента финансовой зависимости
        $estimation['leverage-ratio'] = ($data['dolz'] + $data['kbz'] + $data['topr'] +$data['vv'] + $data['kztur'] + $data['pto']) /
            ($data['nerp'] + $data['rk'] + $data['uf']);
        return view('/financialindexes', ['data' => $data, 'calc' => $estimation]);
        //dd($estimation);
    }

    protected function toFloat($data){
        foreach ($data as $key => $item){
            $data[$key] = (float)str_replace(',', '.', $item);
        }
    }
}
