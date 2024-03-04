<?php
    namespace App\Models;

    class Joblisting
    {
        public static function all()
        {
            return [
                [
                    'id' => 1,
                    'title' => 'Web Developer',
                    'description' => 'We are looking for a web developer to join our team',
                ],
                [
                    'id' => 2,
                    'title' => 'UI/UX Designer',
                    'description' => 'We are looking for a UI/UX designer to join our team',
                ],
                [
                    'id' => 3,
                    'title' => 'Project Manager',
                    'description' => 'We are looking for a project manager to join our team',
                ]
            ];
        }
        
        public static function find($id){
            $listings = self::all();
            foreach($listings as $listing){
                if($listing['id'] == $id){
                    return $listing;
                }
            }
        }
    }