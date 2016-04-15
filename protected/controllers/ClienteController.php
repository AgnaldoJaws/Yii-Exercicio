<?php

/**
 * Created by PhpStorm.
 * User: agnaldo
 * Date: 3/13/16
 * Time: 7:17 PM
 */
class ClienteController  extends Controller
{

    public function actionIndex ()
    {
        $dataProvider = new CActiveDataProvider('Cliente');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));

    }

    public function actionNew ()
    {
        $model = new Cliente();

        if (isset($_POST['Cliente']))
        {
            $model->attributes=$_POST['Cliente'];
            if ($model->save())
                $this->redirect(array('index'));
        }

        $this->render('new',array(
            'model'=>$model,
        ));
    }

    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Cliente']))
        {
            $model->attributes=$_POST['Cliente'];
            if($model->save())
                $this->redirect(array('index'));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }


    public function actionDelete ($id)
    {
        if ($this->loadModel($id)->delete());
        {
            $this->redirect(array('index'));
        }
    }

    public function getUseOptions (){
        $models = Cliente::model()->findAll(
            array('order' => 'nome'));


        $list = CHtml::listData($models,'id', 'nome');



    }

    public function loadModel($id)
    {
        $model=Cliente::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
}