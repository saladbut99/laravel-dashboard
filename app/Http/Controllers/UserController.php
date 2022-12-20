<?php

    namespace App\Http\Controllers;
    use App\Models\UserSample;
    use App\Models\Products;
    //Adding the db for query builder
    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;

    class UserController extends Controller{

        public function show_index(){
            // $data = [
            //     'num' => 11, 
            // ];
        
            $data['products'] = DB::table('products')->paginate(5);
            $data['delivered'] = DB::table('products')->where('status','=','delivered')->count();
            $data['pending'] = DB::table('products')->where('status','=','pending')->count();
            $data['hold'] = DB::table('products')->where('status','=','hold')->count(); 
            
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

            //return view('profile', $data);
            return response()->json($data);

        }
        

        public function add_product(Request $request){

            $newproduct = new Products;

            date_default_timezone_set('Asia/Manila');
            $myTime=date('Y-m-d h:i:s');
            
            //use this when adding all the post request
            // $newproduct::create(
            //     $request->all()
            // );
            if($request->isMethod('post')){

                //creating custom message which is passed to $request->validate as a second paremeter
                $customMessages = [
                    'product_name.unique' => 'Product Order already exists please check!'
                ];

                // if $request->validated fails it will automatically redirect with error
                $validated = $request->validate([
                    'product_name' => 'required|unique:products|max:255',
                    'product_category' => 'required|min:2'
                    // 'body' => 'required',
                ],$customMessages);

                    //use this when manually adding fields
                    $newproduct::create([
                        'product_name' => $request->product_name,
                        'product_category' => $request->product_category,
                        'date_added' => $myTime,
                        'product_sold' => $request->product_sold,
                        'status' => $request->status,
                    ]);
                    
                    return redirect('/dashboard')->with('message', 'Order Successfully Added!');
            }

        

        }


        public function update(Request $request, $id){

            $data['product'] = DB::table('products')->where('product_id','=',$id)->first();

            if ($request->isMethod('patch')) {


                $newproduct = Products::where("product_id",'=',$id)->update([
                    'product_name' => $request->product_name,
                    'product_category' => $request->product_category,
                    'product_sold' => $request->product_sold,
                    'status' => $request->status,
                ]);

                return redirect('/dashboard')->with('message', 'Update Product Success!');
            }

            

            return view ('components.dashboard.update', $data);
        }

        public function delete($id){

             $deleted = DB::table('products')->where('product_id', '=', $id)->delete();
           
            return redirect('/dashboard')->with('message', 'Product Successfully Deleted!');
        }

        
        
        
        //Using API's and Postman
        //*********************************************************************//
        //*********************************************************************//
        public function show_json(){

            $data['products'] = DB::table('products')->get();
            
            return response()->json($data);
        }

        public function postman(Request $request){

            $newproduct = new Products;

            date_default_timezone_set('Asia/Manila');
            $myTime=date('Y-m-d h:i:s');
            
            //use this when adding all the post request
            // $newproduct::create(
            //     $request->all()
            // );
            if($request->isMethod('post')){

                //creating custom message which is passed to $request->validate as a second paremeter
                $customMessages = [
                    'product_name.unique' => 'Product Order already exists please check!'
                ];

                // if $request->validated fails it will automatically redirect with error
                $validated = $request->validate([
                    'product_name' => 'required|unique:products|max:255',
                    'product_category' => 'required|min:2'
                    // 'body' => 'required',
                ],$customMessages);

                    //use this when manually adding fields
                    $newproduct::create([
                        'product_name' => $request->product_name,
                        'product_category' => $request->product_category,
                        'date_added' => $myTime,
                        'product_sold' => $request->product_sold,
                        'status' => $request->status,
                    ]);
                    
                    return redirect('/dashboard')->with('message', 'Order Successfully Added!');
            }

        

        }


    }