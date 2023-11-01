<?php
    class Logout {
        
    public function _construct(){
        session_start();
        session_destroy();
        header('location: '. base_url . '/login');
    }
}