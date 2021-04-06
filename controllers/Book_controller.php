<?php 

    class Book_controller extends Controller{
        public function index() { 
			return view('index');
		}
        public function create() { echo 'create method'; }
        public function store() { echo 'store method'; }
        public function show($task) { 
            if($task == '1'){
                return view('operativos');
            }else if($task == '2'){
                return view('database');
            }else if($task == '3'){
                return view('computer');
            }else{
                return view('moderns');
            }
         }
        public function edit($task) { echo 'edit method'; }
        public function update($task) { echo 'update method'; }
        public function destroy($task) { echo 'destroy method'; }
    }
?>