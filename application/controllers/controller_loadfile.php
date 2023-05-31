<?php
class Controller_Loadfile extends Controller { 
function action_index() { 
    $this->view->generate('loadfile_view.php', 'template_view.php'); 
    } 
}
?>