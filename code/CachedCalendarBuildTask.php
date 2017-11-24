<?php
use SilverStripe\Dev\BuildTask;

class CachedCalendarBuildTask extends BuildTask {

	protected $title = "Cache the Event Calendars";
	
	protected $description = 'Generates a given number of years of events and populates a readonly table with all the event information. Useful when using recurring events or multiple calendars.';

    private static $segment = 'CachedCalendarBuildTask';
	
	public function run($request) {
		CachedCalendarTask::create()->process();
	}
	
}
