<?php

namespace local_deadpigeon;

require_once('../../config.php');

$PAGE->set_context(\context_system::instance());
$PAGE->set_url('/local/deadpigeon/view.php');
$pagetitle = get_string('pluginname', 'local_deadpigeon');
$PAGE->set_title($pagetitle);
$PAGE->set_heading('Welcome to the world of Dead Pigeon fans!');
$PAGE->set_pagelayout('standard');

$output = $PAGE->get_renderer('local_deadpigeon');
echo $output->header();
echo $output->heading($pagetitle);
$renderable = new \local_deadpigeon\output\index_page('Only suitable for foxes six months and older. If a human, please do not touch.');
echo $output->render($renderable);
echo $output->footer();
