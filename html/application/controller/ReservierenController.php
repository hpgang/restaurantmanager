<?php

class ReservierenController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Handles what happens when user moves to URL/index/index - or - as this is the default controller, also
     * when user moves to /index or enter your application at base level
     */
    public function index()
    {
        $this->View->render('reservieren/index');
    }

    public function savereserve()
    {
        $this->View->render('reservieren/savereserve');
    }

    public function tischreservierung()
    {
        $this->View->render('reservieren/tischreservierung');
    }
}
