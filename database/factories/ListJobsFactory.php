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
            'Cybersecurity Analyst',
            'Cloud Engineer',
            'Database Administrator',
            'Network Engineer',
            'QA Tester',
            'Game Developer',
            'AI Engineer',
            'Machine Learning Engineer',
            'Data Analyst',
            'Data Scientist',
            'Technical Support Engineer',
            'IT Project Manager',
            'Computer Programmer',
            'Java Developer',
            'PHP Developer',
            'Laravel Developer',
            'Python Developer',
            'JavaScript Developer',
            'React Developer',
            'Vue Developer',
            'Android Developer',
            'iOS Developer',
            'Software Tester',
            'Business Analyst',
            'Graphic Designer',
            'SEO Specialist',
            'Digital Marketing Specialist',
            'Content Writer',
            'Blockchain Developer',
            'Embedded Systems Engineer',
            'Automation Engineer',
            'ERP Consultant',
            'Solutions Architect',
            'Product Manager',
            'Tech Lead',
            'Security Engineer',
            'Help Desk Technician',
            'Computer Technician',
            'IT Consultant',
            'Systems Engineer',
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
            'TechNova Solutions',
            'Skyline Digital Corp',
            'FutureSoft Technologies',
            'CodeCraft Systems',
            'CyberLink Solutions',
            'Nexus IT Services',
            'Bright Future Technologies',
            'PrimeTech Innovations',
            'SmartWare Solutions',
            'Global Digital Systems',
        ];

        $locations = [
            'Manila, Philippines',
            'Quezon City, Philippines',
            'Makati City, Philippines',
            'Taguig City, Philippines',
            'Cebu City, Philippines',
            'Davao City, Philippines',
            'Pasig City, Philippines',
            'Baguio City, Philippines',
            'Iloilo City, Philippines',
            'Batangas City, Philippines',
        ];

        return [
            'title' => fake()->randomElement($titles),

            'description' =>
                'We are looking for a skilled ' .
                fake()->randomElement($titles) .
                ' to join our IT team. The candidate will be responsible for system development, troubleshooting, testing, maintenance, and improving application performance in a fast-paced tech environment.',

            'company' => fake()->randomElement($companies),

            'location' => fake()->randomElement($locations),

            'salary' => fake()->randomFloat(2, 50000, 250000),
        ];
    }
}