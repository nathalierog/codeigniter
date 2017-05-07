<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notes_controller extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Notes_model', 'Notes');
    }

	// Show all the notes
	public function index()
	{
		$data['notes'] = $this->Notes->getNotes();

    	$this->load->view('template/header');
    	$this->load->view('pages/notes_index', $data);
    	$this->load->view('template/footer');
	}

	// Create a note
    public function createAction()
    {
    	if ($_SERVER['REQUEST_METHOD'] == 'POST') { // If methos is post send the data through
            $this->Notes->setNote($this->input->post());
        } else { // Else show form
            $this->load->view('template/header');
            $this->load->view('pages/notes_add');
            $this->load->view('template/footer');
        }
    }

	// Edit a note
	public function updateAction($id)
    {
    	if ($_SERVER['REQUEST_METHOD'] == 'POST') { // If methos is post send the data through
            $this->Notes->updateNote($this->input->post(), $id);
        } else { // Else get the note and show the form
			$data['note'] = $this->Notes->getNote($id);
            $this->load->view('template/header');
            $this->load->view('pages/notes_edit', $data);
            $this->load->view('template/footer');
        }
    }

	// Show a note
	public function readAction($id)
	{
		$data['note'] = $this->Notes->getNote($id);

		$this->load->view('template/header');
		$this->load->view('pages/notes_view', $data);
		$this->load->view('template/footer');
	}

	// Delete a note
	public function deleteAction()
	{
		$this->Notes->removeNote($this->input->post('id'));
	}
}
