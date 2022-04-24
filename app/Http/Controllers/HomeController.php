<?php

namespace App\Http\Controllers;

use App\Repositories\AboutRepository as About;
use App\Repositories\NavbarRepository as Navbar;
use App\Repositories\BannerRepository as Banner;
use App\Repositories\QuoteRepository as Quote;
use App\Repositories\WeddingRepository as Wedding;
use App\Repositories\CountdownRepository as Countdown;
use App\Repositories\StoryRepository as Story;
use App\Repositories\EventRepository as Event;
use App\Repositories\GalleryRepository as Gallery;
use App\Repositories\LocationRepository as Location;

use Illuminate\View\View;

class HomeController extends Controller
{
	public function index(About $aboutRepo, Navbar $navbarRepo, Banner $bannerRepo, Quote $quoteRepo, Location $locationRepo, Wedding $weddingRepo, Countdown $countdownRepo, Story $storyRepo, Event $eventRepo, Gallery $galleryRepo): View
	{
		$about = $aboutRepo->getFirst();
		$navbar = $navbarRepo->getFirst();
		$banner = $bannerRepo->getFirst();
		$quote = $quoteRepo->getFirst();
		$location = $locationRepo->getFirst();
		$wedding = $weddingRepo->getFirst();
		$countdown = $countdownRepo->getFirst();
		$stories = $storyRepo->get();
		$events = $eventRepo->get();
		$galleries = $galleryRepo->get();

		return view('home', compact('about', 'navbar', 'banner', 'quote', 'location', 'wedding', 'countdown', 'stories', 'events', 'galleries'));
	}
}
