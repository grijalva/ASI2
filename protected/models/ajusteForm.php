<?php
/**
 * Created by PhpStorm.
 * User: Edu7art
 * Date: 09-22-13
 * Time: 12:18 PM
 */

class ajusteForm extends CFormModel {

    public $desde;
    public $hasta;

    public function rules()
    {
        return array(
            array('required'),
        );
    }


}
