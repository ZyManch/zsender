<?php

class UnsubscribeController extends Controller
{


	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex($email,$hash)
	{
        $subscriber = Subscriber::model()->findByAttributes(array('email'=>$email));
        if (!$subscriber || md5($subscriber->id) != $hash) {
            throw new CHttpException(404,'Страница не найдена');
        }
        $subscriber->status = 'unsubscribed';
        $subscriber->save(false);
		$this->render('index',array(

		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Letter the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Letter::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

}
