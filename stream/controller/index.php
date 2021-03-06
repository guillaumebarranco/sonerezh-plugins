<?php                                           
                                                
App::uses("AppController", "Controller");       
                                                
/**                                             
 * @property Stream $Stream                         
 */                                             
class StreamsController extends AppController {   

    public function beforeFilter() {            
        parent::beforeFilter();                 
    }

    public function create() {

    	$this->autoRender = false;
    	$this->loadModel('Song');

    	try {
	    	$id = $this->request->query('id');

	    	$this->Stream->create();
	    	$this->Stream->save(array(
	    		'song_id' => $id
	    	));

	    	$song = $this->Song->findById($id);

	    	$this->response->type('json');
			$this->response->body(json_encode($song));

    	} catch (Exception $e) {
    		var_dump($e);
    	}

		return $this->response;
    }

	public function last() {

		$this->autoRender = false;
		$this->loadModel('Song');

		try {

			$last = $this->Stream->find("all", array(
			    'order' => ['date' => 'DESC']
			))[0]['Stream'];

			$song = $this->Song->findById($last['song_id']);

			$this->response->type('json');
			$this->response->body(json_encode($song));

		} catch (Exception $e) {
			var_dump($e);
		}

		return $this->response;
	}
}
