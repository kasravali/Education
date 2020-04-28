<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function read($id) {
        switch($id) {
            case 1:
                return [
                    'id' => 1,
                    'name' => 'Kasra',
                    'family' => 'Vali',
                ];
            break;
            case 2:
                return [
                    'id' => 2,
                    'name' => 'Mohammad',
                    'family' => 'Vali',
                ];
            break;
            default:
            return 'other';       
        }

    }

    public function list() {
        $student = [];
        //connect to DB

        $students[] = [
            'id' => 1,
            'name' => 'Kasra',
            'family' => 'Vali',
        ];
        $students[] = [
            'id' => 2,
            'name' => 'Mohammad',
            'family' => 'Vali',
        ];

        return $students;
    }

    public function create(Request $request) {
        $id = $request->id;
        $name = $request->name;
        $family = $request->family;
        //DB

        $result = ' The student with id ' . $id . ' and name ' . $name . ' and family ' . $family . ' was created! ';
        return $result;
    }
}
