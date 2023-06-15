<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Cache;

if(!function_exists('contacts')) {
	function contacts(): Contact {
		if (Cache::has('contacts')) {
			return Cache::get('contacts');
		}

		$contacts = Contact::first();

		Cache::put('contacts', $contacts);

		return $contacts;
	}
}

if(!function_exists('clear_phone')) {
	function clear_phone(string $phone): string {
		$phone = preg_replace('~[\D]~', '', $phone);
		
		if (str_starts_with($phone, '8')) {
			return $phone;
		}

		return '+' . $phone;
	}
}
