<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nileshsadarangani
 * Date: 04/07/14
 * Time: 12:23 AM
 * To change this template use File | Settings | File Templates.
 */

class Controller {
    public function render($viewFile,$data=null,$return=false)
    {
        $viewFile = $_SERVER['DOCUMENT_ROOT'] . '/views/' . $viewFile . '.php';
        $content=$this->renderInternal($viewFile,$data,$return);
        return $content;
    }

    public function renderInternal($_viewFile_,$_data_=null,$_return_=false)
    {
        // we use special variable names here to avoid conflict when extracting data
        if(is_array($_data_))
            extract($_data_,EXTR_PREFIX_SAME,'data');
        else
            $data=$_data_;
        if($_return_)
        {
            ob_start();
            ob_implicit_flush(false);
            require($_viewFile_);
            return ob_get_clean();
        }
        else
            require($_viewFile_);
    }
}