<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class CourseController extends Controller
{
    //
    public function UpdateCourse(request $req){
        $req = $req->json()->all();
        $course = addslashes($req['cost']);
        $user_course = addslashes($req['user_course']);
        $result = ['status' => false, 'error' => 'Вы не заполнили все поля'];
        if($course != null && $user_course != null){
            course::where('id', 1)->update(['cost' => $course, 'user_cost' => $user_course]);
            $result = ['status' => true];
        }
        $result = json_encode($result, true);
        return $result;
    }
}
