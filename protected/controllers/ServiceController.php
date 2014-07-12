<?php

class ServiceController extends CController
{
    public function actions()
    {
        return array(
            'quote'=>array(
                'class'=>'CWebServiceAction',
            ),
        );
    }
    
    /**
     * @param integer monto
     * @return float resultado // pago mensual hipoteca
     * @soap
     */
    public function getMonto($monto)
    {
        //$prices=array('IBM'=>100, 'GOOGLE'=>350);
        //return isset($prices[$monto])?$prices[$monto]:0;
        return $monto;
        //...return $monto
    }
}