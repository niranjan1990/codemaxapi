<?php
namespace app\controllers\api;
use Yii;
use app\models\Cmodel;
use app\models\CmodelSearch;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
class CmodelController extends Controller
{
    public function beforeAction($action) {
    $this->enableCsrfValidation = false;
    return parent::beforeAction($action);
    }
	public function actionGetCmodel()
    {
        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
        $manufacturer  = Cmodel::find()->all();
        if(count($manufacturer) > 0 )
        {
        return array('status' => true, 'data'=> $manufacturer);
        }
        else
        {
        return array('status'=>false,'data'=> 'No Car model Found');
        }
    }
    public function actionCreateCmodel(){
        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
        $manufacturer = new Cmodel();
        $manufacturer->scenario = Cmodel:: SCENARIO_CREATE;
        $manufacturer->attributes = \yii::$app->request->post();
      
        if($manufacturer->validate()) {
            $manufacturer->save();
            return array('status' => true, 'data'=> 'Car model record is successfully updated');
        }else
        {
            return array('status'=>false,'data'=>$manufacturer->getErrors());
        }
    }
}