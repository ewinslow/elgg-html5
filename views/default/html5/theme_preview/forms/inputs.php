<form action="#">
	<fieldset>
		<legend>HTML5 Inputs</legend>
		<div>
			<label for="color">Color input (.elgg-input-color):</label>
			<?php echo elgg_view('input/color', array(
					'name' => 'color',
					'id' => 'color',
				));
			?>
		</div>
		<div>
			<label for="datetime-local">Local datetime input (.elgg-input-datetime-local):</label>
			<?php echo elgg_view('input/datetime-local', array(
					'name' => 'datetime-local',
					'id' => 'datetime-local',
				));
			?>
		</div>
		<div>
			<label for="datetime">Datetime input (.elgg-input-datetime):</label><br />
			<?php echo elgg_view('input/datetime', array(
					'name' => 'datetime',
					'id' => 'datetime',
				));
			?>
		</div>
		<div>
			<label for="email">Email input (.elgg-input-email):</label><br />
			<?php echo elgg_view('input/email', array(
					'name' => 'email',
					'id' => 'email',
				));
			?>
		</div>
		<div>
			<label for="image">Image input (.elgg-input-image):</label><br />
			<?php echo elgg_view('input/image', array(
					'name' => 'image',
					'id' => 'image',
				));
			?>
		</div>
		<div>
			<label for="month">Month input (.elgg-input-month):</label><br />
			<?php echo elgg_view('input/month', array(
					'name' => 'month',
					'id' => 'month',
				));
			?>
		</div>
		<div>
			<label for="number">Number input (.elgg-input-number):</label>
			<?php echo elgg_view('input/number', array(
					'name' => 'number',
					'id' => 'number',
					));
			?>
		</div>
		<div>
			<label for="range">Range input (.elgg-input-range):</label>
			<?php echo elgg_view('input/range', array(
					'name' => 'range',
					'id' => 'range',
				));
			?>
		</div>
		<div>
			<label for="search">Tags input (.elgg-input-search):</label>
			<?php echo elgg_view('input/search', array(
					'name' => 'search',
					'id' => 'search',
				));
			?>
		</div>
		<div>
			<label for="tel">Telephone input (.elgg-input-tel):</label>
			<?php echo elgg_view('input/tel', array(
					'name' => 'tel',
					'id' => 'tel',
				));
			?>
		</div>
		<div>
			<label for="time">Time input (.elgg-input-time):</label>
			<?php echo elgg_view('input/time', array(
					'name' => 'time',
					'id' => 'time',
				));
			?>
		</div>
		<div>
			<label for="week">Week input (.elgg-input-week):</label>
			<?php echo elgg_view('input/week', array(
					'name' => 'week',
					'id' => 'week',
				));
			?>
		</div>
	</fieldset>
</form>