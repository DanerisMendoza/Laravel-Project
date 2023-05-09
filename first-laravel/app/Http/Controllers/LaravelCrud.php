<?php 
    namespace App\Http\Controller;
    use Illuminate\Http\Request;
    class LaravelCrud extends Controller{
        function index(){
            return view('crud.index');
        } 

        function add(Request $request){
            // return $request->input();
            $request->validate([
                'name' => 'required'
            ]);
        }
    }

?>