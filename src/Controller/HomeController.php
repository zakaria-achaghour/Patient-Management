<?php

namespace App\Controller;

use App\Models\Appointment;
use App\Models\Patient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\Eloquent\Model;

class HomeController
{
    protected $smarty;

    public function __construct($smarty) {
        $this->smarty = $smarty;
    }

    public function index()
    {
        // $totalAppointments = Appointment::count();
        // $totalPatients = Patient::count();
        // $totalCancellations = Appointment::where('status', 'cancelled')->count();
        // $averagePerDoctor = Appointment::distinct('doctor_id')->count();

        // // Assign data to Smarty
        // $this->smarty->assign([
        //     'title' => 'Dashboard',
        //     'header' => 'Healthcare Dashboard',
        //     'totalAppointments' => $totalAppointments,
        //     'totalPatients' => $totalPatients,
        //     'totalCancellations' => $totalCancellations,
        //     'averagePerDoctor' => $averagePerDoctor,
        // ]);

        $this->smarty->assign([
            'totalAppointments' => 140,
            'totalPatients' => 370,
            'totalCancellations' => 70,
            'averagePerDoctor' => 120,
            'patients' => [
                [
                    'name' => 'Andrew Richardson',
                    'phone' => '555-123-4567',
                    'date' => '2023-09-06 10:00:00',
                    'doctor' => 'Dr. Jennifer Roberts',
                    'department' => 'Pediatrics (A-9987)'
                ],
                [
                    'name' => 'Andrew Richardson',
                    'phone' => '555-123-4567',
                    'date' => '2023-09-06 10:00:00',
                    'doctor' => 'Dr. Jennifer Roberts',
                    'department' => 'Pediatrics (A-9987)'
                ],
                [
                    'name' => 'Andrew Richardson',
                    'phone' => '555-123-4567',
                    'date' => '2023-09-06 10:00:00',
                    'doctor' => 'Dr. Jennifer Roberts',
                    'department' => 'Pediatrics (A-9987)'
                ],
                [
                    'name' => 'Andrew Richardson',
                    'phone' => '555-123-4567',
                    'date' => '2023-09-06 10:00:00',
                    'doctor' => 'Dr. Jennifer Roberts',
                    'department' => 'Pediatrics (A-9987)'
                ],
                [
                    'name' => 'Andrew Richardson',
                    'phone' => '555-123-4567',
                    'date' => '2023-09-06 10:00:00',
                    'doctor' => 'Dr. Jennifer Roberts',
                    'department' => 'Pediatrics (A-9987)'
                ],
                [
                    'name' => 'Andrew Richardson',
                    'phone' => '555-123-4567',
                    'date' => '2023-09-06 10:00:00',
                    'doctor' => 'Dr. Jennifer Roberts',
                    'department' => 'Pediatrics (A-9987)'
                ],
                [
                    'name' => 'Andrew Richardson',
                    'phone' => '555-123-4567',
                    'date' => '2023-09-06 10:00:00',
                    'doctor' => 'Dr. Jennifer Roberts',
                    'department' => 'Pediatrics (A-9987)'
                ],
                [
                    'name' => 'Andrew Richardson',
                    'phone' => '555-123-4567',
                    'date' => '2023-09-06 10:00:00',
                    'doctor' => 'Dr. Jennifer Roberts',
                    'department' => 'Pediatrics (A-9987)'
                ],
                [
                    'name' => 'Andrew Richardson',
                    'phone' => '555-123-4567',
                    'date' => '2023-09-06 10:00:00',
                    'doctor' => 'Dr. Jennifer Roberts',
                    'department' => 'Pediatrics (A-9987)'
                ],
                // Add more patient data here
            ],
            'doctors' => [
                ['name' => 'Dr. Jennifer Roberts', 'image' => '/assets/dist/img/avatar.png'],
                ['name' => 'Dr. Michael Sullivan', 'image' => '/assets/dist/img/avatar.png'],
                ['name' => 'Dr. Michael Sullivan', 'image' => '/assets/dist/img/avatar.png'],
                ['name' => 'Dr. Michael Sullivan', 'image' => '/assets/dist/img/avatar.png'],
                ['name' => 'Dr. Michael Sullivan', 'image' => '/assets/dist/img/avatar.png'],
                ['name' => 'Dr. Michael Sullivan', 'image' => '/assets/dist/img/avatar.png'],
            ],
        ]);
        $this->smarty->assign($data);
        return new Response($this->smarty->fetch('index.tpl'));
    }
}
