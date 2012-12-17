@layout('themes::main')

@section('title')
Server Error: 404 (Not Found)
@endsection

@section('content')
	<?php $messages = array('We need a map.', 'I think we\'re lost.', 'We took a wrong turn.'); ?>

	<h1><?php echo $messages[mt_rand(0, 2)]; ?></h1>

	<h3>What does this mean?</h3>

	<p>
		We couldn't find the page you requested on our servers. We're really sorry
		about that. It's our fault, not yours. We'll work hard to get this page
		back online as soon as possible.
	</p>

	<p>
		Perhaps you would like to go to our <?php echo HTML::link('/', 'home page'); ?>?
	</p>
@endsection