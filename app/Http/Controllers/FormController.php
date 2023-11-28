<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function handlePostForm(Request $request)
    {
        // 處理表單提交的數據
        $input = $request->input('store');
        if($input == "PHQ-9"){
        $q1 = $request->input('q1');
        $q2 = $request->input('q2');
        $q3 = $request->input('q3');
        $q4 = $request->input('q4');
        $q5 = $request->input('q5');
        $q6 = $request->input('q6');
        $q7 = $request->input('q7');
        $q8 = $request->input('q8');
        $q9 = $request->input('q9');
        $final_mark = $q1 + $q2 +$q3+$q4+$q5+$q6+$q7+$q8+$q9;}
        else if($input == "GAD-7"){
            $q1 = $request->input('q1');
            $q2 = $request->input('q2');
            $q3 = $request->input('q3');
            $q4 = $request->input('q4');
            $q5 = $request->input('q5');
            $q6 = $request->input('q6');
            $q7 = $request->input('q7');

            $final_mark = $q1 + $q2 +$q3+$q4+$q5+$q6+$q7;}

        // 執行其他操作

        // 返回視圖或重定向
        return view('questionnaire', ['input' => $input,'final_mark'=>$final_mark]);
    }
}
?>