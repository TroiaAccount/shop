<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class CourseController extends Controller
{
    //
    public function UpdateCourse(request $req){
        $course = addslashes($req['course']);
        $result = ['status' => false, 'error' => 'Вы не заполнили все поля'];
        if($course != null){
            course::where('id', 1)->update(['cost' => $course]);
            $result = ['status' => true];
        }
        $result = json_encode($result, true);
        return $result;
    }
}
