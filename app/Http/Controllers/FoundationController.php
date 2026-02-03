<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoundationController extends Controller
{
    public function index()
    {
        // List of images for the grid
        $images = [
            ['src' => 'pic1.jpg', 'alt' => 'Foundation 1', 'caption' => 'Education Program'],
            ['src' => 'pic2.jpg', 'alt' => 'Foundation 2', 'caption' => 'Health Camp'],
            ['src' => 'pic3.jpg', 'alt' => 'Foundation 3', 'caption' => 'Community Outreach'],
            ['src' => 'pic4.jpg', 'alt' => 'Foundation 4', 'caption' => 'Youth Leadership'],
            ['src' => 'pic5.jpg', 'alt' => 'Foundation 5', 'caption' => 'Women Empowerment'],
            ['src' => 'pic6.jpg', 'alt' => 'Foundation 6', 'caption' => 'Cultural Programs'],
        ];

        // 5 headings / focus areas
        $headings = [
            ['title' => 'Education', 'desc' => 'Providing knowledge and skill development for all age groups.'],
            ['title' => 'Health', 'desc' => 'Promoting wellness through medical camps and awareness programs.'],
            ['title' => 'Community', 'desc' => 'Strengthening communities via outreach and support initiatives.'],
            ['title' => 'Faith', 'desc' => 'Encouraging spiritual growth and moral guidance.'],
            ['title' => 'Leadership', 'desc' => 'Mentoring future leaders to create lasting impact.'],
        ];

        return view('foundation', compact('images', 'headings'));
    }
}
