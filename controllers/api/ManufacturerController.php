<?php
namespace app\controllers\api;
use Yii;
use app\models\Manufacturer;
use app\models\ManufacturerSearch;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
class ManufacturerController extends Controller
{
    public function beforeAction($action) {
    $this->enableCsrfValidation = false;
    return parent::beforeAction($action);
    }
	public function actionGetManufacturer()
    {
        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
        $manufacturer  = Manufacturer::find()->all();
        if(count($manufacturer) > 0 )
        {
        return array('status' => true, 'data'=> $manufacturer);
        }
        else
        {
        return array('status'=>false,'data'=> 'No manufacturer Found');
        }
    }
    public function actionCreateManufacturer(){
        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
        $manufacturer = new Manufacturer();
        $manufacturer->scenario = Manufacturer:: SCENARIO_CREATE;
        $manufacturer->attributes = \yii::$app->request->post();
      
        if($manufacturer->validate()) {
            $manufacturer->save();
            return array('status' => true, 'data'=> 'manufacturer record is successfully updated');
        }else
        {
            return array('status'=>false,'data'=>$manufacturer->getErrors());
        }
    }

    public function actionGetManu($id){
		\Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
		$manufacturer = Manufacturer::find()->where(['LIKE', 'id', $id.'%', false])->asArray()->all();   
		return array('status'=>true,'data'=> $manufacturer);
	}
}