
<?php 

// porDefecto :: 'development' => 'mysql://username:password@localhost/database_name'));
	
require_once 'php-activerecord/ActiveRecord.php';
 
 ActiveRecord\Config::initialize(function($cfg)
 {
     $cfg->set_model_directory('models');
     $cfg->set_connections(array(
         'development' => 'mysql://infinitum:infinitum2008@frida2/infinitum_acceso'));
 });


 			//print_r(Book::first()->attributes());
 			
 			#insert record 
 			
 			//Book::create(array('name' => 'Hi Mother', 'author' => 'Tito')); // 
 			
 			 # actualizar datos
 			/* $book = Book::find_by_id(4);
 			 $book->author = 'DemosSS';
 			 $book->save();*/ 

 			  # delete 
 			  	/*$book = Book::find_by_id(4);
				$book->delete();*/
 
 			 
 			 #simple resultado
 			 //$book = Book::find_by_id(1); 
 			 
 			 #resultado masivo
 			   //$books  = Book::find('all'); 
 			 #recorre una cosulta		   
 			/*   foreach ($books as $book)
   					echo 'id '.$book->id.' '.$book->author.' '.$book->name.'	'; */
   					
   			$options 	   = array('limit' => 2);		
   			$inventarioWdms = InventarioWdm::all($options);
   				
   				foreach ($inventarioWdms as $inventarioWdm) {
   					echo $inventarioWdm->wdm;
   				}


 ?>