<?php

namespace app\widgets\datetimepicker;

use yii\base\Widget;

/**
 * Description of DateTimePicker
 *
 * @link http://eonasdan.github.io/bootstrap-datetimepicker/ The official site of bootstrap-datetimepicker
 * @author charles
 */
class DateTimePicker extends Widget
{

    public $label = null;
    public $name = null;
    public $value = null;

    public function run()
    {
        $view = $this->getView();
        \app\widgets\datetimepicker\DateTimePickerAsset::register($view);
        $js   = "jQuery('#{$this->id}').datetimepicker();";
        $view->registerJs($js);
        return $this->render('datetimepicker');
    }
}
