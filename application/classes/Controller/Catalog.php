<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Catalog extends Controller_Template
{
    public $template = "basic/2columns";
    protected $stack_size = 4;    

    public function action_index()
    {
        $session = Session::instance();
        $session->set('offset_plus', 0);
        $session->set('premium', 1);
        $data['title'] = "Каталог";
        $data_right['noreclam'] = true;
        $data_content = array();
        try {      
            $data_content['studios'] = $this->_getStudios($this->stack_size, 0, true);
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right', $data_right);
        $this->template->content = View::factory('pages/catalog', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }
    public function action_next() {
        $stack_i = $this->request->param('stack', 1);
        $offset = ($stack_i * $this->stack_size);
        $studios = $this->_getStudios($this->stack_size, $offset, false, $stack_i);
        echo json_encode($studios);
        exit();
    }
    private function _getStudios($limit = 0, $offset = 0, $firstrun = false, $i = false) {
        $result = array('reset_i' => false, 'studios' => array());
        $session = Session::instance();
        $premium = (int) $session->get('premium') ? $session->get('premium') : 0;
        $s_offset_plus = (int) $session->get('offset_plus');
        
        if ($s_offset_plus) {
            $offset += abs($session->get('offset_plus'));
        }
        # echo $limit . ":" . $offset . ":" . $s_offset_plus . ":" . $i . ':' . $premium;
        $config = new Model_Configuration();

        $studios = DB::select()->from(array('studios', 's'))            
	    ->where('public', '=', 1) 
            ->where('premium', '=', $premium)
            ->limit($limit)->offset($offset)->execute()->as_array();        
        $s_count = count($studios);        
        $offset_plus = $this->stack_size - $s_count;
        
        // если ищем премиум, и они закончились, отдаю безпакетных,
	// след ajax запрос ищет не премиум пакеты, сбрасывается итерация в урл
        if($premium && $s_count < $this->stack_size) {
            $result['reset_i'] = true;
            $session->set('premium', 0);            
            
            $session->set('offset_plus', $offset_plus);        
            $limit = $offset_plus;
            $offset = $offset_plus - $this->stack_size;
            $studios_add = DB::select()->from(array('studios', 's'))            
                ->where('public', '=', '1')
                ->where('premium', '=', '0')
                ->limit($limit)->offset(0)->execute()->as_array();
            #echo $limit . ":" . $offset;
            $studios = array_merge($studios, $studios_add);
        }
      

        $m_city = new Model_City();

        foreach ($studios as &$stud) {
            $stud['extra'] = array();
            $city = $m_city
                ->where('country_id', '=', $stud['country_id'])
                ->where('region_id', '=', $stud['region_id'])
                ->where('city_id', '=', $stud['city_id'])
                ->find();
            
            $rating = new Model_Rating();
            $ratings = $rating->where('user_id', '=', $stud['user_id'])->find_all();
            $mark = 1;
            $count = 0;

            if ($ratings->count() > 0) {
                $count = $ratings[0]->count;
                $mark = $ratings[0]->mark;
            }
            $mark = str_replace(',', '.', round($mark, 1));
            $extra = array(                
                'mark' => $mark,
                'city' => $city->name,
                'studio_type' => $config->studio_class[$stud['class']],
                'count' => $count
            );
            
            $stud['extra'] = $extra;
        }
        $result['studios'] = $studios;
        
        return $result;
    }

} // End Catalog
