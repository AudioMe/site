<?php defined('SYSPATH') OR die('No direct script access.');

class HTTP_Exception_404 extends Kohana_HTTP_Exception_404 {
 
     /**
     * Generate a Response for the 404 Exception.
     *
     * The user should be shown a nice 404 page.
     *
     * @return Response
     */
      public $template = "basic/3columns";
    public function get_response()
    {
        $view = View::factory('basic/error');


  
        // Remembering that `$this` is an instance of HTTP_Exception_404
        $view->message = "Страница не найдена";
        $data['title'] = "Ошибка 404";
        $view->head = View::factory('elements/head', $data);
        $view->header = View::factory('elements/header');
        $view->left = View::factory('elements/left');
        $view->right = View::factory('elements/right');
        $view->footer = View::factory('elements/footer');
  
        $response = Response::factory()
            ->status(404)
            ->body($view->render());
  
        return $response;
    }
 
 
}