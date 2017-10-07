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

		$this->autoRender = false;
		$this->loadModel('Song');

		$last = $this->Stream->find("all", array(
		    'order' => 'date'
		))->toArray()[0];

		$song = $this->Song->findById($last['song_id']);

		$this->response->type('json');
		$this->response->body(json_encode($song));

		return $this->response;
	}
}
