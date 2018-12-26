<?php
    namespace App\Http\Controllers;
    use App\Model\communication;
    use Illuminate\Http\Request;
    use Illuminate\Routing\Controller as BaseController;
    class AdminController extends BaseController {
        public function admin(){
            $Tag = new communication;
            return $Tag->test();
        }
    }
?>