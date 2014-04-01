<?php defined('SYSPATH') or die('No direct script access.');

class Controller_UpdateTask extends AdminPagesPremium
{
    public $template = "basic/1column";

    public function action_index()
    {
        $data['title'] = "Обновление пакета";
        $data_content = array();
        $is_premium = false;
        $studios = new Model_Studios();
        $studio_temp = $studios->where('user_id', '=', $this->user_id)->find();
        if (isset($studio_temp->id)) {
            $is_premium = (bool) $studio_temp->premium;
            $data_content['pack_details'] = Model_Premium::getUserPackage($this->user_id);
        }
        if (!$is_premium)
            $this->redirect("/premium");

        if (!($pqueue = Model_PremiumQueue::getUserQueue($this->user_id))) {                    
            $this->redirect("/premium");
        }
        $data_content['pack_details']['new'] = $pqueue;


        $date_end = $date_cur = null;

        $difDate = null;
        $user_premium = false;
        $premiums = new Model_Premium();

        $prem = $premiums->where('user_id', '=', $this->user_id)->find();
        if (isset($prem->id)) {
            $date_end = date_create($prem->date_end);
            $date_cur = date_create(date("Y-m-d"));
            $difDate = date_diff($date_cur, $date_end);

            if ($date_cur < $date_end) {
                $user_premium = true;
            }
        }
        if (!$user_premium) {
            $this->redirect("/premium");
        }

        $data_content['user_id'] = $this->user_id;

        $data_content['premium'] = true;
        $data_content['date_end'] = $date_end;
        $data_content['date_cur'] = $date_cur;
        $data_content['date_dif'] = $difDate->days;
        $data_content['day_suffix'] = Model_DataHelper::num2AlphaSuffix($difDate->days);

        
        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        //$this->template->left = View::factory('elements/left');
        //$this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/updateTask', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }
    
    public function action_manual() {
        if (!$pqueue = Model_PremiumQueue::getUserQueue($this->user_id, array('pending', 'processed'))) {
            $this->redirect("/premium");
        }        
        if (Model_Premium::updatePackage($this->user_id, $pqueue['id_to'], $pqueue['id'])) {
            Model_PremiumQueue::setStatus($pqueue['id'], 'manual');
            $this->redirect("/updateTask/success");
        }
        else {
            $this->redirect("/updateTask/error");
        }        
    }
    public function action_audiome() {
     if (!$pqueue = Model_PremiumQueue::getUserQueue($this->user_id)) {
            $this->redirect("/premium");
        }
        Model_PremiumQueue::setStatus($pqueue['id'], 'processed');
        $this->redirect("/updateTask/success");
    }

    public function action_error(){
        $data['title'] = "Произошла ошибка обратитесь через обратную связь";
        $data_content = array();


        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        //$this->template->left = View::factory('elements/left');
        //$this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/updateTaskError', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

    public function action_success(){
        $data['title'] = "Операция прошла успешно";
        $data_content = array();

        $data_content['pack_details'] = Model_Premium::getUserPackage($this->user_id);
        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        //$this->template->left = View::factory('elements/left');
        //$this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/updateTaskSuccess', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

} // End GetPremium
