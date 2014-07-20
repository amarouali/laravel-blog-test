<?php 

namespace Amar\Media\controllers;

use Amar\Media\models\Thumb as Thumb;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class MediasController extends BaseController {


	protected function index($ref,$ref_id)
	{
		
		$this->layout->nest('content','media::Medias.index',compact('ref','ref_id'));
	}
	protected function media()
	{
		$this->layout->nest('content','media::Medias.media');
	}
	protected function test()
	{
		return Thumb::all();
		//$this->layout->nest('content','media::Medias.test');
	}
    /**
    * Upload (Ajax)
    **/
    public function upload($ref,$ref_id){
    	return $ref;
/*        $this->autoRender = false;
        if(!$this->canUploadMedias($ref, $ref_id)){
            throw new ForbiddenException();
        }
        $media = $this->Media->save(array(
            'ref'    => $ref,
            'ref_id' => $ref_id,
            'file'   => $_FILES['file']
        ));
        if(!$media){
            echo json_encode(array('error' => $this->Media->error));
            return false;
        }
        $this->loadModel($ref);
        $media = $this->Media->read();
        $media = $media['Media'];
        $thumbID = $this->$ref->hasField('media_id');
        $editor = isset($this->request->params['named']['editor']) ? $this->request->params['named']['editor'] : false;
        $id = isset($this->request->query['id']) ? $this->request->query['id'] : false;
        $this->set(compact('media', 'thumbID', 'editor', 'id'));
        $this->layout = 'json';
        $this->render('media');
        return true;*/
    }
	  public function order(){

		if(Request::ajax()){

			
			$inputs=Input::all();
			$inputs= $inputs['data']['Media'];
			//return $inputs;
			foreach($inputs as $k=>$v){
				
/*				Thumb::create([
					'position'=>$v,
					'ref'	=>'POST',
					'id'=>$k,
					'ref_id'=>$k+$v
				]);*/
				DB::table('medias')
		        ->where('id',$k)
		        ->update(array('position'=>$v));

								

           }
           return 0;
      	}
	  		
	  	

        	
    }

	function delete($id)
	{
		
		if(Request::ajax()){
			$media =Thumb::findOrfail($id);
			$media->delete();
			
		}
		return 0;
	}
}