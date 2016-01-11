<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Save extends CI_Controller
{
    /** @var Vaola */
    public $vaola;

    /** @var CI_Input */
    public $input;

	public function index()
	{
        $items = $this->input->post('items');

        $data = $this->vaola->prepareData($items);

        try {
            $this->vaola->sync($data);
            $message = 'Saved';
        } catch (\Exception $exc) {
            $message = $exc->getMessage();
        }

        $args = [
            'message' => $message,
            'boxes'   => count($data)
        ];
		$this->load->view('layout/header.php');
        $this->load->view('page/save', $args);
        $this->load->view('layout/footer.php');
    }
}
