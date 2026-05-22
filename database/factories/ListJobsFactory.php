<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListJobsFactory extends Factory
{
    public function definition(): array
    {
        $titles = [
            'Frontend Developer',
            'Backend Developer',
            'Full Stack Developer',
            'Software Engineer',
            'Web Developer',
            'Mobile App Developer',
            'UI/UX Designer',
            'DevOps Engineer',
            'IT Support Specialist',
            'Systems Analyst',
        ];

        $companies = [
            'Google Tech Solutions',
            'Microsoft Innovations',
            'Amazon Web Services PH',
            'Meta Digital Labs',
            'Oracle Systems Inc.',
            'IBM Cloud Services',
            'Accenture Technology',
            'Infosys Philippines',
            'Capgemini Engineering',
            'Local IT Solutions Inc.',
        ];

        $locations = [
            'Manila, Philippines',
            'Quezon City, Philippines',
            'Makati City, Philippines',
            'Taguig City, Philippines',
            'Cebu City, Philippines',
            'Davao City, Philippines',
            'Pasig City, Philippines',
        ];

        return [
            'title' => fake()->randomElement($titles),

            'description' =>
                'We are looking for a skilled ' .
                fake()->randomElement($titles) .
                ' to join our IT team. The candidate will be responsible for system development, maintenance, and improving application performance in a fast-paced tech environment.',

            'company' => fake()->randomElement($companies),

            'location' => fake()->randomElement($locations),

            'salary' => fake()->randomFloat(2, 50000, 150000),
        ];
    }
}