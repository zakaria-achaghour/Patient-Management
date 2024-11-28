<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Patient;

class PatientController
{
    protected $smarty;

    public function __construct($smarty)
    {
        $this->smarty = $smarty;
        session_start(); // Start the session to handle flash messages
    }

    // List all patients
    public function index(): Response
    {
        $patients = Patient::all();
        $this->assignFlashMessages(); // Assign flash messages to Smarty
        $this->smarty->assign('patients', $patients);
        return new Response($this->smarty->fetch('patients/index.tpl'));
    }

    // Show the Create Patient form
    public function create(): Response
    {
        $this->assignFlashMessages();
        $this->smarty->assign('title', 'Create Patient');
        return new Response($this->smarty->fetch('patients/create.tpl'));
    }

    // Handle patient creation
    public function store(Request $request): Response
    {
        $validator = getValidationFactory()->make($request->request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email',
            'address' => 'required|string|max:500',
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->messages();
            $_SESSION['old'] = $request->request->all();
            return new Response('', 302, ['Location' => '/patients/create']);
        }

        // Save the patient to the database
        Patient::create($validator->validated());

        $_SESSION['success'] = 'Patient created successfully!';
        return new Response('', 302, ['Location' => '/patients']);
    }

    // Show the Edit Patient form
    public function edit(Request $request, $id): Response
    {
        $patient = Patient::find($id);

        if (!$patient) {
            $_SESSION['errors'] = ['Patient not found.'];
            return new Response('', 302, ['Location' => '/patients']);
        }

        $this->assignFlashMessages();
        $this->smarty->assign('patient', $patient);
        $this->smarty->assign('title', 'Edit Patient');
        return new Response($this->smarty->fetch('patients/edit.tpl'));
    }

    // Handle patient update
    public function update(Request $request, $id): Response
    {
        $validator = getValidationFactory()->make($request->request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email',
            'address' => 'required|string|max:500',
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->messages();
            $_SESSION['old'] = $request->request->all();
            return new Response('', 302, ['Location' => '/patients/edit/' . $id]);
        }

        $patient = Patient::find($id);
        if (!$patient) {
            $_SESSION['errors'] = ['Patient not found.'];
            return new Response('', 302, ['Location' => '/patients']);
        }

        $patient->update($validator->validated());

        $_SESSION['success'] = 'Patient updated successfully!';
        return new Response('', 302, ['Location' => '/patients']);
    }

    // Handle patient deletion
    public function destroy(Request $request, $id): Response
    {
        try {
            $patient = Patient::findOrFail($id);
            $patient->delete();
            $_SESSION['success'] = 'Patient deleted successfully!';
        } catch (\Exception $e) {
            $_SESSION['errors'] = ['Failed to delete patient.'];
        }

        return new Response('', 302, ['Location' => '/patients']);
    }

    // Helper: Assign flash messages to Smarty
    private function assignFlashMessages()
    {
        if (isset($_SESSION['errors'])) {
            $this->smarty->assign('errors', $_SESSION['errors']);
            unset($_SESSION['errors']);
        }

        if (isset($_SESSION['success'])) {
            $this->smarty->assign('success', $_SESSION['success']);
            unset($_SESSION['success']);
        }

        if (isset($_SESSION['old'])) {
            $this->smarty->assign('old', $_SESSION['old']);
            unset($_SESSION['old']);
        }
    }
}
