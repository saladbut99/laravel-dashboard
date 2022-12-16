<?php

    namespace App\Http\Controllers;
    use App\Models\UserSample;
    //Adding the db for query builder
    use Illuminate\Support\Facades\DB;

    class UserController extends Controller{

        public function show_index(){
            // $data = [
            //     'num' => 11, 
            // ];
        
            $data['users'] = DB::table('users')->paginate(5);
            return view('components.dashboard.index',$data);
        }

        public function profile(){
            
            $data = [
                'name' => 'John Doe',
            ];

            $data['language'] = array(
                "first_release" => "1991", 
                "latest_release" => "3.8.0", 
                "designed_by" => "Guido van Rossum",
               
            );

            $data['users'] = DB::table('users')->get();
           
            
            //inserting data code below:
            // $newuser = new UserSample;
 
            // $newuser->name = "Sample Send";
            // $newuser->lastname = "Sample";
     
            // $newuser->save();

            return view('profile', $data);

        }

    }