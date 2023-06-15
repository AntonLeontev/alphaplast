@extends('layouts.app')

@section('title', 'Новости')

@section('content')
	<main>
        <x-h1>Новости и полезные статьи</x-h1>

		<x-article-section :articles="$petNews" title="Новости из мира ПЭТ" />
		<x-article-section :articles="$companyNews" title="Новости компании" />

    </main>
@endsection
