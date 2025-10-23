<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogs = [
        [
            'title' => 'How to Keep Your Home Spotless',
            'slug' => 'how-to-keep-your-home-spotless',
            'image' => '/assets/apartment-cleaning.jpg',
            'author' => 'Admin',
            'date' => 'October 23, 2025',
            'excerpt' => 'Discover simple daily habits to keep your home sparkling clean and organized.',
            'content' => '
                <p>Keeping your home clean can seem like a challenge, but with consistent habits, it becomes second nature.</p>
                <p>Start by decluttering daily and assigning specific cleaning tasks to different days of the week.</p>
                <h5>Pro Tip:</h5>
                <p>Use eco-friendly products to keep your home and environment healthy.</p>
            ',
        ],
        [
            'title' => 'Top 5 Cleaning Mistakes to Avoid',
            'slug' => 'top-5-cleaning-mistakes-to-avoid',
            'image' => '/assets/hero-cleaning.jpg',
            'author' => 'Team RJ Danish',
            'date' => 'October 20, 2025',
            'excerpt' => 'Learn about common cleaning errors and how to clean smarter, not harder.',
            'content' => '
                <p>Many people make small mistakes that make cleaning harder than it needs to be.</p>
                <ul>
                    <li>Using too much cleaner can leave residue.</li>
                    <li>Not rinsing cloths properly spreads dirt around.</li>
                    <li>Ignoring small daily cleanups leads to big messes.</li>
                </ul>
                <p>With better techniques, cleaning becomes easier and faster.</p>
            ',
        ],
        [
            'title' => 'Eco-Friendly Cleaning Tips for 2025',
            'slug' => 'eco-friendly-cleaning-tips-for-2025',
            'image' => '/assets/industrial-cleaning.jpg',
            'author' => 'RJ Danish',
            'date' => 'October 15, 2025',
            'excerpt' => 'Go green with these simple eco-cleaning methods that protect your home and the planet.',
            'content' => '
                <p>Eco-friendly cleaning is easier than ever with natural ingredients like vinegar, lemon, and baking soda.</p>
                <p>They are affordable, non-toxic, and safe for children and pets.</p>
                <p>Start small — switch one product at a time and reduce plastic waste with refillable bottles.</p>
            ',
        ],
    ];

    public function index()
    {
        $blogs = $this->blogs;
        return view('blog.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = collect($this->blogs)->firstWhere('slug', $slug);

        abort_if(!$blog, 404);

        return view('blog.show', compact('blog'));
    }
}
