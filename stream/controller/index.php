<?php                                           
                                                
App::uses("AppController", "Controller");       
                                                
/**                                             
 * @property Stream $Stream                         
 */                                             
class StreamsController extends AppController {   
                                                
    public function beforeFilter() {            
        parent::beforeFilter();                 
    }

    // public function create($id) {

    // 	$this->Stream->create();
    // 	$this->Stream->save(array(
    // 		'song_id' => $id
    // 	));
    // }

    public function last() {

    	// $last = $this->Stream->find("all", array(
    	// 	'order' => 'date'
    	// ));

    	$last = array('hello' => "yo");

    	$this->set('last', $last);
    }
}
