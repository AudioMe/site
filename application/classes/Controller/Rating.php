<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Rating extends Controller
{
    public function action_index()
    {
        try{
        $id = $this->request->param('id', -1);
        $ok_rating = false;
        $new_mark = 0;
        if ($id != -1) {
            if (isset($_POST['rate'])) {
                $in_mark = $_POST['rate'];
                $cook = Cookie::get('audio_ration_' . $id, '-1');
                if ($cook == -1) {
                    try {
                        Cookie::set('audio_ration_' . $id, "1");
                        $rating = new Model_Rating();
                        $ratings = $rating->where('user_id', '=', $id)->find_all();


                        if ($ratings->count() > 0) {
                            $count = $ratings[0]->count;
                            $mark = $ratings[0]->mark;
                            $sum_mark = ($mark * $count) + $in_mark;
                            $count++;
                            $new_mark = ($sum_mark / $count);
                            $ratings[0]->values(array('count' => $count, 'mark' => ($new_mark )))->save();

                        } else {
                            $count = 1;
                            $sum_mark = $in_mark;
                            $new_mark = ($sum_mark / $count);
                            $rating->values(array('user_id' => $id, 'count' => $count, 'mark' => ($new_mark )))->save();
                        }
                        $ok_rating = true;
                    } catch (Exception $e) {
                        $ok_rating = false;
                    }


                }
            }
        }
        if ($ok_rating) {
            $this->response->body(json_encode("ok"));
        } else {
            $this->response->body(json_encode('error'));
        }
        }catch (Exception $e){
            $this->response->body(json_encode('error'));
        }
    }
}
