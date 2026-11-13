<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PageController extends Controller
{
    /**
     * Homepage
     */
    public function home()
    {
        return view('pages.home', [
            'services' => config('movexa.services'),
            'destinations' => config('movexa.destinations'),
            'dubai_areas' => config('movexa.dubai_areas'),
            'gallery' => config('movexa.gallery'),
            'testimonials' => config('movexa.testimonials'),
            'faq_categories' => config('movexa.faq_categories'),
        ]);
    }

    /**
     * About Us Page
     */
    public function about()
    {
        return view('pages.about', [
            'services' => config('movexa.services'),
            'destinations' => config('movexa.destinations'),
            'dubai_areas' => config('movexa.dubai_areas'),
            'testimonials' => config('movexa.testimonials'),
            'gallery' => config('movexa.gallery'),
        ]);
    }

    /**
     * Services Hub Page
     */
    public function services()
    {
        return view('pages.services', [
            'services' => config('movexa.services'),
        ]);
    }

    /**
     * Individual Service Page
     */
    public function serviceDetail($slug)
    {
        $services = config('movexa.services');

        if (!isset($services[$slug])) {
            abort(404);
        }

        return view('pages.service-detail', [
            'service' => $services[$slug],
            'all_services' => $services,
            'slug' => $slug,
        ]);
    }

    /**
     * Local Moving in Dubai
     */
    public function localMoving()
    {
        return view('pages.local-moving', [
            'dubai_areas' => config('movexa.dubai_areas'),
            'emirates' => config('movexa.uae_emirates'),
            'services' => config('movexa.services'),
        ]);
    }

    /**
     * International Moving Hub
     */
    public function internationalMoving()
    {
        return view('pages.international-moving', [
            'destinations' => config('movexa.destinations'),
            'services' => config('movexa.services'),
        ]);
    }

    /**
     * International Destinations Hub
     */
    public function destinations()
    {
        return view('pages.destinations', [
            'destinations' => config('movexa.destinations'),
        ]);
    }

    /**
     * Individual Destination Page
     */
    public function destinationDetail($slug)
    {
        $destinations = config('movexa.destinations');

        if (!isset($destinations[$slug])) {
            abort(404);
        }

        return view('pages.destination-detail', [
            'destination' => $destinations[$slug],
            'all_destinations' => $destinations,
            'slug' => $slug,
        ]);
    }

    /**
     * Moving Gallery Page
     */
    public function gallery()
    {
        return view('pages.gallery', [
            'gallery' => config('movexa.gallery'),
        ]);
    }

    /**
     * Blog Hub Page
     */
    public function blog()
    {
        return view('pages.blog.index', [
            'posts' => config('movexa.blog_posts'),
        ]);
    }

    /**
     * Individual Blog Article
     */
    public function blogDetail($slug)
    {
        $posts = config('movexa.blog_posts');

        if (!isset($posts[$slug])) {
            abort(404);
        }

        return view('pages.blog.show', [
            'post' => $posts[$slug],
            'all_posts' => $posts,
            'slug' => $slug,
        ]);
    }

    /**
     * FAQ Page
     */
    public function faq()
    {
        return view('pages.faq', [
            'faq_categories' => config('movexa.faq_categories'),
        ]);
    }

    /**
     * Contact Us Page
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Privacy Policy
     */
    public function privacy()
    {
        return view('pages.legal.privacy');
    }

    /**
     * Terms & Conditions
     */
    public function terms()
    {
        return view('pages.legal.terms');
    }

    /**
     * Dynamic XML Sitemap for SEO
     */
    public function sitemap()
    {
        $services = config('movexa.services');
        $destinations = config('movexa.destinations');
        $posts = config('movexa.blog_posts');

        $content = view('pages.seo.sitemap', compact('services', 'destinations', 'posts'))->render();

        return response($content, 200)
            ->header('Content-Type', 'text/xml');
    }
}
