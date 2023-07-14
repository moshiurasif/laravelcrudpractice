<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function onSelect()
    {
        $selectData = DB::select('select * from students');

        return view('select', ['data' => $selectData]);
    }

    public function onInsert(Request $req)
    {
        $name = $req->input('name');
        $roll = $req->input('roll');
        $class = $req->input('class');

        $result = DB::insert('INSERT INTO `students`(`name`,`roll`,`class`) values(?,?,?)', [$name, $roll, $class]);
        if ($result == true) {
            return "data inserted successfully";
        } else {
            return "data not inserted";
        }
    }

    public function onUpdate(Request $req)
    {
        $id = $req->input('id');
        $name = $req->input('name');
        $roll = $req->input('roll');
        $class = $req->input('class');

        $result = DB::update('UPDATE `students` SET `name`=?,`roll`=?,`class`=? WHERE `id`=?', [$name, $roll, $class, $id]);

        if ($result == true) {
            return "data updated successfully";
        } else {
            return 'data not updated';
        }
    }

    public function onDelete(Request $req)
    {
        $id = $req->input('id');
        $result = DB::delete('DELETE FROM `students` WHERE `id`=?', [$id]);
        if ($result == true) {
            return 'data deleted successfully';
        } else {
            return 'data not deleted';
        }
    }
}
