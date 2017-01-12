<?php

namespace app\modules\report\controllers;
use yii\web\Controller;
use yii\data\ArrayDataProvider;
use Yii;
class HosxpreportController extends Controller{
    
    public function actionPersonpttype($date1=null,$date2=null,$pttype=null){
        
        if($date1==null){
            $date1 = date('Y-m-d');
            $date2 = date('Y-m-d');
        }
        $connection = Yii::$app->db2;
        $data = $connection->createCommand("select a.hn,p.pname,p.fname,p.lname,a.pdx,a.vstdate,i.name as icdname 
            ,pt.name as pttype
            from vn_stat a 
            left outer join patient p on p.hn=a.hn
            left outer join icd101 i on i.code=a.main_pdx 
            left outer join pttype pt on pt.pttype=a.pttype
            where a.vstdate between '$date1' and '$date2'
            and a.pdx<>'' and a.pdx is not null
            and pt.pttype='$pttype'
            order by a.vn")->queryAll(); 
        
        $dataProvider = new ArrayDataProvider([
                'allModels'=>$data, 
            ]);
        return $this->render('personpttype',[
            'dataProvider'=>$dataProvider,
            'date1'=>$date1,
            'date2'=>$date2,
            'pttype'=>$pttype
            
        ]);
    }
    
}

