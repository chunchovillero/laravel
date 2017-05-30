<? 


namespace App\Http\Controllers;

class HolaController extends Controller{

		public function index()
		{
			return view('posts.index'); 
		}


		public function show($id)
		{
			return view('posts.show');
		}


}

