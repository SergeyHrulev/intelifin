<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 04.05.2018
 * Time: 13:09
 */

namespace App\Modules\SEO;


class Seo
{

    public static function extractHead($data, $nofollow = null){
            if (!count($data)){
                return $data = null;
            } else {
                if (is_array($data)){
                    $head['metatitle'] = $data['metatitle'];
//                    $head['metakey'] = $data['metakey'];
                    $head['metadesc'] = $data['metadesc'];
                    $head['metacanonical'] = $data['metacanonical'];
                    $head['nofollow'] = $nofollow;
                } else {
                    foreach ($data as $value){
                        $head['metatitle'] = $value->metatitle;
                        $head['metakey'] = $value->metakey;
                        $head['metadesc'] = $value->metadescription;
                        $head['metacanonical'] = $value->metacanonical;
                        $head['nofollow'] = $nofollow;
                    }
                }

                return $head;
            }
    }

}
