<?php

class Notes_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    // Get all the notes
    public function getNotes()
    {
        return $this->db->select('*')
        ->from('notes')
        ->get()->result_array();
    }

    // Get one note
    public function getNote($id)
    {
        return $this->db->select('*')
        ->from('notes')
        ->where('id', $id)
        ->get()->row_array();
    }

    // Create a new note
    public function setNote($request)
    {
        // Validation
        $this->form_validation->set_rules('name', 'Naam', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');

        // If form is correct save the data and return to the overview
        if ($this->form_validation->run() == TRUE) {
            $postData = array(
                'name' => $request['name'],
                'note' => $request['description']
            );

            $this->db->insert('notes', $postData);

            $this->session->set_flashdata('success', 'De notitie is toegevoegd.');
            redirect(base_url("notes"));
        // Else return to the form with an error
        } else {
            $this->session->set_flashdata('error', 'Uw formulier is incorrect.');
            redirect(base_url("notes/add"));
        }
    }

    // Edit a note
    public function updateNote($request, $id)
    {
        // Validation
        $this->form_validation->set_rules('name', 'Naam', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');

        // If form is correct save the data and return to the overview
        if ($this->form_validation->run() == TRUE) {
            $updateData = array(
                'name' => $request['name'],
                'note' => $request['description']
            );

            $this->db->where('id', $id)->update('notes', $updateData);

            $this->session->set_flashdata('success', 'De notitie is aangepast.');
            redirect(base_url("notes"));
        // Else return to the form with an error
        } else {
            $this->session->set_flashdata('error', 'Uw formulier was incorrect.');
            redirect(base_url("notes/edit/".$id));
        }
    }

    // Delete a note
    public function removeNote($id)
    {
        $this->db->where('id', $id)->delete('notes');
    }
}
